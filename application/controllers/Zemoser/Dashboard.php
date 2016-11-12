<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 30/7/16
 * Time: 4:22 PM
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

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Urls');
        $this->load->database();
        $this->load->library('session');
        $this->load->library('Util');
        
        $this->util->checkZemoserAccess();
    }

    public function index() {
        $uid = $this->session->has_userdata('user_id') ? $this->session->userdata('user_id') : 0;
        if($this->util->isZemoser($uid) && $this->util->verifyLogin() != 0) {
            echo 'dashboard';
        }
    }
}