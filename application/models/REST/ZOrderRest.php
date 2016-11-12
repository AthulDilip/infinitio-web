<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 7/11/16
 * Time: 10:38 PM
 */

/**
 * Class OrderRest
 * @property Util $util
 * @property UserRest $UserRest
 * @property OrdersModel $OrdersModel
 */
class ZOrderRest extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('REST/UserRest');
        $this->load->library('Util');
        $this->load->model('OrdersModel');
    }

    public function getCancelledOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4D201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;

        $sql = "SELECT *,
                pd.name AS product_name,
                oa.phone AS phone_a,
                oa.name AS name_a,
                oa.streetaddress AS streetaddress_a,
                oa.city AS city_a,
                oa.lat AS lat_a,
                oa.lon AS lon_a,
                oa.pin AS pin_a
                FROM (SELECT * FROM orders WHERE status IN (-2, -1)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_address oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = ? ORDER BY o.order_date LIMIT ?,?";
        $query = $this->db->query ($sql, array(
            $userId,
            (int)$offset,
            (int)$limit
        ));

        //return ($query->result());
        $res = $query->result();
        $new = array();
        foreach ($res as $oval) {
            $new[] = (object) array(
                'id' => $oval -> order_id,
                'fromDate' => $this->util->formatTime($oval->from_date)->full,
                'toDate' => $this->util->formatTime($oval->to_date)->full,
                'orderCode' => $oval->order_code,
                'amount' => $oval->amount,
                'status' => $oval->status,
                'rentPrice' => $oval -> rent_price,
                'rentFor' => $oval -> rent_for,
                'rentTerm' => $oval -> rent_term,
                'skillTerm' => $oval -> skill_term,
                'skillFor' => $oval -> skill_for,
                'skillPrice' => $oval -> skill_price,
                'inventory' => (object) array(
                    'id' => $oval->inventory_id,
                    'product' => (object) array(
                        'id' => $oval->product_id,
                        'zuin' => $oval->zuid,
                        'name' => $oval->product_name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                ),
                'personal' => (object)array(
                    'email' => $oval->email,
                    'phone' => $oval->phone,
                    'firstName' => $oval->firstname,
                    'lastName' => $oval->lastname,
                    'profilePicture' => $this->UserRest->getProfilePic($oval)
                ),
                'address' => (object)array(
                    'name' => $oval->name_a,
                    'streetaddress' => $oval->streetaddress_a,
                    'city' => $oval->city_a,
                    'lat' => $oval->lat_a,
                    'lon' => $oval->lon_a,
                    'pin' => $oval -> pin_a,
                    'phone' => $oval -> phone_a
                )
            );
        }

        return $new;
    }

    public function getOngoingOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4E201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;


        $sql = "SELECT *,
                pd.name AS product_name,
                oa.phone AS phone_a,
                oa.name AS name_a,
                oa.streetaddress AS streetaddress_a,
                oa.city AS city_a,
                oa.lat AS lat_a,
                oa.lon AS lon_a,
                oa.pin AS pin_a
                FROM (SELECT * FROM orders WHERE status NOT IN (-2, -1, 5, 99)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_address oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = ? ORDER BY o.order_date LIMIT ?,?";
        $query = $this->db->query ($sql, array(
            $userId,
            (int)$offset,
            (int)$limit
        ));

        //return ($query->result());
        $res = $query->result();
        $new = array();
        foreach ($res as $oval) {
            $new[] = (object) array(
                'id' => $oval -> order_id,
                'fromDate' => $this->util->formatTime($oval->from_date)->full,
                'toDate' => $this->util->formatTime($oval->to_date)->full,
                'orderCode' => $oval->order_code,
                'amount' => $oval->amount,
                'status' => $oval->status,
                'rentPrice' => $oval -> rent_price,
                'rentFor' => $oval -> rent_for,
                'rentTerm' => $oval -> rent_term,
                'skillTerm' => $oval -> skill_term,
                'skillFor' => $oval -> skill_for,
                'skillPrice' => $oval -> skill_price,
                'inventory' => (object) array(
                    'id' => $oval->inventory_id,
                    'product' => (object) array(
                        'id' => $oval->product_id,
                        'zuin' => $oval->zuid,
                        'name' => $oval->product_name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                ),
                'personal' => (object)array(
                    'email' => $oval->email,
                    'phone' => $oval->phone,
                    'firstName' => $oval->firstname,
                    'lastName' => $oval->lastname,
                    'profilePicture' => $this->UserRest->getProfilePic($oval)
                ),
                'address' => (object)array(
                    'name' => $oval->name_a,
                    'streetaddress' => $oval->streetaddress_a,
                    'city' => $oval->city_a,
                    'lat' => $oval->lat_a,
                    'lon' => $oval->lon_a,
                    'pin' => $oval -> pin_a,
                    'phone' => $oval -> phone_a
                )
            );
        }

        return $new;
    }

    public function getFinishedOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4F201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;


        $sql = "SELECT *,
                pd.name AS product_name,
                oa.phone AS phone_a,
                oa.name AS name_a,
                oa.streetaddress AS streetaddress_a,
                oa.city AS city_a,
                oa.lat AS lat_a,
                oa.lon AS lon_a,
                oa.pin AS pin_a
                FROM (SELECT * FROM orders WHERE status IN (5, 99)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_address oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = ? ORDER BY o.order_date LIMIT ?,?";
        $query = $this->db->query ($sql, array(
            $userId,
            (int)$offset,
            (int)$limit
        ));

        //return ($query->result());
        $res = $query->result();
        $new = array();
        foreach ($res as $oval) {
            $new[] = (object) array(
                'id' => $oval -> order_id,
                'fromDate' => $this->util->formatTime($oval->from_date)->full,
                'toDate' => $this->util->formatTime($oval->to_date)->full,
                'orderCode' => $oval->order_code,
                'amount' => $oval->amount,
                'status' => $oval->status,
                'rentPrice' => $oval -> rent_price,
                'rentFor' => $oval -> rent_for,
                'rentTerm' => $oval -> rent_term,
                'skillTerm' => $oval -> skill_term,
                'skillFor' => $oval -> skill_for,
                'skillPrice' => $oval -> skill_price,
                'inventory' => (object) array(
                    'id' => $oval->inventory_id,
                    'product' => (object) array(
                        'id' => $oval->product_id,
                        'zuin' => $oval->zuid,
                        'name' => $oval->product_name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                ),
                'personal' => (object)array(
                    'email' => $oval->email,
                    'phone' => $oval->phone,
                    'firstName' => $oval->firstname,
                    'lastName' => $oval->lastname,
                    'profilePicture' => $this->UserRest->getProfilePic($oval)
                ),
                'address' => (object)array(
                    'name' => $oval->name_a,
                    'streetaddress' => $oval->streetaddress_a,
                    'city' => $oval->city_a,
                    'lat' => $oval->lat_a,
                    'lon' => $oval->lon_a,
                    'pin' => $oval -> pin_a,
                    'phone' => $oval -> phone_a
                )
            );
        }

        return $new;
    }

    public function getOrders($user_id) {
        if($user_id == null) throw new PixelArgumentException('4C201|No user ID found.');
        $ret = (object) array(
            'ongoing' => $this->getOngoingOrders($user_id, 0, 10),
            'finished' => $this->getFinishedOrders($user_id, 0, 10),
            'cancelled' => $this->getCancelledOrders($user_id, 0, 10)
        );

        return $ret;
    }

    public function getRequests($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4F201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;


        $sql = "SELECT *,
                pd.name AS product_name,
                oa.phone AS phone_a,
                oa.name AS name_a,
                oa.streetaddress AS streetaddress_a,
                oa.city AS city_a,
                oa.lat AS lat_a,
                oa.lon AS lon_a,
                oa.pin AS pin_a
                FROM (SELECT * FROM orders WHERE status IN (0)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_address oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = ? ORDER BY o.order_date LIMIT ?,?";
        $query = $this->db->query ($sql, array(
            $userId,
            (int)$offset,
            (int)$limit
        ));

        //return ($query->result());
        $res = $query->result();
        $new = array();
        foreach ($res as $oval) {
            $new[] = (object) array(
                'id' => $oval -> order_id,
                'fromDate' => $this->util->formatTime($oval->from_date)->full,
                'toDate' => $this->util->formatTime($oval->to_date)->full,
                'orderCode' => $oval->order_code,
                'amount' => $oval->amount,
                'status' => $oval->status,
                'rentPrice' => $oval -> rent_price,
                'rentFor' => $oval -> rent_for,
                'rentTerm' => $oval -> rent_term,
                'skillTerm' => $oval -> skill_term,
                'skillFor' => $oval -> skill_for,
                'skillPrice' => $oval -> skill_price,
                'inventory' => (object) array(
                    'id' => $oval->inventory_id,
                    'product' => (object) array(
                        'id' => $oval->product_id,
                        'zuin' => $oval->zuid,
                        'name' => $oval->product_name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                ),
                'personal' => (object)array(
                    'email' => $oval->email,
                    'phone' => $oval->phone,
                    'firstName' => $oval->firstname,
                    'lastName' => $oval->lastname,
                    'profilePicture' => $this->UserRest->getProfilePic($oval)
                ),
                'address' => (object)array(
                    'name' => $oval->name_a,
                    'streetaddress' => $oval->streetaddress_a,
                    'city' => $oval->city_a,
                    'lat' => $oval->lat_a,
                    'lon' => $oval->lon_a,
                    'pin' => $oval -> pin_a,
                    'phone' => $oval -> phone_a
                )
            );
        }

        return $new;
    }

    public function isAuthorizedZemoser($order, $user_id) {
        if($user_id == $order->zemoser_id) {
            return true;
        }
        else {
            return false;
        }
    }

    public function isAuthorizedZemose($order, $user_id) {
        if($user_id == $order->user_id) {
            return true;
        }
        else {
            return false;
        }
    }

    public function requestAction($userId, $orderId, $action) {
        if($userId == null)
            throw new PixelRequestException("4H202|Cannot identify the order.");
        if($orderId == null)
            throw new PixelArgumentException("4H201|No user ID.");
        if($action == null || ($action != 'accept' && $action != 'reject'))
            throw new PixelArgumentException("4H203|No action specified.");

        $order = $this->OrdersModel->getOrder($orderId);
        if($order == null)
            throw new PixelRequestException("4H202|Cannot identify the order.");
        if(!$this->isAuthorizedZemoser($order, $userId))
            throw new PixelArgumentException("4H204|You are not authorized to access this resource.");
        if($order->status != 0)
            throw new PixelArgumentException("4H205|Invalid action.");

        if($action == "accept") {
            $sql = "UPDATE orders SET status = 1 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order->order_id));

            //add order_action denoting the time for accepted step
            $sql = "INSERT INTO order_actions(order_id, action, date) VALUES (?,?,?)";
            $data = array(
                $order->order_id,
                1,
                $this->util->getDateTime()
            );

            $this->db->query($sql, $data);
        }
        else {
            //the order is in the request phase, update to rejected state
            $sql = "UPDATE orders SET status = -2 WHERE order_id = ?";
            $query = $this->db->query($sql, array($order->order_id));

            //add order_action denoting the time of rejection
            $sql = "INSERT INTO order_actions(order_id, action, date) VALUES (?,?,?)";
            $data = array(
                $order->order_id,
                -2,
                $this->util->getDateTime()
            );

            $this->db->query($sql, $data);
        }

        return true;
    }

}