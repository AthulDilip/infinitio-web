<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 13/8/16
 * Time: 11:52 AM
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
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */
class Taxes extends CI_Controller {
    private $access;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('Valid');
        $this->load->library('session');
        $this->load->database();

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
                'title' => 'Taxes applicable - All'
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
            $this->load->view('Admin/Taxes/list-all', $content);
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
            $this->load->view('Admin/Taxes/add-new', $content);
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
                'title' => 'Edit tax'
            );

            $id = $this->uri->segment(4, null);
            $tax = $this->TaxModel->getTax($id);
            if($tax == null) {
                //return invalid id
                $this->session->set_userdata('msg', 'Cannot find the Tax.');
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
            $this->load->view('Admin/Taxes/edit', $content);
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
            $this->TaxModel->deleteTax($id);

            redirect('gdf79/Taxes/');
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

            $data = $this->TaxModel->getAll($limit, $offset, $search);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function save() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $tax_name = $this->input->post('tax_name');
            $tax_rate = $this->input->post('tax_rate');

            if($tax_name == null || !$this->valid->isValidString($tax_name)) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Name.')));
                return;
            }
            if($tax_rate == null || !$this->valid->isFloat($tax_rate) || (float)$tax_rate > 100.0) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Rate  (0-100).')));
                return;
            }

            $data = $this->TaxModel->save($tax_rate, $tax_name);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function update() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess($this->access) ) {
            $tax_name = $this->input->post('tax_name');
            $tax_rate = $this->input->post('tax_rate');

            if($tax_name == null || !$this->valid->isValidString($tax_name)) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Name.')));
                return;
            }
            if($tax_rate == null || !$this->valid->isFloat($tax_rate)  || (float)$tax_rate > 100.0) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Tax Rate (0-100).')));
                return;
            }

            $id = $this->uri->segment(4, null);
            if($id == null) {
                $this->load->view('rest', array('data' => array('status' => false, 'message' => 'Invalid Request.')));
                return;
            }

            $data = $this->TaxModel->save($tax_rate, $tax_name, $id);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }
}