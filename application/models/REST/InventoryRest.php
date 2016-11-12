<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 25/10/16
 * Time: 6:56 PM
 */

/**
 * Class Misc
 *
 * @property MiscRest $MiscRest
 * @property Util $util
 * @property Urls $urls
 * @property CI_Session $session
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property UserRest $UserRest
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 */

class InventoryRest extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('InventoryModel');
        $this->load->model('ProductModel');
        $this->load->library('Util');
    }

    public function getInventory($uid,  $offset = 0, $limit = 10, $search = null  ) {
        $query = null;
        $language = $this->util->getLanguage();

        if($offset == null) $offset = 0;
        if($limit == null) $limit = 10;

        $count = 0;

        if($search == null) {
            $csql = "SELECT COUNT(*) AS count FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC";
            $sql = "SELECT * FROM  inventory i LEFT JOIN products p ON(i.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC LIMIT ?, ?";
            $query = $this->db->query($sql, array($language, $uid, (int)$offset, (int)$limit));
            $count = (int)$this->db->query($csql, array($language, $uid))->result()[0]->count;
        }
        else {
            $csql = "SELECT COUNT(*) AS count FROM inventory i LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND pd.name LIKE ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC";
            $sql = "SELECT * FROM inventory i LEFT JOIN products p ON(i.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = i.product_id) WHERE pd.language_id = ? AND pd.name LIKE ? AND i.user_id = ? AND i.row_disabled=0 ORDER BY i.hits DESC LIMIT ?, ?";
            $query = $this->db->query($sql, array($language, '%'.$search.'%', $uid, (int)$offset, (int)$limit));
            $count = (int)$this->db->query($csql, array($language, '%'.$search.'%', $uid))->result()[0]->count;
        }

        $res = $query->result();

        $inventory = array();

        foreach ($res as $ikey => $ival) {
            $price_hour = ($ival->price_hour == 1) ? $ival->p_price_hour : null;
            $price_day = ($ival->price_day == 1) ? $ival->p_price_day : null;
            $price_month = ($ival->price_month == 1) ? $ival->p_price_month : null;

            $img = base_url() . 'static/content/product-images/' . $this->ProductModel->getSingleImage($ival->product_id) -> image;

            $inventory[] = array(
                'id' => $ival->inventory_id,
                'active' => ($ival->active == 1),
                'product' => array(
                    'id' => $ival->product_id,
                    'name' => $ival->name,
                    'image' =>  $img,
                    'zuin' => $ival->zuid
                ),
                'quantity' => $ival->quantity,
                'pricePerHour' => $price_hour,
                'pricePerDay' => $price_day,
                'pricePerMonth' => $price_month
            );
        }

        return $inventory;
    }

    public function getInventories() {
        $user_id = $this->input->post('userId');
        $limit = $this->input->post('limit');
        $offset = $this->input->post('offset');
        $search = $this->input->post('search');

        if($user_id == null) throw new PixelRequestException('6A200|No User ID.');

        $data = $this->getInventory( $user_id, $offset, $limit, $search );

        return $data;
    }

    public function getCategories() {
        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON(cd.cid = c.cid) WHERE cd.language_id = 1";

        $query = $this->db->query($sql, array());

        $cats = $query->result();

        return $this->getSubCategories($cats, 0);
    }

    public function getSubCategories($cats, $cid) {
        if($cats == null) return null;

        $catn = [];
        foreach ($cats as $cat) {
            if($cat->parent_id == $cid)
                $catn[] = array(
                    'id' => $cat -> cid,
                    'name' => $cat -> name,
                    'description' => $cat -> description,
                    'icon' => base_url() . 'static/content/cat-imgs/' . $cat -> icon,
                    'children' => $this->getSubCategories($cats, $cat->cid)
                );
        }

        if(count($catn) == 0) return null;
        return $catn;
    }

    public function addInventory() {
        $zemose_type = $this->input->post('zemoseType');
        $deposit = $this->input->post('deposit');

        $qua = $this->input->post('quantity');
        $lat = $this->input->post('latitude');
        $long = $this->input->post('longitude');

        $pid = $this->input->post('productId');

        $location = $this->input->post('location');
        $hourSale = $this->input->post('pricePerHour') == null ? 0 : 1;
        $daySale = $this->input->post('pricePerDay') == null ? 0 : 1;
        $monthSale = $this->input->post('pricePerMonth') == null ? 0 : 1;

        $priceHour = $this->input->post('pricePerHour');
        $priceDay = $this->input->post('pricePerDay');
        $priceMonth = $this->input->post('pricePerMonth');

        $skill = $this->input->post('skilledLabour') == 'true' ? 1 : 0;
        $cskill = $this->input->post('compulsorySkilledLabour') == 'true' ? 1 : 0;

        $sHourSale = $this->input->post('skilledLabourPricePerHour') == null ? 0 : 1;
        $sDaySale = $this->input->post('skilledLabourPricePerDay') == null ? 0 : 1;
        $sMonthSale = $this->input->post('skilledLabourPricePerMonth') == null ? 0 : 1;

        $sPriceHour = $this->input->post('skilledLabourPricePerHour');
        $sPriceDay = $this->input->post('skilledLabourPricePerDay');
        $sPriceMonth = $this->input->post('skilledLabourPricePerMonth');

        $active = $this->input->post('active') == 'true' ? 1 : 0;

        $provideDel = $this->input->post('delivery') == 'true' ? 1 : 0;
        $delPrice = $this->input->post('deliveryPrice') == null ? 0 : $this->input->post('deliveryPrice');
        $delArea = $this->input->post('deliveryArea') == null ? 0 : $this->input->post('deliveryArea');

        if($zemose_type != 'express' && $zemose_type != 'request') {
            throw new PixelRequestException('6A300|The zemose type is not valid.');
        }

        if(!$this->valid->isNum($qua)) {
            throw new PixelRequestException('6A300|The quantity is not valid.');
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
            throw new PixelRequestException('6A300|The location data is not valid.');
        }

        if($hourSale != null && !$this->valid->isFloat($priceHour)) {
            throw new PixelRequestException('6A300|Invalid or no per hour price.');
        }

        if($daySale != null && !$this->valid->isFloat($priceDay)) {
            throw new PixelRequestException('6A300|Invalid or no per day price.');
        }

        if($monthSale != null && !$this->valid->isFloat($priceMonth)) {
            throw new PixelRequestException('6A300|Invalid or no per month price.');
        }

        if($hourSale == null && $daySale == null && $monthSale == null) {
            throw new PixelRequestException('6A300|No price type selected.');
        }

        if($deposit == null || !$this->valid->isFloat($deposit)) {
            throw new PixelRequestException('6A300|Specify a valid deposit.');
        }

        if($skill == 1) {
            if($sHourSale == null && $sDaySale == null && $sMonthSale == null) {
                throw new PixelRequestException('6A300|No skilled labour price type set.');
            }
            if($sHourSale != null && !$this->valid->isFloat($sPriceHour)) {
                throw new PixelRequestException('6A300|The skilled labour per hour price is invalid.');
            }

            if($sDaySale != null && !$this->valid->isFloat($sPriceDay)) {
                throw new PixelRequestException('6A300|The skilled labour per day price is invalid.');
            }

            if($sMonthSale != null && !$this->valid->isFloat($sPriceMonth)) {
                throw new PixelRequestException('6A300|The skilled labour per month price is invalid.');
            }
        }

        if($provideDel == 1 && !$this->valid->isFloat($delPrice)) {
            throw new PixelRequestException('6A300|Specify a delivery rate.');
        }

        if($provideDel == 1 && !$this->valid->isFloat($delArea) ) {
            throw new PixelRequestException('6A300|Specify delivery area ( in kms ).');
        }

        if($pid == null) {
            throw new PixelRequestException('6A300|Looks like the product you are adding is invalid.');
        }

        $psql = "SELECT * FROM products WHERE product_id = ?";
        $pquery = $this->db->query($psql, array($pid));

        if(count($pquery->result()) < 1) {
            throw new PixelRequestException('6A300|Looks like the product you are adding is invalid.');
        }
        $product = $pquery->result()[0];
        $pid = $product->product_id;

        $uid = $this->input->post('userId');
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($uid));
        $user = $query->result();

        if(!count ($user) > 0) {
            throw new PixelRequestException('6A300|Invalid user.');
        }
        $user = $user[0];

        $active = ( $user -> zemoser == 1 ) ? 1 : 0;

        $hourSale = $hourSale == null ? 0 : 1;
        $daySale = $daySale == null ? 0 : 1;
        $monthSale = $monthSale == null ? 0 : 1;

        $sHourSale = $sHourSale == null ? 0 : 1;
        $sDaySale = $sDaySale == null ? 0 : 1;
        $sMonthSale = $sMonthSale == null ? 0 : 1;

        if($skill != 1) {
            $sPriceHour = null;
            $sPriceDay = null;
            $sPriceMonth = null;
            $sHourSale = 0;
            $sDaySale = 0;
            $sMonthSale = 0;
        }
        $cskill = ($skill == 1 && $cskill == 1) ? 1 : 0;
        $provideDel = $provideDel == 1 ? 1 : 0;

        $priceHour = $hourSale == 1 ? $priceHour : null;
        $priceDay = $daySale == 1 ? $priceDay : null;
        $priceMonth = $monthSale == 1 ? $priceMonth : null;

        $sPriceHour = $sHourSale == 1 ? $sPriceHour : null;
        $sPriceDay = $sDaySale == 1 ? $sPriceDay : null;
        $sPriceMonth = $sMonthSale == 1 ? $sPriceMonth : null;

        $currency = 1;

        $sql = "INSERT INTO inventory (inventory_id, user_id, latitude, longitude, location, zemose_type, quantity, deposit, price_hour, price_day, price_month, p_price_hour, p_price_day, p_price_month, skilled_labour, c_skilled_labour, s_price_hour, s_price_day, s_price_month, p_s_price_hour, p_s_price_day, p_s_price_month, provide_delivery, p_delivery, product_id, hits, currency_id, active, delivery_area) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '0', ?, ?, ?)";

        $query = $this->db->query($sql, array($uid, $lat, $long, $location, $zemose_type, $qua, $deposit, $hourSale, $daySale, $monthSale, $priceHour, $priceDay, $priceMonth, $skill, $cskill, $sHourSale, $sDaySale, $sMonthSale, $sPriceHour, $sPriceDay, $sPriceMonth, $provideDel, $delPrice, $pid, $currency, $active, $delArea));

        return $query;
    }

    public function updateInventory() {
        $zemose_type = $this->input->post('zemoseType');
        $deposit = $this->input->post('deposit');
        $inv_id = $this->input->post('inventoryId');

        $qua = $this->input->post('quantity');
        $lat = $this->input->post('latitude');
        $long = $this->input->post('longitude');

        $location = $this->input->post('location');
        $hourSale = $this->input->post('pricePerHour') == null ? 0 : 1;
        $daySale = $this->input->post('pricePerDay') == null ? 0 : 1;
        $monthSale = $this->input->post('pricePerMonth') == null ? 0 : 1;

        $priceHour = $this->input->post('pricePerHour');
        $priceDay = $this->input->post('pricePerDay');
        $priceMonth = $this->input->post('pricePerMonth');

        $skill = $this->input->post('skilledLabour') == 'true' ? 1 : 0;
        $cskill = $this->input->post('compulsorySkilledLabour') == 'true' ? 1 : 0;

        $sHourSale = $this->input->post('skilledLabourPricePerHour') == null ? 0 : 1;
        $sDaySale = $this->input->post('skilledLabourPricePerDay') == null ? 0 : 1;
        $sMonthSale = $this->input->post('skilledLabourPricePerMonth') == null ? 0 : 1;

        $sPriceHour = $this->input->post('skilledLabourPricePerHour');
        $sPriceDay = $this->input->post('skilledLabourPricePerDay');
        $sPriceMonth = $this->input->post('skilledLabourPricePerMonth');

        $provideDel = $this->input->post('delivery') == 'true' ? 1 : 0;
        $delPrice = $this->input->post('deliveryPrice') == null ? 0 : $this->input->post('deliveryPrice');
        $delArea = $this->input->post('deliveryArea') == null ? 0 : $this->input->post('deliveryArea');

        $inv = $this->InventoryModel->getSingle($inv_id);
        if($inv == null) {
            throw new PixelRequestException('6A300|Invalid inventory.');
        }

        if($zemose_type != 'express' && $zemose_type != 'request') {
            throw new PixelRequestException('6A300|The zemose type is not valid.');
        }

        if(!$this->valid->isNum($qua)) {
            throw new PixelRequestException('6A300|The quantity is not valid.');
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
            throw new PixelRequestException('6A300|The location data is not valid.');
        }

        if($hourSale != null && !$this->valid->isFloat($priceHour)) {
            throw new PixelRequestException('6A300|Invalid or no per hour price.');
        }

        if($daySale != null && !$this->valid->isFloat($priceDay)) {
            throw new PixelRequestException('6A300|Invalid or no per day price.');
        }

        if($monthSale != null && !$this->valid->isFloat($priceMonth)) {
            throw new PixelRequestException('6A300|Invalid or no per month price.');
        }

        if($hourSale == null && $daySale == null && $monthSale == null) {
            throw new PixelRequestException('6A300|No price type selected.');
        }

        if($deposit == null || !$this->valid->isFloat($deposit)) {
            throw new PixelRequestException('6A300|Specify a valid deposit.');
        }

        if($skill == 1) {
            if($sHourSale == null && $sDaySale == null && $sMonthSale == null) {
                throw new PixelRequestException('6A300|No skilled labour price type set.');
            }
            if($sHourSale != null && !$this->valid->isFloat($sPriceHour)) {
                throw new PixelRequestException('6A300|The skilled labour per hour price is invalid.');
            }

            if($sDaySale != null && !$this->valid->isFloat($sPriceDay)) {
                throw new PixelRequestException('6A300|The skilled labour per day price is invalid.');
            }

            if($sMonthSale != null && !$this->valid->isFloat($sPriceMonth)) {
                throw new PixelRequestException('6A300|The skilled labour per month price is invalid.');
            }
        }

        if($provideDel == 1 && !$this->valid->isFloat($delPrice)) {
            throw new PixelRequestException('6A300|Specify a delivery rate.');
        }

        if($provideDel == 1 && !$this->valid->isFloat($delArea) ) {
            throw new PixelRequestException('6A300|Specify delivery area ( in kms ).');
        }

        $uid = $this->input->post('userId');
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($uid));
        $user = $query->result();

        if(!count ($user) > 0) {
            throw new PixelRequestException('6A300|Invalid user.');
        }
        $user = $user[0];

        if( ! $this->InventoryModel->validManipulation( $user, $inv ) ) {
            throw new PixelRequestException('6A300|You do not have access to edit this data.');
        }

        $active = ( $user -> zemoser == 1 ) ? 1 : 0;

        $hourSale = $hourSale == null ? 0 : 1;
        $daySale = $daySale == null ? 0 : 1;
        $monthSale = $monthSale == null ? 0 : 1;

        $sHourSale = $sHourSale == null ? 0 : 1;
        $sDaySale = $sDaySale == null ? 0 : 1;
        $sMonthSale = $sMonthSale == null ? 0 : 1;

        if($skill != 1) {
            $sPriceHour = null;
            $sPriceDay = null;
            $sPriceMonth = null;
            $sHourSale = 0;
            $sDaySale = 0;
            $sMonthSale = 0;
        }
        $cskill = ($skill == 1 && $cskill == 1) ? 1 : 0;
        $provideDel = $provideDel == 1 ? 1 : 0;

        $priceHour = $hourSale == 1 ? $priceHour : null;
        $priceDay = $daySale == 1 ? $priceDay : null;
        $priceMonth = $monthSale == 1 ? $priceMonth : null;

        $sPriceHour = $sHourSale == 1 ? $sPriceHour : null;
        $sPriceDay = $sDaySale == 1 ? $sPriceDay : null;
        $sPriceMonth = $sMonthSale == 1 ? $sPriceMonth : null;

        $sql = "UPDATE inventory SET delivery_area = ?, latitude = ?, longitude = ?, location = ?, zemose_type = ?, quantity = ?, deposit = ?, price_hour = ?, price_day = ?, price_month = ?, p_price_hour = ?, p_price_day = ?, p_price_month = ?, skilled_labour = ?, c_skilled_labour = ?, s_price_hour = ?, s_price_day = ?, s_price_month = ?, p_s_price_hour = ?, p_s_price_day = ?, p_s_price_month = ?, provide_delivery = ?, p_delivery = ? WHERE inventory_id  = ?";

        $query = $this->db->query($sql, array($delArea, $lat, $long, $location, $zemose_type, $qua, $deposit, $hourSale, $daySale, $monthSale, $priceHour, $priceDay, $priceMonth, $skill, $cskill, $sHourSale, $sDaySale, $sMonthSale, $sPriceHour, $sPriceDay, $sPriceMonth, $provideDel, $delPrice, $inv_id));

        return $query;
    }

    public function getInventorySingle() {
        $user_id = $this->input->post('userId');
        $inv_id = $this->input->post('inventoryId');
        $inv = $this->InventoryModel->getSingle($inv_id);

        if($inv == null) {
            throw new PixelRequestException('6E200|Inventory item does not exist.');
        }

        if($inv->user_id != $user_id) throw new PixelRequestException('6E200|Access denied.');

        $product = $this->ProductModel->getProductObject($inv->product_id);
        $image = $this->ProductModel->getSingleImage($inv->product_id)->image;

        $data = (object) array(
            'id' => $inv->inventory_id,
            'latitude' => $inv->latitude,
            'product' => array(
                'id' => $inv->product_id,
                'zuin' => $product->zuid,
                'name' => $product->name,
                'image' => base_url() . 'static/content/product-images/' . $image
            ),
            'longitude' => $inv -> longitude,
            'location' => $inv->location,
            'zemoseType' => $inv->zemose_type,
            'quantity' => $inv->quantity,
            'deposit' => $inv->deposit,
            'pricePerHour' => $inv->p_price_hour,
            'pricePerDay' => $inv->p_price_day,
            'pricePerMonth' => $inv->p_price_month,
            'skilledLabour' => ($inv->skilled_labour == 1),
            'compulsorySkilledLabour' => ($inv->c_skilled_labour == 1),
            'skilledLabourPricePerHour' => $inv->p_s_price_hour,
            'skilledLabourPricePerDay' => $inv->p_s_price_day,
            'skilledLabourPricePerMonth' => $inv->p_s_price_month,
            'delivery' => ($inv->provide_delivery == 1),
            'deliveryPrice' => $inv->p_delivery,
            'deliveryArea' => $inv->delivery_area,
            'active' => ($inv->active == 1)
        );

        return $data;
    }

    public function deleteInventory() {
        $inv_id = $this->input->post('inventoryId');
        $user_id = $this->input->post('userId');

        $inv = $this->InventoryModel->getSingle($inv_id);
        
        if($inv == null)
            throw new PixelRequestException('6C300|Inventory Item doesn\'t exist');

        if($inv->user_id != $user_id)
            throw new PixelRequestException('6C300|Access Denied.');

        $sql = "UPDATE inventory SET row_disabled = 1 WHERE inventory_id = ?";
        $query = $this->db->query($sql, array(
            $inv_id
        ));

        return $query;
    }
}
