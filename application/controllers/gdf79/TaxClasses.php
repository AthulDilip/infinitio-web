<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 14/8/16
 * Time: 3:02 PM
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
 * @property TaxModel $TaxModel
 * @property UsersModel $UsersModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property TaxClassModel $TaxClassModel
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */
class TaxClasses extends CI_Controller {
    private $access;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('Valid');
        $this->load->library('session');
        $this->load->database();

        $this->load->model('TaxClassModel');
        $this->load->model('TaxModel');

        $this->access = "TAX";
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Tax Classes - All'
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
            $this->load->view('Admin/TaxClasses/list-all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    public function add() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Add new tax'
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
            $this->load->view('Admin/TaxClasses/add', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    public function edit() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Edit Tax Class'
            );

            $id = $this->uri->segment(4, null);
            $tax = $this->TaxClassModel->getTaxClass($id);
            if($tax == null) {
                //return invalid id
                $this->session->set_userdata('err', 'Cannot find the Tax Class.');
                redirect('gdf79/Taxes');
                return;
            }

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'tax' => $tax
            );

            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/TaxClasses/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }


    public function select() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Select Tax Class'
            );

            $tax = $this->TaxClassModel->getAllTaxClass();
            $def = $this->TaxClassModel->getDefault();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'tax' => $tax,
                'def' => ($def == null) ? 0 : $def->tax_class_id
            );

            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/TaxClasses/select', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    //SCRIPTS
    public function delete() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $id = $this->uri->segment(4, null);
            $this->TaxClassModel->deleteTaxClass($id);

            redirect('gdf79/TaxClasses/');
        }
        else {
            redirect('gdf79/');
        }
    }

    //REST
    public function restAll() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $limit = $this->input->get('limit');
            $offset = $this->input->get('offset');
            $search = $this->input->get('search');

            $data = $this->TaxClassModel->getAll($limit, $offset, $search);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function save() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $class_name = $this->input->post('class_name');
            $tax_id = $this->input->post('tax-id');

            if($class_name == null || !$this->valid->isValidString($class_name)) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Class Name.')));
                return;
            }

            $data = $this->TaxClassModel->save($class_name, $tax_id);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function update() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $class_name = $this->input->post('class_name');
            $tax_id = $this->input->post('tax-id');

            if($class_name == null || !$this->valid->isValidString($class_name)) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Class Name.')));
                return;
            }

            $id = $this->uri->segment(4, null);
            if($id == null) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Request.')));
                return;
            }

            $data = $this->TaxClassModel->save($class_name, $tax_id, $id);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function showList() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $search = $this->input->get('search');

            $data = $this->TaxModel->getAllTaxes($search);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }


    public function choose() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $tax_class_id = $this->input->post('tax_class_id');

            if($tax_class_id == null) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Select a Tax Class Name.')));
                return;
            }

            $data = $this->TaxClassModel->set($tax_class_id);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }
}