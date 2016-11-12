<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 28/8/16
 * Time: 12:28 PM
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
 * @property CookieModel $CookieModel
 * @property VisitorModel $VisitorModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */
class CommissionModel extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        $this->load->library('valid');
    }

    public function getCommission($product_id = 0) {
        return $this->getProductCommission($product_id);
    }

    public function getProductCommission($product_id) {
        $sql = "SELECT * FROM product_commissions WHERE product_id = ?";
        $query = $this->db->query($sql, array($product_id));

        if($query->num_rows < 1) {
            return $this->loadDefaultCommission();
        }
        else return $query->result()[0]->commission;
    }

    public function loadDefaultCommission() {
        $sql = "SELECT * FROM product_commissions WHERE product_id = 0";
        $query = $this->db->query($sql, array());

        if($query->num_rows() < 1) {
            return 0;
        }
        else {
            return $query->result()[0]->commission;
        }
    }
}