<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 24/8/16
 * Time: 1:26 PM
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

//set_cookie($name[, $value = ''[, $expire = ''[, $domain = ''[, $path = '/'[, $prefix = ''[, $secure = FALSE[, $httponly = FALSE]]]]]]])
class CookieModel extends CI_Model{

    public function __construct() {
        parent::__construct();

        $this->load->helper('cookie');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
    }

    public function setCookie($name = null, $value = 0) {
        if($name == null) {
            return false;
        }

        $this->input->set_cookie($name, $value, 2419200, $this->config->item('cookie_domain'), '/', '', TRUE, TRUE);
    }

    public function deleteCookie($name = null) {
        if ($name == null) {
            return;
        }

        else delete_cookie($name, $this->config->item('cookie_domain'), '/', '');
    }

    public function getCookie($name = null) {
        if($name == null) return null;

        else return $this->input->cookie($name);
    }
}