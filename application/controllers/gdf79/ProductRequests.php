<?php

/**
 * Created by PhpStorm.
 * User: Athul
 * Date: 20/6/16
 * Time: 4:50 PM
 */
class ProductRequests extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

        //load all the models
        $this->load->model('InventoryModel');

    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 2,
                'title' => 'Product Requests'
            );
            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/ProductRequests/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function moreDetails(){

        if( $this->util->isLoggedIn() && $this->util->haveAccess('VER')) {
            $id = $this->uri->segment(4, NULL);

            $data = $this->InventoryModel->loadProductRequestSingle($id);

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 2,
                'title' => 'Product Requests'
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
            $this->load->view('Admin/ProductRequests/moreDetails', $content);
            $this->load->view('Admin/footer', $footer);

        }else {
            redirect('gdf79/Admin/');
        }

    }

    public function restAll() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('PRO')) {
            $data = $this->InventoryModel->listAllProductRequests();
            $this->load->view('rest', array('data' => $data));
        }else {
            redirect('gdf79/Admin/');
        }
    }

}