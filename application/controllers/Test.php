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
 * @property InterestModel $InterestModel
 */
class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('Exceptions');
        $this->load->model('InterestModel');
        $this->load->database();
    }

    public function index(){
        $this->InterestModel->postScore(1,4,3,1,4,3);
    }

}