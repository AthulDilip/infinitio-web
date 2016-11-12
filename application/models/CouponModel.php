<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/11/16
 * Time: 11:30 PM
 */
class CouponModel extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->library('Valid');
    }

    public function getCoupons($search, $offset, $limit) {
        if($search == null || trim($search) == '') $search = null;
        if($limit == null || $limit < 10) $limit = 10;
        if($offset == null || $offset < 0) $offset = 0;

        $sql = "SELECT * FROM coupons";
        $csql = "SELECT COUNT(*) AS count FROM coupons";
        if($search != null) {
            $sql .= ' WHERE coupon_name LIKE ? OR coupon_code LIKE ? LIMIT ?,?';
            $csql .= ' WHERE coupon_name LIKE ? OR coupon_code LIKE ?';
            $query = $this->db->query($sql, array(
                '%' . $search . '%',
                '%' . $search . '%',
                (int)$offset,
                (int)$limit
            ));
            $cquery = $this->db->query($csql, array(
                '%' . $search . '%',
                '%' . $search . '%'
            ));
        }
        else {
            $sql .= ' LIMIT ?,?';
            $query = $this->db->query($sql, array(
                (int)$offset,
                (int)$limit
            ));
            $cquery = $this->db->query($csql, array());
        }

        $coupons = $query->result();
        $count = $cquery->result()[0]->count;

        $url = base_url() . 'gdf79/';
        $new = array();
        foreach ($coupons as $coupon) {
            $act = ($coupon->active == 1) ? 'Deactivate' : 'Activate';
            $new[] = array(
                'id' => $coupon->coupon_id,
                'name' => $coupon->coupon_name,
                'code' => $coupon->coupon_code,
                'status' => ($coupon->active == 1) ? 'Active' : 'Inactive',
                'menu' => '<a href="'.$url.'Coupons/edit/'.$coupon->coupon_id.'" class=" btn btn-primary">Edit</svg></a>&nbsp;<a href="'.$url.'Coupons/deactivate/'.$coupon->coupon_id.'" class=" btn btn-danger">'.$act.'</svg></a>&nbsp;<a href="'.$url.'Coupons/remove/'.$coupon->coupon_id.'" class=" btn btn-danger">Remove</svg></a>'
            );
        }

        $data = array(
            'total' => $count,
            'rows' => $new
        );

        return $data;
    }

    public function deact($coupon_id) {
        if($coupon_id == null) return false;
        $sql = "SELECT * FROM coupons WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            $coupon_id
        ));

        if(!$query->num_rows() > 0) return false;
        $c = $query->result()[0];
        $act = ($c->active == 1) ? 0 : 1;

        $sql = "UPDATE coupons SET active = ? WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            $act,
            $c->coupon_id
        ));

        return $query;
    }

    /**
     * @return string
     */
    public function generateCoupon() {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = 'Z';

        for ($i = 0; $i < 5; $i++) {
            $code .= $chars[ rand( 0, strlen( $chars ) - 1 ) ];
        }

        return $code;
    }

    /**
     * @return array()
     */
    public function save() {
        /*
         * {
         * "code":"ZE0R66",
         * "type":"percent",
         * "recurring":"yes",
         * "recurring_value":"12",
         * "value":"50",
         * "category":["8","10"],
         * "product":["15"],
         * "start_date":"2016-11-05",
         * "expiry_date":"2016-11-05",
         * "max_use":"15"
         * }
         */

        $name = $this->input->post('name');
        $code = $this->input->post('code');
        $type = $this->input->post('type');
        $rc = $this->input->post('recurring'); //if yes, expect the value of recurring value to not be empty
        $rc_val = $this->input->post('recurring_value');
        $value = $this->input->post('value');
        $cats = $this->input->post('category');
        $pro = $this->input->post('product');
        $d_start = $this->input->post('start_date');
        $d_expiry = $this->input->post('expiry_date');
        $max_use = $this->input->post('max_use');

        $data = (object)array(
            'status' => false,
            'message' => "Error while processing."
        );

        if($code == null || $code == ''){
            $data->message = "Code cannot be empty.";
            return $data;
        }

        if($name == null || $name == '') {
            $data->message = "Name cannot be empty.";
            return $data;
        }

        if($this->invalid($code)) {
            $data->message = "Code already exists, please modify or generate.";
            return $data;
        }

        if($type != 'percent' && $type != 'price') {
            $data->message = "Type is invalid.";
            return $data;
        }

        if($rc != null && $rc != 'yes') {
            $data->message = "Invalid data.";
            return $data;
        }

        if($rc == 'yes') $rc = $rc_val;
        else $rc = null;

        if($rc != 0 && !is_numeric($rc_val)) {
            $data->message = "Enter a valid recurring data.";
            return $data;
        }

        if(!$this->valid->isFloat($value)) {
            $data->message = "Enter a valid value for discount.";
            return $data;
        }

        if($cats == null && $pro == null) {
            $data->message = "Invalid data.";
            return $data;
        }

        $start_date = null;
        if($d_start != '') {
            //take no date
            log_message('DEBUG', "START : " . $d_start);
            $start = DateTime::createFromFormat('Y-m-d', $d_start, new DateTimeZone('Asia/Kolkata'));
            if ($start == false) {
                $data->message = "Invalid start time.";
                return $data;
            }
            $start->setTimezone(new DateTimeZone('GMT'));
            $start_date = $start->format('Y-m-d H:i:s');
        }

        $expiry_date = null;
        if($d_expiry != '') {
            //take no date
            log_message('DEBUG', "EXPIRY : " . $d_expiry);
            $expiry = DateTime::createFromFormat('Y-m-d', $d_expiry, new DateTimeZone('Asia/Kolkata'));

            if ($expiry == false) {
                $data->message = "Invalid expiry time.";
                return $data;
            }
            $expiry->setTimezone(new DateTimeZone('GMT'));
            $expiry_date = $expiry->format('Y-m-d H:i:s');
        }

        if($max_use == null || !is_numeric($max_use)) {
            $data->message = "Invalid max use value.";
            return $data;
        }

        $sql = "INSERT INTO coupons(coupon_id, coupon_name, coupon_code, coupon_type, recur, value, start_date, expiry_date, maximum_uses, active) 
VALUES(NULL , ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $this->db->query($sql, array(
            $name,
            $code,
            $type,
            $rc,
            $value,
            $start_date,
            $expiry_date,
            ($max_use == 0) ? null : $max_use,
            1
        ));

        if(!$query) {
            $data->message = "Failed to save data.";
            return $data;
        }

        $sql = "SELECT LAST_INSERT_ID() AS coupon_id";
        $query = $this->db->query($sql, array());

        $coupon_id = $query->result()[0] -> coupon_id;

        if($cats != null)
            foreach ($cats as $cat_id) {
                $sql = "INSERT INTO coupon_categories(coupon_id, cid) VALUES(?, ?)";
                $query = $this->db->query($sql, array(
                    $coupon_id,
                    (int)$cat_id
                ));
            }

        if($pro != null)
            foreach ($pro as $product_id) {
                $sql = "INSERT INTO coupon_products(coupon_id, product_id) VALUES(?, ?)";
                $query = $this->db->query($sql, array(
                    $coupon_id,
                    (int)$product_id
                ));
            }

        $this->session->set_userdata('msg', "Successfully saved all data.");
        $data->status = true;
        $data->message = "Successfully saved all data.";
        return $data;
    }

    /**
     * @param $code 'the coupon code to test'
     * @return bool
     */
    public function invalid($code) {
        $sql = "SELECT * FROM coupons WHERE coupon_code = ?";
        $query = $this->db->query($sql, array(
            $code
        ));

        if($query->num_rows() > 0) {
            return true;
        }

        return false;
    }

    public function getCoupon($coupon_id) {
        if($coupon_id == null) return null;

        $sql = "SELECT * FROM coupons WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            (int)$coupon_id
        ));

        if($query->num_rows() < 1) {
            return null;
        }

        $coupon = (object) array(
            'data' => $query->result()[0],
            'cats' => array(),
            'prod' => array()
        );

        $sql = "SELECT * FROM coupon_categories WHERE coupon_id = ?";
        $query = $this->db->query($sql, array($coupon_id));
        if($query->num_rows() < 1) $coupon->cats = null;
        else $coupon->cats = $query->result();


        $sql = "SELECT * FROM coupon_products WHERE coupon_id = ?";
        $query = $this->db->query($sql, array($coupon_id));
        if($query->num_rows() < 1) $coupon->prod = null;
        else $coupon->prod = $query->result();

        return $coupon;
    }

    /**
     * @return array()
     */
    public function update() {
        /*
         * {
         * "code":"ZE0R66",
         * "type":"percent",
         * "recurring":"yes",
         * "recurring_value":"12",
         * "value":"50",
         * "category":["8","10"],
         * "product":["15"],
         * "start_date":"2016-11-05",
         * "expiry_date":"2016-11-05",
         * "max_use":"15"
         * }
         */

        $coupon_id = $this->input->post('coupon_id');

        $name = $this->input->post('name');
        $type = $this->input->post('type');
        $rc = $this->input->post('recurring'); //if yes, expect the value of recurring value to not be empty
        $rc_val = $this->input->post('recurring_value');
        $value = $this->input->post('value');
        $cats = $this->input->post('category');
        $pro = $this->input->post('product');
        $d_start = $this->input->post('start_date');
        $d_expiry = $this->input->post('expiry_date');
        $max_use = $this->input->post('max_use');

        $data = (object)array(
            'status' => false,
            'message' => "Error while processing."
        );

        if($name == null || $name == '') {
            $data->message = "Name cannot be empty.";
            return $data;
        }


        if($coupon_id == null) {
            $data->message = "Invalid coupon, error in request.";
            return $data;
        }

        if($type != 'percent' && $type != 'price') {
            $data->message = "Type is invalid.";
            return $data;
        }

        if($rc != null && $rc != 'yes') {
            $data->message = "Invalid data.";
            return $data;
        }

        if($rc == 'yes') $rc = $rc_val;
        else $rc = null;

        if($rc != 0 && !is_numeric($rc_val)) {
            $data->message = "Enter a valid recurring data.";
            return $data;
        }

        if(!$this->valid->isFloat($value)) {
            $data->message = "Enter a valid value for discount.";
            return $data;
        }

        if($cats == null && $pro == null) {
            $data->message = "Invalid data.";
            return $data;
        }

        $start_date = null;
        if($d_start != '') {
            //take no date
            $start = DateTime::createFromFormat('Y-m-d', $d_start, new DateTimeZone('Asia/Kolkata'));
            if ($start == false) {
                $data->message = "Invalid start time.";
                return $data;
            }
            $start->setTimezone(new DateTimeZone('GMT'));
            $start_date = $start->format('Y-m-d H:i:s');
        }

        $expiry_date = null;
        if($d_expiry != '') {
            //take no date
            log_message('DEBUG', "EXPIRY : " . $d_expiry);
            $expiry = DateTime::createFromFormat('Y-m-d', $d_expiry, new DateTimeZone('Asia/Kolkata'));

            if ($expiry == false) {
                $data->message = "Invalid expiry time.";
                return $data;
            }
            $expiry->setTimezone(new DateTimeZone('GMT'));
            $expiry_date = $expiry->format('Y-m-d H:i:s');
        }

        if($max_use == null || !is_numeric($max_use)) {
            $data->message = "Invalid max use value.";
            return $data;
        }

        $sql = "
            UPDATE coupons SET
              coupon_name = ?,
              coupon_type = ?,
              recur = ?,
              value = ?,
              start_date = ?,
              expiry_date = ?,
              maximum_uses = ? WHERE coupon_id = ?
        ";
        $query = $this->db->query($sql, array(
            $name,
            $type,
            $rc,
            $value,
            $start_date,
            $expiry_date,
            ($max_use == 0) ? null : $max_use,
            $coupon_id
        ));

        if(!$query) {
            $data->message = "Failed to save data.";
            return $data;
        }

        $sql = "DELETE FROM coupon_categories WHERE coupon_id = ?";
        $query = $this->db->query($sql, array($coupon_id));

        if($cats != null)
            foreach ($cats as $cat_id) {
                $sql = "INSERT INTO coupon_categories(coupon_id, cid) VALUES(?, ?)";
                $query = $this->db->query($sql, array(
                    $coupon_id,
                    (int)$cat_id
                ));
            }


        $sql = "DELETE FROM coupon_products WHERE coupon_id = ?";
        $query = $this->db->query($sql, array($coupon_id));

        if($pro != null)
            foreach ($pro as $product_id) {
                $sql = "INSERT INTO coupon_products(coupon_id, product_id) VALUES(?, ?)";
                $query = $this->db->query($sql, array(
                    $coupon_id,
                    (int)$product_id
                ));
            }

        $this->session->set_userdata('msg', "Successfully saved all data.");
        $data->status = true;
        $data->message = "Successfully saved all data.";
        return $data;
    }

    public function remove($coupon_id) {
        if($coupon_id == null) return false;

        $sql = "DELETE FROM coupons WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            $coupon_id
        ));
        $sql = "DELETE FROM coupon_categories WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            $coupon_id
        ));
        $sql = "DELETE FROM coupon_products WHERE coupon_id = ?";
        $query = $this->db->query($sql, array(
            $coupon_id
        ));

        return true;
    }
}