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
class Interest extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Exceptions');
        $this->load->model('InterestModel');
        $this->load->database();
    }

    public function postInterest() {
        $userId = $this->input->post('userId');
        $sports = $this->input->post('sports');
        $business = $this->input->post('business');
        $politics = $this->input->post('politics');
        $tech = $this->input->post('tech');
        $entertainment = $this->input->post('entertainment');


        $this->InterestModel->postScore($userId,$sports,$business,$politics,$tech,$entertainment);

        $data = (object)array(
            'InfinitioStatus' => (object) array(
                'StatusCode' => '1C100',
                'Status' => 'Successfully updated score'
            ),
            'data' => true
        );

        $this->load->view('rest', array(
            'data' => $data
        ));
    }

    public function getInterest() {
        $userId = $this->input->post('userId');

        $data = $this->InterestModel->getScore($userId);

        $this->load->view('rest', array(
            'data' => $data
        ));
    }

}