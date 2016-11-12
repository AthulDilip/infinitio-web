<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 20/6/16
 * Time: 2:50 PM
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
 */
class OrdersModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->model('CartModel');
        $this->load->model('ProductModel');
        $this->load->model('UsersModel');

        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

    }

    public function userReview(){
        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        $rating = $this->input->post('rating');

       if($title != NULL || $desc != NULL || $rating != NULL){
           
       }

    }

    public function createOrderFromRequest($cart_item, $address) {
        $sql = "INSERT INTO orders (order_id, zemoser_id, user_id, from_date, to_date, order_code, order_date, amount, status, inventory_id, product_id, deposit, rent_term, rent_for, rent_price, skill_term, skill_for, skill_price, tax, commission, address_id, delivery_code, return_code, dispute, payment_status) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $price = $this->CartModel->getPriceTerm($cart_item);
        if($price == null) {
            //invalid price do something
            log_message('DEBUG', 'An item with invalid price term in cart!');
        }

        $skill_price = $this->CartModel->getSkillPrice($cart_item);

        $tax = $this->TaxModel->loadTax($cart_item->product_id);
        if($tax != null)
            $tax = $this->TaxModel->getTaxClass($tax->tax_class_id);
        else $tax = 0;

        $commission = $this->CommissionModel->getProductCommission($cart_item->product_id);

        $date = $this->util->getDateTime();

        $del_code = $this->generateCode();
        $ret_code = $this->generateCode();
        $dispute = 0;
        $payment_status = 1;

        $data = array(
            $cart_item->user_id,
            $this->session->userdata('user_id'),
            $cart_item->from_date,
            $cart_item->to_date,
            'ZOIN00',
            $date,
            $this->CartModel->calculatePrice($cart_item),
            0,
            $cart_item->inventory_id,
            $cart_item->product_id,
            $cart_item->deposit,
            $cart_item->price_term,
            $cart_item->duration,
            $price,
            ($cart_item->skill != null) ? $cart_item->skill : null,
            $cart_item->skill_duration,
            $skill_price,
            $tax,
            $commission,
            $address,
            $del_code,
            $ret_code,
            $dispute,
            $payment_status
        );

        $query = $this->db->query($sql, $data);
        if($query) {
            //the order created get the id and create new order_code
            $sql = "SELECT LAST_INSERT_ID() AS order_id";
            $query = $this->db->query($sql, array());

            $order_id = $query->result()[0]->order_id;
            $order_code = 'ZOIN00' . $order_id;

            //add order placed date

            //update the order code
            $sql = "UPDATE orders SET order_code = ? WHERE order_id = ?";
            $this->db->query($sql, array($order_code, $order_id));

            //delete the CartItem for good
            $this->CartModel->removeCartItem($cart_item->id);

            //create the request action -- code 0
            $sql = "INSERT INTO order_actions (order_id, action, date) VALUES (?,?,?)";
            $query = $this->db->query($sql, array($order_id, 0, $date));

            return true;
        }
        else return false;
    }

    public function addOrderAddress($aobj) {
        $name = $aobj -> name;
        $address = $aobj -> streetaddress;
        $city = $aobj -> city;
        $lat = $aobj -> lat;
        $lon = $aobj -> lon;
        $phone = $aobj -> phone;
        $pin = $aobj -> pin;
        $user_id = $aobj -> user_id;

        $sql = "insert into order_address (id, `name`, streetaddress, city,lat, lon, pin, phone, user_id) values(NULL,?,?,?,?,?,?,?,?);";
        $query = $this->db->query($sql, array($name, $address, $city,$lat, $lon,$pin, $phone, $user_id));

        $sql = "SELECT LAST_INSERT_ID() AS address_id";
        $query = $this->db->query($sql, array());
        $res = $query->result()[0]->address_id;

        return $res;
    }

    public function getUserOrders($user_id) {
        $sql = "SELECT * FROM orders WHERE user_id = ? ORDER BY order_date DESC";
        $query = $this->db->query($sql, array($user_id));
        if($query->num_rows() > 0)
            return $query->result();
        else return null;
    }

    public function getZemoserOrders($zemoser_id) {
        $sql = "SELECT * FROM orders WHERE zemoser_id = ? ORDER BY order_date DESC";
        $query = $this->db->query($sql, array($zemoser_id));
        if($query->num_rows() > 0)
            return $query->result();
        else return null;
    }

    public function getOrderDetails($orders = array()) {
        $orderDetail = array();

        $sql = "SELECT * FROM zemoser WHERE user_id = ?";
        if($orders != null)
        foreach ($orders as $order) {
            $shop = $this->db->query($sql, array($order->zemoser_id))->result();
            if(isset($shop[0])) $sname = $shop[0]->shopname;
            else $sname = '';

            $orderDetail[] = array(
                'order' => $order,
                'image' => $this->urls->getConUrl(). 'content/product-images/' .$this->ProductModel->getSingleImage($order->product_id)->image,
                'shopname' => $sname,
                'product' => $this->ProductModel->getProductObject($order->product_id),
                'zemosee' => $this->UsersModel->loadDetailsOf($order->user_id)
            );
        }

        return $orderDetail;
    }

    public function getOrder($order_id) {
        $sql = "SELECT * FROM orders WHERE order_id = ?";
        $query = $this->db->query($sql, array($order_id));

        $res = $query->result();
        if (count($res) > 0) {
            return $res[0];
        }
        else return null;
    }

    public function getActions($order_id) {
        $sql = "SELECT * FROM order_actions WHERE order_id = ? ORDER BY date DESC";
        $query = $this->db->query($sql, array($order_id));

        $res = $query->result();
        return $res;
    }

    public function getOrderAddress($address_id) {
        $sql = "SELECT * FROM order_address WHERE id = ?";
        $query = $this->db->query($sql, array($address_id));

        if($query->num_rows() > 0) return $query->result()[0];
    }

    public function isAuthorizedZemoser($order_id) {
        $order = $this->OrdersModel->getOrder($order_id);
        if($this->session->userdata('user_id') == $order->zemoser_id) {
            return true;
        }
        else {
            return false;
        }
    }

    public function isAuthorizedZemose($order_id) {
        $order = $this->OrdersModel->getOrder($order_id);
        if($order == null) return false;
        if($this->session->userdata('user_id') == $order->user_id) {
            return true;
        }
        else {
            return false;
        }
    }

    public function acceptRequest($order_id) {
        $order = $this->getOrder($order_id);
        if($order->status == 0) {
            //the order is in the request phase, update to accepted state
            $sql = "UPDATE orders SET status = 1 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order_id));

            //add order_action denoting the time for accepted step
            $sql = "INSERT INTO order_actions(order_id, action, date) VALUES (?,?,?)";
            $data = array(
                $order_id,
                1,
                $this->util->getDateTime()
            );

            $this->db->query($sql, $data);
        }

        redirect('Zemoser/Orders/view/' . $order_id);
    }

    public function rejectRequest($order_id) {
        $order = $this->getOrder($order_id);
        if($order->status == 0) {
            //the order is in the request phase, update to rejected state
            $sql = "UPDATE orders SET status = -2 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order_id));

            //add order_action denoting the time of rejection
            $sql = "INSERT INTO order_actions(order_id, action, date) VALUES (?,?,?)";
            $data = array(
                $order_id,
                -2,
                $this->util->getDateTime()
            );

            $this->db->query($sql, $data);
        }

        redirect('Zemoser/Orders/view/' . $order_id);
    }

    public function paymentSuccess($order_id) {
        $sql = "SELECT * FROM payments WHERE order_id = ? AND status = 1";
        $query = $this->db->query($sql, array($order_id));

        $order = $this->getOrder($order_id);

        if($order->status == 1) {
            if ($query->num_rows() > 0) {
                //payment is successful
                $sql = "UPDATE orders SET status = 2 WHERE order_id = ?";
                $query = $this->db->query($sql, array($order_id));

                //add order_action denoting the accepted payment
                $code = $this->generateCode();
                $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?,?,?,?)";
                $data = array(
                    $order_id,
                    2,
                    $this->util->getDateTime(),
                    $code
                );

                $this->db->query($sql, $data);


                $sql = "UPDATE orders SET payment_status = 1 WHERE order_id = ?"; // order payment success
                $data = array(
                    $order_id
                );

                $this->db->query($sql, $data);
            } else {
                //no payments available
                $this->session->set_userdata('error', 'There are no valid payments.');
                redirect('Orders/view/' . $order_id);
            }
        }

        redirect('Orders/view/' . $order_id);
    }

    public function paymentFailure($order_id) {
        $sql = "SELECT * FROM payments WHERE order_id = ? AND status = -1";
        $query = $this->db->query($sql, array($order_id));

        $order = $this->getOrder($order_id);

        if($order->status == 1) {
            if ($query->num_rows() > 0) {
                //remove order_action denoting the initiated payment
                $sql = "UPDATE orders SET payment_status = 0 WHERE order_id = ?";
                $data = array(
                    $order_id
                );

                $this->db->query($sql, $data);
            } else {
                //no payments available
            }
        }

        redirect('Orders/view/' . $order_id);
    }

    private function generateCode () {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        for ($i = 0; $i < 8; $i++) {
            $code .= $chars[ rand( 0, strlen( $chars ) - 1 ) ];
        }

        return $code;
    }

    public function verifyDelivery($order_id) {
        $e_code = $this->input->post('code');

        if($e_code == null || $e_code == '') {
            $this->session->set_userdata('error', 'Error code Expected.');
            redirect('Zemoser/Orders/view' . $order_id);
        }

        $order = $this->getOrder($order_id);
        if($order == null) redirect('Zemoser/Orders');

        if($order->status == 2) {
            //This is a verifiable order
            $code = $order->delivery_code;

            if($code == $e_code) {
                //successfully verified the code
                $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?,?,?, NULL)";
                $data = array(
                    $order_id,
                    3, //order in action
                    $this->util->getDateTime()
                );
                $this->db->query($sql, $data);

                $sql = "UPDATE orders SET status = 3 WHERE order_id = ?";
                $query = $this->db->query($sql, array($order_id));
            }
            else {
                $this->session->set_userdata('error', 'Error in code!');
                redirect('Zemoser/Orders/view/'.$order_id);
            }
        }

        redirect('Zemoser/Orders/view/'.$order_id);
    }

    public function isOrderFinished($order) {
        $to_date = new DateTime($order->to_date, new DateTimeZone('GMT'));
        $date = new DateTime('now', new DateTimeZone('GMT'));

        if ($to_date <= $date) {
            return true;
        }
        else return false;
    }

    public function endOrderBfrPeriod($order_id) {
        $order = $this->getOrder($order_id);

        if($order->status == 3) {
            //add the action 6 for early product returns
            $n_code = $this->generateCode();
            $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?,?,?, NULL)";
            $data = array(
                $order_id,
                6, //order end before period action
                $this->util->getDateTime()
            );
            $this->db->query($sql, $data);

            $sql = "UPDATE orders SET status = 6 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order_id));
        }
        redirect('Orders/view/'.$order_id);
    }

    public function setRefund($order_id) {
        $refund = $this->input->post('refund');
        if($refund == null || $refund == '') {
            $this->session->set_userdata('err', 'Invalid Refund amount, enter 0 if you do not provide any refunds.');
            redirect('Zemoser/Orders/view/'. $order_id);
        }

        if(!$this->valid->isFloat($refund)) {
            log_message('DEBUG', 'Invalid refund value!');
            $this->session->set_userdata('err', 'Invalid Refund amount, enter 0 if you do not provide any refunds.');
            redirect('Zemoser/Orders/view/'. $order_id);
        }

        $refund = (float) $refund;
        $order = $this->getOrder($order_id);
        $rf_amt = $order->amount - $order->deposit;

        if( $rf_amt < $refund || $refund < 0) {
            log_message('DEBUG', 'Invalid refund value! - Negative Vaue');
            $this->session->set_userdata('err', 'Invalid Refund amount, it is higher than maximum refundable amount or invalid.');
            redirect('Zemoser/Orders/view/'. $order_id);
        }

        //refund amount is valid !
        //move to status 7 and add action 7 with code
        if($order->status == 6) {
            $sql = "UPDATE orders SET refund = ? WHERE order_id = ?"; //set refund amount here to show to zemose
            $this->db->query($sql, array(
                $refund,
                $order_id
            ));

            //update to status 4 // return the product
            $n_code = $this->generateCode();
            $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?, ?, ?, ?)";
            $data = array(
                $order_id,
                4, //order end before period action
                $this->util->getDateTime(),
                $n_code
            );
            $this->db->query($sql, $data);

            $sql = "UPDATE orders SET status = 4 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order_id));

        }

        redirect('Zemoser/Orders/view/' . $order_id);
    }
    
    public function verifyReturn($order_id) {
        $e_code = $this->input->post('code');

        if($e_code == null || $e_code == '') {
            redirect('Orders/view' . $order_id);
        }

        $order = $this->getOrder($order_id);
        if($order == null) redirect('Orders');

        if($order->status == 4) {
            //This is a verifiable order
            $code = $order->return_code;

            if($code == $e_code) {
                //successfully verified the code
                $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?,?,?, NULL)";
                $data = array(
                    $order_id,
                    5, //order ended
                    $this->util->getDateTime()
                );
                $this->db->query($sql, $data);

                $sql = "UPDATE orders SET status = 5 WHERE order_id = ?";
                $query = $this->db->query($sql, array($order_id));

            }
            else {
                $this->session->set_userdata('err', 'Error in code!');
                redirect('Orders/view/'.$order_id);
            }
        }

        redirect('Orders/view/'.$order_id);
    }

    public function periodEnded($order_id) {
        $order = $this->getOrder($order_id);

        if($order != null) {
            if($this->isOrderFinished($order) && $order->status == 3) {
                //take actions to finish the order
                $n_code = $this->generateCode();
                $sql = "INSERT INTO order_actions(order_id, action, date, code) VALUES (?, ?, ?, ?)";
                $data = array(
                    $order_id,
                    4, //order return
                    $this->util->getDateTime(),
                    $n_code
                );
                $this->db->query($sql, $data);

                $sql = "UPDATE orders SET status = 4 WHERE order_id = ?";
                $query = $this->db->query($sql, array($order_id));
            }
        }
    }

    public function isDisputable($order) {
        return !($order->status == 99);
    }

    public function setPayouts ($order_id, $order, $refund) { // mock -- DELETE

        //set Payout :
        $sql = "INSERT INTO `user_payouts` (`order_id`, `user_id`, `payout_amount`, `remarks`, active) VALUES (?, ?, ?, ?, ?)";
        $data = array(
            $order_id,
            $order->user_id,
            $order->deposit + $refund,
            'Refund + Deposit for Order : ' . $order->order_code,
            0
        );

        $rf_amt = 1000;

        $sql = "INSERT INTO `zemoser_payouts` (`order_id`, `zemoser_id`, `payout_amount`, `remarks`, active) VALUES (?, ?, ?, ?, ?)";
        $data = array(
            $order_id,
            $order->zemoser_id,
            $rf_amt - $refund,
            'Rent - Refund for Order : ' . $order->order_code,
            0
        );


        //activate the payouts
        $sql = "UPDATE user_payouts SET active = 1 WHERE order_id = ?";
        $this->db->query($sql, array($order_id));
        $sql = "UPDATE zemoser_payouts SET active = 1 WHERE order_id = ?";
        $this->db->query($sql, array($order_id));
    }
}