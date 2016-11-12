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
 */
class OrderRest extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getCancelledOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4D201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;

        $sql = "SELECT * FROM (SELECT * FROM orders WHERE status IN (-2, -1)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image)  WHERE pd.language_id = 1 AND o.user_id = ? ORDER BY o.order_date LIMIT ?,?";
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
                        'name' => $oval->name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                )
            );
        }

        return $new;
    }

    public function getOngoingOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4E201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;

        $sql = "SELECT * FROM (SELECT * FROM orders WHERE status NOT IN (5,99,-2,-1)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image)  WHERE pd.language_id = 1 AND o.user_id = ? ORDER BY o.order_date LIMIT ?,?";
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
                        'name' => $oval->name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
                )
            );
        }

        return $new;
    }

    public function getFinishedOrders($userId, $offset, $limit) {
        if($userId == null) throw new PixelArgumentException("4F201|No user ID provided.");
        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;

        $sql = "SELECT * FROM (SELECT * FROM orders WHERE status IN (5, 99)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image)  WHERE pd.language_id = 1 AND o.user_id = ? ORDER BY o.order_date LIMIT ?,?";
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
                        'name' => $oval->name,
                        'image' => base_url() . 'static/content/product-images/' . $oval->image
                    )
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

}