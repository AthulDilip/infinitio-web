<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 27/8/16
 * Time: 1:03 PM
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
 * @property CommissionModel $CommissionModel
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property TaxModel $TaxModel
 * @property OrdersModel $OrdersModel
 */
class CartModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('TaxModel');
        $this->load->model('OrdersModel');
        $this->load->model('CommissionModel');
        $this->load->model('InventoryModel');
    }

    public function addVisitorItem($pid, $inv_id, $order, $user, $visitor_id = null) {
        if($visitor_id == null) return false;

        $sql = "INSERT INTO cart (id, product_id, inventory_id, from_date, to_date, price_term, duration, skill, skill_duration, user_id, visitor_id, date_added) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if($user) $uid = $this->session->userdata('user_id');
        else $uid = null;

        $inv = $this->InventoryModel->getSingle($inv_id);
        if($inv == null) {
            $this->session->set_userdata('error', 'The Inventory is invalid.');
            redirect('Cart/');
        }

        if($inv->zemoser_id == $uid) {
            //same product booking.....
            $this->session->set_userdata('error', 'You cannot rent your own product.');
            redirect('Cart/');
        }

        $date = new DateTime('now');

        $from_date = DateTime::createFromFormat('m/d/Y H:i', $order->from_date, new DateTimeZone('Asia/Kolkata'));
        $from_date->setTimezone(new DateTimeZone('GMT'));
        $fromd = $from_date->format('Y-m-d H:i:s');

        if($from_date < new DateTime('now')) {
            $this->session->set_userdata('error', 'The Requested date is invalid.');
            redirect('Cart/');
        }

        $di = $this->calculateDateInterval($order->pricing, $order->rent_for);
        $to_date = $from_date->add($di);
        $tod = $to_date->format('Y-m-d H:i:s');

        $data = array(
            $pid,
            $inv_id,
            $fromd,
            $tod,
            $order->pricing,
            $order->rent_for,
            $order->need_skill ? $order->skill_pricing : null,
            $order->skill_for,
            $uid,
            $visitor_id,
            $date->format('Y-m-d H:i:s')
        );

        $query = $this->db->query($sql, $data);

        if($query) return true;
        else return false;
    }

    public function getCart() {
        if ($this->util->verifyLogin()) {
            //load cart by user_id
            $sql = "SELECT *,c.quantity AS c_quantity FROM cart c LEFT JOIN product_description pd ON (c.product_id = pd.product_id AND c.user_id = ?) LEFT JOIN inventory i ON (c.inventory_id = i.inventory_id) WHERE pd.language_id = ?";
            $query = $this->db->query($sql, array($this->session->userdata('user_id'), 1));

            $res = $query->result();

            if($query->num_rows() > 0) {
                return $res;
            }
            else {
                return null;
            }
        }
        else {
            //load cart by visitor_id
            $v = $this->VisitorModel->getVisitor();

            if($v == null) redirect('/Cart');
            $sql = "SELECT *,c.quantity AS c_quantity FROM cart c LEFT JOIN product_description pd ON (c.product_id = pd.product_id AND c.visitor_id = ?) LEFT JOIN inventory i ON (c.inventory_id = i.inventory_id) WHERE pd.language_id = ?";
            $query = $this->db->query($sql, array($v->visitor_id, 1));

            $res = $query->result();

            if($query->num_rows() > 0) {
                return $res;
            }
            else {
                return null;
            }
        }
    }

    public function isCartInputComplete($pid, $invid, $order) {
        //check if all input values are set
        if(
            $pid != null &&
            $invid != null &&
            $order != null &&
            //order data check
            isset($order->from_date) &&
            isset($order->type) &&
            isset($order->product_id) &&
            isset($order->pricing) &&
            isset($order->rent_for) &&
            isset($order->c_skill) &&
            isset($order->need_skill) &&
            isset($order->skill_pricing) &&
            isset($order->skill_for) &&
            isset($order->calculated_total)
        )
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function verifyCartItem($pid = 0, $inv_id = 0, $order = null) {
        if($order == null || $pid == null || $inv_id == null) return false;

        if( ! $this->isCartInputComplete ( $pid, $inv_id, $order ) ) return false;

        //read the inventory with product data
        $sql = "SELECT * FROM inventory WHERE inventory_id = ?";
        $query = $this->db->query($sql, array($inv_id));

        if ($query->num_rows() < 1) return false; //no inventory item found

        $inv = $query->result()[0];

        //check if order provides the correct product_id
        if ( !isset($order->product_id) || $order->product_id != $inv->product_id || $pid != $inv->product_id ) {
            $this->session->set_userdata('error', 'Invalid Request.');
            return false; //invalid product id
        }

        $user = $this->session->userdata('user_id');
        if($user != null) {
            //logged in user
            $zemoser = $inv->user_id;
            if($zemoser == $user) {
                $this->session->set_userdata('error', 'You cannot order your own product.');
                return false; //The data is corrupt
            }
        }

        //check if the product allows the requested renting model (Hour/ Day / Month)
        $model = isset($order->pricing) ? $order->pricing : null;

        if ($model != 'Hour' && $model != 'Day' && $model != 'Month') {
            $this->session->set_userdata('error', 'Invalid Request.');
            return false; //The data is corrupt
        }
        if($model == 'Hour' && $inv->price_hour != 1) {
            $this->session->set_userdata('error', 'Product does not provide hourly renting');
            return false; //produt doesn't provide Hourly renting
        }
        if ($model == 'Day' && $inv->price_day != 1) {
            $this->session->set_userdata('error', 'Product does not provide daily renting');
            return false; //similar in day
        }
        if ($model == 'Month' && $inv->price_month != 1) {
            $this->session->set_userdata('error', 'Product does not provide monthly renting');
            return false; //same for month
        }

        //check if the seller provide a skilled labour
        $skill = $order->need_skill;
        if($skill == true && $inv->skilled_labour == 0){
            $this->session->set_userdata('error', 'Although you requested, seller does not provide skilled labour.');
            return false;
        } //The seller doesn't provide a skilled labour for this product
        if($skill == false && $inv->c_skilled_labour == 1){
            $this->session->set_userdata('error', 'This product need compulsory skilled labor. The request is invalid.');
            return false;
        } // compulsory skilled labour not respected


        if($inv->skilled_labour == 1) {
            //check if a valid product skiled labour is provided
            $model = isset($order->skill_pricing) ? $order->pricing : null;

            if ($model != 'Hour' && $model != 'Day' && $model != 'Month') {
                $this->session->set_userdata('error', 'Corrupt data.');
                return false; //The data is corrupt
            }
            if ($model == 'Hour' && $inv->s_price_hour != 1) {
                $this->session->set_userdata('error', 'No hourly skilled labor.');
                return false; //produt doesn't provide Hourly skill labour
            }
            if ($model == 'Day' && $inv->s_price_day != 1) {
                $this->session->set_userdata('error', 'No daily skilled labor');
                return false; //similar in day
            }
            if ($model == 'Month' && $inv->s_price_month != 1) {
                $this->session->set_userdata('error', 'No monthly skilled labor.');
                return false; //same for month
            }
        }

        //date
        $datetime = DateTime::createFromFormat('m/d/Y H:i', $order->from_date, new DateTimeZone('Asia/Kolkata'));
        $tdate = new DateTime('now', new DateTimeZone('Asia/Kolkata'));

        if(!$datetime || $tdate > $datetime) {
            $this->session->set_userdata('error', 'The date you requested for rental is invalid.');
            return false;
        }


        //type check
        $ztype = $inv->zemose_type;
        if($ztype != $order->type) return false;

        //validate rent duration
        $dur = $order->rent_for;
        if(!$this->valid->isFloat($dur) && !$dur <= 0) {
            return false;
        }

        //validate skill price
        $s_dur = $order->skill_for;
        if( $order->need_skill && !$this->valid->isFloat($s_dur) && !$s_dur <= 0 ) {
            return false;
        }

        return true;
    }

    public function calculatePrice($item) {
        if ($item->price_term == 'Hour') {
            $price = $item->p_price_hour;
        }
        else if($item->price_term == 'Day') {
            $price = $item->p_price_day;
        }
        else {
            $price = $item->p_price_month;
        }

        $duration = $item->duration;

        $skill_price = null;
        $skill_duration = null;


        if ($item -> skill != null) {
            if ($item->skill == 'Hour') {
                $skill_price = $item->p_s_price_hour;
            }
            else if($item->skill == 'Day') {
                $skill_price = $item->p_s_price_day;
            }
            else {
                $skill_price = $item->p_s_price_month;
            }

            $skill_duration = $item->skill_duration;
        }
        $tax = $this->TaxModel->loadTax($item->product_id);
        if($tax != null)
            $tax = $this->TaxModel->getTaxClass($tax->tax_class_id);
        else $tax = 0;

        $deposit = $item->deposit * $item->c_quantity;
        $taxable = ( $skill_duration * $skill_price ) + ( $price * $duration ) * $item->c_quantity;

        $total = $deposit + (  $tax  *  ( $taxable / 100 ) ) + $taxable;

        return $total;
    }

    public function checkout() {
        $cart = $this->getCart();
        //all requests must be made to order requets

        //addresses should be checked
        if($this->input->get('address') == null) {
            $address = $this->UsersModel->getAddressFromForm();
            if($address == null) {
                //not a valid address provided / no address provided
                $this->session->set_userdata('error', 'Add a valid address.');
                redirect('Cart/checkoutDestination');
            }
        }
        else {
            $id = $this->input->get('address');
            $address = $this->UsersModel->loadAddress($id);
            if(count($address) < 1) {
                //not a valid address id
                $this->session->set_userdata('error', 'Select a valid address.');
                redirect('Cart/checkoutDestination');
            }
            $address = $address[0];
        }

        $address_id = $this->OrdersModel->addOrderAddress($address);

        if($cart != null)
            //request zemoses must be made to orders
            foreach ($cart as $cart_item) {
                //validate cart item
                if($this->isValidCartItem($cart_item)) {

                    $type = $cart_item->zemose_type;
                    if ($type == 'request') {
                        //convert to order
                        $this->OrdersModel->createOrderFromRequest($cart_item, $address_id);
                    } else {
                        //it is an express zemose, do nothing for now
                    }
                }
            }

        redirect('/Orders');
        //all express zemoses must ask for payements
        //calculate the price
        //and take the user to my orders page
    }

    public function isValidCartItem($cart_item) {
        $inv_id = $cart_item->inventory_id;
        $inv = $this->InventoryModel->getSingle($inv_id);
        $uid = $this->session->userdata('user_id');
        if($inv->zemoser_id == $uid) {
            $this->session->set_userdata('warning', 'Some cart Items where invalid, they were removed.');
            $this->removeCartItem($cart_item->id);

            return false;
        }

        return true;
    }

    public function getPriceTerm($item) {
        if ($item->price_term == 'Hour') {
            $price = $item->p_price_hour;
        }
        else if($item->price_term == 'Day') {
            $price = $item->p_price_day;
        }
        else {
            $price = $item->p_price_month;
        }

        return $price;
    }

    public function getSkillPrice ($item) {
        if ($item -> skill != null) {
            if ($item->skill == 'Hour') {
                $skill_price = $item->p_s_price_hour;
            }
            else if($item->skill == 'Day') {
                $skill_price = $item->p_s_price_day;
            }
            else {
                $skill_price = $item->p_s_price_month;
            }
        }
        else return 0;

        return $skill_price;
    }

    public function removeCartItem($item_id = 0) {
        if($item_id == 0) {
            return false;
        }

        $sql = "DELETE FROM cart WHERE id = ?";
        $query = $this->db->query($sql, array($item_id));

        return $query;
    }

    public function verifyOwner($id) {
        if($this->util->verifyLogin() == 1) {
            //get user_id
            $user = $this->session->userdata('user_id');
            //check if the cart item is in user_id
            $sql = "SELECT * FROM cart WHERE id = ? AND user_id = ?";
            $query = $this->db->query($sql, array($id, $user));

            if($query->num_rows() > 0) return true;
            else return false;
        }
        else {
            //visitor
            $visitor = $this->VisitorModel->getVisitor();
            if($visitor!=null) {
                $vid = $visitor->visitor_id;
                $sql = "SELECT * FROM cart WHERE id = ? AND visitor_id = ?";
                $query = $this->db->query($sql, array($id, $vid));
                
                if($query->num_rows() > 0) return true;
                else return false;
            }
            else return false;
        }
    }

    public function calculateDateInterval($type, $mult) {
        $ps = 'P';
        $ts = 'T';
        if($type == 'Hour') {
            $ts .= ($mult . 'H');
        }
        else if ($type == 'Day') {
            $ps .= ($mult . 'D');
        }
        else {
            $nm = $mult * 28;
            $ps .= ($nm . 'D');
        }

        if($type == 'Hour')
            return new DateInterval($ps.$ts);
        else
            return new DateInterval($ps);
    }

    public function upgradeCart($id) {
        //code to transfer cart data to users
        $lu = $this->VisitorModel->getVisitor();
        $sql = "UPDATE cart SET user_id = ? WHERE visitor_id = ?";
        $this->db->query($sql, array($id, $lu->visitor_id));
    }

    public function increaseQuantity() {
        $cart_id = $this->input->get('cart_id');
        $user_id = $this->session->userdata('user_id');
        $data = (object) array(
            'status' => false,
            'message' => "No valid id."
        );

        if($cart_id == null)
        {
            $data -> status = false;
            $data -> message = "No valid id.";
            return $data;
        }

        $sql = "SELECT *,c.quantity AS c_quantity FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id = ?";
        $query = $this->db->query($sql, array(
            $cart_id
        ));
        $res = $query->result();
        if($query->num_rows() == 0) {
            $data -> status = false;
            $data -> message = "No valid id.";

            return $data;
        }
        $cart = $res[0];

        if($this->verifyOwner($cart->id)) {
            $q = $cart->c_quantity;
            if ($q < $cart->quantity) {
                $q++;
                $sql = "UPDATE cart SET quantity = ? WHERE id = ?";
                $query = $this->db->query($sql, array(
                    $q,
                    $cart->id
                ));

                $data->status = true;
                $data->message = "Updated successfully!";
                $p = $this->getPrice($cart->id);
                $data->price = number_format($p->price,2,".",",");
                $data->total = number_format($p->total,2,".",",");

                return $data;
            } else {
                $data->status = false;
                $data->message = "Quantity cannot be increased.";

                return $data;
            }
        }
        else {
            $data->message = "Not Authorized.";
            return $data;
        }
    }

    public function decreaseQuantity() {
        $cart_id = $this->input->get('cart_id');
        $user_id = $this->session->userdata('user_id');
        $data = (object) array(
            'status' => false,
            'message' => "No valid id."
        );

        if($cart_id == null)
        {
            $data -> status = false;
            $data -> message = "No valid id.";
            return $data;
        }

        $sql = "SELECT *,c.quantity AS c_quantity FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id = ?";
        $query = $this->db->query($sql, array(
            $cart_id
        ));
        $res = $query->result();
        if($query->num_rows() == 0) {
            $data -> status = false;
            $data -> message = "No valid id.";

            return $data;
        }
        $cart = $res[0];

        if($this->verifyOwner($cart->id)) {
            $q = $cart->c_quantity;
            if ($q > 1) {
                $q--;
                $sql = "UPDATE cart SET quantity = ? WHERE id = ?";
                $query = $this->db->query($sql, array(
                    $q,
                    $cart->id
                ));

                $data->status = true;
                $data->message = "Updated successfully!";
                $p = $this->getPrice($cart->id);
                $data->price = number_format($p->price,2,".",",");
                $data->total = number_format($p->total,2,".",",");

                return $data;
            } else {
                $data->status = false;
                $data->message = "Quantity cannot be decreased.";

                return $data;
            }
        }
        else {
            $data->message = "Not Authorized.";
            return $data;
        }
    }

    public function getPrice($cart_id) {
        $cart = $this->CartModel->getCart();

        $total = 0;
        $p = 0;

        if ($cart != null)
            foreach ($cart as $cartitem) {
                $net = $this->CartModel->calculatePrice($cartitem);
                if($cartitem->id == $cart_id) $p = $net;
                $total += $net;
            }

        return (object) array(
            'price' => $p,
            'total' => $total
        );
    }

}