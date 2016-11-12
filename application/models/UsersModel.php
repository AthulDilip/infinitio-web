<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 12:02 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/plivo-php/vendor/autoload.php';

use Plivo\RestAPI;

/**
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
 * @property CartModel $CartModel
 * @property FilterModel $FilterModel
 * @property AdminModel $AdminModel
 * @property AttributeModel $AttributeModel
 * @property EmailModel $EmailModel
 * @property LanguageModel $LanguageModel
 * @property UsersModel $UsersModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property  VisitorModel $VisitorModel
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class UsersModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->model('VisitorModel');
        $this->load->model('CookieModel');
        $this->load->model('EmailModel');
    }

    public function emailSignup(){
        if( $this->input->post('signupEmail') != NULL){
            $email = $this->input->post('signupEmail');
            $code = self::generateEmailConfirmationCode();

            //store the email and the verification code for the email to the database
            $sql = "INSERT INTO users(email,email_verification_code) VALUES (?,?)";
            $query = $this->db->query($sql,array($this->input->post('signupEmail'),$code));

            //Now mail the verification code to the User
            if(base_url() != 'https://zemose.dev/') {
                //mail the user since you are not on dev server
                $sub = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifyEmail/".$code."\r\nWith Regards,\r\nZemose Team.";
                $this->EmailModel->sendEmail($email,'Welcome to Zemose, Verify your Email', $sub);
            }

        }
    }

    public function mobileSignup(){
        if($this->input->post('signupPhone') != NULL){

            $sql = "SELECT * FROM users WHERE phone=".$this->input->post('signupPhone')." ;";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0) {

                $res = $query->result()[0];
                $verStatus = $res->verification_status;

                if($verStatus == 2 || $verStatus == 0){
                    //generate otp
                    $otp = self::generateOtp();
                    $phone = $this->input->post('signupPhone');

                    $sql = "UPDATE users SET otp=?, requested_time=NOW() WHERE phone=?; ";
                    $query = $this->db->query($sql,array($otp,$phone));

                    //send sms
                    $this->sendVerificationSms($phone, $otp);

                    $_SESSION['otptime'] = time();
                    $_SESSION['otp'] = $this->input->post('signupPhone');

                    return 1;
                }else{
                    return 0;
                }
            }else {

                //generate otp
                $otp = self::generateOtp();

                //store the phone number and the op on to the database
                $sql = "INSERT INTO users(phone,otp,requested_time) VALUES (?,?,NOW())";
                $query = $this->db->query($sql, array($this->input->post('signupPhone'), $otp));

                //send sms
                $this->sendVerificationSms($this->input->post('signupPhone'), $otp);

                $_SESSION['otptime'] = time();
                $_SESSION['otp'] = $this->input->post('signupPhone');

                //$this->session->set_userdata("otptime",time());
                //$this->session->set_userdata("otp",(int)$this->input->post('signupPhone'));

                return 1;
            }
        }
    }

    public function login(){
        $data = Array
        (
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl()
        );

        if( $this->input->post('user') != NULL && $this->input->post('pwd') != NULL) {
            //trying to login
            $user = $this->input->post('user');
            $pass = $this->input->post('pwd');

            $user = preg_replace('/\s+/', '', $user);

            if(preg_match('/^[0-9,]+$/', $user) == 1 || preg_match('/^\+[0-9,]+$/', $user)) {
                $phone = $this->input->post('user');


                $phone = preg_replace('/^0091/','',$phone);
                $phone = preg_replace('/^\+91/','',$phone);

                $sql = "SELECT * FROM users WHERE phone=".$phone." AND password='".$this->util->hashPass($pass)."' AND registered_using='phone' ;";
            }else{
                $email = $this->input->post('user');
                $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$this->util->hashPass($pass)."' AND registered_using='email' ;";
            }


            //$sql = "SELECT * FROM users  WHERE ((email = '".$user."' && registered_using='email') OR (phone = '".$phone."') AND password = '".$this->util->hashPass($pass)."';";
            $query = $this->db->query($sql);

            if($query->num_rows() === 1) {

                $id = $query->result()[0]->id;
                $user = $query->result()[0]->firstname;
                $zemoser = $query->result()[0]->zemoser;
                $verification_status = $query->result()[0]->verification_status;

                $this->session->set_userdata('user_id', $id);
                $this->session->set_userdata('user_name', $user);
                $this->session->set_userdata('user_zemoser', $zemoser);
                $this->session->set_userdata('verification_status', $verification_status);

                //update late login time
                $sql = "UPDATE users SET last_login_time = NOW() WHERE id = ?;";
                $this->db->query($sql,array($id));

                $this->load->model('CartModel');
                //code to transfer cart data to users
                $this->CartModel->upgradeCart($id);

                $lu = $this->VisitorModel->getVisitor();
                $this->VisitorModel->upgradeToUser($id);
                $this->CookieModel->setCookie('visitor', $lu->visitor_id);

                $data['succ'] = true;

                return $data;
            } else {
                 $data['err'] = true;
                 return $data;
            }
        }else{
            $data['err'] = true;
            return $data;
        }
    }

    public function resendSms(){
        if($this->session->has_userdata("otp")){

            $dest = $this->session->userdata("otp");

            $sql = "SELECT * FROM users WHERE phone=".$dest.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){

                $res = $query->result()[0];
                $otp = $res->otp;

                $this->sendVerificationSms($dest,$otp);

                $_SESSION['otptime'] = time();
                $_SESSION['otp'] = $dest;

                return 1;
            }
        }

        return 0;
    }

    public function resendSmsSecondary(){
        if($this->session->has_userdata("otp")){

            $dest = $this->session->userdata("otp");

            $sql = "SELECT * FROM users u LEFT JOIN user_contact_verification uc ON (u.id = uc.user_id) WHERE phone=".$dest.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){

                $res = $query->result()[0];
                $otp = $res->phone_verification_code;

                $this->sendVerificationSms($dest,$otp);

                $_SESSION['otptime'] = time();
                $_SESSION['otp'] = $dest;

                return 1;
            }
        }

        return 0;
    }

    public function logout(){
        if($this->session->has_userdata('user_id')) {
            $this->session->unset_userdata('user_id');
        }
        if($this->session->has_userdata('user_name')) {
            $this->session->unset_userdata('user_name');
        }
        if($this->session->has_userdata('user_zemoser')) {
            $this->session->unset_userdata('user_zemoser');
        }
        if($this->session->has_userdata('verification_status')) {
            $this->session->unset_userdata('verification_status');
        }
        $this->session->sess_destroy();

        $this->CookieModel->deleteCookie('visitor');
    }

    public function fblogin() {


        require_once __DIR__ . '/../src/Facebook/autoload.php';
        $fb = new Facebook\Facebook([
            'app_id' => '286472875061222',
            'app_secret' => 'eadb9a3ed56fde121932ad6bae3ae5ea',
            'default_graph_version' => 'v2.7',
        ]);

        # Create the login helper object
        $helper = $fb->getRedirectLoginHelper();
        # Get the access token and catch the exceptions if any
        try {
            $accessToken = $helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            $errormsg =  'Graph returned an error: ' . $e->getMessage();
            return -2;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            $errormsg =  'Facebook SDK returned an error: ' . $e->getMessage();
            return -2;
        }
        # If the
        if (isset($accessToken)) {
            // Logged in!
            // Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
            // But we shall we the same page Sets the default fallback access token so we don't have to pass it to each request
            $fb->setDefaultAccessToken($accessToken);
            try {
                $response = $fb->get('/me?fields=email,first_name,last_name,gender,location{location},birthday');
                $userNode = $response->getGraphUser();
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                $errormsg = 'Graph returned an error: ' . $e->getMessage();
                return -2;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                $errormsg =  'Facebook SDK returned an error: ' . $e->getMessage();
                return -2;
            }

            $email = $userNode->getEmail();


            //Now try to login
            $sql = "select * from users where email = ? AND registered_using = ?; ";
            $query = $this->db->query($sql, array($email, "facebook"));

            if ($query->num_rows() > 0) {
                $res = $query->result()[0];

                $this->session->set_userdata('user_id', $res->id);
                $this->session->set_userdata('user_name', $res->firstname);

                return 1;
            } else {

                // Else try to signup
                $firstname = $userNode->getFirstName();
                $lastname = $userNode->getLastName();
                $gender = strtolower($userNode->getGender());
                //$birth = $userNode->getBirthday();
                $dob = null;
                //$city = $userNode->getLocation()->getLocation()->getCity();
                $city = null;
                $country = null;
                $lat = null;
                $lon = null;

                $loc = $userNode->getLocation();
                if(!empty($loc))
                    $loc = $loc->getLocation();

                if(!empty($loc)) {
                    $city = $loc->getCity();
                    $country = $loc->getCountry();
                    $lat = $loc->getLatitude();
                    $lon = $loc->getLongitude();
                }


                $fb_id = $userNode->getId();
                $email = $userNode->getEmail();

                if($gender=="male")
                    $gender = 1;
                else if ($gender=="female")
                    $gender = 2;

                $sql = "select * from users where email = ?; ";
                $query = $this->db->query($sql, array($email));

                $res = $query->result();

                if($query->num_rows() > 0){
                    return -1;
                }else {

                    $sql = "select * from country where lower(`name`) = lower(?); ";
                    $query = $this->db->query($sql, array($country));

                    $country_id = $query->result()[0]->id;

                    $sql = "insert into users (firstname,lastname,gender,email,city,lat,lon,country,dob,fb_user_id,registered_using) values(?,?,?,?,?,?,?,?,?,?,?); ";
                    $query = $this->db->query($sql, array($firstname,$lastname,$gender,$email,$city,$lat,$lon,$country_id,$dob,$fb_id,"facebook"));

                    $sql = "select * from users where email = ?; ";
                    $query = $this->db->query($sql, array($email));

                    $res = $query->result()[0];
                    $this->session->set_userdata('user_id', $res->id);
                    $this->session->set_userdata('user_name', $res->firstname);

                    return 2;
                }
            }

        }
    }

    public function googlelogin(){
        $redirect_uri = $this->urls->getUrl()."users/googlelogin";
        $client = $this->getGoogleClient($redirect_uri);
        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token);
            // store in the session also
            $_SESSION['access_token'] = $token;
            // redirect back to the example
            header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }
        if (!empty($_SESSION['access_token']) && isset($_SESSION['access_token']['id_token'])) {
            $client->setAccessToken($_SESSION['access_token']);
        } else {
            $authUrl = $client->createAuthUrl();
        }
        if ($client->getAccessToken()) {
            $me = $client->verifyIdToken();
            if($me == null)
                return -2;

            $email = $me['email'];
            //Now try to login
            $sql = "select * from users where email = ? AND registered_using = ?; ";
            $query = $this->db->query($sql, array($email, "google"));
            if ($query->num_rows() > 0) {
                $res = $query->result()[0];
                $this->session->set_userdata('user_id', $res->id);
                $this->session->set_userdata('user_name', $res->firstname);
                return 1;
            } else {
                //else try to signup
                // Get User data
                $id = $me['sub'];
                $firstname = $me['given_name'];
                $lastname = $me['family_name'];
                $profile_image_url = $me['picture'];
                $sql = "select * from users where email = ?; ";
                $query = $this->db->query($sql, array($email));
                $res = $query->result();
                if($query->num_rows() > 0){
                    return -1;
                }else {
                    $sql = "insert into users (firstname,lastname,email,google_user_id,registered_using,google_profile_pic) values(?,?,?,?,?,?); ";
                    $query = $this->db->query($sql, array($firstname,$lastname,$email,$id,"google",$profile_image_url));
                    $sql = "select * from users where email = ?; ";
                    $query = $this->db->query($sql, array($email));
                    $res = $query->result()[0];
                    $this->session->set_userdata('user_id', $res->id);
                    $this->session->set_userdata('user_name', $res->firstname);
                    return 2;
                }
            }
        }
    }

    /*public function fbsignup(){

        foreach ($_COOKIE as $k=>$v) {
            if(strpos($k, "FBRLH_")!==FALSE) {
                $_SESSION[$k]=$v;
            }
        }

        require_once __DIR__ . '/../src/Facebook/autoload.php';
        $fb = new Facebook\Facebook([
            'app_id' => '286472875061222',
            'app_secret' => 'eadb9a3ed56fde121932ad6bae3ae5ea',
            'default_graph_version' => 'v2.7',
        ]);

        # Create the login helper object
        $helper = $fb->getRedirectLoginHelper();
        # Get the access token and catch the exceptions if any
        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        # If the
        if (isset($accessToken)) {
            // Logged in!
            // Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
            // But we shall we the same page Sets the default fallback access token so we don't have to pass it to each request
            $fb->setDefaultAccessToken($accessToken);
            try {
                $response = $fb->get('/me?fields=email,first_name,last_name,gender,location{location},birthday');
                $userNode = $response->getGraphUser();
            }catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            // Print the user Details
            $firstname = $userNode->getFirstName();
            $lastname = $userNode->getLastName();
            $gender = strtolower($userNode->getGender());
            $birth = $userNode->getBirthday();
            $dob = explode(" ", $birth->date)[0];
            $city = $userNode->getLocation()->getLocation()->getCity();
            $country = $userNode->getLocation()->getLocation()->getCountry();
            $lat = $userNode->getLocation()->getLocation()->getLatitude();
            $lon = $userNode->getLocation()->getLocation()->getLongitude();
            $fb_id = $userNode->getId();
            $email = $userNode->getEmail();

            if($gender=="male")
                $gender = 1;
            else if ($gender=="female")
                $gender = 2;

            $sql = "select * from users where email = ?; ";
            $query = $this->db->query($sql, array($email));

            $res = $query->result();

            if($query->num_rows() > 0){
                echo "an account has already been registered using this email";
                return -1;
            }else {

                $sql = "select * from country where lower(`name`) = lower(?); ";
                $query = $this->db->query($sql, array($country));

                $country_id = $query->result()[0]->id;

                $sql = "insert into users (firstname,lastname,gender,email,city,lat,lon,country,dob,fb_user_id,registered_using) values(?,?,?,?,?,?,?,?,?,?,?); ";
                $query = $this->db->query($sql, array($firstname,$lastname,$gender,$email,$city,$lat,$lon,$country_id,$dob,$fb_id,"facebook"));

                $sql = "select * from users where email = ?; ";
                $query = $this->db->query($sql, array($email));

                $res = $query->result()[0];
                $this->session->set_userdata('user_id', $res->id);
                $this->session->set_userdata('user_name', $res->firstname);

                return 1;
            }

        }
    }*/

    /*public function googlesignup(){
        $client = $this->UsersModel->getGoogleClient("https://zemose.dev/users/googlesignup");

        $plus = new Google_Service_Plus($client);


        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
            $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
            header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }

        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
            $me = $plus->people->get('me');

            // Get User data
            $id = $me['id'];
            $firstname = $me['modelData']['name']['givenName'];
            $lastname = $me['modelData']['name']['familyName'];
            $dob = $me['birthday'];
            $gender = strtolower($me['gender']);
            $email = $me['emails'][0]['value'];
            $profile_image_url = $me['image']['url'];

            log_message("DEBUG",$profile_image_url);

            if($gender=="male")
                $gender = 1;
            else if ($gender=="female")
                $gender = 2;

            $sql = "select * from users where email = ?; ";
            $query = $this->db->query($sql, array($email));

            $res = $query->result();

            if($query->num_rows() > 0){
                echo "An account has already been registered using this email";
                return -1;
            }else {

                $sql = "insert into users (firstname,lastname,gender,email,dob,google_user_id,registered_using,google_profile_pic) values(?,?,?,?,?,?,?,?); ";
                $query = $this->db->query($sql, array($firstname,$lastname,$gender,$email,$dob,$id,"google",$profile_image_url));

                $sql = "select * from users where email = ?; ";
                $query = $this->db->query($sql, array($email));

                $res = $query->result()[0];
                $this->session->set_userdata('user_id', $res->id);
                $this->session->set_userdata('user_name', $res->firstname);

                return 1;
            }
        }
    }*/

    public function getFacebookUrl($url){
        //set up the variables for social login
        require_once __DIR__ . '/../src/Facebook/autoload.php';

        $fb = new Facebook\Facebook([
            'app_id' => '286472875061222',
            'app_secret' => 'eadb9a3ed56fde121932ad6bae3ae5ea',
            'default_graph_version' => 'v2.7',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email,public_profile,user_location,user_birthday']; // Optional permissions
        $loginUrl = $helper->getLoginUrl($url, $permissions);

        /*foreach ($_SESSION as $k=>$v) {
            if(strpos($k, "FBRLH_")!==FALSE) {
                if(!setcookie($k, $v)) {
                    //what??
                } else {
                    $_COOKIE[$k]=$v;
                }
            }
        }*/

        return $loginUrl;
    }

    public function getGoogleClient($url){
        /*require_once APPPATH. "/libraries/google-api/vendor/autoload.php";

        $CLIENT_ID = '511099146614-78mldbl4c06k4p4rtj493c5r87j21b2n.apps.googleusercontent.com';
        $CLIENT_SECRET = 'Sh0hIviiyNMQh0Ui91O4HPNa';
        $REDIRECT_URI = $url;

        $client = new Google_Client();
        $client->setClientId($CLIENT_ID);
        $client->setClientSecret($CLIENT_SECRET);
        $client->setRedirectUri($REDIRECT_URI);
        $client->setScopes(array('https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile',
                            "https://www.googleapis.com/auth/plus.login","https://www.googleapis.com/auth/plus.me"));*/

        require_once APPPATH. "/libraries/google-api/vendor/autoload.php";
        $client = new Google_Client();
        $client->setAuthConfig(APPPATH.'/client_secrets.json');
        $client->addScope(Google_Service_Plus::PLUS_ME);
        $client->addScope(Google_Service_Plus::USERINFO_PROFILE);
        $client->setRedirectUri($url);

        return $client;
    }

    public function updatePersonalDetails() {
        $this->load->helper('security');
        $this->load->library('util');
        $this->load->library('urls');
        
        log_message('DEBUG', json_encode($_POST));

        $user_id = $this->session->userdata('user_id');
        $firstname = xss_clean($this->input->post("firstname"));
        $lastname = xss_clean($this->input->post("lastname"));
        $dob = xss_clean($this->input->post("dob"));
        $address1 = xss_clean($this->input->post("address1"));
        $city = xss_clean($this->input->post("city"));
        $country = xss_clean($this->input->post("country"));
        $gender = xss_clean($this->input->post("gender"));
        $zip = xss_clean($this->input->post("zip"));
        $lat = xss_clean($this->input->post("lat"));
        $lon = xss_clean($this->input->post("lon"));
        $completed = 0;

        $dob = date("Y-m-d", strtotime($dob));

        $base = FCPATH . 'uploads/profile_imgs/';

        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $id = $this->session->userdata('user_id');
        $sqlLoad = "SELECT * FROM `users` WHERE `id` = ?";
        $curr = $this->db->query( $sqlLoad, array( $id ) );

        if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] !== '') {

            if($curr->num_rows() > 0 && $curr->result()[0]->profile_picture != '' && $curr->result()[0]->profile_picture != NULL) {
                //delete old image
                $path = $base . $curr->result()[0]->profile_picture;
                if (file_exists($path)) unlink($path);
            }

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $newFile='';
            }else {
                $newFile = $this->upload->data()['file_name'];
            }
        }

        if(!empty($firstname) && $firstname != '' &&
            !empty($lastname) && $lastname != '' &&
            !empty($dob) && $dob != '' &&
            !empty($address1) && $address1 != '' &&
            !empty($city) && $city !== '' &&
            !empty($country) && $country != '-1' &&
            !empty($gender) && $gender != '0' &&
            !empty($zip) && $zip != '' &&
            !empty($lat) && $lat != '' &&
            !empty($lon) && $lon != ''
        ){
            $completed = 1;
        }

        if(!empty($newFile)) {

            $sql = "UPDATE `users` SET `firstname`=?,`lastname`=?, `gender`=?,dob=? ,profile_picture=?,`address1`=?,`city`=?,`country`=?,`zip`=?,`lat`=?,`lon`=?, `personal_completed`=? where id=?;";
            $query = $this->db->query($sql, array($firstname, $lastname, $gender, $dob, $newFile, $address1, $city, $country, $zip, $lat, $lon, $completed, $user_id));
        }else {
            $sql = "UPDATE `users` SET `firstname`=?,`lastname`=?, `gender`=?,dob=?,`address1`=?,`city`=?,`country`=?,`zip`=?,`lat`=?,`lon`=?, `personal_completed`=? where id=?;";
            $query = $this->db->query($sql, array($firstname, $lastname, $gender, $dob, $address1, $city, $country, $zip, $lat, $lon, $completed, $user_id));
        }

        $this->session->set_userdata('user_name',$firstname);
    }

    public function updateContactDetails(){
        if($this->util->verifyLogin() == 1){
            $user_id = $this->session->userdata('user_id');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $email_verified = $this->input->post('emailVerificationStatus');
            $phone_verified = $this->input->post('phoneVerificationStatus');

            $sql = "select * from users where id=".$user_id."; ";
            $query = $this->db->query($sql);
            $res = $query->result();

            if($query->num_rows() > 0){
                $registered_using = $res[0]->registered_using;

                if($registered_using == "phone"){
                    //check if the email is used by anyone else
                    $sql = "select * from users where email = ? and id<>? ; ";
                    $query = $this->db->query($sql,array($email,$user_id));

                    if($query->num_rows() > 0 && !empty($email)) {
                        return -1;
                    }else {

                        //if registered using phone then only email must be changable
                        $sql = "UPDATE `users` SET `email`=? where id=?;";
                        $query = $this->db->query($sql, array($email, $user_id));

                        //update the verified status
                        if ($email_verified == 0) {
                            $sql = "UPDATE `user_contact_verification` SET `email_verified`=? where user_id=?;";
                            $query = $this->db->query($sql, array($email_verified, $user_id));
                        }

                        return 1;
                    }

                }else{
                    //check if the email is used by anyone else
                    $sql = "select * from users where phone = ? and id<>? ; ";
                    $query = $this->db->query($sql,array($phone,$user_id));

                    if($query->num_rows() > 0  && !empty($phone)) {
                        return -2;
                    }else {

                        $sql = "UPDATE `users` SET `phone`=? where id=?;";
                        $query = $this->db->query($sql, array($phone, $user_id));

                        if ($phone_verified == 0) {
                            $sql = "UPDATE `user_contact_verification` SET `phone_verified`=? where user_id=?;";
                            $query = $this->db->query($sql, array($phone_verified, $user_id));
                        }

                        return 1;
                    }
                }
            }

        }else{
            return 0;
        }
    }



    public function updateVerificationDetails(){
        if( $this->input->post('name') != '-1' && $this->input->post('name') != NULL)  {

            //There is an input from catName
            $name = $this->input->post('name');

            $id = $this->session->userdata('user_id');
            $sqlLoad = "SELECT * FROM `verification_docs` WHERE `user_id` = ?";
            $curr = $this->db->query( $sqlLoad, array( $id ));

            //config for image uploads
            $base = FCPATH . 'uploads/verification_imgs/';

            $config['upload_path'] = $base;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';

            if($curr->num_rows() <= 0){
                //then add new record to the verification_docs

                //upload new image
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    return -1;
                }else {
                    $newFile = $this->upload->data()['file_name'];
                }

                $sql = "INSERT INTO `verification_docs` (`name`, `image`, `user_id`) VALUES (?, ?, ?)";
                $query = $this->db->query($sql, array($name,$newFile,$id));

                return 1;

            }else{
                //edit the current record in verification_docs
                if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] !== '') {

                    if($curr->num_rows() > 0 && $curr->result()[0]->image != '' && $curr->result()[0]->image != NULL) {
                        //delete old image
                        $path = $base . $curr->result()[0]->image;
                        if (file_exists($path)) unlink($path);
                    }

                    //upload new image
                    $this->upload->initialize($config);

                    if ( ! $this->upload->do_upload('image')) {
                        $error = array('error' => $this->upload->display_errors());
                        return -1;
                    }else {
                        $newFile = $this->upload->data()['file_name'];
                    }

                    $upSql = "UPDATE `verification_docs` SET `name` = ?, `image` = ? WHERE `user_id` = ?";
                    $query = $this->db->query($upSql, array($name,$newFile,$id));

                    return 1;
                }else {
                    //just update number
                    $upSql = "UPDATE `verification_docs` SET `name`=? WHERE `user_id` = ?";
                    $this->db->query($upSql, array($name, $id));
                    return 1;
                }
            }

        }else {
            return 0;
        }
    }

    public function addAddress(){
        $this->load->helper('security');

        $name = xss_clean($this->input->post("name"));
        $address = xss_clean($this->input->post("address"));
        $city = xss_clean($this->input->post("city"));
        $lat = xss_clean($this->input->post("lat"));
        $lon = xss_clean($this->input->post("lon"));
        $phone = xss_clean($this->input->post("phone"));
        $pin = xss_clean($this->input->post("zip"));
        $user_id = $this->session->userdata("user_id");

        if(!empty($name) && $name != '' &&
            !empty($address) && $address != '' &&
            !empty($city) && $city != '' &&
            !empty($pin) && $pin != '' &&
            !empty($phone) && $phone != ''){

            $sql = "insert into address (`name`, streetaddress, city,lat, lon, pin, phone, user_id) values(?,?,?,?,?,?,?,?);";
            $query = $this->db->query($sql, array($name, $address, $city,$lat, $lon,$pin, $phone, $user_id));

            return 1;
        }

        return 0;
    }

    public function getAddressFromForm() {
        $this->load->helper('security');

        $name = xss_clean($this->input->post("name"));
        $address = xss_clean($this->input->post("address"));
        $city = xss_clean($this->input->post("city"));
        $lat = xss_clean($this->input->post("lat"));
        $lon = xss_clean($this->input->post("lon"));
        $phone = xss_clean($this->input->post("phone"));
        $pin = xss_clean($this->input->post("zip"));
        $user_id = $this->session->userdata("user_id");

        if(!empty($name) && $name != '' &&
            !empty($address) && $address != '' &&
            !empty($city) && $city != '' &&
            !empty($pin) && $pin != '' &&
            !empty($phone) && $phone != ''){

            $address = (object)array(
                'name' => $name,
                'streetaddress' => $address,
                'city' => $city,
                'lat' => $lat,
                'lon'=>$lon,
                'phone' => $phone,
                'pin' => $pin,
                'user_id' => $user_id
            );

            return $address;
        }

        else return null;
    }

    public function addAddressFromData($aobj) {
        $name = $aobj -> name;
        $address = $aobj -> streetaddress;
        $city = $aobj -> city;
        $lat = $aobj -> lat;
        $lon = $aobj -> lon;
        $phone = $aobj -> phone;
        $pin = $aobj -> pin;
        $user_id = $aobj -> user_id;

        $sql = "insert into address (`name`, streetaddress, city,lat, lon, pin, phone, user_id) values(?,?,?,?,?,?,?,?);";
        $query = $this->db->query($sql, array($name, $address, $city,$lat, $lon,$pin, $phone, $user_id));

        return true;
    }

    public function becomeZemoserDetails(){

        $this->load->helper('security');

        $name = xss_clean($this->input->post("shopname"));
        $address = xss_clean($this->input->post("shopaddress"));
        $city = xss_clean($this->input->post("city"));
        $lat = xss_clean($this->input->post("lat"));
        $lon = xss_clean($this->input->post("lon"));

        $proofid = $this->input->post('proofid');
        $proofname = $this->input->post('proofname');
        $proofno = $this->input->post('proofno');

        if($name !=NULL && $name != '' &&  $address !=NULL && $address != '' && $city != NULL && $city != '' ) {
            //check if the user is already a zemoser
            $user_id = $this->session->userdata('user_id');
            $sql = "select * from zemoser where user_id=?";
            $query = $this->db->query($sql, array($user_id));

            //config for image uploads
            $base = FCPATH . 'uploads/zemoser_proofs/';

            $config['upload_path'] = $base;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';

            if ($query->num_rows() <= 0) {

                //Add the proof documents on to the zemoser_documents table
                $i=0;
                $files = $_FILES;
                if($proofid != null)
                foreach($proofid as $id){

                    if (isset($files['image']) && $files['image']['tmp_name'][$i] !== '') {

                        //upload new image
                        $_FILES['image']['name']= $files['image']['name'][$i];
                        $_FILES['image']['type']= $files['image']['type'][$i];
                        $_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
                        $_FILES['image']['error']= $files['image']['error'][$i];
                        $_FILES['image']['size']= $files['image']['size'][$i];

                        $this->upload->initialize($config);

                        if ( ! $this->upload->do_upload('image')) {
                            $error = array('error' => $this->upload->display_errors());

                            //delete records of all the images of this user that was peviously uploaded and exit the function
                            $sql = "DELETE FROM `zemoser_docs` WHERE user_id = ?;";
                            $query = $this->db->query($sql, array($user_id));
                            return 0;
                        }else {
                            $newFile = $this->upload->data()['file_name'];
                        }

                        $sql = "insert into zemoser_docs(`number`,`image`,`proof_id`,`proof_name`,`user_id`) values (?,?,?,?,?)";
                        $query = $this->db->query($sql, array($proofno[$i],$newFile, $id, $proofname[$i], $user_id));

                        $this->sendZemoserRequest($user_id);
                    }else{
                        //delete records of all the images of this user that was peviously uploaded and exit the function
                        $sql = "DELETE FROM `zemoser_docs` WHERE user_id = ?;";
                        $query = $this->db->query($sql, array($user_id));
                        return 0;
                    }

                    ++$i;
                }

                //then add a new record to zemoser table
                $sql = "insert into zemoser(`user_id`,`shopname`,`shopaddress`,`city`,`lat`,`lon`) values (?, ?,?,?,?,?)";
                $query = $this->db->query($sql, array($user_id,$name, $address, $city, $lat, $lon));

            } else {
                //edit the current record
                $sql = "update zemoser set shopname=?, shopaddress=?, city=?, lat=?, lon=? where user_id=?";
                $query = $this->db->query($sql, array($name, $address, $city, $lat, $lon, $user_id));
                log_message("DEBUG","update");

                //Edit the proof documents on to the zemoser_documents table
                $i=0;
                $files = $_FILES;

                foreach($proofid as $id){

                    if (isset($files['image']) && $files['image']['tmp_name'][$i] != '') {

                        $sql = "select * from zemoser_docs where user_id=? and proof_id = ?";
                        $curr = $this->db->query($sql, array($user_id,$id));

                        if($curr->num_rows() > 0 && $curr->result()[0]->image != NULL && $curr->result()[0]->image != '') {
                            //delete old image
                            $path = $base . $curr->result()[0]->image;
                            if (file_exists($path)) unlink($path);
                        }

                        //upload new image
                        $_FILES['image']['name']= $files['image']['name'][$i];
                        $_FILES['image']['type']= $files['image']['type'][$i];
                        $_FILES['image']['tmp_name']= $files['image']['tmp_name'][$i];
                        $_FILES['image']['error']= $files['image']['error'][$i];
                        $_FILES['image']['size']= $files['image']['size'][$i];

                        $this->upload->initialize($config);

                        if ( ! $this->upload->do_upload('image')) {
                            $error = array('error' => $this->upload->display_errors());
                            return $error;
                        }else {
                            $newFile = $this->upload->data()['file_name'];
                        }

                        $sql = "update zemoser_docs set `number`=?,`image`=?, `proof_name`=? where user_id=? AND `proof_id`=?";
                        $query = $this->db->query($sql, array($proofno[$i],$newFile, $proofname[$i], $user_id, $id));

                        $this->sendZemoserRequest($user_id);
                    }else{
                        $sql = "update zemoser_docs set `number`=?, `proof_name`=? where user_id=? AND `proof_id`=?";
                        $query = $this->db->query($sql, array($proofno[$i], $proofname[$i], $user_id, $id));

                        $this->sendZemoserRequest($user_id);
                    }
                    ++$i;
                }
            }

            return 1;
        }else{
            return 0;
        }

    }

    public function changePassword(){
        $this->load->helper('security');
        $this->load->library('util');
        $this->load->library('urls');

        $user_id = xss_clean($this->session->userdata('user_id'));
        $oldpwd = xss_clean($this->input->post("oldpwd"));
        $newpwd = xss_clean($this->input->post("newpwd"));
        $newpwd2 = xss_clean($this->input->post("newpwd2"));

        $sql = "SELECT * FROM users  WHERE  id = ?";
        $query = $this->db->query($sql,array($user_id));

        $pwd = $query->result()[0]->password;

        if($newpwd === $newpwd2){
            if($pwd === $this->util->hashPass($oldpwd)){
                $sql = "UPDATE `users` SET `password`=? where id=?;";
                $query = $this->db->query($sql, array($this->util->hashPass($newpwd), $user_id));

                return 1;
            }
        }

        return 0;
    }

    public function setPassword(){
        $this->load->helper('security');
        $this->load->library('util');
        $this->load->library('urls');

        $user_id = xss_clean($this->session->userdata('user_id'));
        $oldpwd = xss_clean($this->input->post("oldpwd"));
        $oldpwd2 = xss_clean($this->input->post("oldpwd2"));

        if($oldpwd === $oldpwd2){
            //update password in the user table
            $sql = "UPDATE `users` SET `password`=?, verification_status = '1' where id=?;";
            $query = $this->db->query($sql, array($this->util->hashPass($oldpwd), $user_id));

            //set verification status as 1 in session
            $this->session->set_userdata('verification_status',1);
        }

        return 1;
    }

    public function resetPassword(){
        $this->load->helper('security');
        $this->load->library('util');
        $this->load->library('urls');

        $user_id = xss_clean($this->session->userdata('user_id'));
        $oldpwd = xss_clean($this->input->post("oldpwd"));
        $oldpwd2 = xss_clean($this->input->post("oldpwd2"));

        if($oldpwd === $oldpwd2){

            $pwd = $this->util->hashPass($oldpwd);

            //update password in the user table
            $sql = "UPDATE `users` SET `password`=?, verification_status = '1' where id=?;";
            $query = $this->db->query($sql, array($pwd, $user_id));

            //update password in the user table
            $sql = "UPDATE `reset_pwd_requests` SET verification_status = '1' where id=?;";
            $query = $this->db->query($sql, array($this->session->userdata("reset_pwd_id")));

            //set verification status as 1 in session
            $this->session->set_userdata('verification_status',1);

            $this->session->unset_userdata("reset_pwd_id");
        }

        return 1;
    }

    public function verifyOtp(){
        if(!empty($this->input->post('otp')) && $this->session->has_userdata("otp")){

            $otp = $this->input->post('otp');
            $phone = $this->session->userdata("otp");

            //set verification status as verified
            $sql = "update users set verification_status='2',registered_using='phone' WHERE otp=? AND phone = ? ;";
            $query = $this->db->query($sql, array($otp,$phone));

            //check if any row was affected
            $sql = "select * from users where verification_status <> '1' and otp=? AND phone = ? ";
            $query = $this->db->query($sql, array($otp,$phone));

            $numRows = $query->num_rows();
            //echo $numRows;

            //set a user id of the user in session
            if($numRows > 0) {
                $sql = "select * from users WHERE otp=? AND phone=?";
                $query = $this->db->query($sql, array($otp,$phone));
                $id = $query->result()[0]->id;
                $this->session->set_userdata('user_id', $id);
                $this->session->set_userdata('verification_status',2);

                $this->session->unset_userdata("otp");
                $this->session->unset_userdata("otptime");

                //insert a record into users verification table
                $sql = "insert into user_contact_verification (email_verified,phone_verified,user_id) values(0,1,".$id.");";
                $query = $this->db->query($sql);
            }

            return $numRows;
        }

        return -1;
    }

    function verifyEmailAddress($verificationcode){

        //check if any row was affected
        $sql = "select * from users where email_verification_code=?";
        $query = $this->db->query($sql, array($verificationcode));

        $ver_status = $query->result()[0]->verification_status;

        if($ver_status == 1){
            return -1;
        }

        //set verification status as verified in database
        $sql = "update users set verification_status='2',registered_using='email' WHERE email_verification_code=?";
        $query = $this->db->query($sql, array($verificationcode));

        //check if any row was affected
        $sql = "select * from users where verification_status <> '1' and email_verification_code=?";
        $query = $this->db->query($sql, array($verificationcode));

        $numRows = $query->num_rows();
        //echo $numRows;

        //set a user id of the user in session
        if($numRows > 0) {
            $sql = "select * from users WHERE email_verification_code=?";
            $query = $this->db->query($sql, array($verificationcode));
            $id = $query->result()[0]->id;
            $this->session->set_userdata('user_id', $id);
            $this->session->set_userdata('verification_status',2);

            //insert a record into users verification table
            $sql = "insert into user_contact_verification (email_verified,phone_verified,user_id) values(1,0,".$id.");";
            $query = $this->db->query($sql);
        }

        return $numRows;
    }

    public function sendZemoserRequest($id){
        $sql  = "UPDATE users SET zemoser=2 where id=?";
        $query = $this->db->query($sql, array($id));
    }

    public function loadPersonalDetails(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT * FROM users  WHERE id= ".$user_id.";";

            $query = $this->db->query($sql);
            if($query->num_rows() > 0){
                return $query->result()[0];
            }
        }

        return NULL;
    }

    public function loadContactVerificationDetails(){

        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT * FROM user_contact_verification  WHERE user_id= ".$user_id.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                return $query->result()[0];
            }else{
                $sql = "select registered_using from users where id=".$user_id."; ";
                $query = $this->db->query($sql);
                $res = $query->result()[0];

                if($res->registered_using == "phone") {

                    $sql = "insert into user_contact_verification (email_verified,phone_verified,user_id) values(0,1,".$user_id.");";
                    $query = $this->db->query($sql);
                }else{
                    $sql = "insert into user_contact_verification (email_verified,phone_verified,user_id) values(1,0,".$user_id.");";
                    $query = $this->db->query($sql);
                }

                $sql = "SELECT * FROM user_contact_verification  WHERE user_id= ".$user_id.";";
                $query = $this->db->query($sql);

                if($query->num_rows() > 0){
                    return $query->result()[0];
                }
            }
        }

        return NULL;
    }

    public function loadDetailsOf($id){

        $sql = "SELECT * FROM users u LEFT JOIN zemoser z ON(u.id = z.user_id) WHERE id= ".$id.";";

        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result()[0];
        }

        return NULL;
    }

    public function checkPersonalDetailsCompleted(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT personal_completed FROM users  WHERE id= ".$user_id.";";

            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                $res = $query->result()[0];
                return $res->personal_completed;
            }
        }

        return NULL;
    }

    public function checkContactDetailsCompleted(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT email,phone FROM users  WHERE id= ".$user_id.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                $res = $query->result()[0];
                $email = $res->email;
                $phone = $res->phone;

                if(!empty($email) && $email != '' && !empty($phone) && $phone != '' ){
                    return 1;
                }else{
                    return 0;
                }
            }
        }

        return NULL;
    }

    public function checkContactDetailsVerified(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT * FROM user_contact_verification WHERE user_id= ".$user_id.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                $res = $query->result()[0];
                $email_verified = $res->email_verified;
                $phone_verified = $res->phone_verified;

                if($email_verified==1 && $phone_verified==1){
                    return 1;
                }else{
                    return 0;
                }
            }
        }

        return NULL;
    }

    public function loadVerificationDetails(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT * FROM verification_docs WHERE user_id= ".$user_id.";";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                return $query->result()[0];
            }
        }

        return NULL;
    }

    public function loadZemoserDetails(){

        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM zemoser where user_id=?;";
        $query = $this->db->query($sql, array($user_id));

        return $query->result();
    }

    public function loadZemoserDetailsOf($userId){

        $sql = "SELECT * FROM zemoser where user_id=?;";
        $query = $this->db->query($sql, array($userId));

        return $query->result();
    }

    public function loadZemoserProofs(){

        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM zemoser_docs where user_id=?;";
        $query = $this->db->query($sql, array($user_id));

        return $query->result();
    }

    public function loadAddresses(){
        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM address where user_id=?;";
        $query = $this->db->query($sql, array($user_id));

        return $query->result();
    }

    public function loadAddress($id){

        $sql = "SELECT * FROM address where id=?;";
        $query = $this->db->query($sql, array($id));

        return $query->result();
    }

    public function loadUserReviews($id,$start,$limit){
        $sql = "SElECT * FROM user_reviews ur LEFT JOIN users u ON(ur.reviewer_id = u.id) WHERE user_id=? LIMIT ?,?;";
        $query = $this->db->query($sql, array($id,$start, $limit));

        return $query->result();
    }

    public function loadUserReviewsCount($id){
        $sql ="SELECT COUNT(*) AS cnt FROM user_reviews where user_id=?";
        $query = $this->db->query($sql, array($id));

        //var_dump($query->result()[0]->cnt);
        return $query->result()[0]->cnt;
    }

    public function loadRatingCounts($id){
        $sql ="SELECT rating,COUNT(*) as cnt FROM `user_reviews` WHERE user_id=? GROUP BY rating";
        $query = $this->db->query($sql, array($id));

        return $query->result();
    }

    public function loadAllCountries(){
        $sql = "SELECT * FROM country;";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function loadProofs($country){
        $sql = "SELECT * FROM proofs where country_id=?;";
        $query = $this->db->query($sql, array($country));

        return $query->result();
    }

    public function deleteAddress($id){
        $sql = "DELETE FROM `address` WHERE id=?";
        $query = $this->db->query($sql, array($id));
    }

    public function sendVerificationSms($dest,$otp){
        $auth_id = "MAZDIWMDNLNJE2YJBINJ";
        $auth_token = "YWVlMTMxOGUyMTllM2U0MGI4N2UyNTQ1OGRlNTk3";

        $p = new RestAPI($auth_id, $auth_token);
        // Send a message

        $dest = '0091'.$dest;

        $text = $this->SmsModel->loadSmsTemplate(1);

        $patterns = array();
        $patterns[0] = '/\{{3}OTP\}{3}/';
        $replacements = array();
        $replacements[0] = $otp;

        ksort($patterns);
        ksort($replacements);
        $text = preg_replace($patterns, $replacements, $text->body);

        $params = array(
            'src' => 'ZEMOSE',  // Sender's phone number with country code
            'dst' => $dest,             // Receiver's phone number with country code
            'text' => $text             // Your SMS text message
            //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
            //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
        );

        // Send message
        $response = $p->send_message($params);

        /*// Print the response
        echo "Response : ";
        print_r($response['response']);
        // Print the Api ID
        echo "<br> Api ID : {$response['response']['api_id']} <br>";
        // Print the Message UUID
        echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";*/
    }

    public function sendVerificationEmail(){

    }

    /*public function checkOTP(){
        $sql = "SELECT * FROM users WHERE phone=".$this->input->post('signupPhone').";";
        $query = $this->db->query($sql);
    }*/

    //Email confirmation code generator.
    public static function generateEmailConfirmationCode() {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        for ($i = 0; $i < 60; $i++) {
            $code .= $chars[ rand( 0, strlen( $chars ) - 1 ) ];
        }
        return $code;
    }

    //OTP for sms verification
    public static function generateOtp(){
        $chars = '0123456789';
        $code = '';

        for ($i = 0; $i < 6; $i++) {
            $code .= $chars[ rand( 0, strlen( $chars ) - 1 ) ];
        }

        return $code;
    }

    public function checkNumber($str){
        if (preg_match('/^[0-9,]+$/', $str) == 1)
            return TRUE;
        else
            return FALSE;
    }

    public function forgotPwd(){

        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $user = null;

        if(!empty($email)){
            $user = $email;
            $sql = "SELECT * FROM users WHERE email = ? AND registered_using = 'email'";
            $query = $this->db->query($sql,$email);

            if($query->num_rows() > 0){
                $code = self::generateEmailConfirmationCode();

                //Insert the record into resetpwd request
                $sql = "INSERT INTO reset_pwd_requests (email, verification_code, requested_time) VALUES (?,?,?)";
                $query = $this->db->query($sql,array($email, $code, date('Y-m-d H:i:s')));

                //Send Email to change password
                $msg = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifyForgotPwdRequest/".$code."\r\nWith Regards,\r\nZemose Team.";
                $this->EmailModel->sendEmail($email,'Zemose - Reset Password', $msg);

                return 1;
            }

        }else if(!empty($phone)) {
            $user = $phone;
            $sql = "SELECT * FROM users WHERE phone = ".$phone." AND registered_using = 'phone'";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0){
                $otp = self::generateOtp();

                //Insert the record into resetpwd request
                $sql = "INSERT INTO reset_pwd_requests (phone, otp, requested_time) VALUES (?,?,?)";
                $query = $this->db->query($sql,array($phone, $otp, date('Y-m-d H:i:s')));

                //send OTP to mobile phone
                $this->sendVerificationSms($phone,$otp);

                $_SESSION['otptime'] = time();
                $_SESSION['otp'] = $phone;

                return 2;

            }
        }

        return 0;

    }

    function verifySecondaryEmail(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $email = $this->input->post('email');

            //verify email number
            $sql = "select * from users where email = ? and id <> " . $user_id . " ";
            $query = $this->db->query($sql, array($email));

            if ($query->num_rows() > 0)
                return -1;

            //update the email number in the users table
            $sql = "update users set email = ? where id = " . $user_id . "; ";
            $query = $this->db->query($sql, array($email));

            //generate and store the otp in database
            $code = self::generateEmailConfirmationCode();
            $date_time = date('Y-m-d H:i:s');

            //Insert the record into resetpwd request
            $sql = "update user_contact_verification set email_verification_code= ?,verification_requested_time=?,email_verified=0 where user_id=?";
            $query = $this->db->query($sql, array($code, $date_time, $user_id));

            //send Email
            $msg = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifySecondaryEmailCode/".$code."\r\nWith Regards,\r\nZemose Team.";
            $this->EmailModel->sendEmail($email,'Zemose - Reset Password', $msg);

            return 1;
        }

        return 0;
    }

    function  verifySecondaryEmailCode($verificationcode){
        if($this->util->verifyLogin() == 1) {
            $user_id = $this->session->userdata('user_id');
            //check if the code is correct
            $sql = "select * from user_contact_verification where email_verification_code=? && email_verified<>1";
            $query = $this->db->query($sql, array($verificationcode));

            if ($query->num_rows() > 0) {
                $sql = "update user_contact_verification set email_verified=1 where user_id=" . $user_id . "; ";
                $query = $this->db->query($sql);

                return 1;
            }

            return -1;
        }

        return 0;
    }

    function verifySecondaryPhone(){
        if($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $phone = $this->input->post('phone');

            //verify phone number
            $sql = "select * from users where phone = ".$phone." and id <> ".$user_id." ";
            $query = $this->db->query($sql);

            if($query->num_rows() > 0)
                return -1;

            //update the phone number in the users table
            $sql = "update users set phone = ".$phone." where id = ".$user_id."; ";
            $query = $this->db->query($sql);

            //generate and store the otp in database
            $otp = self::generateOtp();
            $date_time = date('Y-m-d H:i:s');

            //Insert the record into resetpwd request
            $sql = "update user_contact_verification set phone_verification_code= ?,verification_requested_time=?,phone_verified=0 where user_id=?";
            $query = $this->db->query($sql,array($otp, $date_time, $user_id ));

            log_message("DEBUG",json_encode($query));

            //send OTP to users mobile phone
            $this->sendVerificationSms($phone,$otp);

            $_SESSION['otptime'] = $date_time;
            $_SESSION['otp'] = $phone;

            return 1;
        }

        return 0;
    }

    function verifyOtpSecondary() {
        if(!empty($this->input->post('otp')) && $this->session->has_userdata("otp")){

            $otp = $this->input->post('otp');
            $phone = $this->session->userdata("otp");
            $user_id = null;

            //check if any row was affected
            $sql = "select * from users u left join user_contact_verification uc on (u.id = uc.user_id) where uc.phone_verification_code =? AND u.phone = ? ";
            $query = $this->db->query($sql, array($otp,$phone));

            $numRows = $query->num_rows();
            //echo $numRows;

            //set a user id of the user in session
            if($numRows > 0) {
                $user_id = $query->result()[0]->user_id;
                $cur_time = strtotime(date('Y-m-d H:i:s'));
                $req_time = strtotime($query->result()[0]->verification_requested_time,$cur_time);

                if($cur_time - $req_time < 600) {
                    //update the phone_verified record
                    $sql = "update user_contact_verification set phone_verified=1 where user_id=" . $user_id . "; ";
                    $query = $this->db->query($sql);

                    log_message("DEBUG",$sql);

                    $this->session->unset_userdata("otp");
                    $this->session->unset_userdata("otptime");

                    return 1;
                }
            }else{
                return 0;
            }
        }

        return -1;
    }

    //verify forgot password using email
    function verifyForgotPwdEmail($verificationcode) {

        //check if the code is correct
        $sql = "select * from reset_pwd_requests where verification_code=? && verification_status<>1";
        $query = $this->db->query($sql, array($verificationcode));

        if($query->num_rows() > 0) {
            $cur_time = strtotime(date('Y-m-d H:i:s'));
            $req_time = strtotime($query->result()[0]->requested_time,$cur_time);

            if($cur_time - $req_time < 1800) {
                $rid = $query->result()[0]->id;
                $email = $query->result()[0]->email;

                $sql = "select * from users WHERE email=? AND registered_using='email';";
                $query = $this->db->query($sql, array($email));
                $id = $query->result()[0]->id;
                $name = $query->result()[0]->firstname;
                $this->session->set_userdata('user_id', $id);
                $this->session->set_userdata('user_name', $name);
                $this->session->set_userdata('verification_status',2);
                $this->session->set_userdata('reset_pwd_id',$rid);

                return 1;
            }else{
                //request timed out
                return -1;
            }
        }

        return 0;

    }

    public function verifyForgotPwdMoblie(){
        if(!empty($this->input->post('otp')) && $this->session->has_userdata("otp")){

            $otp = $this->input->post('otp');
            $phone = $this->session->userdata("otp");

            //check if the code is correct
            $sql = "select * from reset_pwd_requests where otp=? && phone = ? && verification_status<>1";
            $query = $this->db->query($sql, array($otp,$phone));
            $rid = $query->result()[0]->id;

            $numRows = $query->num_rows();
            //echo $numRows;

            //set a user id of the user in session
            if($numRows > 0) {

                $sql = "select * from users WHERE phone=? AND registered_using='phone';";
                $query = $this->db->query($sql, array($phone));
                $id = $query->result()[0]->id;
                $name = $query->result()[0]->firstname;
                $this->session->set_userdata('user_id', $id);
                $this->session->set_userdata('user_name', $name);
                $this->session->set_userdata('verification_status',2);

                $this->session->unset_userdata("otp");
                $this->session->unset_userdata("otptime");

                return 1;
            }
        }

        return 0;
    }

    public function isEligible() { //Check if the user is eligible for the purchase @TODO Athul Dilip
        return true;
    }

}