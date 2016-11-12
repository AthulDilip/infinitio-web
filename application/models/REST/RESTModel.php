<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/10/16
 * Time: 12:53 PM
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
 * @property APIAuth $APIAuth
 */

class RESTModel extends CI_Model {
    private $API_KEY;

    public function __construct()
    {
        parent::__construct();

        $this->API_KEY = 'cnl0RZjW4lBCoCRDxRUC4VueaX9ma1rdeD3WsdInoaPCDx60eRt9CNdDBdPB';
        $this->load->model('REST/APIAuth');
    }

    public function authorizeRequest() {
        $headers = apache_request_headers();
        $key = '';
        $key = isset( $headers['ZEMOSE-API-KEY'] ) ? $headers['ZEMOSE-API-KEY'] : $key;
        $key = isset( $headers['Zemose-Api-Key'] ) ? $headers['Zemose-Api-Key'] : $key;
        if($key != $this->API_KEY) return false;
        return true;
    }

    public function authorizeUser(){
        $userId = $this->input->post('userId');
        $authenticationToken = $this->input->post('userId');
    }

    public function getSkelton($statusCode, $statusText) {
        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => $statusCode,
                'Status' => $statusText
            ),
            'data' => null
        );

        return $data;
    }
}