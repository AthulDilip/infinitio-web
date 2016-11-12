<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 12:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


/**
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

class Users extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        $this->load->library('form_validation');
        $this->load->library('upload');

        $this->load->model('UsersModel');
        $this->load->model('EmailModel');
        $this->load->model('SmsModel');
    }

    public function index() {
        $this->personalDetails();
    }

    public function login (){

        $data = $this->UsersModel->login();

        $this->load->view('rest', array('data' => $data));
    }

    public function signup(){

        if( $this->input->post('signupEmail') != NULL) {
            $config = $this->getEmailRules();
            $type = 0;
        }else if( $this->input->post('signupPhone') != NULL) {
            $config = $this->getPhoneRules();
            $type = 1;
        }else{
            $data['msg'] = "Data not valid";
            $data['succ'] = false;
            $this->load->view('rest', array('data' => $data));
            return;
        }

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            //$data['msg'] = validation_errors();
            $data['msg'] = validation_errors();
            $data['succ'] = false;
        }else {

            if($type==0) {
                $this->UsersModel->emailSignup();

                $data['msg'] = "A verification link has been sent to your email!";
                $data['succ'] = true;
            }else if($type == 1){
                if($this->UsersModel->mobileSignup() == 1) {
                    $data['msg'] = "An OTP code has been sent to your mobile.";
                    $data['succ'] = true;
                }else {
                    $data['msg'] = "An Account has already been registered with this mobile number.";
                    $data['succ'] = false;
                }
            }
        }

        log_message('DEBUG', json_encode($data));

        $this->load->view('rest', array('data' => $data));
    }

    public function fblogin(){
        $ret = $this->UsersModel->fblogin();
        if($ret == 1){
            //$this->session->set_userdata('success',"Successfully logged in using facebook!");
            redirect('/home');
        }else if($ret == 2) {
            $this->session->set_userdata('success',"Successfully signed up using facebook! Now fill in rest of your detail!");
            redirect('users/personalDetails');
        }else if($ret == -1) {
            $this->session->set_userdata('error',"An account has already been registered with this email!");
            redirect('/users/loginerror');
        }else if($ret == -2){
            $this->session->set_userdata('error',"An Unxpected error occured!");
            redirect('/users/loginerror');
        }
    }

    public function googlelogin(){
        $ret = $this->UsersModel->googlelogin();
        if($ret == 1){
            redirect('/home');
        }else if($ret == 2){
            $this->session->set_userdata('success',"Successfully signed up using google! Now fill in rest of your detail!");
            redirect('users/personalDetails');
        }else if($ret == -1){
            $this->session->set_userdata('error',"An account has already been registered with this email!");
            redirect('/users/loginerror');
        }else if($ret == -2){
            $this->session->set_userdata('error',"An unexpected error occurred, check your internet connection!");
            redirect('/users/loginerror');
        }
    }

    public function googlesignup(){
        if($this->UsersModel->googlesignup() == 1){
            $this->session->set_userdata('success',"Successfully signed up using google! Now fill in rest of your detail!");
            redirect('users/personalDetails');
        }else{
            $this->session->set_userdata('error',"An account has already been registered with this email! Try to login instead!");
        }
    }

    //page that will ask the user to login or signup to continue
    public function loginError(){

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl()
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'title' => 'Login',
            'googleLoginUrl' =>$googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );


        //$this->load->view('view-header', $headData);
        $this->load->view('Users/view-loginerror', $conData);
        //$this->load->view('view-footer', $headData);
    }

    //page that will set password
    public function setPassword(){
        if($this->util->verifyLogin() == 2){

            //genereate url for google login
            $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
            $googleLoginUrl = $client->createAuthUrl();

            //generate facebook login url
            $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'googleLoginUrl' => $googleLoginUrl,
                'fbLoginUrl' => $fbLoginUrl
            );

            $conData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Change Password'
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-setpwd', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }

    }

    //page that will reset forgotten password
    public function resetPassword(){
        if($this->util->verifyLogin() == 2){

            //genereate url for google login
            $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
            $googleLoginUrl = $client->createAuthUrl();

            //generate facebook login url
            $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'googleLoginUrl' => $googleLoginUrl,
                'fbLoginUrl' => $fbLoginUrl
            );

            $conData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Change Password'
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-resetpassword', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }

    }

    //page that will allow the user to update his personal details
    public function personalDetails() {

        if($this->util->verifyLogin() == 1) {
            //get the details from the database if the user has already entered it
            $details = $this->UsersModel->loadPersonalDetails();
            $countries = $this->UsersModel->loadAllCountries();

            //display the personalDetails Page
            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Update Personal Details',
                'data' => $details,
                'countries' => $countries
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-register', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }
    }

    //page that will allow the user to add adresses
    public function addAddress() {

        if($this->util->verifyLogin() == 1) {
            //get the details from the database if the user has already entered it
            $details = $this->UsersModel->loadPersonalDetails();
            $countries = $this->UsersModel->loadAllCountries();
            $addresses = $this->UsersModel->loadAddresses();

            //display the personalDetails Page
            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Add New Addresses',
                'data' => $details,
                'countries' => $countries,
                'addresses' => $addresses
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-address', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }
    }

    public function deleteAddress() {

        if($this->util->verifyLogin() == 1) {

            $address_id = $this->uri->segment(3,-1);

            $res = $this->UsersModel->loadAddress($address_id);
            $user_id = $res[0]->user_id;

            var_dump($res);

            if($user_id == $this->session->userdata("user_id")){
                 //delete the address with that id
                $this->UsersModel->deleteAddress($address_id);
                $this->session->set_userdata('success',"Address Successfully Deleted!");
                redirect('users/addAddress');
            }else{
                $this->session->set_userdata('error',"You don't have the permission to delete this address!");
                //redirect('users/addAddress');
            }

        }else{
            redirect('/home');
        }
    }

    //page that will allow the user to change his password
    public function changePassword(){

        if($this->util->verifyLogin() == 1) {

            $data = $this->UsersModel->loadPersonalDetails();

            if($data->registered_using != 'facebook' && $data->registered_using != 'google') {

                $headData = array(
                    'url' => $this->urls->getUrl(),
                    'conUrl' => $this->urls->getConUrl()
                );

                $conData = array(
                    'url' => $this->urls->getUrl(),
                    'conUrl' => $this->urls->getConUrl(),
                    'title' => 'Change Password',
                );


                $this->load->view('view-header', $headData);
                $this->load->view('Users/view-changepwd', $conData);
                $this->load->view('view-footer', $headData);
            }else{
                redirect('/users');
            }
        }else{
            redirect('/home');
        }
    }

    //page that allows the user to set his verification details like ID card, Driving Liscence etc
    public function verificationDetails(){

        if($this->util->verifyLogin() == 1) {
            //get the details from the database if the user has already entered it
            $details = $this->UsersModel->loadVerificationDetails();
            $personal = $this->UsersModel->loadPersonalDetails();

            //display the personalDetails Page
            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Update Verification Details',
                'data' => $details,
                'personal_details' => $personal
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-verification', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }
    }

    //become a zemoser page
    public function becomeZemoser(){

        if($this->util->verifyLogin() == 1) {

            if($this->UsersModel->checkPersonalDetailsCompleted() == 1){
                if($this->UsersModel->checkContactDetailsCompleted() == 1) {
                    if($this->UsersModel->checkContactDetailsVerified() == 1) {

                        $res = $this->UsersModel->loadPersonalDetails();
                        $country = $res->country;

                        $proofsNeeded = $this->UsersModel->loadProofs($country);

                        //get the details from the database if the user has already entered it
                        $details = $this->UsersModel->loadZemoserDetails();

                        $proofData = $this->UsersModel->loadZemoserProofs();

                        //var_dump($proofData);

                        //display the personalDetails Page
                        $headData = array(
                            'url' => $this->urls->getUrl(),
                            'conUrl' => $this->urls->getConUrl(),
                            'active' => 3
                        );

                        $conData = array(
                            'url' => $this->urls->getUrl(),
                            'conUrl' => $this->urls->getConUrl(),
                            'title' => 'Become a Zemoser',
                            'data' => $details,
                            'proofData' => $proofData,
                            'proofs' => $proofsNeeded,
                            'personal_details' => $res
                        );


                        $this->load->view('view-header', $headData);
                        $this->load->view('Users/view-becomezemoser', $conData);
                        $this->load->view('view-footer', $headData);

                    }else{
                        $this->session->set_userdata('error',"You have to verify all your contact details before sending a request for becoming a zemoser");
                        redirect('users/contactDetails');
                    }
                }else{
                    $this->session->set_userdata('error',"You have to fill all your contact details before sending a request for becoming a zemoser");
                    redirect('users/contactDetails');
                }

            }else{
                $this->session->set_userdata('error',"You have to fill all your personal details before sending a request for becoming a zemoser");
                redirect('users/personalDetails');
            }
        }else{
            $this->session->set_userdata('error', 'You need to login to become a zemoser.');
            redirect('/login?go=Users/becomeZemoser');
        }
    }

    public function forgotPwd() {

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        //load personal data
        $data = $this->UsersModel->loadPersonalDetails();

        $headData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'title' => 'Verify',
            'data' => $data
        );


        $this->load->view('view-header', $headData);
        $this->load->view('Users/view-forgotpwd', $conData);
        $this->load->view('view-footer', $headData);
    }

    public function contactDetails(){

        if($this->util->verifyLogin() == 1) {
            //get the details from the database if the user has already entered it
            $personal = $this->UsersModel->loadPersonalDetails();
            $contactVerification = $this->UsersModel->loadContactVerificationDetails();

            //display the personalDetails Page
            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'title' => 'Update Verification Details',
                'data' => $personal,
                'contactVerification' => $contactVerification
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-contactinfo', $conData);
            $this->load->view('view-footer', $headData);
        }else{
            redirect('/home');
        }
    }

    public function forgotPwdMobile() {

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');


        $headData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'title' => 'Verify'
        );


        $this->load->view('view-header', $headData);
        $this->load->view('Users/view-forgotpwdverifyotp', $conData);
        $this->load->view('view-footer', $headData);
    }

    public function verifyOtp(){

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');


        $headData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData = array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'title' => 'Verify'
        );


        $this->load->view('view-header', $headData);
        $this->load->view('Users/view-verifyotp', $conData);
        $this->load->view('view-footer', $headData);
    }

    //logout page
    public function logout(){
        $this->UsersModel->logout();
        redirect('Home/');
    }

    //verifyEmail
    public function verifyEmail($verificationText=NULL){
        $noRecords = $this->UsersModel->verifyEmailAddress($verificationText);
        if ($noRecords > 0){
            $error = "Email Verified Successfully!";
            redirect('users/setPassword');
        }else if($noRecords == -1) {
            redirect('/home');
        }else{
            $error = "Sorry Unable to Verify Your Email!";
            echo $error;
        }

    }

    //verify email secondary
    public function verifyEmailSecondary($verificationText=NULL){
        $ret = $this->UsersModel->verifySecondaryEmailCode($verificationText);
        if ($ret > 0){
            $this->session->set_userdata('success',"Your email is verified!");
            redirect('users/contactDetails');
        }else if($ret == -1) {
            $this->session->set_userdata('error',"Wrong verification code!");
            redirect('users/contactDetails');
        }else if($ret == 0){
            $this->session->set_userdata('error',"Login to continue.");
            redirect('users/loginerror');
        }

    }

    //verify Forgot Password Request
    public function verifyForgotPwdRequest($verificationText=NULL){
        $ret = $this->UsersModel->verifyForgotPwdEmail($verificationText);

        if($ret == 1){
            redirect('users/resetPassword');
        }else if($ret == -1){
            $error = "The request has been timed out!";
            $this->session->set_userdata("error",$error);
            redirect('users/forgotPwd');
        }else{
            $error = "Invalid Request!";
            $this->session->set_userdata("error",$error);
            redirect('users/forgotPwd');
        }

    }

    public function verifyOtpPost(){
        $noRecords = $this->UsersModel->verifyOtp();
        if ($noRecords > 0){
            $error = "Mobile Number Verified Successfully!";

            redirect('users/setPassword');
        }else{
            $error = "Sorry The code that you entered is not correct!";
            $this->session->set_userdata("error",$error);
            redirect('users/verifyOtp');
        }
    }

    public function sendVerificationEmail(){
        // the message
        $res = $this->EmailModel->loadEmailTemplate(1);

        $patterns = array();
        $patterns[0] = '/\{{3}name\}{3}/';
        $patterns[1] = '/\{{3}email\}{3}/';
        $patterns[2] = '/\{{3}link\}{3}/';
        $replacements = array();
        $replacements[2] = 'https://zemose.com/verify/13nRGi7UDv4CkE7JHP1o';
        $replacements[1] = 'athuldilip@gmail.com';
        $replacements[0] = 'Athul';

        ksort($patterns);
        ksort($replacements);
        $msg = preg_replace($patterns, $replacements, $res->body);
        $sub = $res->subject;

        echo $msg;

        // send email
        //$this->EmailModel->sendVerificationEmail("athuldilip777@gmail.com",$sub,$msg);
    }

    public function resendOtp(){

        if(isset($_POST['resendBtn'])) {
            if ($this->UsersModel->resendSms() == 1) {
                $this->session->set_userdata("success", "The otp has been resend successfully");
                redirect('users/verifyOtp');
            } else {
                $this->session->set_userdata("error", "Can't Resend OTP! Try signing up again!");
                //redirect('users/verifyOtp');
            }
        }else{
            $this->session->set_userdata("error", "Can't Resend OTP! Try signing up again!");
            //var_dump($_POST);
            redirect('users/verifyOtp');
        }
    }

    public function resendOtpSecondary(){

        if(isset($_POST['resendBtn'])) {
            if ($this->UsersModel->resendSmsSecondary() == 1) {
                $data['status'] = true;
                $data['msg'] = "The otp has been resend successfully!";
            } else {
                $data['status'] = false;
                $data['msg'] = "Can't Resend OTP! Try signing up again!";
            }
        }else{
            $data['status'] = false;
            $data['msg'] = "Can't Resend OTP! Try signing up again!";
        }

        $this->load->view('rest', array('data' => $data));
    }

    public function httpPost($url,$params) {
        $postData = '';
        //create name value pairs seperated by &
        foreach($params as $k => $v)
        {
            $postData .= $k . '='.$v.'&';
        }
        $postData = rtrim($postData, '&');

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($postData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $output=curl_exec($ch);

        curl_close($ch);
        return $output;

    }

    public function sendSampleEmail(){
        $from = new Email(null, "zemoseonline@gmail.com");
        $subject = "Hello World from the SendGrid PHP Library";
        $to = new Email(null, "test@example.com");
        $content = new Content("text/plain", "some text here");
        $mail = new Mail($from, $subject, $to, $content);
        $to = new Email(null, "athuldilip777@gmail.com");
        $mail->personalization[0]->addTo($to);
        //echo json_encode($mail, JSON_PRETTY_PRINT), "\n";

        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $request_body = $mail;
        $response = $sg->client->mail()->send()->post($request_body);
        echo $response->statusCode();
        echo $response->body();
        echo $response->headers();
    }

    public function sendSampleSms(){

        $auth_id = "MAZDIWMDNLNJE2YJBINJ";
        $auth_token = "YWVlMTMxOGUyMTllM2U0MGI4N2UyNTQ1OGRlNTk3";

        $p = new RestAPI($auth_id, $auth_token);
        // Send a message

        $dest = '0091';

        $params = array(
            'src' => '00919495609598', // Sender's phone number with country code
            'dst' => '00919745240338', // Receiver's phone number with country code
            'text' => '' // Your SMS text message
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

    public function personalDetailsPost(){

        $config = $this->getZipRules();
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->session->set_userdata('error',validation_errors());
            redirect('users/personalDetails');
        }else {
            $this->UsersModel->updatePersonalDetails();
            $this->session->set_userdata('success',"Successfully Updated!");
            redirect('users/personalDetails');
        }
    }

    public function setPasswordPost(){
        $config = $this->getPwdRules();
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->session->set_userdata("error",validation_errors());
            redirect('users/setPassword');
        }else {
            $ret = $this->UsersModel->setPassword();
            if($ret == 1){
                $this->session->set_userdata("success","Password has been set successfully! Now enter your personal details!");
                redirect("users/personalDetails");
            }
        }
    }

    public function resetPasswordPost(){
        $config = $this->getPwdRules();
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->session->set_userdata("error",validation_errors());
            redirect('users/resetPassword');
        }else {
            $ret = $this->UsersModel->resetPassword();
            if($ret == 1){
                $this->session->set_userdata("success","Password has been reset successfully!");
                redirect("users/personalDetails");
            }
        }
    }

    public function addAddressPost(){
        $config = $this->getZipRules();
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->session->set_userdata("error",validation_errors());
            redirect('users/addAddress');
        }else {
            $ret = $this->UsersModel->addAddress();
            if($ret == 1){
                $this->session->set_userdata("success","Address Updated successfully!");
                redirect('users/addAddress');
            }else if($ret == 0){
                $this->session->set_userdata("error","Enter all the details!");
                redirect('users/addAddress');
            }
        }
    }

    public function changePasswordPost(){
        $config = $this->getChangePwdRules();
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->session->set_userdata("error",validation_errors());
            redirect('users/changePassword');
        }else {
            $ret = $this->UsersModel->changePassword();
            if($ret == 1){
                $this->session->set_userdata("success","Password changed successfully!");
                redirect('users/changePassword');
            }else if($ret == 0){
                $this->session->set_userdata("error","The Old Password entered is wrong!");
                redirect('users/changePassword');
            }
        }
    }

    public function becomeZemoserPost(){
        $ret = $this->UsersModel->becomeZemoserDetails();

        if($ret == 0){
            $this->session->set_userdata("error","You have to submit all your details and proofs to become a zemoser!");
            redirect('users/becomeZemoser');
        }else if($ret == 1) {
            $this->session->set_userdata("success","Become a zemoser request has been sent successfully!</br>You will be notified when the admin accepts or rejects your request");
            redirect('users/becomeZemoser');
        }else{
            //In case of other issues with the image neither 0 nor 1 will be returned
            redirect('users/becomeZemoser');
        }
    }

    public function verificationDetailsPost(){

        $ret = $this->UsersModel->updateVerificationDetails();

        if($ret == 1){
            $this->session->set_userdata('success',"Successfully updated!");
            redirect('users/verificationDetails');
        }else if($ret == 0){
            $this->session->set_userdata('error',"Please select a document type!");
            redirect('users/verificationDetails');
        }else if($ret==-1){
            $this->session->set_userdata('error',"Image could not be uploaded");
            redirect('users/verificationDetails');
        }
    }

    public function contactDetailsPost(){
        $ret = $this->UsersModel->updateContactDetails();
        if($ret == 1){
            $this->session->set_userdata('success',"Successfully updated!");
            redirect('users/contactDetails');
        }else if($ret == 0){
            $this->session->set_userdata('error',"Login to continue!");
            redirect('users/loginerror');
        }else if($ret == -1){
            $this->session->set_userdata('error',"An account has already been registered with this email address!");
            redirect('users/contactDetails');
        }else if($ret == -2){
            $this->session->set_userdata('error',"An account has already been registered with this phone number!");
            redirect('users/contactDetails');
        }
    }

    public function verifySecondaryEmailPost() {
        $ret = $this->UsersModel->verifySecondaryEmail();
        if($ret == 1){
            //success
            $data['status'] = true;
            $data['msg'] = "A verification link has been sent to your email!";
        }else if($ret == 0){
            //failure
            $data['status'] = false;
            $data['msg'] = "An unexpected error occurred!";
        }else if($ret == -1){
            //failure
            $data['status'] = false;
            $data['msg'] = "An account has already been registered with this phone number!";
        }

        $this->load->view('rest', array('data' => $data));
    }

    public function verifySecondaryPhonePost() {
        $ret = $this->UsersModel->verifySecondaryPhone();
        log_message("DEBUG","function called");
        log_message("DEBUG",$ret);

        if($ret == 1){
            //success
            $data['status'] = true;
            $data['msg'] = "An OTP code has been sent to your mobile!";
        }else if($ret == 0){
            //failure
            $data['status'] = false;
            $data['msg'] = "An unexpected error occurred!";
        }else if($ret == -1){
            //failure
            $data['status'] = false;
            $data['msg'] = "An account has already been registered with this phone number!";
        }

        $this->load->view('rest', array('data' => $data));
    }

    public function verifySecondaryPhoneOtpPost(){
        $ret = $this->UsersModel->verifyOtpSecondary();

        if($ret == 1){
            //failure
            $data['status'] = true;
            $data['msg'] = "Your phone number is now verified!";
        }else if($ret == 0){
            //failure
            $data['status'] = false;
            $data['msg'] = "The otp code you have entered is incorrect!";
        }else if($ret == -1){
            //failure
            $data['status'] = false;
            $data['msg'] = "Your session has expired. Try resending the otp!";
        }

        $this->load->view('rest', array('data' => $data));
    }

    public function forgotPwdPost(){
        $ret = $this->UsersModel->forgotPwd();

        if($ret == 1){
            $this->session->set_userdata('success',"An email with a verification link has been sent to you.");
            redirect('users/forgotPwd');
        }else if($ret == 2){
            redirect('users/forgotPwdMobile');
        }else{
            $this->session->set_userdata('error',"Your account does not exist");
            redirect('users/forgotPwd');
        }
    }

    public function forgotPwdMobilePost(){
        $ret = $this->UsersModel->verifyForgotPwdMoblie();

        if($ret == 1){
            redirect('users/resetPassword');
        }else if($ret == 0){
            $this->session->set_userdata('error',"Sorry the code you have entered is not correct!");
            //redirect('users/forgotPwdMobile');
        }
    }

    function getZipRules(){
        $config = array(
            array(
                'field' => 'zip',
                'label' => 'Pin Number',
                'rules' => 'min_length[6]|max_length[6]|callback_check_pin',
                'errors' => array(
                    'min_length[6]' => 'Pin number must be 6 digits.',
                    'max_length[6]' => 'Pin number must be 6 digits.'
                ),
            ),
            array(
                'field' => 'phone',
                'label' => 'Phone Number',
                'rules' => 'min_length[10]|max_length[10]|callback_check_phone',
                'errors' => array(
                    'min_length[10]' => 'Phone number must be 10 digits.',
                    'max_length[10]' => 'Phone number must be 10 digits.'
                ),
            )


        );

        return $config;
    }

    function getPhoneRules(){
        $config = array(
            array(
                'field' => 'signupPhone',
                'label' => 'Phone Number',
                'rules' => 'min_length[10]|max_length[10]|callback_check_phone',
                'errors' => array(
                    'min_length[10]' => 'Phone number must be 10 digits.',
                    'max_length[10]' => 'Phone number must be 10 digits.'
                ),
            )


        );

        return $config;
    }

    function getEmailRules(){
        $config = array(

            array(
                'field' => 'signupEmail',
                'label' => 'Email',
                'rules' => 'valid_email|is_unique[users.email]',
                'errors' => array(
                    'is_unique[users.email]' => 'There is already an account registered with this email.'
                ),
            )
        );

        return $config;
    }

    function getPwdRules(){
        $config = array(
            array(
                'field' => 'oldpwd',
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => array(
                    'min_length[6]' => 'Password must be 6 characters long.'
                ),
            ),
            array(
                'field' => 'oldpwd2',
                'label' => 'Confirm Password',
                'rules' => 'required|matches[oldpwd]',
                'errors' => array(
                    'matches[oldpwd]' => 'The password doesnt match.'
                ),
            ),
        );

        return $config;
    }

    function getChangePwdRules(){
        $config = array(
            array(
                'field' => 'oldpwd',
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => array(
                    'min_length[6]' => 'Password must be 6 characters long.'
                ),
            ),
            array(
                'field' => 'newpwd',
                'label' => 'New Password',
                'rules' => 'required|min_length[6]',
                'errors' => array(
                    'min_length[6]' => 'Password must be 6 characters long.'
                ),
            ),
            array(
                'field' => 'newpwd2',
                'label' => 'Confirm New Password',
                'rules' => 'required|matches[newpwd]',
                'errors' => array(
                    'matches[newpwd]' => 'The password doesnt match.'
                ),
            ),
        );

        return $config;
    }

    function check_phone ($str){
        if (preg_match('/^[0-9,]+$/', $str) == 1 || $str == NULL || $str == ''){
            return TRUE;
        }
        $this->form_validation->set_message('check_phone', 'Phone number must be valid');
        return FALSE;
    }

    function check_pin ($str){
        if (preg_match('/^[0-9,]+$/', $str) == 1 || $str == NULL || $str == ''){
            return TRUE;
        }
        $this->form_validation->set_message('check_pin', 'Pin must be valid');
        return FALSE;
    }

}