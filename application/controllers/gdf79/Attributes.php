<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 6/7/16
 * Time: 7:33 PM
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

class Attributes extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('session');

        $this->load->database();
        $this->load->model('LanguageModel');
        $this->load->model('AttributeModel');
    }

    public function index() {
        $this->all();
    }

    public function all() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'All Attributes'
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
            $this->load->view('Admin/Attribute/all', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function add() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Add new Attribute'
            );

            $languages = $this->LanguageModel->getAll();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Attribute/add', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function edit() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $id = $this->uri->segment(4, null);
            $group = $this->AttributeModel->getGroup($id);

            $head = array(
                'url' => $this->urls->getAdminUrl(),
                'conUrl' => $this->urls->getAdminCon(),
                'user' => $this->session->userdata('username'),
                'active' => 1,
                'title' => 'Edit Attribute'
            );

            $languages = $this->LanguageModel->getAll();

            $content = array(
                'user' => $this->session->userdata('username'),
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon(),
                'lan' => $languages,
                'group' => $group
            );


            $footer = array(
                'url' => $this->urls->getUrl() . 'gdf79/',
                'conUrl' => $this->urls->getAdminCon()
            );

            $this->load->view('Admin/header', $head);
            $this->load->view('Admin/Attribute/edit', $content);
            $this->load->view('Admin/footer', $footer);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //scripts
    public function addscript() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $this->AttributeModel->add();
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function update() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $id = $this->uri->segment(4, null);
            $this->AttributeModel->update($id);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function delete() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $id = $this->uri->segment(4, null);
            $this->AttributeModel->delete($id);
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    //REST
    public function getAll() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('ATR') ) {
            $limit = (int) $this->input->get('limit');
            $off = (int) $this->input->get('offset');

            $data = $this->AttributeModel->getAllGroups($limit, $off);
            $list = array();

            $url = $this->urls->getAdminUrl();
            foreach ($data as $key => $value) {
                $list[$key] = array(
                    'id' => $value -> attribute_group_id,
                    'name' => $value -> group_name . '{'. $value -> identifier .'}',
                    'actions' => '<a href="'.$url.'Attributes/delete/'.$value->attribute_group_id.'" class=" btn btn-danger"><svg style="height:20px; width:20px;" class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg></a>&nbsp;<a href="'.$url.'Attributes/edit/'.$value->attribute_group_id.'" class=" btn btn-primary"><svg style="height:20px; width:20px;" class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>'
                );
            }

            $total = (int)$this->AttributeModel->getAllCount();
            $json = array(
                'total' => $total,
                'rows' => $list
            );

            $this->load->view('rest', array('data' => $json));
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    public function getForCat() {
        if( $this->util->isLoggedIn() && $this->util->haveAccess('CAT') ) {
            $json = $this->AttributeModel->getAllAttributeGroups();
            $this->load->view('rest', array('data' => $json));
        }
        else {
            redirect('gdf79/Admin');
        }
    }

    /*public function test() {
        $data = $this->AttributeModel->getAllAttributeGroups('c');

        $count = $this->AttributeModel->getGroupSearchCount('c');
        print($count);
        $this->load->view('rest', array('data' => $data));
    }*/

}