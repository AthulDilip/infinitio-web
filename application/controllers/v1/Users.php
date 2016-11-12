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
 */
class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Exceptions');
        $this->load->model('REST/RESTModel');
        $this->load->model('REST/APIAuth');
    }

    public function fblogin() {
        $token = $this->input->post('token');
        $data = $this->UserModel->fbLogin($token);
    }

}