<?php

/**
 * Created by PhpStorm.
 * User: Athul
 * Date: 20/6/16
 * Time: 4:50 PM
 */
class VerificationRequests extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

        //load all the models
        $this->load->model('VerificationRequestsModel');

    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {

            $msg = $this->uri->segment(4, NULL);
            $accept = NULL;
            $reject = NULL;

            if($msg == "accept"){
                $accept =  "The request has been accepted!";
            }else if($msg == "reject"){
                $reject =  "The request has been rejected!";
            }

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 2,
                'title' => 'Verification Requests'
            );
            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'accept' => $accept,
                'reject' => $reject
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/VerificationRequests/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function moreDetails(){

        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {
            $id = $this->uri->segment(4, NULL);

            $data = $this->VerificationRequestsModel->loadUserData($id);

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 2,
                'title' => 'Verification Requests'
            );
            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'basicUrl' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'data' => $data
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/VerificationRequests/moreDetails', $content);
            $this->load->view('Admin/footer', $footer);

        }else {
            redirect('gdf79/Admin/');
        }

    }

    public function accept(){

        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {
            $id = $this->uri->segment(4, NULL);

            $this->VerificationRequestsModel->acceptUser($id);

            redirect('gdf79/VerificationRequests/all/accept');

        }else {
            redirect('gdf79/Admin/');
        }
    }

    public function reject(){
        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {
            $id = $this->uri->segment(4, NULL);

            $this->VerificationRequestsModel->rejectUser($id);

            redirect('gdf79/VerificationRequests/all/reject');

        }else {
            redirect('gdf79/Admin/');
        }
    }

    public function restAll() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('VER')) {
            $data = $this->VerificationRequestsModel->listAll();
            $this->load->view('rest', array('data' => $data));
        }else {
            redirect('gdf79/Admin/');
        }
    }

}