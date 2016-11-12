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
 * @property ZOrderRest $ZOrderRest
 */

class ZemoserOrders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');
        $this->load->library('upload');
        $this->load->model('REST/ZOrderRest');
    }

    /**
     * @return void
     */
    public function getOrders() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $data = $this->ZOrderRest->getOrders($userId);
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
                $data = $this->ZOrderRest->getCancelledOrders($userId, $offset, $limit);
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
                $data = $this->ZOrderRest->getOngoingOrders($userId, $offset, $limit);
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
                $data = $this->ZOrderRest->getFinishedOrders($userId, $offset, $limit);
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

    public function getRequests() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');

                $offset = $this->input->post('offset');
                $limit = $this->input->post('limit');
                $data = $this->ZOrderRest->getRequests($userId, $offset, $limit);
                $json = $this->RESTModel->getSkelton('4G100', 'Success');
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

    public function requestAction() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $userId = $this->input->post('userId');
                $orderId = $this->input->post('orderId');
                $action = $this->input->post('action');

                $data = $this->ZOrderRest->requestAction($userId, $orderId, $action);

                $json = $this->RESTModel->getSkelton('4H100', 'Success');
                $json->data = $data;

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