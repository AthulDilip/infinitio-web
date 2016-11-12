<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 12/11/16
 * Time: 10:39 AM
 */

/**
 * Class Users
 * @property UserModel $UserModel
 * @property Exceptions $exceptions
 */
class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Exceptions');
        $this->load->model('REST/UserModel');
    }

    public function fblogin() {
        try {
            $token = $this->input->post('token');
            $data = $this->UserModel->fbLogin($token);

            $this->load->view('rest', array(
                'data' => $data
            ));
        }
        catch (Exception $e) {
            $this->exceptions->handleMobileErrors($e);
        }
    }

}