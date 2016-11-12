<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 2/9/16
 * Time: 2:41 PM
 */
class Orders extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('valid');

        $this->load->model('OrdersModel');
    }

    public function index() {
        if($this->util->verifyLogin() == 1) {

            $this->util->checkZemoserAccess();

            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'orders' => $this->OrdersModel->getOrderDetails($this->OrdersModel->getZemoserOrders($this->session->userdata('user_id')))
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Zemoser/orders', $conData);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('login/?go=Zemoser/Orders');
        }
    }

    public function view() {
        if($this->util->verifyLogin() == 1) {
            $order_id = $this->uri->segment(4, null);
            if($order_id == null) {
                $this->session->set_userdata('err', 'Cannot find the order.');
                log_message('DEBUG', 'CANNOT FIND ORDER');
                redirect('Zemoser/Orders');
            }

            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $order = $this->OrdersModel->getOrder($order_id);
            if($order == null) {
                //order doesn't Exist
                $this->session->set_userdata('err', 'Cannot find the order.');
                redirect('Zemoser/Orders');
            }

            $this->OrdersModel->periodEnded($order_id);

            if($this->session->userdata('user_id') != $order->zemoser_id) {
                //order doesn't belong to the zemoser
                $this->session->set_userdata('err', 'Cannot find the order.');
                redirect('Zemoser/Orders');
            }

            $actions = $this->OrdersModel->getActions($order_id);
            $product = $this->ProductModel->getProductObject($order->product_id);
            $image = $this->ProductModel->getSingleImage($order->product_id);
            $address = $this->OrdersModel->getOrderAddress($order->address_id);

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'order' => $order,
                'actions' => $actions,
                'product' => $product,
                'image' => $image,
                'address' => $address
            );


            $this->load->view('view-header2', $headData);
            $this->load->view('Zemoser/order-single', $conData);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('login/?go=Zemoser/Orders');
        }
    }

    //Order actions
    public function acceptRequest() {
        $order_id = $this->uri->segment(4, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemoser($order_id)) {
            //authorized
            $this->OrdersModel->acceptRequest($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('error', 'Unauthorized.');
            redirect('Zemoser/Orders');
        }
    }

    public function rejectRequest() {
        $order_id = $this->uri->segment(4, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemoser($order_id)) {
            //authorized
            $this->OrdersModel->rejectRequest($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('error', 'Unauthorized.');
            redirect('Zemoser/Orders');
        }
    }

    public function verifyDelivery() {
        $order_id = $this->uri->segment(4, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemoser($order_id)) {
            //authorized
            $this->OrdersModel->verifyDelivery($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('error', 'Unauthorized.');
            redirect('Zemoser/Orders');
        }
    }


    public function setRefund($order_id) {
        $order_id = $this->uri->segment(4, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemoser($order_id)) {
            //authorized
            $this->OrdersModel->setRefund($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('error', 'Unauthorized.');
            redirect('Zemoser/Orders');
        }
    }
}