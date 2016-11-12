<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 12:42 PM
 */
/**
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
 * @property FilterModel $FilterModel
 * @property AdminModel $AdminModel
 * @property AttributeModel $AttributeModel
 * @property EmailModel $EmailModel
 * @property SmsModel $SmsModel
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

class NazCont extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('valid');
		$this->load->model('UsersModel');
		$this->load->model('CategoryModel');
		$this->load->model('NotificationModel');
    }

    public function index() {

        $cats = $this->CategoryModel->loadParentCategories();

		$headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'cats' => $cats,
            'active' => 1
        );
		$conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl()
        );

        $this->load->view('view-header2',$headData);
        $this->load->view('ZemoserShop',$conData);
        $this->load->view('view-footer',$headData);
 
	}
	
	public function addNots(){
		$heading = 'Test Notification ';
		$msg = 'Message ';
		$action ='https://zemose.dev/';
		$type = 1;
		
		$this->NotificationModel->notify($heading, $msg, $action, $type);
	}
}