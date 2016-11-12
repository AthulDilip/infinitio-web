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
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class CategoryModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->library('upload');

    }

    public function addNew() {

        //retrieve
        $parent = $this->input->post('parent');
        $so = $this->input->post('sort-order');

        //adding filters to categories
        $fid = $this->input->post('fid');

        //adding attributes to categories
        $aid = $this->input->post('aid');

        //arrays
        $lang = $this->input->post('language');
        $name = $this->input->post('name');
        $descr = $this->input->post('description');
        $mname = $this->input->post('mname');
        $mkey = $this->input->post('mkeywords');
        $mdesc = $this->input->post('mdescription');

        //validate
        if(!is_numeric($parent) || !is_numeric($so)) {
            $this->session->set_userdata('err', "Invalid Data values, adding category failed!");
            redirect('gdf79/Category/all');
        }

        //check if default language data are set
        if($name[0] == NULL || trim($name[0]) == "") {
            $this->session->set_userdata('err', "Name is required!");
            redirect('gdf79/Category/all');
        }
        if($descr[0] == NULL || trim($descr[0]) == "") {
            $this->session->set_userdata('err', "Description is required!");
            redirect('gdf79/Category/all');
        }
        if($mname[0] == NULL || trim($mname[0]) == "") {
            $this->session->set_userdata('err', "Meta name is required!");
            redirect('gdf79/Category/all');
        }
        if($mkey[0] == NULL || trim($mkey[0]) == "") {
            $this->session->set_userdata('err', "Meta keywords is required!");
            redirect('gdf79/Category/all');
        }
        if($mdesc[0] == NULL || trim($mdesc[0]) == "") {
            $this->session->set_userdata('err', "Meta description is required!");
            redirect('gdf79/Category/all');
        }

        $parent = (int)$parent;
        $so = (int)$so;

        //upload images
        $base = FCPATH . 'static/content/cat-imgs/';

        //upload new image
        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('cat-image')) {
            $error = $this->upload->display_errors();
            $error = preg_replace("/<p>/","", $error);
            $error = preg_replace("/<\/p>/","", $error);

            $this->session->set_userdata('err', "" . $error);
            redirect('gdf79/Category/all');
        }

        $image = $this->upload->data()['file_name'];

        if ( ! $this->upload->do_upload('cat-icon'))
        {
            $error = $this->upload->display_errors();
            $error = preg_replace("/<p>/","", $error);
            $error = preg_replace("/<p\/>/","", $error);

            $this->session->set_userdata('err', "" . $error);
            redirect('gdf79/Category/all');
        }

        $icon = $this->upload->data()['file_name'];

        //obtain date
        date_default_timezone_set('GMT');
        $date_a = date('Y/m/d h:i:s', time());
        $date_m = $date_a;

        $ins = $this->db->query("INSERT INTO category (cid, image, icon, parent_id, path, sort_order, status, date_added, date_modified) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);", array($image,$icon,$parent, '', $so, 1, $date_a, $date_m));

        if(!$ins) {
            $this->session->set_userdata('err', "Couldn't add to database, if problem persists, notify admin");
            redirect('gdf79/Category/all');
        }

        $get = $this->db->query("SELECT * FROM category WHERE image=? AND icon=? AND date_added=? AND date_modified=? AND parent_id = ?", array($image,$icon,$date_a, $date_m, $parent));

        if(!$get) {
            $this->session->set_userdata('err', "Category in error state, notify admin");
            redirect('gdf79/Category/all');
        }

        $cc = $get->result()[0];

        $ccid = $cc->cid;
        $path = "";
        if($parent != 0) {
            $par = $this->db->query("SELECT * FROM category WHERE cid =  ?", array($parent));
            $path = $path . $par->result()[0]->path;
        }
        $path = $path . $cc->cid . "_";

        $upd = $this->db->query("UPDATE category SET path = ? WHERE cid = ?", array($path, $ccid));

        //add the filters for categories
        //$sql = "DELETE FROM category_filters WHERE cid = ?";
        //$query = $this->db->query($sql, array($ccid));
        if($fid != null)
        foreach ($fid as $key => $value) {
            $this->addFilters($value, $ccid);
        }

        //add attributes for categories
        if($aid != null)
        foreach ($aid as $key => $value) {
            $this->addAttributes($value, $ccid);
        }

        if(!$upd) {
            $this->session->set_userdata('err', "Category in error state, notify admin");
            redirect('gdf79/Category/all');
        }

        $data = array();

        foreach ($lang as $key => $value) {
            $data[$key] = array(
                'language_id' => $value,
                'name' => (trim($name[$key]) == "") ? trim($name[0]) : trim($name[$key]),
                'mdesc' => (trim($mdesc[$key]) == "") ? trim($mdesc[0]) : trim($mdesc[$key]),
                'descr' => (trim($descr[$key]) == "") ? trim($descr[0]) : trim($descr[$key]),
                'mkey' => (trim($mkey[$key]) == "") ? trim($mkey[0]) : trim($mkey[$key]),
                'mname' => (trim($mname[$key]) == "") ? trim($mname[0]) : trim($mname[$key])
            );
        }

        $dt = " VALUES";
        foreach ($data as $key => $value) {
            if($key != 0) $dt = $dt . ",";
            $dt = $dt . " ('$ccid', '".$value['language_id']."', '".$value['name']."', '".$value['descr']."', '".$value['mname']."', '".$value['mdesc']."', '".$value['mkey']."')";
        }

        $nameData = $this->db->query("INSERT INTO category_description (cid, language_id, name, description, meta_title, meta_description, meta_keyword)" . $dt);

        if( ! $nameData) {
            $this->session->set_userdata('err', "Category in error state, notify admin");
            redirect('gdf79/Category/all');
        }

        $this->session->set_userdata('msg', "Added the category successfully!");
        redirect('gdf79/Category/all');
    }

    public function loadAll() {
        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1";
        $query = $this->db->query($sql, array());

        return ( $query->result() );
    }

    public function listAll() {
        $search = $this->input->get('search');

        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $cat = $this->loadAll();

        $categories = array();

        foreach ($cat as $value) {
            $categories[(int)$value->cid] = $value;
        }

        foreach($cat as $value) {
            $path = $value->path;
            $string = "";

            $pa = explode("_", $path);

            foreach ($pa as $i => $id) {
                if(trim($id) != "") {
                    $tid = trim($id);
                    if($i != 0) $string = $string  . "  >  ";
                    if(isset($categories[(int)$tid])) {
                        $string = $string . $categories[(int)$tid]->name;
                    }
                    else {
                        $string = $string . '(deleted)';
                    }
                }
            }

            $categories[(int)$value->cid]->fullname  = $string;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($categories as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value -> cid,
                'name' => $value -> fullname,
                'actions' => '<a href="'.$url.'Category/delete/'.$value->cid.'" class=" btn btn-danger">Delete</svg></a>&nbsp;<a href="'.$url.'Category/edit/'.$value->cid.'" class=" btn btn-primary">Edit</a>'
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

    //list all categories for adding it onto featured category
    public function listAllToAdd(){
        $search = $this->input->get('search');

        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1
                AND c.cid NOT IN (SELECT cid FROM featured_category)";
        $query = $this->db->query($sql, array());


        $cat = $query->result();

        $categories = array();

        foreach ($cat as $value) {
            $categories[(int)$value->cid] = $value;
            $categories[(int)$value->cid]->fullname  = $value->name;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($categories as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value -> cid,
                'name' => $value -> fullname,
                'actions' => '<a href="'.$url.'FeaturedCategory/addPost/'.$value->cid.'" class=" btn btn-primary">Add to featured category</a>'
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

    public function listFeatured(){

        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $sql = "SELECT * FROM featured_category fc LEFT JOIN category c ON (fc.cid = c.cid) LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1";
        $query = $this->db->query($sql, array());

        $cat = $query->result();

        $categories = array();

        foreach ($cat as $value) {
            $categories[(int)$value->cid] = $value;
            $categories[(int)$value->cid]->fullname = $value->name;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($categories as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value -> cid,
                'name' => $value -> fullname,
                'actions' => '<a href="'.$url.'FeaturedCategory/delete/'.$value->cid.'" class=" btn btn-danger">Delete</svg></a>'
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

    public function listFeaturedArray(){
        $sql = "SELECT * FROM featured_category fc LEFT JOIN category c ON (fc.cid = c.cid) LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1";
        $query = $this->db->query($sql, array());

        $cat = $query->result();
        return $cat;
    }

    public function getArray() {
        $cat = $this->loadAll();

        $categories = array();

        foreach ($cat as $value) {
            $categories[(int)$value->cid] = $value;
        }

        foreach($cat as $value) {
            $path = $value->path;
            $string = "";

            $pa = explode("_", $path);

            foreach ($pa as $i => $id) {
                if(trim($id) != "") {
                    $tid = trim($id);
                    if($i != 0) $string = $string  . "  >  ";
                    if(isset($categories[(int)$tid])) {
                        $string = $string . $categories[(int)$tid]->name;
                    }
                    else {
                        $string = $string . '(deleted)';
                    }
                }
            }

                $categories[(int)$value->cid]->fullname  = $string;
        }

        $list = array();
        $i = 0;

        foreach ($categories as $key => $value) {
            $list[$i] = array(
                'id' => $value->cid,
                'name' => $value->fullname
            );
            $i ++;
        }

        return $list;
    }

    public function delete() {
        $id = $this->uri->segment(4, NULL);
        
        $path = FCPATH . 'static/content/cat-imgs/';
        if( !is_numeric($id) ) {
            $this->session->set_userdata('err', "Invalid category, delete failed.");
            redirect('gdf79/Category/all');
        }

        $del = $this->db->query("SELECT * FROM category WHERE cid = ?", array((int) $id));
        $res = $del -> result();

        foreach ($res as $value) {
            log_message('debug', $path . $value -> image." ".$path . $value -> icon);
            if(file_exists( $path . $value -> image ) && !is_dir($path . $value -> image)) {
                unlink($path . $value -> image);
            }
            if(file_exists( $path . $value -> icon ) && !is_dir($path . $value -> icon)) {
                unlink($path . $value -> icon);
            }
        }

        $this->deleteFeaturedCategory($id);

        //add the filters for categories
        $sql = "DELETE FROM category_filters WHERE cid = ?";
        $query = $this->db->query($sql, array($id));

        $main = $this->db->query("DELETE FROM category WHERE cid = ?", array((int) $id));

        if(!$main) {
            $this->session->set_userdata('err', "Delete failed, database update failed.");
            redirect('gdf79/Category/all');
        }

        $sec = $this->db->query("DELETE FROM category_description WHERE cid = ?", array((int) $id));

        if(!$sec) {
            $this->session->set_userdata('err', "Delete failed, database update failed.");
            redirect('gdf79/Category/all');
        }

        $this->session->set_userdata('msg', "Deleted successfully.");
        redirect('gdf79/Category/all');
    }

    public function getCategory($id) {
        $query = $this->db->query("SELECT * FROM category as c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE c.cid = ?", array($id));
        $res = $query->result();

        if(count($res) == 0) {
            return NULL;
        }

        $list = array();

        foreach ($res as $cat) {
            $list[(int)$cat->language_id] = array(
                'lang' => $cat -> language_id,
                'name' => $cat -> name,
                'mname' => $cat -> meta_title,
                'descr' => $cat -> description,
                'mdesc' => $cat -> meta_description,
                'mkey' => $cat -> meta_keyword
            );
        }

        $base = $this->urls->getUrl() . 'static/content/cat-imgs/';

        $category = array(
            'parent_id' => $res[0] -> parent_id,
            'sort_order' => $res[0] -> sort_order,
            'image' => $base . $res[0] -> image,
            'icon' => $base .  $res[0] -> icon,
            'data' => $list
        );

        return $category;
    }

    public function edit() {
        $id = $this->uri->segment(4, NULL);
        $path = FCPATH . 'static/content/cat-imgs/';

        if( !is_numeric($id) ) {
            $this->session->set_userdata('err', "Invalid category, edit failed.");
            redirect('gdf79/Category/all');
        }

        //prev data
        $get = $this->db->query("SELECT * FROM category WHERE cid = ?", array($id));
        if(!$get) {
            $this->session->set_userdata('err', "Category in error state, notify admin");
            redirect('gdf79/Category/all');
        }

        $cc = $get->result()[0];

        //retrieve
        $parent = $this->input->post('parent');
        $so = $this->input->post('sort-order');
        //arrays
        $lang = $this->input->post('language');
        $name = $this->input->post('name');
        $descr = $this->input->post('description');
        $mname = $this->input->post('mname');
        $mkey = $this->input->post('mkeywords');
        $mdesc = $this->input->post('mdescription');

        $fid = $this->input->post('fid');
        $aid = $this->input->post('aid');

        //add the filters for categories
        $sql = "DELETE FROM category_filters WHERE cid = ?";
        $query = $this->db->query($sql, array($id));
        if($fid != null)
        foreach ($fid as $key => $value) {
            $this->addFilters($value, $id);
        }

        //add the filters for categories
        $sql = "DELETE FROM category_attributes WHERE cid = ?";
        $query = $this->db->query($sql, array($id));
        if($aid != null)
        foreach ($aid as $key => $value) {
            $this->addAttributes($value, $id);
        }

        //validate
        if(!is_numeric($parent) || !is_numeric($so)) {
            $this->session->set_userdata('err', "Invalid Data values, editing category failed!");
            redirect('gdf79/Category/all');
        }

        //check if default language data are set
        if($name[0] == NULL || trim($name[0]) == "") {
            $this->session->set_userdata('err', "Name is required!");
            redirect('gdf79/Category/all');
        }
        if($descr[0] == NULL || trim($descr[0]) == "") {
            $this->session->set_userdata('err', "Description is required!");
            redirect('gdf79/Category/all');
        }
        if($mname[0] == NULL || trim($mname[0]) == "") {
            $this->session->set_userdata('err', "Meta name is required!");
            redirect('gdf79/Category/all');
        }
        if($mkey[0] == NULL || trim($mkey[0]) == "") {
            $this->session->set_userdata('err', "Meta keywords is required!");
            redirect('gdf79/Category/all');
        }
        if($mdesc[0] == NULL || trim($mdesc[0]) == "") {
            $this->session->set_userdata('err', "Meta description is required!");
            redirect('gdf79/Category/all');
        }

        $parent = (int)$parent;
        $so = (int)$so;

        //upload images
        $base = FCPATH . 'static/content/cat-imgs/';

        //upload new image
        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $this->upload->initialize($config);

        if( isset($_FILES['cat-image']['tmp_name']) && is_uploaded_file($_FILES['cat-image']['tmp_name']) ) {
            if (!$this->upload->do_upload('cat-image')) {
                $error = $this->upload->display_errors();
                $error = preg_replace("/<p>/", "", $error);
                $error = preg_replace("/<\/p>/", "", $error);

                $this->session->set_userdata('err', "" . $error);
                redirect('gdf79/Category/all');
            }

            if(file_exists( $path . $cc -> image ) && !is_dir($path . $cc -> image)) {
                unlink($path . $cc -> image);
            }
            $image = $this->upload->data()['file_name'];
        }
        else $image = $cc->image;


        if( isset($_FILES['cat-icon']['tmp_name']) && is_uploaded_file($_FILES['cat-icon']['tmp_name']) ) {
            if (!$this->upload->do_upload('cat-icon')) {
                $error = $this->upload->display_errors();
                $error = preg_replace("/<p>/", "", $error);
                $error = preg_replace("/<p\/>/", "", $error);

                $this->session->set_userdata('err', "" . $error);
                redirect('gdf79/Category/all');
            }

            if(file_exists( $path . $cc -> icon ) && !is_dir($path . $cc -> icon)) {
                unlink($path . $cc -> icon);
            }
            $icon = $this->upload->data()['file_name'];
        }
        else $icon = $cc->icon;

        //obtain date
        date_default_timezone_set('GMT');
        $date_a = date('Y/m/d h:i:s', time());
        $date_m = $date_a;

        $upd  = $this->db->query("UPDATE category SET image = ?, icon = ?, parent_id = ?, sort_order = ?, date_modified = ? WHERE cid = ?", array($image, $icon, $parent, $so, $date_m, $id));

        if(!$upd) {
            $this->session->set_userdata('err', "Couldn't add to database, if problem persists, notify admin");
            redirect('gdf79/Category/all');
        }

        $ccid = $cc->cid;
        $path = "";
        if($parent != 0) {
            $par = $this->db->query("SELECT * FROM category WHERE cid =  ?", array($parent));
            $path = $path . $par->result()[0]->path;
        }
        $path = $path . $cc->cid . "_";

        $upd = $this->db->query("UPDATE category SET path = ? WHERE cid = ?", array($path, $ccid));

        if(!$upd) {
            $this->session->set_userdata('err', "Category in error state, notify admin");
            redirect('gdf79/Category/all');
        }

        $data = array();

        foreach ($lang as $key => $value) {
            $data[$key] = array(
                'language_id' => $value,
                'name' => (trim($name[$key]) == "") ? trim($name[0]) : trim($name[$key]),
                'mdesc' => (trim($mdesc[$key]) == "") ? trim($mdesc[0]) : trim($mdesc[$key]),
                'descr' => (trim($descr[$key]) == "") ? trim($descr[0]) : trim($descr[$key]),
                'mkey' => (trim($mkey[$key]) == "") ? trim($mkey[0]) : trim($mkey[$key]),
                'mname' => (trim($mname[$key]) == "") ? trim($mname[0]) : trim($mname[$key])
            );
        }

        //$h = json_encode($data);
        //log_message('debug', $h);

        foreach ($data as $key => $value) {
            $nameData = $this->db->query("UPDATE category_description SET name = ?, description = ?, meta_title = ?, meta_description = ?, meta_keyword = ? WHERE cid = ? AND language_id = ?", array($value['name'], $value['descr'], $value['mname'], $value['mdesc'], $value['mkey'], $ccid, $value['language_id']));

            if( ! $nameData) {
                $this->session->set_userdata('err', "Error updating db, contact admin.");
                redirect('gdf79/Category/all');
            }
        }

        $this->session->set_userdata('msg', "Edit successful!");
        redirect('gdf79/Category/all');
    }

    public function loadParentCategories() {
        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = 0;";
        $query = $this->db->query($sql, array());

        return ( $query->result() );
    }

    public function loadSubCategories($parent) {
        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = ?;";
        $query = $this->db->query($sql, array($parent));

        return ( $query->result() );
    }

    public function loadProducts($parent){

        $mainFilter = $this->input->get('mainFilter');
        $priceType = $this->input->get('priceType');
        $priceRange = $this->input->get('priceRange');

        if(empty($mainFilter)) $mainFilter=1;

        if(!empty($priceRange)) {
            $priceRange = explode(",", $priceRange);
            $lowRange = $priceRange[0];
            $highRange = $priceRange[1];
        }


        $sql = "SELECT * FROM inventory i LEFT JOIN products p ON(i.product_id = p.product_id) LEFT JOIN product_description pd ON(i.product_id = pd.product_id) LEFT JOIN product_images pi ON (i.product_id = pi.product_id) where p.cid = ? AND language_id=1 GROUP BY i.product_id  ;";

        $sql = "SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? ";

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
            } else {
                $sql = $sql . " AND " . $priceName . " > 0";
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

        $sql = $sql.";";

        log_message("DEBUG",$sql);

        $query = $this->db->query($sql, array($parent));
        $res = $query->result();

        $json = array();
        $list = array();

        $i=0;
        foreach($res as $product){
            $list[$i] = array(
                'id' => $product ->pid,
                'link' => $this->urls->getUrl() . 'p/'.$product->product_id.'/'.$product->url,
                'name' => $product->name,
                'image' => $product->image,
                'hour' => $product->HOUR,
                'day' => $product->DAY,
                'month' => $product->MONTH,
                'desc' => $product->description,
                'zuid' => $product->zuid,
                'rating' => $product->rate
            );

            ++$i;
        }

        $json = array(
            'status' => true,
            'products' => $list
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
                'id' => $product ->pid,
                'link' => $this->urls->getUrl() . 'p/'.$product->product_id.'/'.$product->url,
                'name' => $product->name,
                'image' => $product->image,
                'hour' => $product->HOUR,
                'day' => $product->DAY,
                'month' => $product->MONTH,
                'desc' => $product->description,
                'zuid' => $product->zuid,
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
            'products' => $list
        );


        return $json;
    }

    public function addToFeaturedCategory($cid){
        $sql = "INSERT INTO featured_category(cid) VALUES (?)";
        $query = $this->db->query($sql, array($cid));
    }

    public function deleteFeaturedCategory($cid){
        $main = $this->db->query("DELETE FROM featured_category WHERE cid = ?", array($cid));
    }

    public function addFilters($fgid, $catid) {
        $sql = "INSERT INTO category_filters(cid, filter_group_id) VALUES (?,?)";
        $query = $this->db->query($sql, array($catid, $fgid));
    }

    public function addAttributes ($agid, $catid) {
        $sql = "INSERT INTO category_attributes(cid, attribute_group_id) VALUES (?, ?)";
        $this->db->query($sql, array($catid, $agid));
    }

    public function getChildren($cid = 0) {
        if($cid === null) return array(
            'total' => 0,
            'rows' => array()
        );

        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE c.parent_id = ? AND cd.language_id = 1";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();

        $data = array(
            'total' => 0,
            'rows' => array()
        );

        $cat = array();

        foreach ($res as $ckey => $cval) {
            $cat[] = array(
                'id' => $cval->cid,
                'name' => $cval->name
            );
        }

        $data['total'] = count ( $cat );
        $data['rows'] = $cat;

        return $data;
    }

}