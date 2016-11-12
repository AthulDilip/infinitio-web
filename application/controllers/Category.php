<?php
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

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        //$this->load->library('HybridAuthLib');

        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->model('UsersModel');
        $this->load->model('FilterModel');
    }

    public function index() {
        $this->all();
    }

    public function all(){

        $cats = $this->CategoryModel->loadParentCategories();

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 1,
            'cats' => $cats,
            'googleLoginUrl' =>$googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'data' => $cats
        );


        $this->load->view('view-header2',$headData);
        $this->load->view('Category/view-all',$conData);
        $this->load->view('view-footer',$headData);
    }

    public function listProducts(){
        $id = $this->uri->segment(3,null);
        $subcats = $this->CategoryModel->loadSubCategories($id);

        $filters = $this->FilterModel->listAllFilters($id);

        $cats = $this->CategoryModel->loadParentCategories();

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        //load all productid's in wishlist
        $wishlist = $this->ProductModel->listAllWishListItems();

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 1,
            'cats' => $cats,
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'sub' => $subcats,
            'filters' => $filters,
            'cid' => $id,
            'wishlist' => $wishlist
        );

        $this->load->view('view-header2',$headData);
        $this->load->view('Category/view-products',$conData);
        $this->load->view('view-footer',$headData);
    }

    public function restProducts() {

        $id = $this->uri->segment(3,null);
        $index = $this->uri->segment(4,null);
        $total = $this->uri->segment(5,null);

        if($index == NULL || $total == NULL){
            $products = $this->CategoryModel->loadProducts($id);
        }else{
            $products = $this->CategoryModel->loadProductsLimit($id,$index,$total);
        }

        $this->load->view('rest', array('data' => $products));
    }
}
