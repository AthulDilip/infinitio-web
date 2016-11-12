<?php
/**
 * Created by PhpStorm.
 * User: ss
 * Date: 15/7/16
 * Time: 10:46 PM
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
class ProductModel extends CI_Model
{
    public function uploadImage()
    {
        $ret = array(
            'status' => false,
            'message' => 'Unknown',
            'filename' => null,
            'location' => null
        );
        //upload images
        $base = FCPATH . 'static/content/product-images/';
        $url = $this->urls->getUrl() . 'static/content/product-images/';
        //upload new image
        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $this->upload->initialize($config);
        if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors();
                $error = preg_replace("/<p>/", "", $error);
                $error = preg_replace("/<\/p>/", "", $error);
                $error = trim($error);
                $ret['message'] = $error;
                return $ret;
            }
            $ret['status'] = true;
            $ret['filename'] = $this->upload->data()['file_name'];
            $ret['location'] = $url . $ret['filename'];
            $date = $this->util->getDateTime();
            $sql = "INSERT INTO product_images(image_id, image, active, date_added, product_id) VALUES (NULL, ?, 0, ?, 0)";
            $this->db->query($sql, array($ret['filename'], $date));
            $ret['id'] = $this->db->query('SELECT LAST_INSERT_ID() AS id')->result()[0]->id;
        } else {
            $ret['message'] = 'Invalid file or Server upload size breached';
        }
        return $ret;
    }
    public function deleteImage($id)
    {
        $base = FCPATH . 'static/content/product-images/';
        $sql = "SELECT * FROM product_images WHERE image_id = ?";
        $res = $this->db->query($sql, array($id))->result();
        if (isset($res[0])) {
            $file = $res[0]->image;
            if (file_exists($base . $file) && !is_dir(file_exists($base . $file))) {
                unlink($base . $file);
            }
        }
        $sql = "DELETE FROM product_images WHERE image_id = ?";
        $this->db->query($sql, array($id));
        return array('status' => true);
    }
    public function getAttributes($catid)
    {
        $sql = "SELECT *, ad.language_id AS lang FROM (SELECT * FROM category_attributes WHERE cid = ?) AS ca LEFT JOIN attribute_group ag ON (ca.attribute_group_id = ag.attribute_group_id) LEFT JOIN attribute_group_description agd ON(agd.attribute_group_id = ag.attribute_group_id) LEFT JOIN attributes a ON (a.attribute_group_id = ag.attribute_group_id) LEFT JOIN attribute_description ad ON (ad.attribute_id = a.attribute_id) WHERE agd.language_id = 1";
        $query = $this->db->query($sql, array($catid));
        $res = $query->result();
        $atrs = array();
        foreach ($res as $atrkey => $atrvalue) {
            if ($atrvalue->type != 'select') {
                if ($atrvalue->lang == '1') {
                    $atrs[$atrvalue->attribute_group_id]['group_id'] = $atrvalue->attribute_group_id;
                    $atrs[$atrvalue->attribute_group_id]['group_name'] = $atrvalue->group_name;
                    $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['atr_id'] = $atrvalue->attribute_id;
                    $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['atr_name'] = $atrvalue->name;
                    $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['type'] = $atrvalue->type;
                }
            } else {
                if ($atrvalue->lang == '1') {
                    $atrs[$atrvalue->attribute_group_id]['group_id'] = $atrvalue->attribute_group_id;
                    $atrs[$atrvalue->attribute_group_id]['group_name'] = $atrvalue->group_name;
                    $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['atr_id'] = $atrvalue->attribute_id;
                    $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['atr_name'] = $atrvalue->name;
                }
                $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['type'] = $atrvalue->type;
                $atrs[$atrvalue->attribute_group_id]['attributes'][$atrvalue->attribute_id]['options'][$atrvalue->lang] = ($atrvalue->value == '') ? null : json_decode($atrvalue->value);
            }
        }
        return $atrs;
    }
    public function getCategory($cid)
    {
        if ($cid == null) return null;
        $sql = "SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE c.cid=? AND cd.language_id=1";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();
        if (count($res) < 1) return null;
        else return $res[0];
    }
    public function save()
    {
        $data['status'] = false;
        $cat = $this->input->post('category');
        $catdata = $this->isValidCat($cat);
        if ($catdata == null) {
            $data['message'] = "Invalid category!";
            return $data;
        }
        $languages = $this->LanguageModel->getAll();
        $zuid = trim($this->input->post('zuid'));
        if ($this->zuidExists($zuid) || $zuid == '') {
            $data['message'] = "Invalid ZUID";
            return $data;
        }
        $name = $this->util->filterArray($this->input->post('name'));
        $video = $this->util->filterArray($this->input->post('video'));
        $brand = $this->util->filterArray($this->input->post('brand'));
        $desc = $this->util->filterArray($this->input->post('desc'));
        $metadesc = $this->util->filterArray($this->input->post('metadesc'));
        $metatitle = $this->util->filterArray($this->input->post('metatitl'));
        $metakey = $this->util->filterArray($this->input->post('metakey'));
        $images = $this->input->post('imageid');
        if (!$this->checkBaseLangData($name, $brand, $desc, $metadesc, $metakey, $images)) {
            $data['message'] = "Incomplete data, one image necessary!";
            return $data;
        }
        //attributes
        $agid = $this->input->post('atrGroupId');
        $aid = $this->input->post('atrId');
        $lang = $this->input->post('lang');
        $values = $this->input->post('values');
        //filters
        $filters = $this->input->post('fid');
        $date = $this->util->getDateTime();

        //get featured image
        $f_image = $images[0];

        //main product data
        $msql = "INSERT INTO products(zuid, product_id, active, category_path, cid, date_added, date_modified, is_request, hits, url, featured_image) VALUES (?, NULL, 1, ?, ?, ?, ?, 0, 0, '--------------', ?)";
        $query = $this->db->query($msql, array($zuid, $catdata->path, $catdata->cid, $date, $date, $f_image));
        if (!$query) {
            $data['message'] = "Cannot Add the Product Data";
            return $data;
        }
        //get product_id
        $psql = "SELECT LAST_INSERT_ID() AS product_id";
        $query = $this->db->query($psql);
        $pid = $query->result()[0]->product_id;
        //generate url
        $engname = $name[0];
        $p_url = preg_replace("/[^[:alnum:]]/u", '_', $engname);
        $p_url = preg_replace("/__/", "_", $p_url);
        $p_url = preg_replace("/__/", "_", $p_url);
        $p_url .= 'id' . $pid;
        log_message('DEBUG', $p_url);
        //update the url -- one time
        $sql = "UPDATE products SET url = ? WHERE product_id = ?";
        $query = $this->db->query($sql, array($p_url, $pid));
        foreach ($languages as $lkey => $lval) {
            $aname = $name[$lkey] == '' ? $name[0] : $name[$lkey];
            $avideo = $video[$lkey] == '' ? $video[0] : $video[$lkey];
            $abrand = $brand[$lkey] == '' ? $brand[0] : $brand[$lkey];
            $adesc = $desc[$lkey] == '' ? $desc[0] : $desc[$lkey];
            $amdesc = $metadesc[$lkey] == '' ? $metadesc[0] : $metadesc[$lkey];
            $amtitle = $metatitle[$lkey] == '' ? $metatitle[0] : $metatitle[$lkey];
            $amkey = $metakey[$lkey] == '' ? $metakey[0] : $metakey[$lkey];
            $langid = $lval->language_id;
            $nsql = "INSERT INTO product_description(name, brand, description, video, meta_title, meta_description, meta_keywords, language_id, product_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $this->db->query($nsql, array($aname, $abrand, $adesc, $avideo, $amtitle, $amdesc, $amkey, $langid, $pid));
        }
        //save attributes
        if ($lang != null)
            foreach ($lang as $lkey => $lval) {
                $avalue = $values[$lkey] == '' ? '-' : $values[$lkey];
                $alang = $lang[$lkey];
                $aatrgid = $agid[$lkey];
                $atrid = $aid[$lkey];
                $asql = "INSERT INTO product_attributes(product_id, attribute_group_id, attribute_id, value, language_id) VALUES(?, ?, ?, ?, ?)";
                $query = $this->db->query($asql, array($pid, $aatrgid, $atrid, $avalue, $alang));
            }
        //save filters
        if ($filters != null)
            foreach ($filters as $fkey => $fval) {
                $fsql = "INSERT INTO product_filters(product_id, filter_id) VALUES(?, ?)";
                $query = $this->db->query($fsql, array($pid, $fval));
            }
        //update images
        $imgids = implode(',', $images);
        $isql = "UPDATE product_images SET active = 1, product_id = ? WHERE image_id IN (" . $imgids . ")";
        $query = $this->db->query($isql, array($pid));
        if ($query) {
            $data['status'] = true;
            $this->session->set_userdata('msg', "Product added successfully!");
            return $data;
        } else {
            $data['message'] = 'Some error occured, try again!';
            return $data;
        }
    }
    private function isValidProduct($pid = 0) {
        if ($pid == 0 || $pid == null) return null;
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();
        if (count($res) > 0) return $res[0];
        else return null;
    }
    public function update()
    {
        $data['status'] = false;
        $pid = $this->uri->segment(4, null);
        $pdata = $this->isValidProduct($pid);
        if ($pdata == null) {
            $data['message'] = "Invalid Product";
            return $data;
        }
        $languages = $this->LanguageModel->getAll();
        $name = $this->util->filterArray($this->input->post('name'));
        $video = $this->util->filterArray($this->input->post('video'));
        $brand = $this->util->filterArray($this->input->post('brand'));
        $desc = $this->util->filterArray($this->input->post('desc'));
        $metadesc = $this->util->filterArray($this->input->post('metadesc'));
        $metatitle = $this->util->filterArray($this->input->post('metatitl'));
        $metakey = $this->util->filterArray($this->input->post('metakey'));
        $images = $this->input->post('imageid');
        if (!$this->checkBaseLangData($name, $brand, $desc, $metadesc, $metakey, $images)) {
            $data['message'] = "Incomplete data, one image necessary!";
            return $data;
        }
        //attributes
        $agid = $this->input->post('atrGroupId');
        $aid = $this->input->post('atrId');
        $lang = $this->input->post('lang');
        $values = $this->input->post('values');
        //filters
        $filters = $this->input->post('fid');
        $date = $this->util->getDateTime();
        $pid = $pdata->product_id;
        $f_image = $images[0];

        //main product data
        $msql = "UPDATE products SET date_modified = ?, featured_image = ? WHERE product_id = ?";
        $query = $this->db->query($msql, array($date, $pid, $f_image));
        if (!$query) {
            $data['message'] = "Cannot update the Product Data";
            return $data;
        }
        //remove product_descr data
        $psql = "DELETE FROM product_description WHERE product_id = ?";
        $this->db->query($psql, array($pid));
        foreach ($languages as $lkey => $lval) {
            $aname = $name[$lkey] == '' ? $name[0] : $name[$lkey];
            $avideo = $video[$lkey] == '' ? $video[0] : $video[$lkey];
            $abrand = $brand[$lkey] == '' ? $brand[0] : $brand[$lkey];
            $adesc = $desc[$lkey] == '' ? $desc[0] : $desc[$lkey];
            $amdesc = $metadesc[$lkey] == '' ? $metadesc[0] : $metadesc[$lkey];
            $amtitle = $metatitle[$lkey] == '' ? $metatitle[0] : $metatitle[$lkey];
            $amkey = $metakey[$lkey] == '' ? $metakey[0] : $metakey[$lkey];
            $langid = $lval->language_id;
            $nsql = "INSERT INTO product_description(name, brand, description, video, meta_title, meta_description, meta_keywords, language_id, product_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $this->db->query($nsql, array($aname, $abrand, $adesc, $avideo, $amtitle, $amdesc, $amkey, $langid, $pid));
        }
        //remove product_attr data
        $psql = "DELETE FROM product_attributes WHERE product_id = ?";
        $this->db->query($psql, array($pid));
        //save attributes
        if ($lang != null)
            foreach ($lang as $lkey => $lval) {
                $avalue = $values[$lkey] == '' ? '-' : $values[$lkey];
                $alang = $lang[$lkey];
                $aatrgid = $agid[$lkey];
                $atrid = $aid[$lkey];
                $asql = "INSERT INTO product_attributes(product_id, attribute_group_id, attribute_id, value, language_id) VALUES(?, ?, ?, ?, ?)";
                $query = $this->db->query($asql, array($pid, $aatrgid, $atrid, $avalue, $alang));
            }
        //remove product_descr data
        $psql = "DELETE FROM product_filters WHERE product_id = ?";
        $this->db->query($psql, array($pid));
        //log_message('DEBUG', json_encode($filters));
        //save filters
        if ($filters != null)
            foreach ($filters as $fkey => $fval) {
                $fsql = "INSERT INTO product_filters(product_id, filter_id) VALUES(?, ?)";
                $query = $this->db->query($fsql, array($pid, $fval));
            }
        //update images
        $imgids = implode(',', $images);
        $isql = "UPDATE product_images SET active = 1, product_id = ? WHERE image_id IN (" . $imgids . ")";
        $query = $this->db->query($isql, array($pid));
        if ($query) {
            $data['status'] = true;
            $this->session->set_userdata('msg', "Product updated successfully!");
            return $data;
        } else {
            $data['message'] = 'Some error occured, try again!';
            return $data;
        }
    }
    public function listProducts() {
        $url = $this->urls->getAdminUrl();
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = ? AND p.row_disabled = 0";
        $query = $this->db->query($sql, array(1));
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = array(
                'id' => $pval->product_id,
                'name' => $pval->name,
                'actions' => '<a href="' . $url . 'Products/delete/' . $pval->product_id . '" class=" btn btn-danger">Delete</a>&nbsp;<a href="' . $url . 'Products/edit/' . $pval->product_id . '" class=" btn btn-primary">Edit</a>'
            );
        }
        $data = array(
            'total' => count($products),
            'rows' => $products
        );
        return $data;
    }

    public function listProductNames() {
        $url = $this->urls->getAdminUrl();
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = ? AND p.row_disabled = 0";
        $query = $this->db->query($sql, array(1));
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = $pval->name;
        }

        return $products;
    }

    public function listProductsToAdd()
    {
        $url = $this->urls->getAdminUrl();
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = ?
                AND p.product_id NOT IN (SELECT product_id FROM featured_products)";
        $query = $this->db->query($sql, array(1));
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = array(
                'id' => $pval->product_id,
                'name' => $pval->name,
                'actions' => '<a href="' . $url . 'FeaturedProducts/addPost/' . $pval->product_id . '" class=" btn btn-primary">Add to featured products</a>'
            );
        }
        $data = array(
            'total' => count($products),
            'rows' => $products
        );
        return $data;
    }
    public function listFeaturedProducts()
    {
        $url = $this->urls->getAdminUrl();
        $sql = "SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = ?";
        $query = $this->db->query($sql, array(1));
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[$pkey] = array(
                'id' => $pval->product_id,
                'name' => $pval->name,
                'actions' => '<a href="' . $url . 'FeaturedProducts/delete/' . $pval->product_id . '" class=" btn btn-danger">Delete</a>'
            );
        }
        $data = array(
            'total' => count($products),
            'rows' => $products
        );
        return $data;
    }

    public function listFeaturedProductsPhp(){
        $sql = "SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) 
                LEFT JOIN product_description pd ON (pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.product_id = p.product_id)
                 WHERE pd.language_id = 1 GROUP  BY p.product_id" ;
        $query = $this->db->query($sql, array());
        return $query->result();
    }
    public function delete($pid = 0)
    {
        $sql = "UPDATE products SET row_disabled = 1 WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $this->deleteFeaturedProduct($pid);
        //delete inventory items too
        $sql = "UPDATE inventory SET row_disabled = 1 WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $this->session->set_userdata('msg', 'Product deleted successfully!');
    }
    private function zuidExists($zuid = "ZUID000000")
    {
        $sql = "SELECT COUNT(*) AS count from products WHERE zuid = ?";
        $query = $this->db->query($sql, array($zuid));
        $res = $query->result()[0];
        if ($res->count > 0) {
            return true;
        }
        return false;
    }
    private function checkBaseLangData($name = array(), $brand = array(), $desc = array(), $metadesc = array(), $metakey = array(), $images = array())
    {
        if ($name[0] == '' || $brand[0] == '' || $desc[0] == '' || $metadesc[0] == '' || $metakey[0] == '' || !count($images) > 0) {
            return false;
        }
        return true;
    }
    private function isValidCat($cid = 0)
    {
        $sql = "SELECT * FROM category WHERE cid = ?";
        $res = $this->db->query($sql, array($cid));
        $res = $res->result();
        if (count($res) > 0) {
            return $res[0];
        } else return null;
    }
    public function getProduct($pid = 0)
    {
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();
        if (count($res) < 1) return null;
        $pdata = $res[0];
        $product = array(
            'zuid' => $pdata->zuid,
            'product_id' => $pdata->product_id,
            'cid' => $pdata->cid,
            'data' => array(),
            'attributes' => array(),
            'filters' => array(),
            'images' => array()
        );
        $dsql = "SELECT * FROM product_description WHERE product_id = ?";
        $query = $this->db->query($dsql, array($pid));
        $res = $query->result();
        $desc = array();
        foreach ($res as $dkey => $dval) {
            $desc[$dval->language_id]['name'] = $dval->name;
            $desc[$dval->language_id]['brand'] = $dval->brand;
            $desc[$dval->language_id]['description'] = $dval->description;
            $desc[$dval->language_id]['meta_title'] = $dval->meta_title;
            $desc[$dval->language_id]['meta_description'] = $dval->meta_description;
            $desc[$dval->language_id]['meta_keywords'] = $dval->meta_keywords;
            $desc[$dval->language_id]['video'] = $dval->video;
        }
        $product['data'] = $desc;
        $asql = "SELECT * FROM product_attributes WHERE product_id = ?";
        $query = $this->db->query($asql, array($pid));
        $res = $query->result();
        $attributes = array();
        foreach ($res as $akey => $aval) {
            $attributes[$aval->attribute_group_id][$aval->attribute_id][$aval->language_id] = $aval->value;
        }
        $product['attributes'] = $attributes;
        $filters = $this->FilterModel->productFilters($pid);
        $product['filters'] = $filters;
        $images = array();
        $sql = "SELECT * FROM product_images WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();
        foreach ($res as $ikey => $ival) {
            $images[] = array(
                'name' => $ival->image,
                'id' => $ival->image_id
            );
        }
        $product['images'] = $images;
        return $product;
    }
    public function getProductObject($pid = 0) {
        if($pid == 0) return null;
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON(pd.product_id = p.product_id AND p.product_id = ?) WHERE language_id = ?";
        $query = $this->db->query($sql, array($pid, 1));
        if($query->num_rows() > 0) {
            return $query->result()[0];
        }
        else return null;
    }
    public function countProductByCategory($cid = 0, $search = null)
    {
        $count = 0;
        if ($cid == 0) {
            return $count;
        }
        $sql = "SELECT * FROM category WHERE cid = ?";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();
        if (count($res) > 0) $cat = $res[0];
        else return $count;
        $path = $cat->path;
        $psql = "SELECT COUNT(*) AS count FROM products p LEFT JOIN product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = 1 AND p.category_path LIKE ?";
        if ($search != null) {
            $psql = "SELECT COUNT(*) AS count FROM products p LEFT JOIN product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = 1 AND p.category_path LIKE ? AND pd.name LIKE ?";
        }
        if ($search != null) {
            $pquery = $this->db->query($psql, array($path . '%', '%' . $search . '%'));
        } else {
            $pquery = $this->db->query($psql, array($path . '%'));
        }
        $count = $pquery->result()[0]->count;
        return $count;
    }
    public function getProductByCategory($cid = 0, $limit = 10, $offset = 0, $search = null)
    {
        $data = array(
            'total' => 0,
            'rows' => array()
        );
        $limit = (int)$limit;
        $offset = (int)$offset;
        if ($cid == 0) {
            $data = $this->getPopularProducts($limit, $offset, $search);
            return $data;
        }
        $sql = "SELECT * FROM category WHERE cid = ?";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();
        if (count($res) > 0) $cat = $res[0];
        else return $data;
        $path = $cat->path;
        $psql = "SELECT * FROM products p LEFT JOIN product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = 1 AND p.category_path LIKE ? LIMIT ?,?";
        if ($search != null) {
            $psql = "SELECT * FROM products p LEFT JOIN product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = 1 AND p.category_path LIKE ? AND pd.name LIKE ? LIMIT ?,?";
        }
        if ($search != null) {
            $pquery = $this->db->query($psql, array($path . '%', '%' . $search . '%', $offset, $limit));
        } else {
            $pquery = $this->db->query($psql, array($path . '%', $offset, $limit));
        }
        $p = $pquery->result();
        $prod = array();
        foreach ($p as $pkey => $pval) {
            $prod[] = array(
                'id' => $pval->product_id,
                'name' => $pval->name
            );
        }
        $data['total'] = $this->countProductByCategory($cid, $search);
        $data['rows'] = $prod;
        return $data;
    }
    public function getPopularProductCount($search = null)
    {
        if ($search == null) {
            $sql = "SELECT COUNT(*) AS count FROM products p LEFT JOIN product_description pd ON(p.product_id = pd.product_id) WHERE pd.language_id = 1 ORDER BY p.hits DESC";
            $query = $this->db->query($sql, array());
        } else {
            $sql = "SELECT COUNT(*) AS count FROM products p LEFT JOIN product_description pd ON(p.product_id = pd.product_id) WHERE pd.language_id = 1 AND pd.name LIKE ? ORDER BY p.hits DESC";
            $query = $this->db->query($sql, array('%' . $search . '%'));
        }
        $res = $query->result()[0]->count;
        return $res;
    }
    public function getPopularProducts($limit = 10, $offset = 0, $search = null)
    {
        if ($search == null) {
            $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON(p.product_id = pd.product_id) WHERE pd.language_id = 1 ORDER BY p.hits DESC LIMIT ?,?";
            $query = $this->db->query($sql, array($offset, $limit));
        } else {
            $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON(p.product_id = pd.product_id) WHERE pd.language_id = 1 AND pd.name  LIKE ? ORDER BY p.hits DESC LIMIT ?,?";
            $query = $this->db->query($sql, array('%' . $search . '%', $offset, $limit));
        }
        $res = $query->result();
        $products = array();
        foreach ($res as $pkey => $pval) {
            $products[] = array(
                'name' => $pval->name,
                'id' => $pval->product_id
            );
        }
        if ($search == null)
            return array(
                'total' => $this->getPopularProductCount(),
                'rows' => $products
            );
        else
            return array(
                'total' => $this->getPopularProductCount($search),
                'rows' => $products
            );
    }
    //Load product page for each inventory
    public function getProductData($pid = 0, $invid = 0, $lang = 1, $url = '')
    { //invid = 0 when no inventory specified
        $pid = (int)$pid;
        $invid = (int)$invid;
        if ($pid == 0) return null;
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON(pd.product_id = p.product_id AND pd.language_id = ?) WHERE p.product_id = ?";
        $query = $this->db->query($sql, array($lang, $pid));
        $res = $query->result();
        if (count($res) < 1) {
            return null;
        }
        $product = $res[0];
        //check if user is accessing the product from the correct url
        if ($url != $product->url) {
            //not correct url, redirect to correct url
            $i = ($invid == 0) ? '' : $invid;
            $uri = '/p/' . $pid . '/' . $product->url . '/' . $i;
            redirect($uri);
        }
        //load product images
        $sql = "SELECT * FROM product_images WHERE product_id = ?";
        $query = $this->db->query($sql, array($pid));
        $iurl = $this->urls->getConUrl() . 'content/product-images/';
        $res = $query->result();
        $images = array();
        foreach ($res as $ikey => $ival) {
            $images[] = array(
                'image_id' => $ival->image_id,
                'image_url' => $iurl . $ival->image
            );
        }
        $lat = $this->input->get('lat');
        $lon = $this->input->get('lon');
        //oad inventory data
        $inventory = $this->InventoryModel->getProductInventory($pid, $invid, $lat, $lon); //selected and all -- indexes
        //load the attribute groups
        $attributeG = $this->AttributeModel->getProductAttributes($pid, $lang);
        $productData = array(
            'name' => $product->name,
            'zuid' => $product->zuid,
            'product_url' => $product->url,
            'product_id' => $product->product_id,
            'description' => $product->description,
            'images' => $images,
            'inventory' => $inventory,
            'attributes' => $attributeG
        );
        return $productData;
    }
    public function getProductReviews($pid = 0, $invid = 0, $lat = null, $lon = null, $start, $limit) {
        if($pid == 0) {
            return null;
        }
        $sel = null;
        if($lat != null && $lon != null) {
            $sql = "SELECT * FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? AND latitude = ? AND longitude = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID) LIMIT ?,?";
            $query = $this->db->query($sql, array($pid, (float)$lat, (float)$lon, $start,$limit));
            $sel = $query->result();
            $sql = "SELECT COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? AND latitude = ? AND longitude = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID)";
            $query = $this->db->query($sql, array($pid, (float)$lat, (float)$lon));
            $selcnt = $query->result();
            $sqlrnt = "SELECT rating,COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? AND latitude = ? AND longitude = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID) GROUP BY rating";
            $query = $this->db->query($sqlrnt, array($pid, (float)$lat, (float)$lon));
            $selrnt = $query->result();
            if (count ($sel) <= 0) {
                $sel = "-1";
            }
        }
        else {
            if((int)$invid != 0) {
                $sql = "SELECT * FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM inventory i WHERE i.active = 1 AND i.row_disabled = 0 AND i.product_id = ? AND i.inventory_id = ?) LIMIT ?,?";
                $query = $this->db->query($sql, array($pid, $invid,$start,$limit));
                $sel = $query->result();
                $sql = "SELECT COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM inventory i WHERE i.active = 1 AND i.row_disabled = 0 AND i.product_id = ? AND i.inventory_id = ?)";
                $query = $this->db->query($sql, array($pid,$invid));
                $selcnt = $query->result();
                $sqlcnt = "SELECT rating,COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM inventory i WHERE i.active = 1 AND i.row_disabled = 0 AND i.inventory_id = ?) GROUP BY rating";
                $query = $this->db->query($sqlcnt, array($invid));
                $selrnt = $query->result();
                if (count ($sel) <= 0) {
                    $sel = "-1";
                }
            }
        }
        $sql = "SELECT * FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID) LIMIT ?,?";
        $query = $this->db->query($sql, array($pid,$start,$limit));
        $res = $query->result();
        $sql = "SELECT COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID)";
        $query = $this->db->query($sql, array($pid));
        $rescnt = $query->result();
        $sqlrnt = "SELECT rating,COUNT(*) as cnt FROM user_reviews ur LEFT JOIN users u ON (ur.reviewer_id = u.id) WHERE ur.user_id = (SELECT user_id FROM (SELECT * FROM (SELECT user_id,product_id,
	                (SELECT AVG(rating) FROM user_reviews ur WHERE ur.user_id = INVS.user_id AND active=1 AND row_disabled = 0) AS rate
                FROM `inventory` AS INVS WHERE product_id = ? ORDER BY rate DESC) AS FNL GROUP BY FNL.product_id) AS USERID) GROUP BY rating";
        $query = $this->db->query($sqlrnt, array($pid));
        $resrnt = $query->result();
        if($sel == null) {
            log_message("DEBUG","product id used");
            if(count ($res) < 1) return null;
            $inv = array(
                'selected' => $res,
                'count' => count($res),
                'ratings' => $resrnt,
                'total' => $rescnt[0]->cnt
            );
        }else{
            if($sel == "-1") return null;
            $inv = array(
                'selected' => $sel,
                'count' => count($sel),
                'ratings' => $selrnt,
                'total' => $selcnt[0]->cnt
            );
        }
        return $inv;
    }
    public function addToFeaturedProducts($id)
    {
        $sql = "INSERT INTO featured_products(product_id) VALUES (?)";
        $query = $this->db->query($sql, array($id));
    }
    public function deleteFeaturedProduct($id)
    {
        $main = $this->db->query("DELETE FROM featured_products WHERE product_id = ?", array($id));
    }
    public function addToWishList($id){
        if($this->session->has_userdata('user_id') && $id != -1){
            $user_id = $this->session->userdata('user_id');
            $sql = "INSERT INTO user_wishlist (product_id,user_id,`date`) VALUES (?,?,NOW())";
            $query = $this->db->query($sql,array($id,$user_id));
        }
    }
    public function removeFromWishList($id){
        if($this->session->has_userdata('user_id') && $id !== -1){
            $user_id = $this->session->userdata('user_id');
            $sql = "DELETE FROM user_wishlist WHERE product_id =? AND user_id=?;";
            $query = $this->db->query($sql,array($id,$user_id));
        }
    }
    public function listAllWishListItems(){
        if($this->session->has_userdata('user_id')){
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT product_id FROM user_wishlist  WHERE user_id = ? ";
            $query = $this->db->query($sql, array($user_id));
            $res = $query->result();
            $wishlist = array();
            $i=0;
            foreach ($res as $item){
                $wishlist[$i] = $item->product_id;
                ++$i;
            }
            return $wishlist;
        }
        return null;
    }
    public function showWishList() {

        if ($this->session->has_userdata('user_id')) {
            $user_id = $this->session->userdata('user_id');
            $sql = "SELECT * FROM user_wishlist uw LEFT JOIN products p ON (uw.product_id = p.product_id) 
                    LEFT JOIN  product_description pd ON (uw.product_id = pd.product_id AND pd.language_id = 1) 
                    LEFT JOIN product_images pi ON (uw.product_id = pi.product_id) WHERE uw.user_id = ? GROUP BY pi.product_id";
            $query = $this->db->query($sql, array($user_id));
            return $query->result();
        }
    }
    public function getSingleImage($pid = 0)
    {
        $sql = "SELECT * FROM product_images WHERE product_id = ? LIMIT 0,1";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();
        return $res[0];
    }
    public function search($index, $total) {
        $name = $this->input->get('name');
        $place = $this->input->get('place');
        $cat = $this->input->get('catid');
        $lat = $this->input->get('lat');
        $lon = $this->input->get('lon');
        $mainFilter = $this->input->get('mainFilter');
        $priceType = $this->input->get('priceType');
        $priceRange = $this->input->get('priceRange');
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

        //Add the keyword to the database for the purpose of analysis
        if(!empty($name)){
            $sql = "SELECT * FROM searched_keywords WHERE LCASE(keyword) = LCASE(?)";
            $query = $this->db->query($sql,array($name));

            if($query->num_rows() > 0){
                //update
                $id = $query->result()[0]->id;
                $sql = "UPDATE searched_keywords SET hits=hits+1 WHERE id = ?;";
                $query = $this->db->query($sql,array($id));
            }else{
                //insert
                $sql = "INSERT INTO searched_keywords (keyword,hits) VALUES(LCASE(?),?);";
                $query = $this->db->query($sql,array($name,1));
            }
        }

        if(!empty($place)&& !empty($lat) && !empty($lon)){
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
                    'id' => $product->product_id,
                    'name' => $product->name,
                    'image' => $product->image,
                    'hour' => $product->hour,
                    'day' => $product->day,
                    'month' => $product->month,
                    'link' => $this->urls->getUrl() . 'p/' . $product->product_id . '/' . $product->url . '/?lat='.$product->latitude.'&lon='.$product->longitude,
                    'desc' => $product->description,
                    'zuid' => $product->zuid,
                    'rating' => $product->rate,
                    'latitude' => $product->latitude,
                    'longitude' => $product->longitude,
                    'location' => $product->location
                );
                //log_message("DEBUG","location");
            }else {
                $list[$i] = array(
                    'id' => $product ->product_id,
                    'link' => $this->urls->getUrl() . 'p/' . $product->product_id . '/' . $product->url . '/',
                    'name' => $product->name,
                    'image' => $product->image,
                    'hour' => $product->hour,
                    'day' => $product->day,
                    'month' => $product->month,
                    'desc' => $product->description,
                    'zuid' => $product->zuid,
                    'rating' => $product->rate
                );
            }
            ++$i;
        }
        $json = array(
            'status' => true,
            'total_count' => $total_cnt,
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

    /**
     * @return array()
     */
    public function getProductArray() {
        $sql = "SELECT * FROM products p LEFT JOIN product_description pd ON(pd.product_id = p.product_id) WHERE pd.language_id = 1";
        $query = $this->db->query($sql, array(
        ));

        $res = $query->result();
        $new = array();
        foreach ($res as $r) {
            $new[] = array(
                'id' => $r->product_id,
                'name' => $r->name
            );
        }

        return $new;
    }

    public function incrementProductHits($pid){
        $sql = "UPDATE products SET hits=hits+1 WHERE product_id = ?;";
        $query = $this->db->query($sql,array($pid));
    }

    public function listProductsByUserId($userId,$index,$total){
        $sql = "SELECT * FROM (
                    SELECT DISTINCT product_id AS pid, p_price_hour , p_price_day, p_price_month,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 AND user_id = ? ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 )
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) GROUP BY PRD.pid LIMIT ".$index.",".$total;


        $query = $this->db->query($sql,array($userId));

        $sqlcnt = "SELECT COUNT(*)AS total FROM (
                    SELECT DISTINCT product_id AS pid FROM inventory i WHERE active = 1 AND row_disabled = 0 AND user_id = ? ) AS PRD";

        $querycnt = $this->db->query($sqlcnt,array($userId));

        $res = $query->result();
        $rescnt = $querycnt->result();
        $total_cnt = $rescnt[0]->total;
        $list = array();
        $i=0;
        foreach($res as $product){
            $list[$i] = array(
                'id' => $product ->product_id,
                'link' => $this->urls->getUrl() . 'p/' . $product->product_id . '/' . $product->url . '/',
                'name' => $product->name,
                'image' => $product->image,
                'hour' => $product->p_price_hour,
                'day' => $product->p_price_day,
                'month' => $product->p_price_month,
                'desc' => $product->description,
                'zuid' => $product->zuid,
                'rating' => $product->rate
            );
            ++$i;
        }
        $json = array(
            'status' => true,
            'total_count' => $total_cnt,
            'products' => $list
        );
        return $json;
    }
}