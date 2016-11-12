<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 12/8/16
 * Time: 9:38 PM
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
 * @property TaxModel $TaxModel
 */
class Products extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        $this->load->helper('security');
        //$this->load->library('HybridAuthLib');

        $this->load->model('CategoryModel');
        $this->load->model('AttributeModel');
        $this->load->model('InventoryModel');
        $this->load->model('ProductModel');
        $this->load->model('UsersModel');
        $this->load->model('TaxModel');
    }

    public function index() {
        //update hits

        show_404();
    }

    public function search(){

        $data = array();

        $data['name'] = xss_clean($this->input->get('name'));
        $data['place'] = xss_clean($this->input->get('place'));
        $data['cat'] = xss_clean($this->input->get('cat'));
        $data['catid'] = xss_clean($this->input->get('catid'));
        $data['from'] = xss_clean($this->input->get('from'));
        $data['to'] = xss_clean($this->input->get('to'));
        $data['lat'] = xss_clean($this->input->get('lat'));
        $data['lon'] = xss_clean($this->input->get('lon'));

        $cats = $this->CategoryModel->loadParentCategories();

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        //load all productid's in wishlist
        $wishlist = $this->ProductModel->listAllWishListItems();

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 2,
            'data' => $data,
            'cats' => $cats,
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'data' => $data,
            'wishlist' => $wishlist
        );

        $this->load->view('view-header',$headData);
        $this->load->view('view-search',$conData);
        $this->load->view('view-footer',$headData);
    }

    public function restProducts(){

        $index = $this->uri->segment(3,null);
        $total = $this->uri->segment(4,null);

        $products = $this->ProductModel->search($index,$total);

        $this->load->view('rest', array('data' => $products));

    }

    public function restProductsFromUserId() {
        $userId = $this->uri->segment(3,null);
        $index = $this->uri->segment(4,null);
        $total = $this->uri->segment(5,null);

        log_message("DEBUG",$userId);
        log_message("DEBUG",$index);
        log_message("DEBUG",$total);

        $products = $this->ProductModel->listProductsByUserId($userId,$index,$total);

        $this->load->view('rest', array('data' => $products));
    }

    public function single() {

        if($this->uri->segment(1, null) == 'p') {
            //load the data from url
            $id = $this->uri->segment(2, null);
            $url = $this->uri->segment(3, null);
            $inv = $this->uri->segment(4,null);
        }
        else {
            //load the data from url
            $id = $this->uri->segment(3, null);
            $url = $this->uri->segment(4, null);
            $inv = $this->uri->segment(5,null);
        }
        //update hits
        $this->ProductModel->incrementProductHits($id);

        //update hit of the default inventory

        //Check cache and setup cache

        $product = $this->ProductModel->getProductData($id, $inv, 1/*language*/, $url);
        if($product == null) {
            //return
            show_404();
        }

        //var_dump($product);

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $cats = $this->CategoryModel->loadParentCategories();

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 1,
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl,
            'cats' => $cats
        );

        $tax = $this->TaxModel->loadTax($id);
        if($tax != null)
            $tax = $this->TaxModel->getTaxClass($tax->tax_class_id);
        else $tax = 0;

        $lat = $this->input->get('lat');
        $lon = $this->input->get('lon');
        $start = 0;
        $limit = 4;
        $ret = $this->ProductModel->getProductReviews($id,$inv,$lat,$lon,$start,$limit);
        $reviews = $ret['selected'];
        $res = $ret['ratings'];
        $reviews_count = $ret['total'];

        $sum=0;
        $ratings = array(0,0,0,0,0);
        if(!empty($res)) {
            foreach ($res as $ob) {
                if ($reviews_count > 0)
                    $ratings[$ob->rating - 1] = ((int)$ob->cnt) / $reviews_count;

                $sum = $sum + $ob->rating * $ob->cnt;
            }
        }


        if($reviews_count >0) {
            $avg = round($sum / ($reviews_count), 1);
        }else
            $avg=0;

        $conData =  array(
            'product' => $product,
            'reviews' => $reviews,
            'reviews_count' => $reviews_count,
            'ratings' => $ratings,
            'avg_rating' => $avg,
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'tax' => $tax
        );

        $this->load->view('view-header2',$headData);
        $this->load->view('Products/product-main',$conData);
        $this->load->view('view-footer',$headData);
    }

    public function wishList(){

        if($this->util->verifyLogin() == 1) {
            $wish = $this->ProductModel->showWishList();

            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'active' => 1
            );

            $conData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'wishlist' => $wish
            );


            $this->load->view('view-header',$headData);
            $this->load->view('view-wishlist',$conData);
            $this->load->view('view-footer',$headData);
        }else{
            redirect('/home');
        }

    }

    public function addToWishList(){
        if($this->util->verifyLogin() == 1) {
            $id = $this->uri->segment(3, -1);

            $this->ProductModel->addToWishList($id);

            $this->load->view('rest', array('data' => true));
        }else{
            $this->load->view('rest', array('data' => false));
        }
    }

    public function removeFromWishList(){
        if($this->util->verifyLogin() == 1) {
            $id = $this->uri->segment(3, -1);

            $this->ProductModel->removeFromWishList($id);

            $this->load->view('rest', array('data' => true));
        }else{
            $this->load->view('rest', array('data' => false));
        }
    }

    public function removeFromWishListNormal(){
        if($this->util->verifyLogin() == 1) {
            $id = $this->uri->segment(3, -1);

            $this->ProductModel->removeFromWishList($id);

            redirect('products/wishList');
        }else{
            redirect('/user/loginerror');
        }
    }

}