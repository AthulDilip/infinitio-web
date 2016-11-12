<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 9/10/16
 * Time: 11:56 PM
 */

/**
 * @property APIAuth $APIAuth
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
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
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class UserRest extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/APIAuth');
        $this->load->library('util');
        $this->load->model('UsersModel');
        $this->load->model('SmsModel');
    }

    public function getProfilePic($user) {
        $reg = $user->registered_using;

        switch ($reg) {
            case 'email' :
                if(!empty($user->profile_picture))
                    return $this->util->getUrl() . 'uploads/profile_imgs/' . $user -> profile_picture;
                else return '';

            case 'phone' :
                if(!empty($user->profile_picture))
                    return $this->util->getUrl() . 'uploads/profile_imgs/' . $user -> profile_picture;
                else return '';

            case 'google' :
                if(empty($user->profile_picture))
                    return $user -> google_profile_pic;
                else return ;

            case 'facebook' :
                if(empty($user->profile_picture))
                    return 'http://graph.facebook.com/' . $user -> fb_user_id . '/picture?type=large';
                else return '';

            default :
                return '';
        }
    }

    public function isZemoser($user) {
        if( $user->zemoser >= 1 ) {
            return true;
        }
        return false;
    }

    public function mailLogin( $email, $password ) {
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => false
        );

        if($email == null || $password == null) {
            throw new PixelRequestException('1L200| Invalid or empty credentials.');
        }

        $this->load->database();
        $sql = "SELECT * FROM users WHERE email = ? AND password = ? AND registered_using = ?";
        $query = $this->db->query($sql, array(
            $email,
            $this->util->hashPassUser($password),
            'email'
        ));

        if($query->num_rows() != 1) {
            throw new PixelRequestException('1L300| Email or password is incorrect.');
        }

        //user exists
        $user = $query->result()[0];

        //create token
        $token = $this->APIAuth->createToken($user);

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'zemoseAccessToken' => $token,
            'email' => $user->email,
            'phone' => $user->phone,
            'profilePicture' => $this->getProfilePic($user),
            'firstName' => $user->firstname,
            'lastName' => $user->lastname,
            'userID' => $user->id,
            'isZemoser' => $this->isZemoser($user)
        );

        return $data;
    }

    public function phoneLogin( $phone, $password ) {
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => ''
            ),
            'data' => false
        );

        if($phone == null || $password == null) {
            throw new PixelRequestException('1L200| Invalid or empty credentials.');
        }

        $this->load->database();
        $sql = "SELECT * FROM users WHERE phone = ? AND password = ? AND registered_using = ?";
        $query = $this->db->query($sql, array(
            $phone,
            $this->util->hashPassUser($password),
            'phone'
        ));

        if($query->num_rows() != 1) {
            throw new PixelRequestException('1L300| Phone or password is incorrect.');
        }

        //user exists
        $user = $query->result()[0];

        //create token
        $token = $this->APIAuth->createToken($user);

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'zemoseAccessToken' => $token,
            'email' => $user->email,
            'phone' => $user->phone,
            'profilePicture' => $this->getProfilePic($user),
            'firstName' => $user->firstname,
            'lastName' => $user->lastname,
            'userID' => $user->id,
            'isZemoser' => $this->isZemoser($user)
        );

        return $data;
    }

    public function googleLogin( $id_token ){
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => false
        );

        if($id_token == null) {
            throw new PixelRequestException('1L201| No token specified.');
        }

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=' . $id_token;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1L201| Failed to verify google Id.');
        }

        $body = $res->getBody();
        $token = json_decode($body);
        $aud = '511099146614-78mldbl4c06k4p4rtj493c5r87j21b2n.apps.googleusercontent.com';
        if( $token->aud != $aud ) {
            throw new PixelRequestException('1L201| Valid token but failed to verify the client ID.');
        }

        $this->load->database();
        $uid = $token -> sub;
        $sql = "SELECT * FROM users WHERE google_user_id = ?";
        $query = $this->db->query($sql, array($uid));
        if($query->num_rows() != 1) {
            throw new PixelRequestException('1L300| User is not signed up.');
        }

        //user exists
        $user = $query->result()[0];

        //create token
        $token = $this->APIAuth->createToken($user);

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';
        $data->data = (object) array(
            'zemoseAccessToken' => $token,
            'email' => $user->email,
            'phone' => $user->phone,
            'profilePicture' => $this->getProfilePic($user),
            'firstName' => $user->firstname,
            'lastName' => $user->lastname,
            'userID' => $user->id,
            'isZemoser' => $this->isZemoser($user)
        );

        return $data;
    }

    public function fbLogin( $id_token ){
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => false
        );

        if($id_token == null) {
            throw new PixelRequestException('1L201| No token specified.');
        }

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://graph.facebook.com/debug_token?access_token='. $id_token .'&input_token=' . $id_token;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1L201| Failed to verify the Facebook access token.');
        }

        $body = $res->getBody();
        $token = json_decode($body)->data;
        $aud = '286472875061222';
        if( $token->app_id != $aud ) {
            throw new PixelRequestException('1L201| Valid token but failed to verify the client ID.');
        }

        $this->load->database();
        $uid = $token -> user_id;
        $sql = "SELECT * FROM users WHERE fb_user_id = ?";
        $query = $this->db->query($sql, array($uid));
        if($query->num_rows() != 1) {
            throw new PixelRequestException('1L300| User is not signed up.');
        }

        //user exists
        $user = $query->result()[0];

        //create token
        $token = $this->APIAuth->createToken($user);

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'zemoseAccessToken' => $token,
            'email' => $user->email,
            'phone' => $user->phone,
            'profilePicture' => $this->getProfilePic($user),
            'firstName' => $user->firstname,
            'lastName' => $user->lastname,
            'userID' => $user->id,
            'isZemoser' => $this->isZemoser($user)
        );

        return $data;
    }

    public function googleSignup($id_token){
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to signup'
            ),
            'data' => false
        );


        if($id_token == null) {
            throw new PixelRequestException('1F201| No token specified');
        }

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=' . $id_token;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1F202| Failed to verify the google ID token');
        }

        $body = $res->getBody();
        $token = json_decode($body);

        $aud = '511099146614-78mldbl4c06k4p4rtj493c5r87j21b2n.apps.googleusercontent.com';
        if( $token->aud != $aud ) {
            throw new PixelRequestException('1F203| Valid token but failed to verify the client ID.');
        }

        $this->load->database();
        $uid = $token ->sub;
        $sql = "SELECT * FROM users WHERE google_user_id = ?";
        $query = $this->db->query($sql, array($uid));

        if($query->num_rows() > 0) {
            $data->ZemoseStatus->Status = 'This google account has been registered already';
            $data->ZemoseStatus->StatusCode = '1F204';
            return $data;
        }else {
            $me = $token;

            if($me == null) {
                $data->ZemoseStatus->Status = 'Unknown error';
                $data->ZemoseStatus->StatusCode = '1F206';
                return $data;
            }

            $email = $me->email;
            log_message("DEBUG",$me);

            //Now try to login
            $sql = "select * from users where email = ?; ";
            $query = $this->db->query($sql, array($email));

            if ($query->num_rows() > 0) {
                throw new PixelRequestException('1F205| An account has already been registered with this email.');
            } else {
                //else try to signup

                // Get User data
                $id = $me->sub;
                $firstname = $me->given_name;
                $lastname = $me->family_name;
                $profile_image_url = $me->picture;

                $sql = "insert into users (firstname,lastname,email,google_user_id,registered_using,google_profile_pic) values(?,?,?,?,?,?); ";
                $query = $this->db->query($sql, array($firstname,$lastname,$email,$id,"google",$profile_image_url));

                //Do Read Last insert id
                $sql = "SELECT LAST_INSERT_ID() AS user_id";
                $query = $this->db->query($sql, array());
                $user_id = $query->result()[0]->user_id;

                $sql = "SELECT * FROM users WHERE id = ?";
                $user = $this->db->query($sql, array($user_id));
                $user = $user->result()[0];

                $data->ZemoseStatus->Status = 'Successfully signed up using google.';
                $data->ZemoseStatus->StatusCode = '1F100';
                $data->data = (object) array(
                    'zemoseAccessToken' => $this->APIAuth->createToken($user),
                    'userId' => $uid,
                );

                return $data;
            }
        }
    }

    public function fbSignup($id_token){
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => null
        );

        if($id_token == null) {
            throw new PixelRequestException('1E201| No token specified.');
        }

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://graph.facebook.com/debug_token?access_token='. $id_token .'&input_token=' . $id_token;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1E202| Failed to verify the Facebook access token.');
        }

        $body = $res->getBody();
        $token = json_decode($body)->data;
        $aud = '286472875061222';
        if( $token->app_id != $aud ) {
            throw new PixelRequestException('1E203| Valid token but failed to verify the client ID.');
        }

        $this->load->database();
        $uid = $token -> user_id;
        $sql = "SELECT * FROM users WHERE fb_user_id = ?";
        $query = $this->db->query($sql, array($uid));

        if($query->num_rows() > 0) {
            throw new PixelRequestException('1E204| This fb account has been already registered.');
        }else{
            //start signup process
            require_once __DIR__ . '/../../src/Facebook/autoload.php';
            $fb = new Facebook\Facebook([
                'app_id' => '286472875061222',
                'app_secret' => 'eadb9a3ed56fde121932ad6bae3ae5ea',
                'default_graph_version' => 'v2.7',
            ]);

            $fb->setDefaultAccessToken($id_token);
            try {
                $response = $fb->get('/me?fields=email,first_name,last_name,gender,location{location},birthday');
                $userNode = $response->getGraphUser();
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                $errormsg = 'Graph returned an error: ' . $e->getMessage();
                $data->ZemoseStatus->Status = $errormsg;
                $data->ZemoseStatus->StatusCode = '1E205';
                return $data;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                $errormsg =  'Facebook SDK returned an error: ' . $e->getMessage();
                $data->ZemoseStatus->Status = $errormsg;
                $data->ZemoseStatus->StatusCode = '1E205';
                return $data;
            }

            $email = $userNode->getEmail();


            //Now try to login
            $sql = "select * from users where email = ?; ";
            $query = $this->db->query($sql, array($email));

            if ($query->num_rows() > 0) {
                $data->ZemoseStatus->Status = 'An account has already been registered with this email.';
                $data->ZemoseStatus->StatusCode = '1E206';
                return $data;
            } else {

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

                $sql = "select * from country where lower(`name`) = lower(?); ";
                $query = $this->db->query($sql, array($country));

                $country_id = $query->result()[0]->id;

                $sql = "insert into users (firstname,lastname,gender,email,city,lat,lon,country,dob,fb_user_id,registered_using) values(?,?,?,?,?,?,?,?,?,?,?); ";
                $query = $this->db->query($sql, array($firstname,$lastname,$gender,$email,$city,$lat,$lon,$country_id,$dob,$fb_id,"facebook"));


                //Do Read Last insert id
                $sql = "SELECT LAST_INSERT_ID() AS user_id";
                $query = $this->db->query($sql, array());
                $user_id = $query->result()[0]->user_id;

                $sql = "SELECT * FROM users WHERE id = ?";
                $user = $this->db->query($sql, array($user_id));
                $user = $user->result()[0];

                $data->ZemoseStatus->Status = 'Successfully signed up using facebook.';
                $data->ZemoseStatus->StatusCode = '1E100';
                $data->data = (object) array(
                    'zemoseAccessToken' => $this->APIAuth->createToken($user),
                    'userId' => $uid,
                );

                return $data;
            }
        }

    }

    public function signupManual($email, $phone) {
        $uname = null;

        if($email == null) $uname = $phone;
        else $uname = $email;
        if ($uname == null) throw new PixelRequestException('1A400|No email or phone number.');

        $sql = "SELECT * FROM users WHERE email = ? OR phone = ?";
        $query = $this->db->query($sql, array($uname, $uname));

        if($query->num_rows() > 0) throw new PixelRequestException('1A300|A user is already registered with this email or mobile number.');

        if($uname == $email) {
            $code = UsersModel::generateEmailConfirmationCode();

            $sql = "INSERT INTO users(email,email_verification_code) VALUES (?,?)";
            $query = $this->db->query($sql,array($uname,$code));

            if(base_url() != 'https://zemose.dev/') {
                $sub = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifyEmail/".$code."\r\nWith Regards,\r\nZemose Team.";
                $this->EmailModel->sendEmail($email,'Welcome to Zemose, Verify your Email', $sub);
            }

            //Do Read Last insert id
            $sql = "SELECT LAST_INSERT_ID() AS user_id";
            $query = $this->db->query($sql, array());
            $user_id = $query->result()[0]->user_id;

            $sql = "SELECT * FROM users WHERE id = ?";
            $user = $this->db->query($sql, array($user_id));
            $user = $user->result()[0];

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1A200',
                    'Status' => 'Verification email sent.'
                ),
                'data' => (object) array(
                    'userID' => $user->id,
                    'zemoseAccessToken' => $this->APIAuth->createToken($user)
                )
            );

            return $data;
        }
        else {
            $sql = "SELECT * FROM users WHERE phone = ?";
            $query = $this->db->query($sql, array($uname));

            if($query->num_rows() > 0) {
                $res = $query->result()[0];
                if($res->verification_status == 1) {
                    throw new PixelRequestException('1A300|Mobile number already used.');
                }
                else {
                    //generate otp
                    $otp = UsersModel::generateOtp();
                    $phone = $uname;

                    $sql = "UPDATE users SET otp=?, requested_time=NOW() WHERE phone=?; ";
                    $query = $this->db->query($sql,array($otp,$phone));

                    //send sms
                    $this->UsersModel->sendVerificationSms($phone, $otp);

                    $data = (object)array(
                        'ZemoseStatus' => (object) array(
                            'StatusCode' => '1A100',
                            'Status' => 'Verification email sent.'
                        ),
                        'data' => (object) array(
                            'userID' => $res->id,
                            'zemoseAccessToken' => $this->APIAuth->createToken($res)
                        )
                    );

                    return $data;
                }
            }
            else {

                //generate otp
                $otp = UsersModel::generateOtp();
                $date_time = date('Y-m-d H:i:s');

                //store the phone number and the op on to the database
                $sql = "INSERT INTO users(phone,otp,requested_time) VALUES (?,?,?)";
                $query = $this->db->query($sql, array($uname, $otp, $date_time));

                //send sms
                $this->UsersModel->sendVerificationSms($uname, $otp);

                //Do Read Last insert id
                $sql = "SELECT LAST_INSERT_ID() AS user_id";
                $query = $this->db->query($sql, array());
                $user_id = $query->result()[0]->user_id;

                $sql = "SELECT * FROM users WHERE id = ?";
                $user = $this->db->query($sql, array($user_id));
                $user = $user->result()[0];

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1A200',
                        'Status' => 'OTP sent.'
                    ),
                    'data' => (object) array(
                        'userID' => $user->id,
                        'zemoseAccessToken' => $this->APIAuth->createToken($user)
                    )
                );

                return $data;
            }
        }
    }

    public function checkOtp($userId,$otp){
        if(empty($userId))
            throw new PixelRequestException('1C201|No userId provided.');

        if($otp == null)
            throw new PixelRequestException('1C200|No otp provided.');

        $sql = "SELECT * FROM users WHERE otp=? AND id = ?;";
        $query = $this->db->query($sql,array($otp,$userId));

        if($query->num_rows() > 0){
            $res = $query->result()[0];
            $otpDb = $res->otp;
            $cur_time = strtotime(date('Y-m-d H:i:s'));
            $req_time = strtotime($res->requested_time,$cur_time);

            if($cur_time - $req_time < 600) {
                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1C100',
                        'Status' => 'Success'
                    ),
                    'data' => (object) array(
                        'verified' => true
                    )
                );

                return $data;
            }else{
                throw new PixelRequestException('1C300|Your session has expired!');
            }
        }else{
            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1C100',
                    'Status' => 'Success'
                ),
                'data' => (object) array(
                    'verified' => false
                )
            );

            return $data;
        }

    }

    public function sendOtp($userId){
        if(empty($userId))
            throw new PixelRequestException('1B201|No userId provided.');

        $sql = "SELECT * FROM users WHERE id =".$userId.";";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){

            $res = $query->result()[0];
            $otp = $res->otp;
            $dest = $res->phone;

            if(!empty($otp) && !empty($dest)) {
                //send the sms
                $this->UsersModel->sendVerificationSms($dest, $otp);


                //update requested_time
                $date_time = date('Y-m-d H:i:s');
                $sql = "UPDATE users SET requested_time =? WHERE id=?";
                $query = $this->db->query($sql, array($date_time,$userId));

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1B100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                return $data;
            }
        }

        throw new PixelRequestException('1B202|No OTP was sent to this userId.');
    }

    public function sendEmail($userId){
        if(empty($userId))
            throw new PixelRequestException('1D201|No userId provided.');

        $sql = "SELECT * FROM users WHERE id =".$userId.";";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){

            $res = $query->result()[0];
            $code = $res->email_verification_code;
            $email = $res->email;

            if(!empty($code) && !empty($email)) {
                //send the email
                if(base_url() != 'https://zemose.dev/') {
                    $msg = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifyEmail/".$code."\r\nWith Regards,\r\nZemose Team.";
                    $this->EmailModel->sendEmail($email,'Welcome to Zemose, Verify your Email', $msg);
                }

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1D100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                return $data;
            }
        }

        throw new PixelRequestException('1D202|No Email was sent to this userId.');
    }

    public function changePassword($userId,$oldPwd,$newPwd){

        $sql = "SELECT * FROM users  WHERE  id = ?";
        $query = $this->db->query($sql,array($userId));
        $pwd = $query->result()[0]->password;

        if(empty($userId))
            throw new PixelRequestException('1H201| userId is not provided.');

        if($pwd === $this->util->hashPass($oldPwd)){
            $sql = "UPDATE `users` SET `password`=? where id=?;";
            $query = $this->db->query($sql, array($this->util->hashPass($newPwd), $userId));

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1H100',
                    'Status' => 'Password changed successfully.'
                ),
                'data' => true
            );

            return $data;
        }

        throw new PixelRequestException('1H200|Old Password is incorrect.');
    }

    public function getProfile($userId){

        if(empty($userId))
            throw new PixelRequestException('1M201| userId is not provided.');

        $sql = "SELECT * FROM users u LEFT JOIN user_contact_verification uc ON (u.id = uc.user_id) WHERE u.id = ?;";
        $query = $this->db->query($sql, array($userId));

        $personal = null;
        if($query->num_rows() > 0) {
            $res = $query->result()[0];

            $personal = (object) array(
                'email' => $res->email,
                'phone' => $res->phone,
                'emailVerified' => $res->email_verified,
                'phoneVerified' => $res->phone_verified,
                'firstName' => $res->firstname,
                'lastName' => $res->lastname,
                'profilePicture' => $this->getProfilePic($res),
                'gender' => ($res->gender == 0 ? 2 : $res->gender - 1), //Don't edit
                'dob' => $res->dob,
                'address' => $res->address1,
                'city' => $res->city,
                'lat' => $res->lat,
                'lon' => $res->lon,
                'country' => $res->country,
                'pin' => $res->zip,
                'isZemoser' => $this->isZemoser($res),
                'regType' => $res->registered_using
            );

            $sql = "SELECT * FROM address WHERE user_id = ?;";
            $query = $this->db->query($sql, array($userId));

            $address = array();
            if($query->num_rows() > 0) {
                $res = $query->result();
                $i=0;
                foreach ($res as $item){
                    $address[$i] = $item;
                    ++$i;
                }
            }

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1M100',
                    'Status' => 'Success'
                ),
                'data' => (object) array(
                    'personal' => $personal,
                    'address' => $address,
                )
            );

            return $data;
        }
        throw new PixelRequestException('1M200| userId provided is not valid.');

    }

    public function updatePersonalDetails($userId){
        if(empty($userId))
            throw new PixelRequestException('1G201| userId is not provided.');

        $firstName = $this->input->post("firstName");
        $lastName = $this->input->post("lastName");
        $dob = $this->input->post("dob");
        $address = $this->input->post("address");
        $city = $this->input->post("city");
        $country = $this->input->post("country");
        $gender = $this->input->post("gender");
        $zip = $this->input->post("pin");
        $lat = $this->input->post("lat");
        $lon = $this->input->post("lon");
        $completed = 0;

        if(!empty($firstName) && $firstName != '' &&
            !empty($lastName) && $lastName != '' &&
            !empty($dob) && $dob != '' &&
            !empty($address) && $address != '' &&
            !empty($city) && $city !== '' &&
            !empty($country) && $country != '-1' &&
            !empty($gender) && $gender != '0' &&
            !empty($zip) && $zip != '' &&
            !empty($lat) && $lat != '' &&
            !empty($lon) && $lon != ''
        ){
            $completed = 1;
        }

        $sql = "UPDATE `users` SET `firstname`=?,`lastname`=?, `gender`=?,dob=? ,`address1`=?,`city`=?,`country`=?,`zip`=?,`lat`=?,`lon`=?, `personal_completed`=? where id=?;";
        $query = $this->db->query($sql, array($firstName, $lastName, $gender,$dob, $address, $city, $country, $zip ,$lat ,$lon, $completed ,$userId));

        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '1G100',
                'Status' => 'Success'
            ),
            'data' => true
        );

        return $data;
    }

    public function checkMail($userId){
        if(empty($userId))
            throw new PixelRequestException('1N201| userId is not provided.');

        $sql = "SELECT * FROM users u LEFT JOIN user_contact_verification uc ON (u.id = uc.user_id) 
                  WHERE u.id = ? ;";
        $query = $this->db->query($sql, array($userId));

        if($query->num_rows() > 0){
            $res = $query->result()[0];
            $email_verified = false;
            if($res->email_verified == "1"){
                $email_verified = true;
            }

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1N100',
                    'Status' => 'Success'
                ),
                'data' => $email_verified
            );
            return $data;
        }
        throw new PixelRequestException('1N200| This userId is not registered with this email.');
    }

    public function checkVerified($userId){
        if(empty($userId))
            throw new PixelRequestException('1K201| userId is not provided.');

        if($this->checkPersonalDetailsCompleted($userId) == 1){
            if($this->checkContactDetailsCompleted($userId) == 1){
                if($this->checkContactDetailsVerified($userId) == 1){
                    $sql = "SELECT * FROM verification_docs WHERE user_id= ".$userId.";";
                    $query = $this->db->query($sql);
                    if($query->num_rows() > 0){

                        $data = (object)array(
                            'ZemoseStatus' => (object) array(
                                'StatusCode' => '1K100',
                                'Status' => 'User is verified.'
                            ),
                            'data' => true
                        );
                        return $data;
                    }else throw new PixelRequestException('1K202| Verification details not yet provided.');
                }else throw new PixelRequestException('1K203| Contact details is not verified.');
            }else throw new PixelRequestException('1K204| Contact details is not completed.');
        }else throw new PixelRequestException('1K205| Personal details is not completed.');
    }

    public function loadProofs($userId){
        if(empty($userId))
            throw new PixelRequestException('1I201| userId is not provided.');

        $sql = "SELECT * FROM verification_docs WHERE user_id= ".$userId.";";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){
            $res = $query->result()[0];
            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1I100',
                    'Status' => 'Success.'
                ),
                'data' => (object) array(
                    'name' => $res->name,
                    'image' => $this->util->getUrl() . 'uploads/verification_imgs/' .$res->image
                )
            );
            return $data;
        }

        throw new PixelRequestException('1I300| Verification details is not entered.');
    }

    public function setPassword($userId,$pwd) {
        if (empty($userId))
            throw new PixelRequestException('1O201| userId is not provided.');

        $sql = "SELECT * FROM `users` WHERE id=? AND verification_status <> 1;";
        $query = $this->db->query($sql, array($userId));

        if ($query->num_rows() > 0) {
            $sql = "UPDATE `users` SET `password`=? WHERE id=?;";
            $query = $this->db->query($sql, array($this->util->hashPass($pwd), $userId));

            $data = (object)array(
                'ZemoseStatus' => (object)array(
                    'StatusCode' => '1O100',
                    'Status' => 'Password changed successfully.'
                ),
                'data' => true
            );

            return $data;
        }

        throw new PixelRequestException('1O200| Cannot set password.');
    }

    public function checkPersonalDetailsCompleted($userId){
        $sql = "SELECT personal_completed FROM users  WHERE id= ".$userId.";";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0){
            $res = $query->result()[0];
            return $res->personal_completed;
        }

        return 0;
    }

    public function checkContactDetailsCompleted($userId){
        $sql = "SELECT email,phone FROM users  WHERE id= ".$userId.";";
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

        return 0;
    }

    public function checkContactDetailsVerified($userId){

        $sql = "SELECT * FROM user_contact_verification WHERE user_id= ".$userId.";";
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

        return 0;
    }

    public function updateProfilePic($userId){
        if(empty($userId))
            throw new PixelRequestException('1P201| userId is not provided.');

        $base = FCPATH . 'uploads/profile_imgs/';

        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $sqlLoad = "SELECT * FROM `users` WHERE `id` = ?";
        $curr = $this->db->query( $sqlLoad, array( $userId ) );

        if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] !== '') {

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                throw new PixelRequestException('1P202| Error while uploading the image.');
            }else {
                $newFile = $this->upload->data()['file_name'];

                if($curr->num_rows() > 0 && $curr->result()[0]->profile_picture != '' && $curr->result()[0]->profile_picture != NULL) {
                    //delete old image
                    $path = $base . $curr->result()[0]->profile_picture;
                    if (file_exists($path)) unlink($path);
                }

                $sql = "UPDATE `users` SET profile_picture=? WHERE id = ?; ";
                $query = $this->db->query($sql, array($newFile, $userId));

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1P100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                return $data;
            }
        }
        
    }

    public function addAddress($userId,$name,$address,$city,$lat,$lon,$phone,$pin){
        if(empty($userId))
            throw new PixelRequestException('1Q201| userId is not provided.');

        if(!empty($name) && $name != '' &&
            !empty($address) && $address != '' &&
            !empty($city) && $city != '' &&
            !empty($pin) && $pin != '' &&
            !empty($phone) && $phone != ''){

            $sql = "insert into address (`name`, streetaddress, city,lat, lon, pin, phone, user_id) values(?,?,?,?,?,?,?,?);";
            $query = $this->db->query($sql, array($name, $address, $city,$lat, $lon,$pin, $phone, $userId));

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1Q100',
                    'Status' => 'Success'
                ),
                'data' => true
            );

            return $data;

        }else throw new PixelRequestException('1Q202| All details are not provided.');
    }

    public function deleteAddress($userId,$addressId){
        if(empty($userId))
            throw new PixelRequestException('1R201| userId is not provided.');

        $sql = "SELECT * FROM address WHERE id = ?";
        $query = $this->db->query($sql,array($addressId));

        if($query->num_rows() > 0){
            $sql = "DELETE FROM `address` WHERE id=?";
            $query = $this->db->query($sql, array($addressId));

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1R100',
                    'Status' => 'Success'
                ),
                'data' => true
            );

            return $data;
        }else throw new PixelRequestException('1R202| addressId is incorrect.');
    }

    public function updateContactDetails($userId,$email,$phone){
        if(empty($userId))
            throw new PixelRequestException('1S201| userId is not provided.');

        $sql = "SELECT registered_using FROM users WHERE id = ?;";
        $query = $this->db->query($sql,array($userId));

        if($query->num_rows() > 0){
            $res = $query->result()[0];
            $registered_using = $res->registered_using;

            if($registered_using == "phone") {
                //Then only update email
                $sql = "SELECT * FROM users WHERE email = ? AND id <> ? ";
                $query = $this->db->query($sql,array($email,$userId));

                if($query->num_rows() > 0 && !empty($email)) {
                    throw new PixelRequestException('1S202| The email address has already been used.');
                }else {
                    //if registered using phone then only email must be changable
                    $sql = "UPDATE `users` SET `email`=? where id=?;";
                    $query = $this->db->query($sql, array($email, $userId));

                    $sql = "UPDATE `user_contact_verification` SET `email_verified`= '0' where user_id=?;";
                    $query = $this->db->query($sql, array($userId));

                    $data = (object)array(
                        'ZemoseStatus' => (object) array(
                            'StatusCode' => '1S100',
                            'Status' => 'Success'
                        ),
                        'data' => true
                    );
                    return $data;
                }
            }else{
                //Else only update phone
                $sql = "SELECT * FROM users WHERE phone = ? AND id <> ? ";
                $query = $this->db->query($sql,array($phone,$userId));

                if($query->num_rows() > 0 && !empty($phone)) {
                    throw new PixelRequestException('1S203| The phone number has already been used.');
                }else {
                    //if note registered using phone then only phone must be changable
                    $sql = "UPDATE `users` SET `phone`=? where id=?;";
                    $query = $this->db->query($sql, array($phone, $userId));

                    $sql = "UPDATE `user_contact_verification` SET `phone_verified`= 0 where user_id=?;";
                    $query = $this->db->query($sql, array($userId));

                    $data = (object)array(
                        'ZemoseStatus' => (object) array(
                            'StatusCode' => '1S100',
                            'Status' => 'Success'
                        ),
                        'data' => true
                    );
                    return $data;
                }
            }
        }


    }

    public function updateVerificationDetails($userId,$name){
        if(empty($userId))
            throw new PixelRequestException('1J201| userId is not provided.');

        $sqlLoad = "SELECT * FROM `verification_docs` WHERE `user_id` = ?";
        $curr = $this->db->query( $sqlLoad, array( $userId ));

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
                throw new PixelRequestException('1J202| Could not upload the image.');
            }else {
                $newFile = $this->upload->data()['file_name'];
            }

            $sql = "INSERT INTO `verification_docs` (`name`, `image`, `user_id`) VALUES (?, ?, ?)";
            $query = $this->db->query($sql, array($name,$newFile,$userId));

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '1J100',
                    'Status' => 'Success'
                ),
                'data' => true
            );
            return $data;

        }else{
            //edit the current record in verification_docs
            if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] !== '') {
                //upload new image
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image')) {
                    throw new PixelRequestException('1J202| Could not upload the image.');
                }else {
                    $newFile = $this->upload->data()['file_name'];
                }

                if($curr->num_rows() > 0 && $curr->result()[0]->image != '' && $curr->result()[0]->image != NULL) {
                    //delete old image
                    $path = $base . $curr->result()[0]->image;
                    if (file_exists($path)) unlink($path);
                }

                $upSql = "UPDATE `verification_docs` SET `name` = ?, `image` = ? WHERE `user_id` = ?";
                $query = $this->db->query($upSql, array($name,$newFile,$userId));

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1J100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );
                return $data;
            }else {
                //just update number
                $upSql = "UPDATE `verification_docs` SET `name`=? WHERE `user_id` = ?";
                $this->db->query($upSql, array($name, $userId));
                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1J100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );
                return $data;
            }
        }
    }

    public function verifySecondaryPhone($userId,$phone){
        if(empty($userId))
            throw new PixelRequestException('1T201| userId is not provided.');


        //verify phone number
        $sql = "select * from users where phone = ".$phone." and id <> ".$userId." ";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0)
            throw new PixelRequestException('1T202| This phone number has already been used.');

        //update the phone number in the users table
        $sql = "update users set phone = ".$phone." where id = ".$userId."; ";
        $query = $this->db->query($sql);

        //generate and store the otp in database
        $otp = $this->UsersModel->generateOtp();
        $date_time = date('Y-m-d H:i:s');

        //Insert the record into resetpwd request
        $sql = "update user_contact_verification set phone_verification_code= ?,verification_requested_time=?,phone_verified=0 where user_id=?";
        $query = $this->db->query($sql,array($otp, $date_time, $userId ));

        log_message("DEBUG",json_encode($query));

        //send OTP to users mobile phone
        $this->UsersModel->sendVerificationSms($phone,$otp);

        $_SESSION['otptime'] = $date_time;
        $_SESSION['otp'] = $phone;

        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '1T100',
                'Status' => 'Success'
            ),
            'data' => true
        );
        return $data;

    }

    public function verifyOtpSecondary($userId,$otp) {
        if(empty($userId))
            throw new PixelRequestException('1U201| userId is not provided.');

            //check if any row was affected
            $sql = "select * from users u left join user_contact_verification uc on (u.id = uc.user_id) where uc.phone_verification_code =? AND u.id = ?";
            $query = $this->db->query($sql, array($otp,$userId));

            $numRows = $query->num_rows();
            //echo $numRows;

            //set a user id of the user in session
            if($numRows > 0) {
                $cur_time = strtotime(date('Y-m-d H:i:s'));
                $req_time = strtotime($query->result()[0]->verification_requested_time,$cur_time);

                if($cur_time - $req_time < 600) {
                    //update the phone_verified record
                    $sql = "update user_contact_verification set phone_verified=1 where user_id=" . $userId . "; ";
                    $query = $this->db->query($sql);

                    $data = (object)array(
                        'ZemoseStatus' => (object) array(
                            'StatusCode' => '1U100',
                            'Status' => 'Success'
                        ),
                        'data' => true
                    );
                    return $data;
                }else{
                    throw new PixelRequestException('1U203| Your session has expired.');
                }
            }else{
                throw new PixelRequestException('1U202| Otp is incorrect.');
            }
    }

    public function resendOtpSecondary($userId){

        if(empty($userId))
            throw new PixelRequestException('1V201|No userId provided.');

        $sql = "SELECT * FROM users u LEFT JOIN user_contact_verification uc ON (u.id = uc.user_id) WHERE u.id =".$userId.";";
        $query = $this->db->query($sql);

        $cur_time = strtotime(date('Y-m-d H:i:s'));
        $req_time = strtotime($query->result()[0]->verification_requested_time,$cur_time);

        if($cur_time - $req_time > 600)
            throw new PixelRequestException('1V202|Your session has been timed out.');

        if($query->num_rows() > 0){

            $res = $query->result()[0];
            $otp = $res->phone_verification_code;
            $dest = $res->phone;

            if(!empty($otp) && !empty($dest)) {
                //send the sms
                //$this->UsersModel->sendVerificationSms($dest, $otp);
                log_message("DEBUG",$otp);

                //update requested_time
                $date_time = date('Y-m-d H:i:s');
                $sql = "UPDATE users SET requested_time =? WHERE id=?";
                $query = $this->db->query($sql, array($date_time,$userId));

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '1V100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                return $data;
            }
        }

        throw new PixelRequestException('1V203|No OTP was sent to this userId.');
    }

    public function verifySecondaryEmail($userId,$email){

        if(empty($userId))
            throw new PixelRequestException('1W201|No userId provided.');

        //verify email number
        $sql = "select * from users where email = ? and id <> " . $userId . " ";
        $query = $this->db->query($sql, array($email));

        if ($query->num_rows() > 0)
            throw new PixelRequestException('1W202|An acoount has already been registered with this email.');

        //update the email number in the users table
        $sql = "update users set email = ? where id = " . $userId . "; ";
        $query = $this->db->query($sql, array($email));

        //generate and store the otp in database
        $code = $this->UsersModel->generateEmailConfirmationCode();
        $date_time = date('Y-m-d H:i:s');

        //Insert the record into resetpwd request
        $sql = "update user_contact_verification set email_verification_code= ?,verification_requested_time=?,email_verified=0 where user_id=?";
        $query = $this->db->query($sql, array($code, $date_time, $userId));

        //send Email
        $msg = "Greetings from Zemose Team, \r\n Welcome to Zemose. Please click on the link below to verify your email address and get started with Zemose. \r\n".$this->urls->getUrl() ."Users/verifySecondaryEmailCode/".$code."\r\nWith Regards,\r\nZemose Team.";
        //$this->EmailModel->sendEmail($email,'Zemose - Verify Email', $msg);

        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => '1W100',
                'Status' => 'Success'
            ),
            'data' => true
        );
        return $data;
    }

}