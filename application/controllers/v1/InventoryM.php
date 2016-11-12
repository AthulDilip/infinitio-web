<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 25/10/16
 * Time: 6:44 PM
 */

/**
 * Class Misc
 *
 * @property MiscRest $MiscRest
 * @property Util $util
 * @property Urls $urls
 * @property CI_Session $session
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property UserRest $UserRest
 * @property InventoryRest $InventoryRest
 * @property ProductModel $ProductModel
 */

class InventoryM extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('REST/InventoryRest');
        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');

        $this->load->database();
    }


    public function viewInventory() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $data = $this->InventoryRest->getInventories();

                $json = $this->RESTModel->getSkelton('6A100', 'Success');
                $json->data = (object)array(
                    'inventory' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6A201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getCategories() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $data = $this->InventoryRest->getCategories();

                $json = $this->RESTModel->getSkelton('6D100', 'Success');
                $json->data = (object)array(
                    'categories' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6D201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function inventoryAdd() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                //check if add or update
                $inv = $this->input->post('inventoryId');
                if($inv === null) {
                    //adding
                    $data = $this->InventoryRest->addInventory();
                }
                else {
                    //updating
                    $data = $this->InventoryRest->updateInventory();
                }

                $json = $this->RESTModel->getSkelton('6B100', 'Success');
                $json->data = $data;

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6B201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getInventory() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $data = $this->InventoryRest->getInventorySingle();

                $json = $this->RESTModel->getSkelton('6E100', 'Success');
                $json->data = (object)array(
                    'inventory' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6E201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function inventoryDelete() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $data = $this->InventoryRest->deleteInventory();

                $json = $this->RESTModel->getSkelton('6C100', 'Success');
                $json->data = $data;

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6C201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getProductsByCategory() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $cid = $this->input->get('id');
                $search = $this->input->get('search');
                $limit = $this->input->get('limit');
                $offset = $this->input->get('offset');
                $this->load->model('ProductModel');

                $data = $this->ProductModel->getProductByCategory($cid, $limit, $offset, $search);
                $data = $data['rows'];

                $json = $this->RESTModel->getSkelton('6F100', 'Success');
                $json->data = array( 'products' => $data);

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('6F201|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

}