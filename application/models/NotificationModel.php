<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 13/9/16
 * Time: 7:48 PM
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
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property  VisitorModel $VisitorModel
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */
class NotificationModel extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->library('Util');
        $this->load->database();
    }

    public function notify($heading, $msg, $action, $type) {
        $sql = "INSERT INTO notifications(n_id, heading, message, action, type, active, added, user_id) VALUES (NULL, ?,?,?,?,?,?,?)";

        $data = array(
            $heading,
            $msg,
            $action,
            $type,
            1,
            $this->util->getDateTime(),
            $this->session->userdata('user_id')
        );

        $query = $this->db->query($sql, $data);

        return $query;
    }

    public function doAction($nid) {
        $sql = "SELECT * FROM notifications WHERE n_id = ?";
        $query = $this->db->query($sql, array($nid));

        if ($query->num_rows() > 0) {
            $notification = $query->result()[0];
            $action = $notification->action;
            $type = $notification->type;
            if($type == 1) { // redirect
                $this->db->query('UPDATE notifications SET active = 0 WHERE n_id = ?', array($nid));
                redirect($action);
            }
            else {
                redirect('Notifications');
            }
        }
        else {
            redirect('Notifications');
        }
    }

    public function loadAll($uid) {
        $sql = "SELECT * FROM notifications WHERE user_id = ? ORDER BY added ASC";
        $query = $this->db->query($sql, array($uid));

        if($query->num_rows() > 0) {
            return $query->result();
        }
        else return null;
    }

    public function unreadCount($uid) {
        $sql = "SELECT COUNT(*) AS count FROM notifications WHERE user_id = ? AND active = 1";
        $query = $this->db->query($sql, array($uid));

        return $query->result()[0]->count;
    }
}