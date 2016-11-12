<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 8/10/16
 * Time: 1:29 AM
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
 * @property APIAuth $APIAuth
 * @property Chats $Chats
 */
class Chat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Util');
        $this->load->model('Chats');
    }

    public function getChat() {
        if($this->input->post('zemoseAccessToken')) {
            //In mobile
            //do verification stuff including API verification
        }

        //in web
        $user_id = $this->input->post('user_id');
        $chat_id = $this->input->post('chat_id');

        try {
            $data = $this->Chats->getChat($chat_id, $user_id);
        } catch (Exception $e) {
            $this->util->handleError($e);
            $data = (object) array(
                'status' => false,
                'message' => 'An error occured.'
            );
        }

        $this->load->view('rest', array(
            'data' => $data
        ));
    }

    public function updateChat() {
        if($this->input->post('zemoseAccessToken')) {
            //In mobile
            //do verification stuff including API verification
        }

        //in web
        $user_id = $this->input->post('user_id');
        $chat_id = $this->input->post('chat_id');
        $update = $this->input->post('update');

        try {
            $data = $this->Chats->getChatFrom($chat_id, $user_id, $update);

            $this->load->view('rest', array(
                'data' => $data
            ));
        } catch (Exception $e) {
            $this->util->handleError($e);
            $data = (object) array(
                'status' => false,
                'message' => 'An error occured.'
            );
        }
    }

    public function sendMessage() {
        if($this->input->post('zemoseAccessToken')) {
            //In mobile
            //do verification stuff including API verification
        }

        //in web
        $user_id = $this->session->userdata('user_id');

        $adm_id = $this->input->post('user_id');
        if($adm_id != null) $user_id = $adm_id;

        $chat_id = $this->input->post('chat_id');
        $msg = $this->input->post('msg');

        try {
            $data = $this->Chats->addMessage($chat_id, $user_id, $msg);
            $this->load->view('rest', array(
                'data' => $data
            ));
        } catch (Exception $e) {
            $this->util->handleError($e);
            $data = (object) array(
                'status' => false,
                'message' => 'An error occured.'
            );
        }
    }

    public function updateChatAdmin() {
        if($this->input->post('zemoseAccessToken')) {
            //In mobile
            //do verification stuff including API verification
        }

        if($this->util->isLoggedIn()) {
            //in web
            $user_id = $this->input->post('user_id');
            $chat_id = $this->input->post('chat_id');
            $update = $this->input->post('update');

            try {
                $data = $this->Chats->getAdminChatFrom($chat_id, $user_id, $update);

                $this->load->view('rest', array(
                    'data' => $data
                ));
            } catch (Exception $e) {
                $this->util->handleError($e);
                $data = (object)array(
                    'status' => false,
                    'message' => 'An error occured.'
                );
            }
        }
    }
}