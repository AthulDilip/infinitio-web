<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 13/8/16
 * Time: 12:22 PM
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
class TaxModel extends CI_Model
{

    public function getAll($limit = 10, $offset = 0, $search = null) {
        $data = array(
            'total' => 0,
            'rows' => array()
        );

        $query = null;
        $count = 0;

        if($search == null) {
            $sql = "SELECT * FROM taxes LIMIT ?,?";
            $csql = "SELECT COUNT(*) AS count FROM taxes";

            $query = $this->db->query($sql, array((int)$offset, (int)$limit));
            $count = $this->db->query($csql, array());
        }
        else {
            $sql = "SELECT * FROM taxes WHERE tax_name LIKE ? LIMIT ?,?";
            $csql = "SELECT COUNT(*) AS count FROM taxes WHERE tax_name LIKE ?";

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
                'name' => $tv->tax_name,
                'rate' => $tv->tax_rate.'%',
                'actions' => '<button onclick="pop('.$tv->tax_id.')" class=" btn btn-danger">Delete</button>&nbsp;<a href="'.$url.'Taxes/edit/'.$tv->tax_id.'" class=" btn btn-primary">Edit</a>'
            );
        }

        $data['total'] = $count;
        $data['rows'] = $taxes;

        return $data;
    }

    public function save($tax_rate, $tax_name, $id = 0) {
        if($id == 0) {
            //add new
            $sql = "INSERT INTO taxes(tax_id, tax_name, tax_rate) VALUES (NULL, ?, ?)";
            $query = $this->db->query($sql, array($tax_name, $tax_rate));

            if($query) {
                $data = array(
                    'status' => true,
                    'message' => 'Added Successfully!'
                );
                $this->session->set_userdata('msg', $data['message']);
                return $data;
            }
            else {
                $data = array(
                    'status' => false,
                    'message' => 'Error while executing query!'
                );
                return $data;
            }
        }
        else {
            //update
            $sql = "SELECT * FROM taxes WHERE tax_id = ?";
            $query = $this->db->query($sql, array($id));

            $tx = $query->result();
            if(count($tx) > 0) {
                $tx = $tx[0];
            }
            else {
                $data = array(
                    'status' => true,
                    'message' => 'Update Done!'
                );
                $this->session->set_userdata('msg', $data['message']);
                return $data;
            }

            $sql = "UPDATE taxes SET tax_name = ?, tax_rate = ? WHERE tax_id = ?";
            $query = $this->db->query($sql, array($tax_name, $tax_rate, $id));
            if($query) {
                $data = array(
                    'status' => true,
                    'message' => 'Update Done!'
                );
                $this->session->set_userdata('msg', $data['message']);
                return $data;
            }
            else {
                $data = array(
                    'status' => false,
                    'message' => 'Error while executing update.'
                );
                return $data;
            }
        }
    }

    public function getTax($id = 0) {
        $sql = "SELECT * FROM taxes WHERE tax_id = ?";
        $query = $this->db->query($sql, array($id));
        $res = $query->result();

        if(count ($res) > 0) {
            $tax = $res[0];
            return $tax;
        }
        else return null;
    }

    public function deleteTax($id = 0) {
        if($id == 0) {
            $this->session->set_userdata('err', 'Inavlid Tax, couldn\'t delete. If u think this is an error contact admin.');
            return null;
        }

        $sql = "DELETE FROM taxes WHERE tax_id = ?";
        $query = $this->db->query($sql, array($id));
        $sql = "DELETE FROM tax_class_members WHERE tax_id = ?";
        $query = $this->db->query($sql, array($id));


        $this->session->set_userdata('msg', 'Delete successful.');

        return null;
    }

    public function getAllTaxes($search = null) {
        if($search == null) return array('status' => false);

        $sql = "SELECT * FROM taxes WHERE tax_name LIKE ?";
        $query = $this->db->query($sql, array($search.'%'));
        $res = $query->result();

        $taxes = array();
        foreach ($res as $tk => $tv) {
            $taxes[] = array(
                'name' => $tv->tax_name,
                'id' => $tv->tax_id
            );
        }

        return array(
            'status' => true,
            'rows' => $taxes
        );

    }

    public function loadTax($pid = 0) {
        $sql = "SELECT * FROM product_tax_classes WHERE product_id = ?";
        $query = $this->db->query ($sql, array($pid));

        if($query->num_rows() < 1) {
            $tax = $this->loadDefaultTax();
        }
        else {
            $tax = $query->result()[0];
        }

        return $tax;
    }

    public function loadDefaultTax() {
        $sql = "SELECT * FROM product_tax_classes WHERE product_id = 0";
        $query = $this->db->query ($sql, array());

        if($query->num_rows() > 0) {
            return $query->result()[0];
        }
        else {
            return null;
        }
    }

    public function getTaxClass($tcid = 0) {
        if($tcid == 0) return 0;

        $sql = "SELECT * FROM tax_class_members tcm LEFT JOIN taxes t ON(tcm.tax_id = t.tax_id AND tcm.tax_class_id = ?)";
        $query = $this->db->query($sql, array($tcid));
        if($query->num_rows() < 1) {
            return 0;
        }
        $taxes = $query->result();

        $tax_p = 0.0;
        
        foreach ($taxes as $t) {
            $tax_p += $t->tax_rate;
        }

        return $tax_p;
    }

}