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

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');

        $this->load->model('AdminModel');
    }

    public function index() {
        $this->login();
    }

    public function login() {
        if($this->util->isLoggedIn()) {
            redirect('gdf79/Admin/dashboard');
        }

        $conData =  array(
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon()
        );

        if($this->session->has_userdata('err')) {
            $conData['err'] = $this->session->userdata('err');
            $this->session->unset_userdata('err');
        }

        $this->load->view('Admin/login', $conData);
    }

    public function dashboard() {
        if( $this->util->isLoggedIn() ) {

            $head =  array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'active' => 0,
                'title' => 'DashBoard'
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
            $this->load->view('Admin/dashboard', $content);
            $this->load->view('Admin/footer', $footer);
        }
    }

    //scripts

    public function lg() {
        $this->AdminModel->login();
    }

    public function logout() {
        $this->AdminModel->logout();
    }

}