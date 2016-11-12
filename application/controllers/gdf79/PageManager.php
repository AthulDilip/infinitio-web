<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 2/11/16
 * Time: 5:56 PM
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
 * @property PageModel $PageModel
 */

class PageManager extends CI_Controller{

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('util');
        $this->load->library('urls');

        /*if(!$this->util->isLoggedIn() || !$this->util->haveAccess('PAGE')) {
            redirect('gdf79/Admin');
        }*/

        $this->load->database();
        $this->load->model('PageModel');
        $this->load->model('LanguageModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'All Pages'
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
        $this->load->view('Admin/Pages/all', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function rest() {
        //load rest
        $search = $this->input->get('search');
        $offset = $this->input->get('offset');
        $limit = $this->input->get('limit');

        $pages = $this->PageModel->getPages($search, $offset, $limit);
        $this->load->view('rest', array('data' => $pages));
    }

    public function add() {
        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'All Pages'
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
        $this->load->view('Admin/Pages/add', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function save() {
        $data = $this->PageModel->save();
        $this->load->view('rest',array('data' => $data));
    }

    public function edit() {
        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'All Pages'
        );

        $page_id = $this->uri->segment(4, null);
        if($page_id == null) {
            $this->session->set_userdata('err', 'Cannot find the page you requested.');
            redirect('gdf79/PageManager');
        }
        $page = $this->PageModel->getPage($page_id);
        if($page == null) {
            $this->session->set_userdata('err', 'Cannot find the page you requested.');
            redirect('gdf79/PageManager');
        }

        $content = array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'lan' => $this->LanguageModel->getAll(),
            'page' => $page
        );

        $footer = array(
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon()
        );

        $this->load->view('Admin/header', $head);
        $this->load->view('Admin/Pages/edit', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function update() {
        $data = $this->PageModel->update();
        $this->load->view('rest',array('data' => $data));
    }

    public function remove($page_id) {
        if($page_id == null) {
            $this->session->set_userdata('err', 'Cannot find the page you requested.');
            redirect('gdf79/PageManager');
        }

        $this->PageModel->remove($page_id);
        redirect('gdf79/PageManager/');
    }
}