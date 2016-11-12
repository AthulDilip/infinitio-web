<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 29/7/16
 * Time: 1:45 PM
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
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class InventoryModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->library('valid');
    }

    public function save() {
        $data = array(
            'status' => false,
            'message' => 'Unknown Error.'
        );
        $zemose_type = $this->input->post('zemose_type');
        $deposit = $this->input->post('deposit');

        $qua = $this->input->post('quantity');
        $lat = $this->input->post('latitude');
        $long = $this->input->post('longitude');
        
        $location = $this->input->post('location');
        $hourSale = $this->input->post('price_hour');
        $daySale = $this->input->post('price_day');
        $monthSale = $this->input->post('price_month');

        $priceHour = $this->input->post('p_price_hour');
        $priceDay = $this->input->post('p_price_day');
        $priceMonth = $this->input->post('p_price_month');

        $skill = $this->input->post('skilled_labour');
        $cskill = $this->input->post('c_skilled_labour');

        $sHourSale = $this->input->post('s_price_hour');
        $sDaySale = $this->input->post('s_price_day');
        $sMonthSale = $this->input->post('s_price_month');

        $sPriceHour = $this->input->post('s_p_price_hour');
        $sPriceDay = $this->input->post('s_p_price_day');
        $sPriceMonth = $this->input->post('s_p_price_month');

        $provideDel = $this->input->post('provide_delivery');
        $delPrice = $this->input->post('p_delivery');
        $delArea = $this->input->post('p_delivery_area');

        if($zemose_type != 'express' && $zemose_type != 'request') {
            $data['message'] = 'The zemose type is not valid.';
            return $data;
        }

        if(!$this->valid->isNum($qua)) {
            log_message('DEBUG', $qua);
            $data['message'] = 'The quantity is not valid.';
            return $data;
        }

        if($deposit == null || !$this->valid->isFloat($deposit)) {
            $data['message'] = 'Specify a deposit.';
            return $data;
        }

        /*$lat = substr($lat, 0, 14);
        if(!$this->valid->isFloat($lat)) {
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }

        $long = substr($long, 0, 14);
        if(!$this->valid->isFloat($long)) {
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }*/

        if($location == null || $location == '') {
            log_message('DEBUG', $location);
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }

        if($hourSale != null && !$this->valid->isFloat($priceHour)) {
            $data['message'] = 'The Per hour price is not valid.';
            return $data;
        }

        if($daySale != null && !$this->valid->isFloat($priceDay)) {
            $data['message'] = 'The Per day price is not valid.';
            return $data;
        }

        if($monthSale != null && !$this->valid->isFloat($priceMonth)) {
            $data['message'] = 'The Per month price is not valid.';
            return $data;
        }

        if($hourSale == null && $daySale == null && $monthSale == null) {
            $data['message'] = 'No price specified.';
            return $data;
        }

        if($skill == '1') {
            if($sHourSale == null && $sDaySale == null && $sMonthSale == null) {
                $data['message'] = 'The Price should be set (Skilled Labour).';
                return $data;
            }
            if($sHourSale != null && !$this->valid->isFloat($sPriceHour)) {
                $data['message'] = 'The Per hour price is not valid (Skilled Labour).';
                return $data;
            }

            if($sDaySale != null && !$this->valid->isFloat($sPriceDay)) {
                $data['message'] = 'The Per day price is not valid (Skilled Labour).';
                return $data;
            }

            if($sMonthSale != null && !$this->valid->isFloat($sPriceMonth)) {
                $data['message'] = 'The Per month price is not valid (Skilled Labour).';
                return $data;
            }
        }

        if($provideDel == '1' && !$this->valid->isFloat($delPrice)) {
            $data['message'] = 'Specify a delivery rate if you provide delivery.';
            return $data;
        }

        if($provideDel == '1' && !$this->valid->isFloat($delArea) ) {
            $data['message'] = 'Specify a delivery Area if you provide delivery.';
            return $data;
        }

        $pid = $this->input->post('pid');
        if($pid == null) {
            $data['message'] = 'Looks like you are adding a product that is not valid.';
            return $data;
        }

        $psql = "SELECT * FROM products WHERE product_id = ?";
        $pquery = $this->db->query($psql, array($pid));

        if(count($pquery->result()) < 1) {
            $data['message'] = 'Looks like you are adding a product that is not valid (May have beeen removed).';
            return $data;
        }
        $product = $pquery->result()[0];
        $pid = $product->product_id;

        $uid = $this->session->userdata('user_id');
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($uid));
        $user = $query->result();

        if(!count ($user) > 0) {
            $data['message'] = 'Invalid user id - Some error occured.';
            return $data;
        }
        $user = $user[0];

        $active = ( $user -> zemoser == 1 ) ? 1 : 0;

        $hourSale = $hourSale == null ? 0 : 1;
        $daySale = $daySale == null ? 0 : 1;
        $monthSale = $monthSale == null ? 0 : 1;

        $sHourSale = $sHourSale == null ? 0 : 1;
        $sDaySale = $sDaySale == null ? 0 : 1;
        $sMonthSale = $sMonthSale == null ? 0 : 1;

        $skill = $skill == '1' ? 1 : 0;
        $cskill = $skill == 1 && $cskill == '1' ? 1 : 0;
        $provideDel = $provideDel == '1' ? 1 : 0;

        $priceHour = $hourSale == '1' ? $priceHour : null;
        $priceDay = $daySale == '1' ? $priceDay : null;
        $priceMonth = $monthSale == '1' ? $priceMonth : null;

        $sPriceHour = $sHourSale == '1' ? $sPriceHour : null;
        $sPriceDay = $sDaySale == '1' ? $sPriceDay : null;
        $sPriceMonth = $sMonthSale == '1' ? $sPriceMonth : null;

        $currency = 1;

        $sql = "INSERT INTO inventory (inventory_id, user_id, latitude, longitude, location, zemose_type, quantity, deposit, price_hour, price_day, price_month, p_price_hour, p_price_day, p_price_month, skilled_labour, c_skilled_labour, s_price_hour, s_price_day, s_price_month, p_s_price_hour, p_s_price_day, p_s_price_month, provide_delivery, p_delivery, product_id, hits, currency_id, active, delivery_area) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '0', ?, ?, ?)";

        $query = $this->db->query($sql, array($uid, $lat, $long, $location, $zemose_type, $qua, $deposit, $hourSale, $daySale, $monthSale, $priceHour, $priceDay, $priceMonth, $skill, $cskill, $sHourSale, $sDaySale, $sMonthSale, $sPriceHour, $sPriceDay, $sPriceMonth, $provideDel, $delPrice, $pid, $currency, $active, $delArea));

        if($query) {
            $this->session->set_userdata('msg', 'Inventory added successfully!');
            $data['status'] = true;
            $data['message'] = 'Inventory Added successfully.';
            return $data;
        }
        else {
            $data['message'] = 'Some error occured while saving data, please try again.';
            return $data;
        }
    }

    public function update($invId = 0) {
        $data = array(
            'status' => false,
            'message' => 'Unknown Error.'
        );

        $uid = $this->session->userdata('user_id');
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($uid));
        $user = $query->result();

        if(!count ($user) > 0) {
            $data['message'] = 'Invalid user id - Some error occurred.';
            return $data;
        }

        $inv = $this->getSingle($invId);
        if($inv == null) {
            $data['message'] = 'Invalid inventory item.';
            return $data;
        }


        if( ! $this->validManipulation( $user[0], $inv ) ) {
            $data['message'] = 'Access Denied.';
            return $data;
        }

        $invId = $inv->inventory_id;

        $zemose_type = $this->input->post('zemose_type');
        $deposit = $this->input->post('deposit');

        $qua = $this->input->post('quantity');
        $lat = $this->input->post('latitude');
        $long = $this->input->post('longitude');

        $location = $this->input->post('location');
        $hourSale = $this->input->post('price_hour');
        $daySale = $this->input->post('price_day');
        $monthSale = $this->input->post('price_month');

        $priceHour = $this->input->post('p_price_hour');
        $priceDay = $this->input->post('p_price_day');
        $priceMonth = $this->input->post('p_price_month');

        $skill = $this->input->post('skilled_labour');
        $cskill = $this->input->post('c_skilled_labour');

        $sHourSale = $this->input->post('s_price_hour');
        $sDaySale = $this->input->post('s_price_day');
        $sMonthSale = $this->input->post('s_price_month');

        $sPriceHour = $this->input->post('s_p_price_hour');
        $sPriceDay = $this->input->post('s_p_price_day');
        $sPriceMonth = $this->input->post('s_p_price_month');

        $provideDel = $this->input->post('provide_delivery');
        $delPrice = $this->input->post('p_delivery');
        $delArea = $this->input->post('p_delivery_area');

        if($zemose_type != 'express' && $zemose_type != 'request') {
            $data['message'] = 'The zemose type is not valid.';
            return $data;
        }

        if(!$this->valid->isNum($qua)) {
            $data['message'] = 'The quantity is not valid.';
            return $data;
        }

        $lat = substr($lat, 0, 14);
        if(!$this->valid->isFloat($lat)) {
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }

        if($deposit == null || !$this->valid->isFloat($deposit)) {
            $data['message'] = 'Specify a deposit.';
            return $data;
        }

        $long = substr($long, 0, 14);
        if(!$this->valid->isFloat($long)) {
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }

        if($location == null || $location == '') {
            $data['message'] = 'The Location data is not valid.';
            return $data;
        }

        if($hourSale != null && !$this->valid->isFloat($priceHour)) {
            $data['message'] = 'The Per hour price is not valid.';
            return $data;
        }

        if($daySale != null && !$this->valid->isFloat($priceDay)) {
            $data['message'] = 'The Per day price is not valid.';
            return $data;
        }

        if($monthSale != null && !$this->valid->isFloat($priceMonth)) {
            $data['message'] = 'The Per month price is not valid.';
            return $data;
        }

        if($hourSale == null && $daySale == null && $monthSale == null) {
            $data['message'] = 'No price specified.';
            return $data;
        }

        if($skill == '1') {
            if($sHourSale == null && $sDaySale == null && $sMonthSale == null) {
                $data['message'] = 'The Price should be set (Skilled Labour).';
                return $data;
            }
            if($sHourSale != null && !$this->valid->isFloat($sPriceHour)) {
                $data['message'] = 'The Per hour price is not valid (Skilled Labour).';
                return $data;
            }

            if($sDaySale != null && !$this->valid->isFloat($sPriceDay)) {
                $data['message'] = 'The Per day price is not valid (Skilled Labour).';
                return $data;
            }

            if($sMonthSale != null && !$this->valid->isFloat($sPriceMonth)) {
                $data['message'] = 'The Per month price is not valid (Skilled Labour).';
                return $data;
            }
        }

        if($provideDel == '1' && !$this->valid->isFloat($delPrice)) {
            $data['message'] = 'Specify a delivery rate if you provide delivery.';
            return $data;
        }

        if($provideDel == '1' && !$this->valid->isFloat($delArea) ) {
            $data['message'] = 'Specify a delivery Area if you provide delivery.';
            return $data;
        }

        $hourSale = $hourSale == null ? 0 : 1;
        $daySale = $daySale == null ? 0 : 1;
        $monthSale = $monthSale == null ? 0 : 1;

        $sHourSale = $sHourSale == null ? 0 : 1;
        $sDaySale = $sDaySale == null ? 0 : 1;
        $sMonthSale = $sMonthSale == null ? 0 : 1;

        $skill = $skill == '1' ? 1 : 0;
        $cskill = $skill == 1 && $cskill == '1' ? 1 : 0;
        $provideDel = $provideDel == '1' ? 1 : 0;

        $priceHour = $hourSale == '1' ? $priceHour : null;
        $priceDay = $daySale == '1' ? $priceDay : null;
        $priceMonth = $monthSale == '1' ? $priceMonth : null;

        $sPriceHour = $sHourSale == '1' ? $sPriceHour : null;
        $sPriceDay = $sDaySale == '1' ? $sPriceDay : null;
        $sPriceMonth = $sMonthSale == '1' ? $sPriceMonth : null;

        $sql = "UPDATE inventory SET delivery_area = ?, latitude = ?, longitude = ?, location = ?, zemose_type = ?, quantity = ?, deposit = ?, price_hour = ?, price_day = ?, price_month = ?, p_price_hour = ?, p_price_day = ?, p_price_month = ?, skilled_labour = ?, c_skilled_labour = ?, s_price_hour = ?, s_price_day = ?, s_price_month = ?, p_s_price_hour = ?, p_s_price_day = ?, p_s_price_month = ?, provide_delivery = ?, p_delivery = ? WHERE inventory_id  = ?";

        $query = $this->db->query($sql, array($delArea, $lat, $long, $location, $zemose_type, $qua, $deposit, $hourSale, $daySale, $monthSale, $priceHour, $priceDay, $priceMonth, $skill, $cskill, $sHourSale, $sDaySale, $sMonthSale, $sPriceHour, $sPriceDay, $sPriceMonth, $provideDel, $delPrice, $invId));

        if($query) {
            $this->session->set_userdata('msg', 'Inventory updated successfully!');
            $data['status'] = true;
            $data['message'] = 'Inventory updated successfully.';
            return $data;
        }
        else {
            $data['message'] = 'Some error occured while saving data, please try again.';
            return $data;
        }
    }

    public function getSingle($InvId = 0) {
        if($InvId == 0 || $InvId == null) {
            return null;
        }

        $sql  = "SELECT * FROM inventory WHERE inventory_id = ?";
        $query = $this->db->query($sql, array($InvId));

        $res = $query->result();

        if( count($res) > 0 ) {
            return $res[0];
        }
        else return null;
    }

    public function getInventory( $offset = 0, $limit = 10, $search = '', $uid = 0 ) {
        $query = null;
        $language = $this->util->getLanguage();
        $count = 0;
        
        if($search == '') {
            $csql = "SELECT COUNT(*) AS count FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC";
            $sql = "SELECT * FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC LIMIT ?, ?";
            $query = $this->db->query($sql, array($language, $uid, (int)$offset, (int)$limit));
            $count = (int)$this->db->query($csql, array($language, $uid))->result()[0]->count;
        }
        else {
            $csql = "SELECT COUNT(*) AS count FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND pd.name LIKE ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC";
            $sql = "SELECT * FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND pd.name LIKE ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC LIMIT ?, ?";
            $query = $this->db->query($sql, array($language, '%'.$search.'%', $uid, (int)$offset, (int)$limit));
            $count = (int)$this->db->query($csql, array($language, '%'.$search.'%', $uid))->result()[0]->count;
        }

        $res = $query->result();

        $inventory = array();

        foreach ($res as $ikey => $ival) {
            $price = ($ival->price_hour == 1) ? $ival->p_price_hour . ' / Hour<br/>' : '';
            $price .= ($ival->price_day == 1) ? $ival->p_price_day . ' / Day<br/>' : '';
            $price .= ($ival->price_month == 1) ? $ival->p_price_month . ' / Month' : '';

            $inventory[] = array(
                'id' => $ival->inventory_id,
                'name' => $ival->name,
                'quantity' => $ival->quantity,
                'price' => $price
            );
        }

        $data['rows'] = $inventory;
        $data['total']  = $count;


        return $data;
    }

    public function getProductInventory ($pid = 0, $invid = 0, $lat = null, $lon = null) {
        if($pid == 0) {
            return null;
        }

        $sel = null;

        if($lat != null && $lon != null) {

                $sql = "SELECT *,(SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = i.user_id) AS rate FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id ) WHERE i.active = 1 AND i.row_disabled = 0 AND i.product_id = ? AND i.latitude = ? AND i.longitude = ?";
                $query = $this->db->query($sql, array($pid, (float)$lat, (float)$lon));
                $sel = $query->result();

                $sql = "SELECT * FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id )
                      WHERE inventory_id = (SELECT inventory_id FROM (SELECT inventory_id,product_id,
                        (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                        FROM `inventory` AS INVS WHERE product_id = ? AND latitude = ? AND longitude = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id)";
                $query = $this->db->query($sql, array($pid, (float)$lat, (float)$lon));
                $selbest = $query->result();

                if (count ($sel) <= 0) {
                    $sel = "-1";
                }
        }
        else {
            if((int)$invid != 0) {
                $sql = "SELECT *,(SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = i.user_id) AS rate FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id) WHERE i.active = 1 AND i.row_disabled = 0  AND i.product_id = ? ORDER BY i.p_price_hour,p_price_day,p_price_month";
                $query = $this->db->query($sql, array($pid));
                $sel = $query->result();

                $sql = "SELECT * FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id ) WHERE i.active = 1 AND i.row_disabled = 0 AND i.product_id = ? AND i.inventory_id = ?";
                $query = $this->db->query($sql, array($pid, $invid));
                $selbest = $query->result();
                if (count ($sel) <= 0) {
                    $sel = "-1";
                }
            }
        }


        $sql = "SELECT *,(SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = i.user_id) AS rate FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id) WHERE i.active = 1 AND i.row_disabled = 0  AND i.product_id = 15 ORDER BY i.p_price_hour,p_price_day,p_price_month";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();

        $sql = "SELECT * FROM inventory i LEFT JOIN zemoser z ON (i.user_id = z.user_id )
                  WHERE inventory_id = (SELECT inventory_id FROM (SELECT inventory_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                    FROM `inventory` AS INVS WHERE product_id = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id)";
        $query = $this->db->query($sql, array($pid));
        $resbest = $query->result();

        log_message('DEBUG', json_encode($res));


        if($sel == null) {
            if(count ($res) < 1) return null;
            $inv = array(
                'selected' => $resbest[0],
                'all' => $res
            );
        }
        else {
            if($sel == "-1") return null;
            $inv = array(
                'selected' => $selbest[0],
                'all' => $sel
            );
        }

        return $inv;
    }

    public function requestProduct(){

        $user_id = $this->session->userdata('user_id');
        $name = $this->input->post('product_name');
        $desc = $this->input->post('product_desc');

        $sql = "INSERT INTO product_request (product_name,product_desc,user_id) VALUES (?,?,?);";
        $query = $this->db->query($sql, array($name,$desc,$user_id));
    }

    public function listAllProductRequests(){
        //$search = $this->input->get('search');

        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $sql = "SELECT *,pr.id AS prid FROM product_request pr LEFT JOIN users u ON(pr.user_id = u.id);";
        $query = $this->db->query($sql);

        $res = $query->result();

        $ver = array();

        foreach ($res as $value) {
            $ver[(int)$value->prid] = $value;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($ver as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value->prid,
                'productname' => $value->product_name ,
                'username' => $value->firstname,
                'actions' => '<a style="margin-right: 5px;" href="'.$url.'ProductRequests/moreDetails/'.$value->prid.'">More Details</a>'
            );

            $i ++;
            $j ++;
        }

        $data = array(
            'total' => $j -1,
            'rows' => $list
        );

        return $data;
    }

    public function loadProductRequestSingle($id){
        $sql = "SELECT *,pr.id AS prid FROM product_request pr LEFT JOIN users u ON(pr.user_id = u.id) WHERE pr.id=?;";
        $query = $this->db->query($sql,array($id));

        return $query->result()[0];
    }

    public function delete($inv_id) {
        $sql = "UPDATE inventory SET row_disabled = 1 WHERE inventory_id = ?";
        $query = $this->db->query($sql, array(
            $inv_id
        ));

        $this->session->set_userdata('msg', 'Inventory deleted successfully.');
        redirect('Zemoser/Inventory');
    }

    public function validManipulation($user, $inv) {
        if($user->id == $inv->user_id && $inv->row_disabled != 1) return true;
        else return false;
    }
}