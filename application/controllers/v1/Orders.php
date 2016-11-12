<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 7/11/16
 * Time: 10:33 PM
 */

/**
 * Class Orders
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property CI_Input $input
 * @property OrderRest $OrderRest
 */

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');
        $this->load->library('upload');
        $this->load->model('REST/OrderRest');
    }

    /**
     * @return void
     */
    public function getOrders() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $data = $this->OrderRest->getOrders($userId);
                $json = $this->RESTModel->getSkelton('4C100', 'Success');
                $json->data = array(
                    'orders' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getCancelledOrders() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $offset = $this->input->post('offset');
                $limit = $this->input->post('limit');
                $data = $this->OrderRest->getCancelledOrders($userId, $offset, $limit);
                $json = $this->RESTModel->getSkelton('4D100', 'Success');
                $json->data = array(
                    'orders' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getOngoingOrders() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $offset = $this->input->post('offset');
                $limit = $this->input->post('limit');
                $data = $this->OrderRest->getOngoingOrders($userId, $offset, $limit);
                $json = $this->RESTModel->getSkelton('4E100', 'Success');
                $json->data = array(
                    'orders' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getFinishedOrders() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $offset = $this->input->post('offset');
                $limit = $this->input->post('limit');
                $data = $this->OrderRest->getFinishedOrders($userId, $offset, $limit);
                $json = $this->RESTModel->getSkelton('4F100', 'Success');
                $json->data = array(
                    'orders' => $data
                );

                $this->load->view('rest', array(
                    'data' => $json
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

}