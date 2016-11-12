<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/10/16
 * Time: 11:34 AM
 */
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load required Libs
    }

    public function login() {
        $this->load->view('Mobile/login-mobile');
    }

    public function fb() {
        $this->load->view('Mobile/fb-login');
    }

}