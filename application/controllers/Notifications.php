<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 16/9/16
 * Time: 9:41 AM
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
 * @property NotificationModel $NotificationModel
 */


class Notifications extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');
        $this->load->model('NotificationModel');
    }


    public function index() {
        if($this->util->verifyLogin() == 1) {

            $headData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl()
            );

            $not = $this->NotificationModel->loadAll($this->session->userdata('user_id'));

            $conData = array(
                'url' => $this->urls->getUrl(),
                'conUrl' => $this->urls->getConUrl(),
                'not' => $not
            );

            $this->load->view('view-header', $headData);
            $this->load->view('Users/view-notify', $conData);
            $this->load->view('view-footer', $headData);
        }
    }

    public function view() {
        if ($this->util->verifyLogin() == 1) {
            $nid = $this->uri->segment(3, null);
            if($nid == null) redirect('Notifications');

            else $this->NotificationModel->doAction($nid);
        }
    }
}