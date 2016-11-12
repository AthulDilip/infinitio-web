<?php


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
 * @property OrdersModel $OrdersModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property PaymentModel $PaymentModel
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
        $this->load->model('PaymentModel');
    }

    public function index() {
        if($this->util->verifyLogin() == 1) {
			$details = $this->UsersModel->loadPersonalDetails();
            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'data' => $details,
                'orders' => $this->OrdersModel->getOrderDetails($this->OrdersModel->getUserOrders($this->session->userdata('user_id'))),
                'user' => $this->UsersModel->loadPersonalDetails()->firstname
            );


            $this->load->view('view-header', $headData);
            $this->load->view('Zemose/orders', $conData);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('login/?go=Orders');
        }
    }

    public function userReviewPost(){
        $this->OrdersModel->userReview();
    }

    public function view() {
        if($this->util->verifyLogin() == 1) {
            $order_id = $this->uri->segment(3, null);
            log_message('DEBUG', 'ORDER ID : ' . $order_id);
            if($order_id == null) {
                $this->session->set_userdata('err', 'Cannot find the order.');
                log_message('DEBUG', 'CANNOT FIND ORDER');
                redirect('Orders');
            }

            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $order = $this->OrdersModel->getOrder($order_id);
            if($order == null) {
                //order doesn't Exist
                $this->session->set_userdata('err', 'Cannot find the order.');
                redirect('Orders');
            }

            $this->OrdersModel->periodEnded($order_id);

            if($this->session->userdata('user_id') != $order->user_id) {
                //order doesn't belong to the zemoser
                $this->session->set_userdata('err', 'Cannot find the order.');
                redirect('Orders');
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
            $this->load->view('Zemose/order-single', $conData);
            $this->load->view('view-footer', $headData);
        }
        else {
            redirect('login/?go=Orders');
        }
    }

    //actions
    public function pay() {
        $order_id = $this->uri->segment(3, null);
        if($this->OrdersModel->isAuthorizedZemose($order_id)) {
            $order = $this->OrdersModel->getOrder($order_id);

            if($order == null) {
                $this->session->set_userdata('err', 'Invalid request.');
                redirect('Orders');
            }
            if(!$this->OrdersModel->isAuthorizedZemose($order_id)) {
                $this->session->set_userdata('err', 'Invalid request.');
                redirect('Orders');
            }

            if($order->status != 1) {
                $this->session->set_userdata('error', 'You cannot initiate a payment on this order.');
                redirect('Orders/view/' . $order_id);
            }

            $amount = $order->amount;
            $remark = 'Payment for Order : ' . $order->order_code;
            $gateway = 'payumoney';
            $success = $this->urls->getUrl().'Orders/orderPaymentSuccess/' . $order->order_id;
            $failure = $this->urls->getUrl().'Orders/orderPaymentFailure/' . $order->order_id;
            //$amount, $gateway, $remark, $success, $failure, $order

            //update payment status setting the initiation
            $sql = "UPDATE orders SET payment_status = 2 WHERE order_id = ?"; //for initiated payment
            $data = array(
                $order_id
            );
            $this->db->query($sql, $data);

            $this->PaymentModel->createNewPayment($amount, $gateway, $remark, $success, $failure, $order_id);
        }
        else {
            redirect('login?go=Orders');
        }
    }

    public function OrderPaymentSuccess() {
        $order_id = $this->uri->segment(3, null);
        if($this->OrdersModel->isAuthorizedZemose($order_id)) {
            $this->OrdersModel->paymentSuccess($order_id);
        }
        else {
            redirect('login/?go=Orders');
        }
    }

    public function orderPaymentFailure() {
        $order_id = $this->uri->segment(3, null);
        if($this->OrdersModel->isAuthorizedZemose($order_id)) {
            $this->OrdersModel->paymentFailure($order_id);
        }
        else {
            redirect('login/?go=Orders');
        }
    }

    public function endBeforePeriod() {
        $order_id = $this->uri->segment(3, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemose($order_id)) {
            //authorized
            $this->OrdersModel->endOrderBfrPeriod($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('err', 'Unauthorized.');
            redirect('Orders');
        }
    }

    public function verifyReturn() {
        $order_id = $this->uri->segment(3, null);
        //check if the zemoser is authorized to update the order
        if($this->OrdersModel->isAuthorizedZemose($order_id)) {
            //authorized
            $this->OrdersModel->verifyReturn($order_id);
        }
        else {
            //unauthorized
            $this->session->set_userdata('err', 'Unauthorized.');
            redirect('Orders');
        }
    }


}