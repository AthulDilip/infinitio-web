<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 15/9/16
 * Time: 4:30 PM
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
 * @property TaxModel $TaxModel
 * @property OrdersModel $OrdersModel
 * @property CommissionModel $CommissionModel
 * @property PayUMoney $payumoney
 * @property PaymentModel $PaymentModel
 */
class Payment extends CI_Controller
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
        $this->load->model('PaymentModel');
    }

    public function paymentSuccess() {
        log_message('DEBUG', json_encode($_POST));

        if($this->util->verifyLogin() == 1) {
            $payment_id = $this->uri->segment(3, null);
            if($payment_id == null) {
                //no payment id
                echo 'Invalid or unintended transaction report.<a href="' . $this->urls->getUrl() . '/Orders">Return to Orders.</a>"';
                return;
            }

            $payment = $this->PaymentModel->getPayment($payment_id);

            if($payment == null) redirect('Orders');
            if($payment->gateway == 'payumoney') {
                if( $this->payumoney->verifyOnSuccess() ) {
                    //verified the payment success
                    $this->PaymentModel->onSuccess($payment_id);
                }
                else {
                    echo 'Invalid or unintended transaction report.<a href="' . $this->urls->getUrl() . '/Orders">Return to Orders.</a>"';
                    return;
                }
            }
            else {
                $this->PaymentModel->onFailure($payment_id);
            }
        }
        else {
            redirect('login?go=Orders');
        }
    }

    public function paymentFailure() {
        log_message('DEBUG', json_encode($_POST));

        if($this->util->verifyLogin() == 1) {
            $payment_id = $this->uri->segment(3, null);
            if($payment_id == null) {
                //no payment id
                echo 'Invalid or unintended transaction report.<a href="' . $this->urls->getUrl() . '/Orders">Return to Orders.</a>"';
                return;
            }

            $payment = $this->PaymentModel->getPayment($payment_id);
            if($payment == null) redirect('Orders');
            if($payment->gateway == 'payumoney') {
                //do something specific for payumoney
                $this->PaymentModel->onFailure($payment_id);
            }
            else {
                $this->PaymentModel->onFailure($payment_id);
            }
        }
        else {
            redirect('login?go=Orders');
        }
    }

}