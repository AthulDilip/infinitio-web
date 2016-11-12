<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 20/6/16
 * Time: 2:50 PM
 */
class VerificationRequestsModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

    }

    public function loadAll() {
        $sql = "SELECT * FROM users u LEFT JOIN verification_docs v ON (u.id = v.user_id) WHERE u.verified=2;";
        $query = $this->db->query($sql, array());

        return ( $query->result() );
    }

    public function listAll() {
        //$search = $this->input->get('search');

        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $res = $this->loadAll();

        $ver = array();

        foreach ($res as $value) {
            $ver[(int)$value->user_id] = $value;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($ver as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value->user_id,
                'email' => $value->email ,
                'phone' => $value->phone,
                'actions' => '<a style="margin-right: 5px;" href="'.$url.'VerificationRequests/moreDetails/'.$value->user_id.'">More Details</a>'
            );

            $i ++;
            $j ++;
        }

        $data = array(
            'total' => $j -1,
            'rows' => $list
        );

        return $data;
    }

    public function loadUserData($id){
        $sql = "SELECT * FROM users u LEFT JOIN verification_docs v ON (u.id = v.user_id) where u.id=? ;";
        $query = $this->db->query($sql, array($id));
        if($query->num_rows() > 0){
            return $query->result()[0];
        }else{
            return NULL;
        }

    }
    public function acceptUser($id){
        //accept the user
        $sql  = "UPDATE users SET verified=1 where id=?";
        $query = $this->db->query($sql, array($id));

        //send mail or sms

        //log the accept so that it can be inspected later
        $sql  = "INSERT INTO user_verification_logs(user_id, admin_id) VALUES(?,?)";
        $query = $this->db->query($sql, array($id,$this->session->userdata('id')));
    }

    public function rejectUser($id){
        $sql  = "UPDATE users SET verified=-1 where id=?";
        $query = $this->db->query($sql, array($id));

        //send mail or sms
    }

}