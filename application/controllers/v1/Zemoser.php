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
 * @property ZemoserRest $ZemoserRest
 */


class Zemoser extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/ZemoserRest');
        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');
        $this->load->library('upload');
    }

    public function isEligibleZemoser(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->ZemoserRest->isEligibleZemoser($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function becomeZemoser(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->ZemoserRest->becomeZemoser($userId);

                if($this->ZemoserRest->proofsCompleted($userId) && $this->ZemoserRest->dataCompleted($userId)){
                    //send become a zemoser request
                    $this->UsersModel->sendZemoserRequest($userId);

                    $data->data = true;
                }

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function requiredProofs(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->ZemoserRest->requiredProofs($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function getZemoserData(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $data = $this->ZemoserRest->getZemoserData($userId);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('X0000|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }

    public function postProof(){
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized

                $userId = $this->input->post('userId');
                $proofId = $this->input->post('proofId');
                $uniqueKey = $this->input->post('uniqueKey');
                $data = $this->ZemoserRest->postProof($userId,$proofId,$uniqueKey);

                if($this->ZemoserRest->proofsCompleted($userId) && $this->ZemoserRest->dataCompleted($userId)){
                    //send become a zemoser request
                    $this->UsersModel->sendZemoserRequest($userId);

                    $data->data = true;
                }

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