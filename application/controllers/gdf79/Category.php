<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 20/6/16
 * Time: 4:50 PM
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
 */

class Category extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');
        $this->load->helper('url');

        $this->load->database();
        $this->load->model('CategoryModel');
        $this->load->model('LanguageModel');
        $this->load->model('FilterModel');
        $this->load->model('AttributeModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('CAT') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'All Categories'
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
            $this->load->view('Admin/Category/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function add() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('CAT') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Add new Category'
            );

            $languages = $this->LanguageModel->getAll();
            $categories = $this->CategoryModel->getArray();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages,
                'cat' => $categories
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Category/add', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function edit() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('CAT') ) {
            $id = $this->uri->segment(4, NULL);

            if( !is_numeric($id) ) {
                $this->session->set_userdata('err', "Invalid category, edit failed.");
                redirect('gdf79/Category/all');
            }

            $cat = $this->CategoryModel->getCategory($id);

            if($cat == NULL) {
                $this->session->set_userdata('err', "Invalid category, edit failed.");
                redirect('gdf79/Category/all');
            }

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Edit Category - ' . $cat['data'][1]['name']
            );

            $languages = $this->LanguageModel->getAll();
            $categories = $this->CategoryModel->getArray();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages,
                'cat' => $categories,
                'data' => $cat,
                'fil' => $this->FilterModel->getFilters($id),
                'atr' => $this->AttributeModel->getAttributes($id)
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Category/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //SCRIPTS
    public function addscript() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('CAT')) {
            $this->CategoryModel->addNew();
        }
        else {
            redirect('gdf79/Admin/');
        }
    }

    public function delete() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('CAT')) {
            $this->CategoryModel->delete();
        }
        else {
            redirect('gdf79/Admin/');
        }
    }

    public function editScr() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('CAT')) {
            $this->CategoryModel->edit();
        }
        else {
            redirect('gdf79/Admin/');
        }
    }


    //REST
    public function restAll() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('CAT')) {
            $data = $this->CategoryModel->listAll();

            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('gdf79/Admin/');
        }
    }
    
}