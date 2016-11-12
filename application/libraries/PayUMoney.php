<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 13/9/16
 * Time: 10:19 PM
 */

/**
 * @property PaymentModel PaymentModel
 * @property OrdersModel OrdersModel
 */
class PayUMoney
{
    private $MERCHANT_KEY;

    private $SALT;

    private $PAYU_BASE_URL;

    //CodeIgniter Object
    private $CI;

    public function __construct() {
        $this->MERCHANT_KEY = "gtKFFx";  // Merchant key here as provided by Payu
        $this->SALT = "eCwWELxi";        // Merchant Salt as provided by Payu
        $this->PAYU_BASE_URL = "https://test.payu.in"; // End point - change to https://secure.payu.in for LIVE mode

        $this->CI = & get_instance();
    }

    public function pay($payment = array()) {
        /*$payment = $this->CI->PaymentModel->getPayment($payment_id);
        $order = $this->CI->OrdersModel->getOrder($payment->order_id);
        $address = $this->CI->OrdersModel->getOrderAddress($order->address);
        */

        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = $this->MERCHANT_KEY;
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($payment[$hash_var]) ? $payment[$hash_var] : '';
            $hash_string .= '|';
        }

        $hash_string .= $this->SALT;

        $hash = strtolower(hash('sha512', $hash_string));
        $action = $this->PAYU_BASE_URL . '/_payment';
        
        $this->CI->load->view('PayUMoney/redirect', array(
            'payment' => $payment,
            'hash' => $hash,
            'action' => $action,
            'key' => $this->MERCHANT_KEY
        ));
    }

    public function verifyOnSuccess() {
        $status=$this->CI->input->post("status");
        $firstname=$this->CI->input->post("firstname");
        $amount=$this->CI->input->post("amount");
        $txnid=$this->CI->input->post("txnid");
        $posted_hash=$this->CI->input->post("hash");
        $key=$this->CI->input->post("key");
        $productinfo=$this->CI->input->post("productinfo");
        $email=$this->CI->input->post("email");
        $salt=$this->SALT;
        
        If ( $this->CI->input->post("additionalCharges") != null ) {
            $additionalCharges=$this->CI->input->post("additionalCharges");
            $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        }
        else {
            $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        }
        $hash = hash("sha512", $retHashSeq);

        if($hash != $posted_hash) {
            return false;
        }
        else {
            return true;
        }
    }

    public function validateTransaction($txnID) {
        //Verify the API
    }
}