<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 13/9/16
 * Time: 10:03 PM
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
 */
class PaymentModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('valid');
        $this->load->library('PayUMoney');
    }

    public function getPayment($id) {
        $sql = "SELECT * FROM payments WHERE payment_id = ?";
        $query = $this->db->query($sql, array($id));

        $res = $query->result();

        if ($query->num_rows() > 0) return $res[0];
        else return null;
    }

    public function createNewPayment($amount, $gateway, $remark, $success, $failure, $order) {
        $sql = "INSERT INTO payments(payment_id, txnid, amount, initiated, status, gateway, payment_remarks, success_redirect, failure_redirect, order_id) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $data = array(
            null,
            $amount,
            $this->util->getDateTime(),
            0,//initiated
            $gateway,
            $remark,
            $success,
            $failure,
            $order
        );

        $this->db->query($sql, $data);
        $sql = "SELECT LAST_INSERT_ID() AS payment_id";
        $query = $this->db->query($sql);
        $payment_id = $query->result()[0]->payment_id;

        $this->pay($payment_id);
    }

    public function pay($payment_id) {
        $payment = $this->getPayment($payment_id);
        if($payment == null) show_404();
        if($payment->gateway == 'payumoney') {
            $sql = "UPDATE payments SET txnid = ? WHERE payment_id = ?";
            $query = $this->db->query($sql, array(
                'ZEMPUM0IN0' . $payment->payment_id,
                $payment->payment_id
            ));

            $user = $this->UsersModel->loadPersonalDetails();

            $this->payumoney->pay(array(
                'txnid' => 'ZEMPUM0IN0' . $payment->payment_id,
                'amount' => $payment->amount, //INR
                'productinfo' => $payment->payment_remarks,
                'firstname' => $user->firstname,
                'email' => $user->email,
                'phone' => $user->phone,
                'surl' => $this->urls->getUrl() . 'Payment/paymentSuccess/' . $payment_id,
                'furl' => $this->urls->getUrl() . 'Payment/paymentFailure/' . $payment_id
            ));
        }
        else {
            //unknown gateway
            //abort
            $this->onFailure($payment_id);
        }
    }

    public function setSuccess($payment_id) {
        $sql = "UPDATE payments SET status = 1 WHERE payment_id = ?";
        $this->db->query($sql, array($payment_id));
    }

    public function setFailure($payment_id) {
        $sql = "UPDATE payments SET status = -1 WHERE payment_id = ?";
        $this->db->query($sql, array($payment_id));
    }

    public function onSuccess($payment_id) {
        $payment = $this->getPayment($payment_id);
        if ($payment != null) {
            $this->setSuccess($payment_id);
            redirect($payment->success_redirect);
        }
        else redirect('Orders');
    }

    public function onFailure($payment_id) {
        $payment = $this->getPayment($payment_id);
        if ($payment != null) {
            $this->setFailure($payment_id);
            redirect($payment->failure_redirect);
        }
        else redirect('Orders');
    }
}