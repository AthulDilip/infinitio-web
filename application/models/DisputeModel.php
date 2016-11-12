<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 9/10/16
 * Time: 2:43 PM
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

class DisputeModel extends CI_Model{
    public function __construct() {
        parent::__construct();

        $this->load->model('OrdersModel');
        $this->load->model('Chats');
        $this->load->library('session');
    }

    public function initiateDispute($order_id) {
        //Architectural espionage
        $order = $this->OrdersModel->getOrder($order_id);
        if($order == null){
            $this->session->set_userdata('error', 'Invalid Order.');
            redirect('Error/e500?r=Invalid Order'); //@TODO not implemented
        }

        if($this->OrdersModel->isAuthorizedZemose($order_id) || $this->OrdersModel->isAuthorizedZemoser($order_id)) {
            //Authorized to raise a dispute

            $this->DisputeRedirect($order); //Redirect to an already active dispute if one exists

            if( !$this->OrdersModel->isDisputable($order) ) {
                $this->session->set_userdata('error', 'This order procedures are completed. We cannot start a dispute at this moment.');
                redirect('Disputes');
            }

            $sql = "INSERT INTO disputes (dispute_id, user_id, zemoser_id, order_id, started_at, status, refund_zemoser, refund_zemose, resolved_by, started_by, resolve_date) VALUES (NULL, ?, ?, ?, ?, 0, ?, ?, ?, ?, ?)";

            $data = array(
                $order->user_id,
                $order->zemoser_id,
                $order->order_id,
                $this->util->getDateTime(),
                0,
                0,
                0,
                $this->session->userdata('user_id'),
                null
            );

            $query = $this->db->query($sql, $data);

            if(!$query) {
                $this->session->set_userdata('error', 'Error running query.');
                redirect('Error/e500?r=Database Error'); //@TODO not implemented Error Class
            }

            $sql = "SELECT LAST_INSERT_ID() AS dispute_id";
            $query = $this->db->query($sql, array());
            $dispute_id = $query->result()[0]->dispute_id;

            //create 2 chats
            //chat 1 between user_id and Admin
            $this->Chats->initiateChat(0, $order->user_id, 'Dispute resolution - ' . $dispute_id, $dispute_id);
            //chat2 between zemoser_id and Admin
            $this->Chats->initiateChat(0, $order->zemoser_id, 'Dispute resolution - ' . $dispute_id, $dispute_id);
            redirect('Disputes/view/' . $dispute_id);
        }
        else {
            //not authorized
            $this->session->set_userdata('error', 'You are not authorized to access this resource.');
            redirect('Error/e500?r=Access Denied'); //@TODO not implemented
        }
    }

    public function getDispute($dispute_id) {
        $sql = "SELECT * FROM disputes WHERE dispute_id = ?";
        $query = $this->db->query($sql, array($dispute_id));

        if($query->num_rows() < 1) {
            throw new Pixel404Exception('Dispute not found.');
        }

        $d = $query->result()[0];

        if( !$this->hasAccess($this->session->userdata('user_id'), $d) ) {
            throw new PixelAccessException("You are not authorized to view this resource.");
        }

        $sql = "SELECT * FROM chats WHERE dispute_id = ?";
        $chats = $this->db->query($sql, array(
            $dispute_id
        ));
        $chats = $chats->result();

        $user_id = $this->session->userdata('user_id');

        $chat = null;
        foreach ($chats as $chater) {
            if( $chater->user_two == $user_id ) {
                $chat = $chater;
            }
        }

        $dispute = array(
            'dispute' => $d,
            'initiator' => $this->getDisputedUser($d),
            'user' => $this->getOtherUser($d),
            'order' => $this->OrdersModel->getOrder($d->order_id),
            'messages' => $this->Chats->getChat( $chat->chat_id, $user_id )
        );

        return $dispute;
    }

    public function getDisputedUser($dispute) {
        if($dispute == null) throw new PixelArgumentException('Invalid dispute data provided for LN 91');

        $disputeUser = null;
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($dispute->started_by));

        $disputeUser = $query->result()[0];

        return $disputeUser;
    }

    public function getOtherUser($dispute) {
        if($dispute == null) throw new PixelArgumentException('Invalid dispute data provided for LN : 105');

        $order = $this->OrdersModel->getOrder($dispute->order_id);
        if($order->user_id == $dispute->started_by) $user = $order->zemoser_id;
        else $user = $order->user_id;

        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($user));

        if($query->num_rows() < 1) return null;
        $user = $query->result()[0];
        return $user;
    }

    public function hasAccess($user_id, $dispute){
        if(
            $user_id == $dispute->user_id ||
            $user_id == $dispute->zemoser_id
        ) return true;
        return false;
    }

    public function getAllOpenDisputes( $offset = 0, $limit = 10 ) {
        //get all the open disputes to be shown in the admin panel
        $sql = "SELECT * FROM disputes WHERE status = ? LIMIT ?,?";
        $query = $this->db->query($sql, array(
            0,
            $offset,
            $limit
        ));

        if($query->num_rows() >= 1) {
            //there are some disputes open
            $data = $query->result();
        }
        else $data = null;

        if($data == null)
            return array(
                'total' => 0,
                'rows' => []
            );

        $sql = "SELECT COUNT(*) AS count FROM disputes WHERE status = ?";
        $query = $this->db->query($sql, array(
            0
        ));
        $count = $query->result()[0] -> count;

        $list = array();

        $url = $this->urls->getAdminUrl();
        foreach ($data as $key => $value) {
            $list[] = array(
                'id' => 'ZDIS' . $value -> dispute_id,
                'status' => ($value -> status == 0) ? 'Active Dispute' : 'Closed',
                'actions' => '<a href="'.$url.'CRMDispute/dispute/'.$value->dispute_id.'" class=" btn btn-primary">View</a>'
            );
        }

        return array(
            'total' => $count,
            'rows' => $list
        );
    }

    public function getDisputeBackend($dispute_id) {
        $sql = "SELECT * FROM disputes WHERE dispute_id = ?";
        $query = $this->db->query($sql, array($dispute_id));

        if($query->num_rows() < 1) {
            throw new Pixel404Exception('Dispute not found.');
        }

        $d = $query->result()[0];

        $sql = "SELECT * FROM chats WHERE dispute_id = ?";
        $chats = $this->db->query($sql, array(
            $dispute_id
        ));
        $chats = $chats->result();

        $starter = $d->started_by;

        $chatin = null;
        $chatus = null;
        foreach ($chats as $chater) {
            if( $chater->user_two == $starter ) {
                $chatin = $chater;
            }
            else $chatus = $chater;
        }

        $dispute = array(
            'dispute' => $d,
            'initiator' => $this->getDisputedUser($d),
            'user' => $this->getOtherUser($d),
            'order' => $this->OrdersModel->getOrder($d->order_id),
            'inmsg' => $this->Chats->getAdminChat( $chatin->chat_id, 0 ),
            'usmsg' => $this->Chats->getAdminChat( $chatus->chat_id, 0 ),
            'inchat' => $chatin,
            'uschat' => $chatus
        );

        return $dispute;
    }

    public function DisputeRedirect($order) {
        $sql = "SELECT * FROM disputes WHERE order_id = ? AND status = 0";
        $query = $this->db->query($sql, array(
            $order->order_id
        ));

        if($query->num_rows() >= 1) {
            //there is an open dispute
            $dispute = $query->result()[0];
            redirect('Disputes/view/' . $dispute->dispute_id);
        }
        else return;
    }

}