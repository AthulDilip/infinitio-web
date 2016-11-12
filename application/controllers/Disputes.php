<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 8/10/16
 * Time: 11:42 AM
 */

/**
 * @property Chats $Chats
 * @property Util $util
 * @property Exceptions $exceptions
 * @property DisputeModel $DisputeModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property TaxModel $TaxModel
 * @property OrdersModel $OrdersModel
 */

class Disputes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Chats');
        $this->load->library('Util');
        $this->load->library('Exceptions');
        $this->load->model('DisputeModel');
        $this->load->helper('url');
    }

    public function chatRest() {
        try {
            if ($this->util->VerifyLogin() == 1) {
                $user_id = $this->session->userdata('user_id');
                if ($user_id == null) {
                    throw new PixelRequestException('User ID null at Disputes -> LN : 24');
                }

                $chat_id = $this->input->post('chat_id');

                if ($chat_id == null) {
                    throw new PixelRequestException('User ID null at Disputes -> LN : 24');
                }

                $chat = $this->Chats->getChat($user_id, $chat_id);
            } else {
                throw new PixelAccessException('User not Logged in : Disputes 43.');
            }
        } catch (Exception $e) {
            $this->exceptions->handleRestErrors( $e );
        }
    }

    public function dispute() {
        try {
            if ($this->util->VerifyLogin() == 1) {
            } else {
                throw new PixelAccessException('User not Logged in : Disputes 55.');
            }
        } catch (Exception $e) {
            $this->exceptions->handleMainErrors( $e );
        }
    }

    public function startDispute() {
        try {
            if ($this->util->VerifyLogin() == 1) {
                $order_id = $this->uri->segment(3, null);
                if($order_id == null) {
                    throw new PixelArgumentException("No User ID in Disputes 76");
                }
                $this->DisputeModel->initiateDispute($order_id);
            } else {
                throw new PixelAccessException('User not Logged in : Disputes 80.');
            }
        } catch (Exception $e) {
            $this->exceptions->handleMainErrors( $e );
        }
    }

    public function view() {
        try {
            if ($this->util->VerifyLogin() == 1) {
                $dispute_id = $this->uri->segment(3, null);
                if($dispute_id == null) {
                    throw new PixelArgumentException("No User ID in Disputes 92");
                }
                $dispute = $this->DisputeModel->getDispute($dispute_id);

                $headData = array(
                    'url' => $this->urls->getUrl(),
                    'conUrl' => $this->urls->getConUrl()
                );

                $conData = array(
                    'url' => $this->urls->getUrl(),
                    'conUrl' => $this->urls->getConUrl(),
                    'title' => 'Dispute - ' . $dispute['dispute']->dispute_id,
                    'dispute' => $dispute
                );


                $this->load->view('view-header', $headData);
                $this->load->view('Users/view-singledispute', $conData);
                $this->load->view('view-footer', $headData);
            } else {
                throw new PixelAccessException('User not Logged in : Disputes 65.');
            }
        } catch (Exception $e) {
            $this->exceptions->handleMainErrors( $e );
        }
    }
}