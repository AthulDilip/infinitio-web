<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 14/8/16
 * Time: 4:12 PM
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
 * @property TaxModel $TaxModel
 * @property UsersModel $UsersModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */
class TaxClassModel extends CI_Model
{

    public function getAll($limit = 10, $offset = 0, $search = null) {
        $data = array(
            'total' => 0,
            'rows' => array()
        );

        $query = null;
        $count = 0;

        if($search == null) {
            $sql = "SELECT * FROM tax_classes LIMIT ?,?";
            $csql = "SELECT COUNT(*) AS count FROM tax_classes";

            $query = $this->db->query($sql, array((int)$offset, (int)$limit));
            $count = $this->db->query($csql, array());
        }
        else {
            $sql = "SELECT * FROM tax_classes WHERE tax_class_name LIKE ? LIMIT ?,?";
            $csql = "SELECT COUNT(*) AS count FROM tax_classes WHERE tax_class_name LIKE ?";

            $query = $this->db->query($sql, array('%'.$search.'%',(int)$offset, (int)$limit));
            $count = $this->db->query($csql, array('%'.$search.'%'));
        }

        $url = $this->urls->getAdminUrl();
        $res = $query->result();
        $count = $count->result()[0]->count;

        /*'.$url.'Taxes/delete/'.$tv->tax_id.'*/

        $taxes = array();
        foreach ($res as $tk => $tv) {
            $taxes[] = array(
                'name' => $tv->class_name,
                'actions' => '<button onclick="pop('.$tv->tax_class_id.')" class=" btn btn-danger">Delete</button>&nbsp;<a href="'.$url.'TaxClasses/edit/'.$tv->tax_class_id.'" class=" btn btn-primary">Edit</a>'
            );
        }

        $data['total'] = $count;
        $data['rows'] = $taxes;

        return $data;
    }

    public function getAllTaxClass() {
        $sql = "SELECT * FROM tax_classes";
        $query = $this->db->query($sql, array());
        $res = $query->result();

        return $res;
    }

    public function save($class_name, $tax_id, $id = 0) {
        if($id == 0) {
            //add new
            $sql = "INSERT INTO tax_classes(tax_class_id, class_name) VALUES (NULL, ?)";
            $query = $this->db->query($sql, array($class_name));

            $sql = "SELECT LAST_INSERT_ID() AS tax_class_id";
            $query = $this->db->query($sql, array());
            $tax_class_id = $query->result()[0]->tax_class_id;

            if($tax_id != null) {
                foreach ($tax_id as $tk => $tv) {
                    $sql = "INSERT INTO tax_class_members(tax_class_id, tax_id) VALUES (?, ?)";
                    $this->db->query($sql, array((int)$tax_class_id, (int) $tv));
                    log_message('DEBUG', $tv);
                }
            }

            $data = array(
                'status' => true,
                'message' => 'Added Successfully!'
            );
            $this->session->set_userdata('msg', $data['message']);
            return $data;
        }
        else {
            //update
            $sql = "UPDATE tax_classes SET class_name = ? WHERE tax_class_id = ?";
            $query = $this->db->query($sql, array($class_name, $id));

            $sql = "DELETE FROM tax_class_members WHERE tax_class_id = ?";
            $query = $this->db->query($sql, array($id));
            $tax_class_id = $id;

            if($tax_id != null) {
                foreach ($tax_id as $tk => $tv) {
                    $sql = "INSERT INTO tax_class_members(tax_class_id, tax_id) VALUES (?, ?)";
                    $this->db->query($sql, array((int)$tax_class_id, (int) $tv));
                }
            }

            $data = array(
                'status' => true,
                'message' => 'Updated Successfully!'
            );
            $this->session->set_userdata('msg', $data['message']);
            return $data;
        }
    }

    public function getTaxClass($id = 0) {
        $sql = "SELECT * FROM tax_classes WHERE tax_class_id = ?";
        $query = $this->db->query($sql, array($id));
        $res = $query->result();

        if(count ($res) > 0) {
            $tax = $res[0];
        }
        else return null;

        $sql = "SELECT * FROM tax_class_members tm LEFT JOIN taxes t ON(t.tax_id = tm.tax_id) WHERE tax_class_id = ?";
        $query = $this->db->query($sql, array($tax->tax_class_id));
        $res = $query->result();

        $data = array(
            'tax_class' => $tax,
            'taxes' => $res
        );

        return $data;
    }

    public function deleteTaxClass($id = 0) {
        if($id == 0) {
            $this->session->set_userdata('err', 'Inavlid Tax Class, couldn\'t delete. If u think this is an error contact admin.');
            return null;
        }

        $sql = "DELETE FROM tax_classes WHERE tax_class_id = ?";
        $query = $this->db->query($sql, array($id));
        $sql = "DELETE FROM tax_class_members WHERE tax_class_id = ?";
        $query = $this->db->query($sql, array($id));


        $this->session->set_userdata('msg', 'Delete successful.');

        return null;
    }

    public function set($tax_class_id) {
        $sql = "SELECT * FROM product_tax_classes WHERE product_id = 0";
        $query = $this->db->query($sql, array($tax_class_id));

        $res = $query->result();
        if(count($res) > 0) {
            $sql = "UPDATE product_tax_classes SET tax_class_id = ? WHERE product_id = 0";
            $query = $this->db->query($sql, array($tax_class_id));
        }
        else {
            $sql = "INSERT INTO product_tax_classes(product_id, tax_class_id) VALUES (0, ?)";
            $query = $this->db->query($sql, array($tax_class_id));
        }

        if($query) {
            $data = array(
                'status' => true,
                'message' => 'Default Tax class Updated'
            );

            $this->session->set_userdata('msg', $data['message']);
            return $data;
        }
        else {
            $data = array(
                'status' => false,
                'message' => 'Error processing the request'
            );

            $this->session->set_userdata('msg', $data['message']);
            return $data;
        }
    }

    public function getDefault() {
        $sql = "SELECT * FROM product_tax_classes ptc LEFT JOIN tax_classes tc ON(ptc.tax_class_id = tc.tax_class_id) WHERE product_id = 0";
        $query = $this->db->query($sql, array(  ));

        $res = $query->result();
        if(count($res) > 0) {
            return $res[0];
        }
        else return null;
    }

}