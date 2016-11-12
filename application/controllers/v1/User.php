<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/10/16
 * Time: 3:26 PM
 */
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
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property UserRest $UserRest
 */


class User extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/UserRest');
        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');
        $this->load->library('upload');
    }

    public function login() {
        try {
            if (!$this->RESTModel->authorizeRequest()) show_404('Permission Denied.', 'false');
            //get the login type
            $l_type = $this->input->post('type');

            $rdata = (object)array(
                'ZemoseStatus' => (object)array(
                    'StatusCode' => '',
                    'Status' => ''
                ),
                'data' => null
            );

            if ($l_type == null) {
                $rdata->ZemoseStatus->StatusCode = '1L400';
                $rdata->ZemoseStatus->Status = 'No login method specified.';

                $this->load->view('rest', array('data' => $rdata));
                return;
            }

            switch ($l_type) {
                case 'google' :
                    $id_token = $this->input->post('id_token');
                    $data = $this->UserRest->googleLogin($id_token);
                    break;

                case 'facebook' :
                    $id_token = $this->input->post('id_token');
                    $data = $this->UserRest->fbLogin($id_token);
                    break;

                case 'email' :
                    $mail = $this->input->post('email');
                    $pass = $this->input->post('password');
                    $data = $this->UserRest->mailLogin($mail, $pass);
                    break;

                case 'phone' :
                    $phone = $this->input->post('phone');
                    $pass = $this->input->post('password');
                    $data = $this->UserRest->phoneLogin($phone, $pass);
                    break;

                default :
                    $rdata->status->Status = 'Invalid login option.';
                    $rdata->status->StatusCode = '1L400';
                    $ret = json_encode($rdata);
                    $this->load->view('rest', array('data' => $ret));
                    return;
            }

            $this->load->view('rest', array('data' => $data));
        }
        catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function NewManual() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');

                $data = $this->UserRest->signupManual($email, $phone);
                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');
        }
        catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function checkOtp(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $otp = $this->input->post('otp');
                $userId = $this->input->post('userId');

                $data = $this->UserRest->checkOtp($userId,$otp);
                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1C201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function sendOtp(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $data = $this->UserRest->sendOtp($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1B201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function sendEmail(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $data = $this->UserRest->sendEmail($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1D201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function newFb(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $id_token = $this->input->post('id_token');
                $data = $this->UserRest->fbSignup($id_token);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1E201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function newGoogle(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $id_token = $this->input->post('id_token');
                log_message("DEBUG",$id_token);
                $data = $this->UserRest->googleSignup($id_token);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1F201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function changePassword(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $oldPassword = $this->input->post('oldPassword');
                $newPassword = $this->input->post('newPassword');

                $data = $this->UserRest->changePassword($userId,$oldPassword,$newPassword);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1H201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getProfile(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->getProfile($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1M201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function updatePersonalDetails(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->updatePersonalDetails($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1G201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function checkMail(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->checkMail($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1N201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function checkVerified(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->checkVerified($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1K201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function loadProofs(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->loadProofs($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1P201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function setPassword(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $pwd = $this->input->post('password');
                $data = $this->UserRest->setPassword($userId,$pwd);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('1Q201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function updateProfilePic(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->UserRest->updateProfilePic($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function addAddress(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $name = $this->input->post('name');
                $address = $this->input->post('address');
                $city = $this->input->post('city');
                $lat = $this->input->post('lat');
                $lon = $this->input->post('lon');
                $phone = $this->input->post('phone');
                $pin = $this->input->post('pin');

                $data = $this->UserRest->addAddress($userId,$name,$address,$city,$lat,$lon,$phone,$pin);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function deleteAddress(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $addressId = $this->input->post('addressId');
                $data = $this->UserRest->deleteAddress($userId,$addressId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function updateContactDetails(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $data = $this->UserRest->updateContactDetails($userId,$email,$phone);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function updateVerificationDetails(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $proofName = $this->input->post('proofName');
                $data = $this->UserRest->updateVerificationDetails($userId,$proofName);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function verifySecondaryPhone(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $phone = $this->input->post('phone');
                $data = $this->UserRest->verifySecondaryPhone($userId,$phone);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function verifyOtpSecondary(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $otp = $this->input->post('otp');
                $data = $this->UserRest->verifyOtpSecondary($userId,$otp);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function resendOtpSecondary(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $data = $this->UserRest->resendOtpSecondary($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function verifySecondaryEmail(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $email = $this->input->post('email');
                $data = $this->UserRest->verifySecondaryEmail($userId,$email);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }
}