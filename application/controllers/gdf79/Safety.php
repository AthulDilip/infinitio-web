<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 11/11/16
 * Time: 4:31 AM
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
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property CouponModel $CouponModel
 */
class Safety extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('util');
        $this->load->library('urls');

        if(!$this->util->isLoggedIn() || !$this->util->haveAccess('SAF')) {
            redirect('gdf79/Admin');
        }

        $this->load->database();
        $this->load->model('CategoryModel');
        $this->load->model('LanguageModel');
        $this->load->model('SafetyModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        //load all the safety measures

        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'Safety Tips'
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
        $this->load->view('Admin/Safety/all', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function add() {
        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'Safety Tips - Add new'
        );
        $content = array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'lan' => $this->LanguageModel->getAll()
        );

        $footer = array(
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon()
        );

        $this->load->view('Admin/header', $head);
        $this->load->view('Admin/Safety/add', $content);
        $this->load->view('Admin/footer', $footer);
    }
}