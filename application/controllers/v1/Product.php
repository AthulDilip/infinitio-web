<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 1/10/16
 * Time: 3:26 PM
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
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property UserRest $UserRest
 * @property ProductsRest $ProductsRest
 */


class Product extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/ProductRest');
        $this->load->model('REST/RESTModel');
        $this->load->model('ProductModel');
        $this->load->model('CategoryModel');
        $this->load->model('FilterModel');
        $this->load->library('Exceptions');
        $this->load->library('upload');
    }

    public function search(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $index = $this->input->get('offset');
                $total = $this->input->get('limit');

                if(!isset($index) || $index == "" || !isset($total) || $total == ""){
                    $index = 0;
                    $total = 10;
                }

                $searchRes = $this->ProductRest->search($index,$total);
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3A100',
                        'Status' => 'Success'
                    ),
                    'data' => $searchRes
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function listFeaturedProducts(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $res = $this->ProductRest->listFeaturedProducts();
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3B100',
                        'Status' => 'Success'
                    ),
                    'data' => $res
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    //to List products of a category
    public function listProducts(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $index = $this->input->get('offset');
                $total = $this->input->get('limit');
                $parent = $this->input->get('cid');

                if(!isset($index) || $index == "" || !isset($total) || $total == ""){
                    $index = 0;
                    $total = 10;
                }


                if(!isset($parent) || $parent == "")
                    throw new PixelRequestException('3C201|Category not provided');

                $res = $this->ProductRest->loadProductsLimit($parent,$index,$total);
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3C100',
                        'Status' => 'Success'
                    ),
                    'data' => $res
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    //To list all filters of a category
    public function listFilters(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $parent = $this->input->get('cid');
                if(!isset($parent) || $parent == "")
                    throw new PixelRequestException('3D201|Category not provided');

                $res = $this->ProductRest->listFilters($parent);


                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3D100',
                        'Status' => 'Success'
                    ),
                    'data' => (object) array(
                        'groups' => $res
                    )
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function listFeaturedCategories(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $res = $this->ProductRest->listFeaturedCategories();
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3E100',
                        'Status' => 'Success'
                    ),
                    'data' => $res
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function addToWishList(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $productId = $this->input->post('productId');


                $this->ProductRest->addToWishList($userId,$productId);
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3F100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function removeFromWishList(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $productId = $this->input->post('productId');


                $this->ProductRest->removeFromWishList($userId,$productId);
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3G100',
                        'Status' => 'Success'
                    ),
                    'data' => true
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function listWishListItems(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $res = $this->ProductRest->listWishListitems($userId);
                $data = (object)array(
                    'ZemoseStatus' => (object)array(
                        'StatusCode' => '3H100',
                        'Status' => 'Success'
                    ),
                    'data' => $res
                );

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }
}