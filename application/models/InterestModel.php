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

    public function postScore($userId,$sports,$business,$politics,$tech,$entertainment){
        $sql = "UPDATE users SET sports=?,business=?,politics=?,tech=?,entertainment=? WHERE id=?";
        $query = $this->db->query($sql,array($sports,$business,$politics,$tech,$entertainment,$userId));
    }

    public function getScore($userId){

        if(empty($userId)) {
            $data = (object)array(
                'InfinitioStatus' => (object) array(
                    'StatusCode' => '1D200',
                    'Status' => 'User Id not provided.'
                ),
                'data' => false
            );

            return $data;
        }


        $sql = "SELECT * FROM users WHERE id = ?; ";
        $query = $this->db->query($sql,array($userId));
        $res = $query->result()[0];

        $data = (object)array(
            'InfinitioStatus' => (object) array(
                'StatusCode' => '1D100',
                'Status' => 'Got score successfully'
            ),
            'data' => (object) array(
                'sports' => $res->sports,
                'business' => $res->business,
                'politics' => $res->politics,
                'tech' => $res->tech,
                'entertainment' => $res->entertainment
            )
        );

        return $data;
    }
}