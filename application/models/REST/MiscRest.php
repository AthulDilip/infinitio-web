<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 23/10/16
 * Time: 6:58 PM
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
 * @property RESTModel $RESTModel
 */

class MiscRest extends CI_Model {
    public function getCoutries() {
        $sql = "SELECT * FROM country";
        $query = $this->db->query($sql, array());
        if(!$query) return $this->RESTModel->getSkelton('5A200', 'Error fetching data');
        $rows = $query->result();

        $countries = [];
        foreach ($rows as $row) {
            $countries[] = (object)array(
                'Id' => $row->id,
                'Name' => $row->name
            );
        }

        $data = $this->RESTModel->getSkelton('5A100', 'Success');
        $data->data = (object)array(
            'countries' => $countries
        );

        return $data;
    }
}