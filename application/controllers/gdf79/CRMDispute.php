<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 25/6/16
 * Time: 1:05 PM
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
 * @property DisputeModel $DisputeModel
 */

class CRMDispute extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

        $this->load->model('DisputeModel');

        $this->load->database(); 
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('DIS') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'conUrl2' => $this->urls->getUrl(),
                'user' => $this->session->userdata('username'),
                'active' => 4,
                'title' => 'Dispute Management ( CRM )'
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
            $this->load->view('Admin/CRM/disputeAll', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function dispute() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('DIS') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'conUrl2' => $this->urls->getUrl(),
                'user' => $this->session->userdata('username'),
                'active' => 4,
                'title' => 'Dispute Resolution'
            );

            $dispute_id = $this->uri->segment(4, null);
            if ($dispute_id == null) show_404();
            $dis = $this->DisputeModel->getDisputeBackend($dispute_id);

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'dispute' => $dis
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/CRM/disputeSingle', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //REST
    public function getAll() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('DIS') ) {
            $limit = (int) $this->input->get('limit');
            $off = (int) $this->input->get('offset');

            $data = $this->DisputeModel->getAllOpenDisputes($off, $limit);

            $this->load->view('rest', array('data' => $data));
        }
        else {
            redirect('gdf79/Admin');
        }
    }
	
}