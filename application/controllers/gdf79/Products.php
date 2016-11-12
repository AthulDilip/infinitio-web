<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 15/7/16
 * Time: 10:43 PM
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

class Products extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');
        $this->load->database();

        $this->load->model('ProductModel');
        $this->load->model('CategoryModel');
        $this->load->model('LanguageModel');
        $this->load->model('FilterModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'All products'
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
            $this->load->view('Admin/Product/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    public function category() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Select a product Category'
            );

            $categories = $this->CategoryModel->getArray();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'cat' => $categories
            );

            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Product/category', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    public function add() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Product Adding'
            );

            $cat = $this->input->get('category');
            if($cat == null) redirect('gdf79/Products/category');

            $attributes = $this->ProductModel->getAttributes($cat);

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'category' => $cat,
                'attributeGroups' => $attributes,
                'languages' => $this->LanguageModel->getAll()
            );

            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Product/add', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }

    public function edit() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Edit Product'
            );

            $pid = $this->uri->segment(4, null);
            if($pid == null) redirect('gdf79/Products/category');

            $product = $this->ProductModel->getProduct($pid);
            if($product == null) {
                $this->session->set_userdata('err', 'Invalid user data!');
                redirect('gdf79/Products');
            }

            $attributes = $this->ProductModel->getAttributes($product['cid']);

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'attributeGroups' => $attributes,
                'category' => $product['cid'],
                'product' => $product,
                'languages' => $this->LanguageModel->getAll()
            );

            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Product/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/');
        }
    }


    //Scripts
    public function save() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $data = $this->ProductModel->save();
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function delete() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $pid = $this->uri->segment(4, null);
            $this->ProductModel->delete($pid);
            redirect('gdf79/Products/');
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function update() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $data = $this->ProductModel->update();
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    //REST
    public function uploadImage() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $data = $this->ProductModel->uploadImage();
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function deleteImage() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $id = $this->input->post('id');
            $data = $this->ProductModel->deleteImage($id);
            
            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function restAll() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('PRO') ) {
            $data = $this->ProductModel->listProducts();

            $this->load->view('rest', array('data' => $data));
        }
        else {
            $this->load->view('rest', array('data' => array('status' => false, 'message' => 'failed to authenticate')));
        }
    }

    public function test() {
        $data =array( 'data' => $this->ProductModel->getAttributes(3));
        $this->load->view('rest', $data);
    }
}