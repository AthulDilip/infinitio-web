<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/10/16
 * Time: 6:48 PM
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
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property TaxModel $TaxModel
 * @property OrdersModel $OrdersModel
 * @property CommissionModel $CommissionModel
 */

class APIAuth extends CI_Model {

    public function APIAuth() {
        parent::__construct();

        $this->load->library('util');
    }

    public function createToken( $user ) {
        $token = $this->generateToken( $user->id, $this->util->getDateTime(), $user->firstname );

        $sql = "INSERT INTO api_tokens (token_id, token, created, ttl, user_id) VALUES (NULL, ?, ?, ?, ?)";

        $created_date = $this->util->getDateTime();
        $tod = $this->getEndDate($created_date);

        $val = array(
            $token,
            $created_date,
            $tod,
            $user->id
        );

        $this->db->query($sql, $val);

        return $token;
    }

    public function generateToken( $uid, $timeStamp, $fname ) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        for ($i = 0; $i < 10; $i++) {
            $code .= $chars[ rand( 0, strlen( $chars ) - 1 ) ];
        }

        return md5( $uid . $code . $fname . $timeStamp );
    }

    public function getEndDate($date) {

        $created_date = DateTime::createFromFormat('Y-m-d H:i:s', $date, new DateTimeZone('GMT'));

        $di = new DateInterval('P2D');
        $to_date = $created_date->add($di);
        $tod = $to_date->format('Y-m-d H:i:s');

        return $tod;
    }
}