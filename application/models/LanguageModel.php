<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 22/6/16
 * Time: 1:28 PM
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

class LanguageModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll() {
        $sql = "SELECT * FROM languages WHERE active = 1";

        $query = $this->db->query($sql);
        return $query->result();
    }

}