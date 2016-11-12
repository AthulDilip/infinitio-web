<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 20/6/16
 * Time: 4:50 PM
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

class SmsTemplates extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');
        $this->load->helper('url');

        $this->load->database();
        $this->load->model('SmsModel');
    }

    public function index() {
        $this->all();
    }

    public function all(){
        if( $this->util->isLoggedIn() && $this->util->haveAccess('SMS') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Sms Template'
            );
            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/smsTemplates/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function edit(){
        if( $this->util->isLoggedIn() && $this->util->haveAccess('SMS') ) {

            $id = $this->uri->segment(4,-1);
            $data = $this->SmsModel->loadSmsTemplate($id);

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 3,
                'title' => 'Sms Template'
            );
            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'data' =>$data
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/smsTemplates/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function editPost(){

        if( $this->util->isLoggedIn() && $this->util->haveAccess('EML') ) {
            $id = $this->uri->segment(4,-1);
            $this->SmsModel->editSmsTemplate($id);

            redirect('gdf79/SmsTemplates');
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //REST
    public function restAll() {
        if($this->util->isLoggedIn() && $this->util->haveAccess('EML')) {
            $data = $this->SmsModel->listAllTemplates();

            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('gdf79/Admin/');
        }
    }


}