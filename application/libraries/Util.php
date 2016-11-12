<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 11:54 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Util
{
    private $salt;
    private $CI;
    private $url;

    public function __construct() {
        $this->url = base_url();
        $this->conUrl = $this->url . 'static/';
        $this->salt = "sad47#3r'bf9$83hfbyr8e'f73vc/_y9i3ehr89du/9ey'fb";
        $this->CI = & get_instance();
    }

    public function hashPass($pass) {
        return md5($this->salt.$pass.$this->salt);
    }

    public function hashPassUser($pass) {
        return md5($this->salt.$pass.$this->salt);
    }

    public function verifyLogin()
    {
        if ($this->CI->session->has_userdata('user_id')) {
            if($this->CI->session->has_userdata('verification_status'))
                return $this->CI->session->userdata('verification_status');
            else
                return 1;
        }else
            return 0;
    }

    public function setTimeZone() {
        //find and set user timezone
    }

    public function isLoggedIn() {
        if( $this->CI->session->has_userdata('id') &&
            $this->CI->session->has_userdata('username') &&
            $this->CI->session->has_userdata('access')) {

            return true;
        }

        return false;
    }

    public function haveAccess($req) {
        $access = $this->CI->session->userdata('access');
        if( preg_match('/'.$req.'/', $access) || preg_match('/ALL/', $access) ) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getDateTime() {
        $date = new DateTime('now', new DateTimeZone('GMT'));
        return $date->format('Y-m-d H:i:s');
    }

    public function filterArray($array = array()) {
        if($array != null)
        foreach ($array as $key => $value) {
            $value = trim(filter_var($value, FILTER_SANITIZE_STRING));
        }

        return $array;
    }

    public function isZemoser() {
        $uid = $this->CI->session->userdata('user_id');
        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->CI->db->query($sql, array($uid));

        if($query->num_rows() == 0) {
            return false;
        }

        $res = $query->result();
        $user = $res[0];

        if( $user->zemoser >= 1 ) {
            return true;
        }
        return false;
    }

    public function getLanguage() {
        return 1;
    }

    public function formatTime($dtime) {
        //All times formatted in GMT +5:30 (IST)
        $date = new DateTime($dtime, new DateTimeZone('GMT'));
        $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

        return (object) array(
            'time' => $date->format("h:i A"),
            'date' => $date->format("Y-m-d"),
            'formatted_date' => $date->format("d S F"),
            'full' => $date->format('Y-m-d H:i:s')
        );
    }

    public function getUrl() {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function userLoggedIn() {
        return $this->CI->session->has_userdata('user_id');
    }

    public function checkZemoserAccess() {
        if(!$this->isZemoser()) {
            $this->CI->session->set_userdata('error', 'You need to be a zemoser in order to access Zemoser Area.');
            redirect('/Users/BecomeZemoser');
        }
    }

    public function handleError($e) {
        $msg = $e->getMessage();
        log_message('DEBUG', 'Exception : ' . $msg);

    }
    
}