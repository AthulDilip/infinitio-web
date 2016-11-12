<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 24/10/16
 * Time: 8:16 PM
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
 * @property InvoiceModel $InvoiceModel
 */


class Invoice extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');

        $this->load->model('InvoiceModel');
    }

    public function index(){show_404();}

    public function getInvoice() {
        $order_id = $this->input->get('order');

        if($this->util->userLoggedIn()) {
            $this->InvoiceModel->generateInvoice($order_id);
        }
        else {
            redirect('/Users/loginError');
        }
    }
}