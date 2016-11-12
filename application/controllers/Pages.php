<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 5/11/16
 * Time: 11:14 AM
 */
class Pages extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('PageModel');
        $this->load->model('CategoryModel');
        $this->load->model('UsersModel');
    }

    public function index() {
        show_404();
    }

    public function single() {
        $page_url = $this->uri->segment(2, null);
        if($page_url == null) show_404();

        $cats = $this->CategoryModel->loadParentCategories();

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $data = $this->PageModel->getByUrl($page_url);
        if($data == null) show_404();

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 1,
            'cats' => $cats,
            'googleLoginUrl' =>$googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'page' => $data
        );


        $this->load->view('view-header2',$headData);
        $this->load->view('view-static',$conData);
        $this->load->view('view-footer',$headData);
    }
}