<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 30/7/16
 * Time: 4:20 PM
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

class Inventory extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Urls');
        $this->load->database();
        $this->load->library('session');
        $this->load->library('Util');

        $this->load->model('CategoryModel');
        $this->load->model('InventoryModel');
        $this->load->model('ProductModel');
        $this->load->model('FilterModel');

        $this->util->checkZemoserAccess();
    }

    public function index() {
        $this->all();
    }

    public function all() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            //load the select product
            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );
            

            $con = array(
                'url' => $this->urls->getUrl() . 'Zemoser/Inventory/',
                'invs' => $this->InventoryModel->getInventory(0, 10, null, $uid)
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/Inventory/list-all', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/');
        }
    }

    public function selectProduct() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            //load the select product
            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $con = array(
                'cat' => $this->CategoryModel->getChildren(),
                'products' => $this->ProductModel->getPopularProducts(),
                'url' => $this->urls->getUrl() . 'Zemoser/Inventory/'
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/Inventory/select-product', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/');
        }
    }

    public function AddToInventory() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            //load the select product
            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $pid = $this->uri->segment(4, null);
            if($pid == null) {
                redirect('/Zemoser/Inventory/selectProduct');
            }

            $con = array(
                'url' => $this->urls->getUrl() . 'Zemoser/Inventory/',
                'product' => $this->ProductModel->getProduct($pid)
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/Inventory/add-inventory', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/');
        }
    }

    public function edit() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            //load the select product
            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $InvId = $this->uri->segment(4, null);

            $inv_id = $this->uri->segment(4,null);
            if(!$this->isAuthorizedZemoser($InvId)) {
                $this->session->set_userdata('error', 'You are not authorized to view this data.');
                redirect('Zemoser/Inventory');
            }

            $inv = $this->InventoryModel->getSingle($InvId);
            if($inv == null) {
                $this->session->set_userdata('err', 'Inventory not found.');
                redirect('/Zemoser/Inventory/');
            }
            $pid = $inv->product_id;

            $con = array(
                'url' => $this->urls->getUrl() . 'Zemoser/Inventory/',
                'product' => $this->ProductModel->getProduct($pid),
                'inv' => $inv
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/Inventory/edit-inventory', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/');
        }
    }

    //request product
    public function requestProduct() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            //load the select product
            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $con = array(
                'url' => $this->urls->getUrl() . 'Zemoser/Inventory/',
                'conUrl' => $this->urls->getConUrl()
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/Inventory/product-request', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/');
        }
    }

    public function requestProductPost(){
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $this->InventoryModel->requestProduct();
            $this->session->set_userdata("success","The request was sent successfully");
            redirect('/zemoser/inventory/requestProduct');
        }else {
            redirect('/');
        }
    }

    //REST
    public function save() {
        log_message('DEBUG', json_encode($_POST));
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() == 1) {
            $data = $this->InventoryModel->save();

            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('/');
        }
    }

    public function update() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $invId = $this->uri->segment(4, null);
            $data = $this->InventoryModel->update($invId);

            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('/');
        }
    }

    public function getCats() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $cid = $this->uri->segment(4, null);
            $data = $this->CategoryModel->getChildren( $cid );
            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('/');
        }
    }

    public function getProducts() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $cid = $this->uri->segment(4, null);
            $limit = $this->input->get('limit');
            $offset = $this->input->get('offset');
            $search = $this->input->get('search');

            $data = $this->ProductModel->getProductByCategory( $cid, $limit, $offset, $search );
            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('/');
        }
    }

    public function getInv() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $limit = $this->input->get('limit');
            $offset = $this->input->get('offset');
            $search = $this->input->get('search');

            if($limit == null || $offset == null) {
                $this->load->view('rest', array('data' => array(
                    'total' => 0,
                    'rows' => array()
                )));

                return;
            }
            
            $data = $this->InventoryModel->getInventory((int)$offset, (int)$limit, $search, $uid);
            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('/');
        }
    }

    public function delete(  ) {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            $inv_id = $this->uri->segment(4,null);
            if($this->isAuthorizedZemoser($inv_id)) {
                $this->InventoryModel->delete($inv_id);
            }
            else{
                $this->session->set_userdata('error', 'You are not authorized to view this data.');
                redirect('Zemoser/Inventory');
            }
        }
        else {
            redirect('/');
        }
    }

    public function isAuthorizedZemoser($inv_id) {
        $inv = $this->InventoryModel->getSingle($inv_id);
        if($inv === null) redirect('Zemoser/Inventory');

        $uid = $this->session->userdata('user_id');

        if($inv->user_id === $uid) {
            return true;
        }
        else return false;
    }
}