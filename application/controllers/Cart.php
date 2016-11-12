<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 24/8/16
 * Time: 11:56 AM
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
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class Cart extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        $this->load->library('valid');

        $this->load->model('VisitorModel');
        $this->load->model('CartModel');
        $this->load->model('ProductModel');
    }

    public function index() {
        $this->show();
    }

    public function show() {
        $cart = ($this->CartModel->getCart());

        $cart_items = array();

        $total = 0;

        if ($cart != null)
            foreach ($cart as $cartitem) {
                if ($cartitem->price_term == 'Hour') {
                    $price = $cartitem->p_price_hour;
                }
                else if($cartitem->price_term == 'Day') {
                    $price = $cartitem->p_price_day;
                }
                else {
                    $price = $cartitem->p_price_month;
                }

                $net = $this->CartModel->calculatePrice($cartitem);
                $cart_items [] = array(
                    'price' => $net,
                    'quantity' => $cartitem->c_quantity,
                    'image' => $this->ProductModel->getSingleImage($cartitem->product_id)->image,
                    'name' => $cartitem->name,
                    'p_choice' => '₹ ' . number_format($price,2,".",",") . ' / ' . $cartitem->price_term,
                    'id' => $cartitem->id,
                    'start' => $this->util->formatTime($cartitem->from_date) -> date . ' ' . $this->util->formatTime($cartitem->from_date) -> time,
                    'end' => $this->util->formatTime($cartitem->to_date) -> date . ' ' . $this->util->formatTime($cartitem->to_date) -> time
                );

                $total += $net;
            }

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'googleLoginUrl' =>$googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );
        $con = array(
            'url' => $this->urls->getUrl() . 'Cart/',
            'cart' => $cart_items,
            'total' => $total
        );
        $this->load->view('view-header2', $headData);
        $this->load->view('cart', $con);
        $this->load->view('view-footer', $headData);
    }

    public function addToCart() {
        //get Which visitor is on the page
        $visitor = $this->VisitorModel->getVisitor();

        $order = $this->input->post('order');
        $pid = $this->input->post('product_id');
        $inv = $this->input->post('inventory_id');

        $order = json_decode($order);

        if($visitor->user_id == null) {
            //it's a poor guest
            if($this->CartModel->verifyCartItem($pid, $inv, $order)) {
                if($this->CartModel->addVisitorItem($pid, $inv, $order, false, $visitor->visitor_id))
                    redirect('/Cart');
                else {
                    $this->session->set_userdata('error', 'unable to add the product, please try again later.');
                    redirect('/Cart');
                }
            }
            else {
                $this->session->set_userdata('error', 'There was an error in product data. Please try again.');
                redirect('/Cart');
            }
        }
        else {
            //it's a rich user
            log_message('DEBUG', json_encode($order));
            if($this->CartModel->verifyCartItem($pid, $inv, $order)) {
                if($this->CartModel->addVisitorItem($pid, $inv, $order, true, $visitor->visitor_id))
                    redirect('/Cart');
                else {
                    $this->session->set_userdata('error', 'unable to add the product, please try again later.');
                    redirect('/Cart');
                }
            }
            else {
                redirect('/Cart');
            }
        }
    }

    public function checkOut() {
        if ($this->util->verifyLogin() == 1) {
            if(!$this->UsersModel->isEligible()) {
                $this->session->set_userdata('error', 'You need to verify your phone and email first.');
                redirect('Users/personalDetails');
            }
            
            if( $this->input->get('address') == null && $this->input->post('form')==null ) {
                $this->session->set_userdata('error', 'No address specified.');
                redirect('Cart/checkoutDestination');
            }
            $this->CartModel->checkout();
        }
        else {
            redirect('/login?go=/Cart');
        }
    }

    public function checkoutDestination() {
        if ($this->util->verifyLogin() == 1) {
            if(!$this->UsersModel->isEligible()) {
                $this->session->set_userdata('error', 'You need to verify your phone and email first.');
                redirect('Users/personalDetails');
            }

            $headData =  array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );
            $addresses = $this->UsersModel->loadAddresses();

            $con = array(
                'url' => $this->urls->getUrl() . 'Cart/',
                'addresses' => $addresses
            );
            $this->load->view('view-header2', $headData);
            $this->load->view('address', $con);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('/login?go=/Cart');
        }
    }

    public function remove() {
        if ($this->util->verifyLogin() == 1) {
            log_message('DEBUG', 'Verified Login');
            $id = $this->uri->segment(3, null);
            if ($id == null) {
                redirect('Cart/');
            }
            else {
                if ( $this->CartModel->verifyOwner($id) ) {
                    $this->CartModel->removeCartItem($id);
                    redirect('Cart/');
                }
                else {
                    redirect('Cart/');
                }
            }
        }
        else {
            $id = $this->uri->segment(3, null);
            if($id == null) {
                redirect('Cart/');
            }
            else {
                if ( $this->CartModel->verifyOwner($id) ) {
                    $this->CartModel->removeCartItem($id);
                    redirect('Cart/');
                }
                else {
                    redirect('Cart/');
                }
            }
        }
    }

    public function addQuantity() {
        if($this->util->verifyLogin() == 1) {
            $data = $this->CartModel->increaseQuantity();
            $this->load->view('rest', array(
                'data' => $data
            ));
        }
    }

    public function subQuantity() {
        if($this->util->verifyLogin() == 1) {
            $data = $this->CartModel->decreaseQuantity();
            $this->load->view('rest', array(
                'data' => $data
            ));
        }
    }

}