<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 24/8/16
 * Time: 3:36 PM
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
 * @property CookieModel $CookieModel
 * @property VisitorModel $VisitorModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class VisitorModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('urls');
        $this->load->library('util');

        $this->load->model('CookieModel');
        if($this->input->user_agent() != null)
            $this->addVisitor();
    }

    public function addVis() {
        $ip = $this->input->ip_address();
        $ua = $this->input->user_agent();

        if($this->util->isLoggedIn()) {
            
        }
    }

    public function addVisitor() {
        $ip = $this->input->ip_address();
        $ua = $this->input->user_agent();

        if($this->util->userLoggedIn()) {
            //user is logged in
            $uid = $this->session->userdata('user_id');
            $cookie = $this->CookieModel->getCookie('visitor');

            if($cookie != null) {
                $sql = "SELECT * FROM visitors WHERE visitor_id = ?";
                $query = $this->db->query($sql, array($cookie));

                if($query->num_rows() > 0) {
                    $v = $query->result()[0];
                    if($v->user_id == null) {
                        $sql = "UPDATE visitors SET user_id = ? WHERE visitor_id = ?";
                        $this->db->query($sql, array($uid, $v->visitor_id));
                        $v->user_id = (int)$uid;

                        return $v;
                    }
                }
            }

            $sql = "SELECT * FROM visitors WHERE user_id = ?";
            $query = $this->db->query($sql, array($uid));

            if($query->num_rows() < 1) {
                $vdata = array(
                    $ip,
                    $uid,
                    $ua
                );

                $sql = "INSERT INTO visitors(visitor_id, ip_address, user_id, ua) VALUES(NULL, ?, ?, ?)";
                $this->db->query($sql, $vdata);

                $sql = "SELECT LAST_INSERT_ID() AS visitor_id";
                $query = $this->db->query($sql, array());
                $visitor_id = $query->result()[0]->visitor_id;

                //add a cookie
                $this->CookieModel->setCookie('visitor', $visitor_id);

                $sql = "SELECT * FROM visitors WHERE user_id = ?";
                $query = $this->db->query($sql, array($uid));
                $visitor = $query->result()[0];

                return $visitor;
            }
            else {
                $user = $query->result()[0];
                $vid = $user->visitor_id;
                $this->CookieModel->setCookie('visitor', $vid);
            }
        }
        else {
            $cookie = $this->CookieModel->getCookie('visitor');
            if($cookie == null) { // no cookie
                $vdata = array(
                    $ip, //ip address
                    null, //user_id
                    $ua
                );
                //add one
                $sql = "INSERT INTO visitors(visitor_id, ip_address, user_id, ua) VALUES(NULL, ?, ?, ?)";
                $query = $this->db->query($sql, $vdata);

                $sql = "SELECT LAST_INSERT_ID() AS visitor_id";
                $query = $this->db->query($sql, array());
                $visitor_id = $query->result()[0]->visitor_id;

                //add a cookie
                $this->CookieModel->setCookie('visitor', $visitor_id);
                $sql = "SELECT  * FROM visitors WHERE visitor_id = ?";
                $query = $this->db->query($sql, array($visitor_id));
                $visitor = $query->result()[0];
                return $visitor;
            }
            else {
                //There is a cookie set
                //update it
                $visitor_id = $cookie;
                $sql = "SELECT  * FROM visitors WHERE visitor_id = ?";
                $query = $this->db->query($sql, array($visitor_id));
                $visitor = $query->result();
                if($query->num_rows() < 1) {
                    //remove the invalid cookie
                    $this->CookieModel->deleteCookie('visitor');
                    return $this->addVisitor();
                }

                $this->CookieModel->setCookie('visitor', $visitor_id);
                return $visitor[0];
            }
        }
    }

    public function getVisitor() {
        $cookie = $this->CookieModel->getCookie('visitor');
        if($cookie == null) {
            //there are no cookie set
            return $this->addVisitor();
        }

        $sql = "SELECT * FROM visitors WHERE visitor_id = ?";
        $query = $this->db->query($sql, array($cookie));
        $v = $query->result();

        if ($query->num_rows() < 1){
            $this->CookieModel->deleteCookie('visitor');
            return $this->addVisitor();
        } //no visitor data, remove cookie

        return $v[0];
    }

    public function upgradeToUser( $uid ) {
        $sql = "UPDATE visitors SET user_id = ? WHERE visitor_id = ?";
        $query = $this->db->query($sql, array($uid, $this->CookieModel->getCookie('visitor')));
    }
}