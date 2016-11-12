<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 9/10/16
 * Time: 11:56 PM
 */

/**
 * @property APIAuth $APIAuth
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

class ProductRest extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/APIAuth');
        $this->load->library('util');
        $this->load->model('ProductModel');
    }

    public function listFilters($cid){
        $sql = "SELECT *, fd.name AS filter_name, fgd.name AS group_name FROM `category_filters` cf LEFT JOIN filter_group fg ON(fg.filter_group_id = cf.filter_group_id) 
                LEFT JOIN filter_group_description fgd ON (fgd.filter_group_id = fg.filter_group_id AND fgd.language_id = 1) 
                LEFT JOIN filters f ON (f.filter_group_id = fg.filter_group_id) 
                LEFT JOIN filter_description fd ON (fd.filter_id = f.filter_id AND fd.language_id = 1) WHERE cf.cid = ?";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();
        //var_dump($query->result());

        $filters = array();

        $i=0;
        foreach($res as $key => $filter) {
            $filters[$filter->group_name][] =  (object)array('id' => $filter->filter_id, 'name' => $filter->filter_name);
            ++$i;
        }

        $new = array();
        foreach($filters as $key => $filter) {
            $new[] =  array(
                'groupName' => $key,
                'filters' => $filter
            );
            ++$i;
        }

        return $new;
    }

    public function search($index, $total) {

        $name = $this->input->get('name');
        $cat = $this->input->get('catid');
        $lat = $this->input->get('lat');
        $lon = $this->input->get('lon');
        $mainFilter = $this->input->get('mainFilter');
        $priceType = $this->input->get('priceType');
        $priceRange = $this->input->get('priceRange');
        $checkedBoxes = $this->input->get('checkedBoxes');

        if(empty($mainFilter)) $mainFilter=1;

        if(!empty($priceRange)) {
            $priceRange = explode(",", $priceRange);
            $lowRange = $priceRange[0];
            $highRange = $priceRange[1];
        }

        if (!empty($this->input->get('from')) && !empty($this->input->get('to'))) {
            $from = date("Y-m-d", strtotime($this->input->get('from')));
            $to = date("Y-m-d", strtotime($this->input->get('to')));
        }

        $searchType = "";
        if(!empty($lat) && !empty($lon)){

            //log_message("DEBUG", "both");
            $searchType = "location";

            $sql = "SELECT * FROM (SELECT inventory_id ,latitude ,longitude ,location ,product_id ,
                                       (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS hour,
                                       (SELECT MIN(p_price_day) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS day,
                                       (SELECT MIN(p_price_month) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS month,
                                       (SELECT AVG(rating) FROM user_reviews WHERE user_id = INVS.user_id AND active=1) AS rate
                                    FROM (SELECT * FROM (SELECT *, 111.045 * DEGREES(
                                        ACOS( COS(RADIANS(latpf)) * COS(RADIANS(latitude)) * COS(RADIANS(longitude) - RADIANS(longitude)) 
                                        + SIN(RADIANS(latpf)) * SIN(RADIANS(latitude)))) AS dis_from
                                    FROM inventory i JOIN ( SELECT ".$lat." AS latpf, ".$lon." AS longpf ) AS p ON 1 = 1 ) AS NEW 
                                    WHERE NEW.dis_from < 10.0 AND active = 1 AND row_disabled = 0) AS INVS ORDER BY rate DESC ) AS FINAL
                    LEFT JOIN products p ON(FINAL.product_id = p.product_id) LEFT JOIN product_description pd ON(FINAL.product_id = pd.product_id) 
                    LEFT JOIN product_images pi ON(FINAL.product_id = pi.product_id) where pd.language_id=1 ";

            $sqlcnt = "SELECT COUNT(*) as total,MIN(hour) as minHour, MAX(hour) as maxHour,MIN(day) as minDay, MAX(day) as maxDay,MIN(month) as minMonth, MAX(month) as maxMonth FROM (
                                    SELECT inventory_id ,latitude ,longitude ,location ,product_id ,
                                       (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS hour,
                                       (SELECT MIN(p_price_day) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS day,
                                       (SELECT MIN(p_price_month) FROM inventory WHERE product_id = INVS.product_id AND active=1 AND row_disabled = 0) AS month
                                    FROM (SELECT * FROM (SELECT *, 111.045 * DEGREES(
                                        ACOS( COS(RADIANS(latpf)) * COS(RADIANS(latitude)) * COS(RADIANS(longitude) - RADIANS(longitude)) 
                                        + SIN(RADIANS(latpf)) * SIN(RADIANS(latitude)))) AS dis_from
                                    FROM inventory i JOIN ( SELECT ".$lat." AS latpf, ".$lon." AS longpf ) AS p ON 1 = 1 ) AS NEW 
                                    WHERE NEW.dis_from < 10.0 AND active = 1 AND row_disabled = 0) AS INVS) AS FINAL
                    LEFT JOIN products p ON(FINAL.product_id = p.product_id) LEFT JOIN product_description pd ON(FINAL.product_id = pd.product_id) where pd.language_id=1";

            if(!empty($checkedBoxes) && !empty($cat)) {
                $sql = $sql. " AND p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(".$checkedBoxes."))";
                $sqlcnt = $sqlcnt. " AND p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(".$checkedBoxes."))";
            }

            if (!empty($name)) {
                $sql = $sql . " AND name LIKE '%" . $name . "%'";
                $sqlcnt = $sqlcnt . " AND name LIKE '%" . $name . "%'";
            }

            if (!empty($cat)) {
                $sql = $sql . " AND p.cid = " . $cat;
                $sqlcnt = $sqlcnt . " AND p.cid = " . $cat;
            }

            if (!empty($from) AND !empty($to)) {
                $sql = $sql . " AND p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
                $sqlcnt = $sqlcnt . " AND p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
            }

            $priceName = "";
            if ($priceType == "1") {
                $priceName = "hour";
            } else if ($priceType == "2") {
                $priceName = "day";
            } else if ($priceType == "3") {
                $priceName = "month";
            }

            if (!empty($priceName)) {
                if (!empty($lowRange) AND !empty($highRange)) {
                    $sql = $sql . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                    $sqlcnt = $sqlcnt . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                } else {
                    $sql = $sql . " AND " . $priceName . " > 0";
                    $sqlcnt = $sqlcnt . " AND " . $priceName . " > 0";
                }
            }

            $sql = $sql . " GROUP BY FINAL.product_id";

            if($mainFilter==1){
                $sql = $sql." ORDER BY p.hits DESC";
            }else if ($mainFilter==2){
                $sql = $sql." ORDER BY ".$priceName." ASC";
            }else if($mainFilter==3){
                $sql = $sql." ORDER BY ".$priceName." DESC";
            }else if($mainFilter==4){
                $sql = $sql." ORDER BY p.date_modified DESC";
            }

            $sql = $sql." LIMIT ".$index.",".$total." ;";

            log_message("DEBUG",$sql);

            $query = $this->db->query($sql);
            $querycnt = $this->db->query($sqlcnt);

        } else {
            //Execute all the other cases where the location is not needed

            $count = 0;

            $sql = "SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS hour,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS day,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS month
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 )
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) ";

            $sqlcnt = "SELECT COUNT(*)AS total,MIN(hour) as minHour, MAX(hour) as maxHour,MIN(day) as minDay, MAX(day) as maxDay,MIN(month) as minMonth, MAX(month) as maxMonth FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS hour,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS day,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS month
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )";

            if (!empty($name)) {

                $sql = $sql . " WHERE pd.name like '%" . $name . "%'";
                $sqlcnt = $sqlcnt . " WHERE pd.name like '%" . $name . "%'";
                ++$count;
            }

            if(!empty($checkedBoxes) && !empty($cat)) {
                if ($count == 0) {
                    $sql = $sql . " WHERE p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(" . $checkedBoxes . "))";
                    $sqlcnt = $sqlcnt . " WHERE p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(" . $checkedBoxes . "))";
                }else{
                    $sql = $sql . " AND p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(" . $checkedBoxes . "))";
                    $sqlcnt = $sqlcnt . " AND p.product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(" . $checkedBoxes . "))";
                }
                ++$count;
            }

            if (!empty($cat)) {

                if ($count == 0) {
                    $sql = $sql . " WHERE p.cid = " . $cat;
                    $sqlcnt = $sqlcnt . " WHERE p.cid = " . $cat;
                } else {
                    $sql = $sql . " AND p.cid = " . $cat;
                    $sqlcnt = $sqlcnt . " AND p.cid = " . $cat;
                }
                ++$count;
            }

            if (!empty($from) && !empty($to)) {

                if ($count == 0) {
                    $sql = $sql . " WHERE p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
                    $sqlcnt = $sqlcnt . " WHERE p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
                }else {
                    $sql = $sql . " AND p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
                    $sqlcnt = $sqlcnt . " AND p.date_added BETWEEN '" . $from . "' AND '" . $to . "' ";
                }
                ++$count;
            }

            if ($priceType == "1") {
                $priceName = "hour";
            } else if ($priceType == "2") {
                $priceName = "day";
            } else if ($priceType == "3") {
                $priceName = "month";
            }

            if (!empty($priceName)) {
                if (!empty($lowRange) AND !empty($highRange)) {
                    if ($count == 0) {
                        $sql = $sql . " WHERE " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                        $sqlcnt = $sqlcnt . " WHERE " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                    }else {
                        $sql = $sql . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                        $sqlcnt = $sqlcnt . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                    }
                } else {
                    if($count == 0) {
                        $sql = $sql . " WHERE " . $priceName . " > 0";
                        $sqlcnt = $sqlcnt . " WHERE " . $priceName . " > 0";
                    }else {
                        $sql = $sql . " AND " . $priceName . " > 0";
                        $sqlcnt = $sqlcnt . " AND " . $priceName . " > 0";
                    }
                }
            }

            $sql = $sql." GROUP BY pid";

            if($mainFilter==1){
                $sql = $sql." ORDER BY p.hits DESC";
            }else if ($mainFilter==2){
                $sql = $sql." ORDER BY ".$priceName." ASC";
            }else if($mainFilter==3){
                $sql = $sql." ORDER BY ".$priceName." DESC";
            }else if($mainFilter==4){
                $sql = $sql." ORDER BY p.date_modified DESC";
            }

            $sql = $sql." LIMIT ".$index.",".$total." ;";

            log_message("DEBUG",$sql);

            $query = $this->db->query($sql);
            $querycnt = $this->db->query($sqlcnt);
        }

        $res = $query->result();
        $rescnt = $querycnt->result();
        $total_cnt = $rescnt[0]->total;
        $minHour = $rescnt[0]->minHour;
        $maxHour = $rescnt[0]->maxHour;
        $minDay = $rescnt[0]->minDay;
        $maxDay = $rescnt[0]->maxDay;
        $minMonth = $rescnt[0]->minMonth;
        $maxMonth = $rescnt[0]->maxMonth;

        $json = array();
        $list = array();

        $i=0;
        foreach($res as $product){

            if($searchType == "location") {
                $list[$i] = array(
                    'product' => array(
                        'id' => $product->product_id,
                        'zuin' => $product->zuid,
                        'name' => $product->name,
                        'image' => base_url() . 'static/content/product-images/' . $product->image,
                        'description' => $product->description
                    ),
                    'pricePerHour' => $product->hour,
                    'pricePerDay' => $product->day,
                    'pricePerMonth' => $product->month,
                    'rating' => $product->rate,
                    'latitude' => $product->latitude,
                    'longitude' => $product->longitude,
                    'location' => $product->location
                );

                //log_message("DEBUG","location");
            }else {
                $list[$i] = array(
                    'product' => array(
                        'id' => $product->product_id,
                        'zuin' => $product->zuid,
                        'name' => $product->name,
                        'image' => base_url() . 'static/content/product-images/' . $product->image,
                        'description' => $product->description
                    ),
                    'pricePerHour' => $product->hour,
                    'pricePerDay' => $product->day,
                    'pricePerMonth' => $product->month,
                    'rating' => $product->rate
                );
            }

            ++$i;
        }

        $json = array(
            'status' => true,
            'totalCount' => $total_cnt,
            'minHour' => $minHour,
            'maxHour' => $maxHour,
            'minDay' => $minDay,
            'maxDay' => $maxDay,
            'minMonth' => $minMonth,
            'maxMonth' => $maxMonth,
            'inventories' => $list
        );


        return $json;
    }

    public function loadProductsLimit($parent,$index,$total){

        $mainFilter = $this->input->get('mainFilter');
        $priceType = $this->input->get('priceType');
        $priceRange = $this->input->get('priceRange');
        $checkedBoxes = $this->input->get('checkedBoxes');

        log_message("DEBUG",$checkedBoxes);

        if(empty($mainFilter)) $mainFilter=1;

        if(!empty($priceRange)) {
            $priceRange = explode(",", $priceRange);
            $lowRange = $priceRange[0];
            $highRange = $priceRange[1];
        }


        //$sql = "SELECT * FROM inventory i LEFT JOIN products p ON(i.product_id = p.product_id) LEFT JOIN product_description pd ON(i.product_id = pd.product_id) LEFT JOIN product_images pi ON (i.product_id = pi.product_id) where p.cid = ? AND language_id=1 GROUP BY i.product_id  ;";

        if(empty($checkedBoxes) || $checkedBoxes== "" ){
            $sql = "SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?";

            $sqlcnt = "SELECT COUNT(*) AS total,MIN(HOUR) as minHour, MAX(HOUR) as maxHour,MIN(DAY) as minDay, MAX(DAY) as maxDay,MIN(MONTH) as minMonth, MAX(MONTH) as maxMonth FROM (
                        SELECT DISTINCT product_id AS pid,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                      FROM inventory i WHERE active = 1 AND row_disabled = 0) AS PRD LEFT JOIN products p ON (p.product_id = PRD.pid) WHERE p.cid=?";
        }else {

            $sql = "SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(".$checkedBoxes.")) AND active = 1 AND row_disabled = 0
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 ) LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?";

            $sqlcnt = "SELECT COUNT(*) AS total,MIN(HOUR) as minHour, MAX(HOUR) as maxHour,MIN(DAY) as minDay, MAX(DAY) as maxDay,MIN(MONTH) as minMonth, MAX(MONTH) as maxMonth FROM (
                        SELECT DISTINCT product_id AS pid,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                      FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(".$checkedBoxes.")) AND active = 1 AND row_disabled = 0) AS PRD 
                      LEFT JOIN products p ON (p.product_id = PRD.pid) WHERE p.cid=?";
        }

        $priceName = "";
        if ($priceType == "1") {
            $priceName = "HOUR";
        } else if ($priceType == "2") {
            $priceName = "DAY";
        } else if ($priceType == "3") {
            $priceName = "MONTH";
        }

        if (!empty($priceName)) {
            if (!empty($lowRange) AND !empty($highRange)) {
                $sql = $sql . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
                $sqlcnt = $sqlcnt . " AND " . $priceName . " BETWEEN " . $lowRange . " AND " . $highRange;
            } else {
                $sql = $sql . " AND " . $priceName . " > 0";
                $sqlcnt = $sqlcnt . " AND " . $priceName . " > 0";
            }
        }

        $sql = $sql." GROUP BY pid";

        if($mainFilter==1){
            $sql = $sql." ORDER BY p.hits DESC";
        }else if ($mainFilter==2){
            $sql = $sql." ORDER BY ".$priceName." ASC";
        }else if($mainFilter==3){
            $sql = $sql." ORDER BY ".$priceName." DESC";
        }else if($mainFilter==4){
            $sql = $sql." ORDER BY p.date_modified DESC";
        }

        $sql = $sql." LIMIT ".$index.", ".$total." ;";

        log_message("DEBUG",$sql);

        $query = $this->db->query($sql, array($parent));
        $res = $query->result();

        //find the number of results
        $querycnt = $this->db->query($sqlcnt, array($parent));
        $rescnt = $querycnt->result();
        $total_count = $rescnt[0]->total;
        $minHour = $rescnt[0]->minHour;
        $maxHour = $rescnt[0]->maxHour;
        $minDay = $rescnt[0]->minDay;
        $maxDay = $rescnt[0]->maxDay;
        $minMonth = $rescnt[0]->minMonth;
        $maxMonth = $rescnt[0]->maxMonth;


        log_message("DEBUG",$total_count);

        $json = array();
        $list = array();

        $i=0;
        foreach($res as $product){

            $list[$i] = array(
                'product' => array(
                    'id' => $product->product_id,
                    'zuin' => $product->zuid,
                    'name' => $product->name,
                    'image' => base_url() . 'static/content/product-images/' . $product->image,
                    'description' => $product->description
                ),
                'pricePerHour' => $product->HOUR,
                'pricePerDay' => $product->DAY,
                'pricePerMonth' => $product->MONTH,
                'rating' => $product->rate
            );

            ++$i;
        }

        $json = array(
            'status' => true,
            'total_count' => $total_count,
            'minHour' => $minHour,
            'maxHour' => $maxHour,
            'minDay' => $minDay,
            'maxDay' => $maxDay,
            'minMonth' => $minMonth,
            'maxMonth' => $maxMonth,
            'inventories' => $list
        );


        return $json;
    }

    public function listFeaturedProducts() {

        $url = $this->urls->getUrl();
        $sql = "SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) LEFT JOIN product_description pd ON (pd.product_id = p.product_id) 
                  LEFT JOIN product_images pi ON (pi.product_id = p.product_id) WHERE pd.language_id = 1 GROUP  BY p.product_id";
        $query = $this->db->query($sql);
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = array(
                'id' => $pval->product_id,
                'name' => $pval->name,
                'image' => $url.'/static/content/product-images/'.$pval->image
            );
        }
        $data = $products;
        return $data;
    }

    public  function listFeaturedCategories(){

        $url = $this->urls->getUrl();
        $sql = "SELECT * FROM featured_category fc LEFT JOIN category c ON (fc.cid = c.cid) LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1";
        $query = $this->db->query($sql, array());

        $res = $query->result();

        $categories = array();

        foreach ($res as $ckey => $cval) {
            $categories[$ckey] = array(
                'id' => $cval->cid,
                'name' => $cval->name,
                'image' => $url.'/static/content/cat-imgs/'.$cval->image
            );
        }

        $data = $categories;

        return $data;
    }

    public function addToWishList($userId,$productId){
        if(empty($userId))
            throw new PixelRequestException('3F201| userId is not provided.');

        if(!empty($productId)){
            $sql = "INSERT INTO user_wishlist (product_id,user_id,`date`) VALUES (?,?,NOW())";
            $query = $this->db->query($sql,array($productId,$userId));
        }else throw new PixelRequestException('3F202| Product Id is not provided.');
    }

    public function removeFromWishList($userId,$productId){
        if(empty($userId))
            throw new PixelRequestException('3G201| userId is not provided.');

        if(!empty($productId)){
            $sql = "DELETE FROM user_wishlist WHERE product_id =? AND user_id=?;";
            $query = $this->db->query($sql,array($productId,$userId));
        }else throw new PixelRequestException('3G202| Product Id is not provided.');
    }

    public function listWishListItems($userId){
        $url = $this->urls->getUrl();

        if(empty($userId))
            throw new PixelRequestException('3H201| userId is not provided.');

        $sql = "SELECT * FROM user_wishlist uw LEFT JOIN products p ON (uw.product_id = p.product_id) LEFT JOIN product_description pd ON (pd.product_id = p.product_id) 
                  LEFT JOIN product_images pi ON (pi.product_id = p.product_id) WHERE pd.language_id = 1 AND uw.user_id =? AND p.active=1 AND p.row_disabled = 0
                   GROUP  BY p.product_id";
        $query = $this->db->query($sql, array($userId));
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = array(
                'id' => $pval->product_id,
                'name' => $pval->name,
                'image' => $url.'/static/content/product-images/'.$pval->image
            );
        }
        $data = array(
            'total' => count($products),
            'products' => $products
        );
        return $data;

    }


}