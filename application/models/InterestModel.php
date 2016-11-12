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

class InterestModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->library('valid');
    }

    public function postScore($userId,$sports,$buisness,$politics,$tech,$entertainment){
        $sql = "UPDATE users SET sports=?,buisness=?,politics=?,tech=?,entertainment=? WHERE id=?";
        $query = $this->db->query($sql,array($sports,$buisness,$politics,$tech,$entertainment));
    }
}