<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 25/6/16
 * Time: 1:05 PM
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

class Filters extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

        $this->load->database();
        $this->load->model('LanguageModel');
        $this->load->model('FilterModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'All Filters'
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
            $this->load->view('Admin/Filters/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function add() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Add new Filter'
            );

            $languages = $this->LanguageModel->getAll();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Filters/add', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function edit() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Edit Filter'
            );

            $id = (int) $this->uri->segment(4, NULL);

            $languages = $this->LanguageModel->getAll();
            $filters = $this->FilterModel->getGroup($id);

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages,
                'fdata' => $filters
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Filters/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //scripts

    public function addscript() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $this->FilterModel->addNew();
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function editScript() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $this->FilterModel->edit();
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function delete() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $this->FilterModel->delete();
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //Rest
    public function getAll() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $limit = (int) $this->input->get('limit');
            $off = (int) $this->input->get('offset');

            $data = $this->FilterModel->getAllGroups($limit, $off);
            $list = array();

            $url = $this->urls->getAdminUrl();
            foreach ($data as $key => $value) {
                $list[$key] = array(
                    'id' => $value -> filter_group_id,
                    'name' => $value -> name,
                    'actions' => '<a href="'.$url.'Filters/delete/'.$value->filter_group_id.'" class=" btn btn-danger">Delete</a>&nbsp;<a href="'.$url.'Filters/edit/'.$value->filter_group_id.'" class=" btn btn-primary">Edit</svg></a>'
                );
            }

            $total = $this->FilterModel->getAllCount();
            $json = array(
                'total' => $total,
                'rows' => $list
            );
            
            $this->load->view('rest', array('data' => $json));
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function getForCat() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $data = $this->FilterModel->restAllGroups();
            $json = $data;
            $this->load->view('rest', array('data' => $json));
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function getForProduct() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('FIL') ) {
            $cat = $this->input->get('cat');
            if($cat != null) $cat = (int)$cat;
            $data = $this->FilterModel->restAllFilters($cat);
            $json = $data;
            $this->load->view('rest', array('data' => $json));
        }
        else {
            redirect('gdf79/Admin');
        }
    }

}