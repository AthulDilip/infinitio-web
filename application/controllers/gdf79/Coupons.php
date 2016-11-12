<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/11/16
 * Time: 9:45 PM
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

class Coupons extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('util');
        $this->load->library('urls');

        if(!$this->util->isLoggedIn() || !$this->util->haveAccess('COU')) {
            redirect('gdf79/Admin');
        }

        $this->load->database();
        $this->load->model('CouponModel');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }

    public function index() {
        //redirect to all
        $this->all();
    }

    public function all() {
        //load all the coupons

        $head = array(
            'url' => $this->urls->getAdminUrl(),
            'conUrl' => $this->urls->getAdminCon(),
            'user' => $this->session->userdata('username'),
            'active' => 1,
            'title' => 'All Coupons'
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
        $this->load->view('Admin/Coupons/all', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function deactivate() {
        $id = $this->uri->segment(4, null);
        $ret = $this->CouponModel->deact($id);

        if($ret == true) {
            $this->session->set_userdata('msg', 'Coupon successfully edited.');
            redirect('gdf79/Coupons/');
        }
        else {
            $this->session->set_userdata('msg', 'Unable to change coupon data.');
            redirect('gdf79/Coupons/');
        }
    }

    public function rest() {
        //load rest
        $search = $this->input->get('search');
        $offset = $this->input->get('offset');
        $limit = $this->input->get('limit');

        $coupons = $this->CouponModel->getCoupons($search, $offset, $limit);
        $this->load->view('rest', array('data' => $coupons));
    }

    public function add() {
        $head =  array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'active' => 1,
            'title' => 'Coupons | Add new'
        );
        $categories = $this->CategoryModel->getArray();
        $products = $this->ProductModel->getProductArray();

        $content = array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'cats' => $categories,
            'products' => $products
        );
        $footer = array(
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon()
        );

        $this->load->view('Admin/header', $head);
        $this->load->view('Admin/Coupons/add', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function getCoupon() {
        $coupon = $this->CouponModel->generateCoupon();
        $data = array(
            'status' => true,
            'coupon' => $coupon
        );
        
        $this->load->view('rest', array('data' => $data));
    }

    public function save() {
        $data = $this->CouponModel->save();
        $this->load->view('rest', array('data' => $data));
    }

    public function edit() {
        $coupon_id = $this->uri->segment(4, null);

        if($coupon_id == null){
            $this->session->set_userdata('err', 'The coupon does not exist.');
            redirect('gdf79/Coupons');
        }
        $head =  array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'active' => 1,
            'title' => 'Coupons | Add new'
        );
        $categories = $this->CategoryModel->getArray();
        $products = $this->ProductModel->getProductArray();

        $coupon = $this->CouponModel->getCoupon($coupon_id);
        if($coupon == null) {
            $this->session->set_userdata('err', 'The coupon does not exist.');
            redirect('gdf79/Coupons');
        }
        $content = array(
            'user' => $this->session->userdata('username'),
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon(),
            'cats' => $categories,
            'products' => $products,
            'coupon' => $coupon
        );
        $footer = array(
            'url' => $this->urls->getUrl() . 'gdf79/',
            'conUrl' => $this->urls->getAdminCon()
        );

        $this->load->view('Admin/header', $head);
        $this->load->view('Admin/Coupons/edit', $content);
        $this->load->view('Admin/footer', $footer);
    }

    public function update() {
        $data = $this->CouponModel->update();
        $this->load->view('rest', array('data' => $data));
    }

    public function remove($coupon_id) {
        if($coupon_id == null) {
            $this->session->set_userdata('err', 'The coupon you requested doesn\'t exist');
            redirect('gdf79/Coupons');
        }
        $data = $this->CouponModel->remove($coupon_id);
        $this->session->set_userdata('msg', 'Deleted successfully.');
        redirect('gdf79/Coupons');
    }
}