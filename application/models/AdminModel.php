<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 12:02 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

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
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class AdminModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function login() {
        //get the data
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        if($user == NULL || $pass == NULL || $user == '' || $pass == '') {
            $this->session->set_userdata('err', 'Invalid username or password!');
            redirect('gdf79/Admin/login');
        }
        else {
            $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
            $query = $this->db->query($sql, array($user, $this->util->hashPass($pass)));

            if($query->num_rows() == 1) {
                //valid user found, log him in

                $sql = "UPDATE admins SET last_login = ? WHERE id = ?";
                $udata = $query->result()[0];

                date_default_timezone_set('GMT');
                $date = date('Y/m/d h:i:s', time());

                $query = $this->db->query($sql, array($date, (int)$udata->id));
                if($query) {
                    //great login is complete
                    $this->session->set_userdata('id', $udata->id);
                    $this->session->set_userdata('username', $udata->username);
                    $this->session->set_userdata('access', $udata->access);

                    redirect('gdf79/Admin/dashboard');
                }
                else {
                    $this->session->set_userdata('err', 'An error occured while logging in!');
                }
            }
            else {
                $this->session->set_userdata('err', 'Invalid username or password!');

                $sql = "SELECT * FROM admins WHERE username = ?";
                $query = $this->db->query($sql, array($user));

                if($query->num_rows() == 1) {
                    $res = $query->result()[0];

                    $numF = (int)$res->failed_login;
                    $numF ++;

                    $sql = "UPDATE admins SET failed_login=? WHERE id = ?";
                    $query = $this->db->query($sql, array($numF, (int)$res->id));
                    if($query) {
                        //done
                        redirect('gdf79/Admin/login');
                    }
                    else {
                        log_message('error', 'unable to update the failed login status!');
                        redirect('gdf79/Admin/login');
                    }
                }
                else {
                    //invalid user_id, no_worries for now
                    redirect('gdf79/Admin/login');
                }
            }
        }
    }


    public function logout() {
        if($this->session->has_userdata('id'))
            $this->session->unset_userdata('id');
        if($this->session->has_userdata('username'))
            $this->session->unset_userdata('username');
        if($this->session->has_userdata('access'))
            $this->session->unset_userdata('access');

        redirect('/');
    }

}