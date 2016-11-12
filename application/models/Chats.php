<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 7/10/16
 * Time: 10:39 PM
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
 */


class Chats extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Initiate required libs
        $this->load->database();

        $this->load->library('Util');
        $this->load->library('Exceptions');
    }

    public function initiateChat($user1, $user2, $purpose, $dispute_id = null) {
        //Initiate sql
        $sql = "INSERT INTO chats (chat_id, user_one, user_two, purpose, created_at, active, dispute_id) VALUES (NULL, ?, ?, ?, ?, ?, ?)";

        if($user1 === null || $user2 === null) throw new PixelArgumentException("Invalid user IDS @ Chats -> 51" . $user1 . $user2);

        //initiate data
        $data = array(
            $user1,
            $user2,
            $purpose,
            $this->util->getDateTime(),
            1,
            $dispute_id
        );

        $query = $this->db->query($sql, $data);

        if(!$query) throw new PixelDatabaseException("Error While adding to DB : Chats -> LN : 62 on data " . json_encode($data));
    }

    public function addMessage ( $chat_id, $user_id, $content ) {
        //Load sql
        $sql = "INSERT INTO `messages` (`message_id`, `chat_id`, `user_id`, `content`, `date`, `completed`) VALUES (NULL, ?, ?, ?, ?, 0)";

        //validate
        if(
            $chat_id == null ||
            $user_id == null ||
            $content == null
        ) throw new Exception("Invalid data Exception in Chats -> LN : 74");

        $data = array(
            $chat_id,
            $user_id,
            $content,
            $this->util->getDateTime()
        );

        $query = $this->db->query($sql, $data);

        if(!$query) throw new Exception ("Unable to create message DB Error in Chats -> LN : 86");
        else return true;
    }

    public function getChat( $chat_id, $user_id ) {
        if (
            $chat_id === null ||
            $user_id === null
        ) throw new Exception("Invalid Chat ID or User ID.");

        $csql = "SELECT * FROM chats c LEFT JOIN users u ON (u.id = c.user_one OR u.id = c.user_two) WHERE u.id = ? AND c.chat_id = ?";

        //get the messages in chat
        $query = $this->db->query($csql, array($user_id, $chat_id));
        if(!$query) throw new Exception ("Unable to create message DB Error in Chats -> LN : 100");

        if ($query->num_rows() >= 1)
            $chat = $query->result()[0];
        else
            $chat = null;

        if($chat == null) throw new PixelRequestException("Invalid chat data.");

        if(!$this->haveAccess($user_id, $chat)) throw new PixelAccessException("Access Denied!");

        $sql = "SELECT * FROM messages WHERE chat_id = ? ORDER BY date ASC";
        $query = $this->db->query($sql, array( $chat_id ));
        $messages = $query->result();

        if($messages != null) {
            foreach ($messages as $msg) {
                $date = $msg->date;
                $msg->s_date = $this->util->formatTime($date)->time;
            }
        }

        return (object)array(
            'status' => true,
            'chat' => $chat,
            'messages' => $messages,
            'update' => isset($messages[count($messages)-1]) ? $messages[count($messages)-1]->date : $this->util->getDateTime()
        );
    }

    public function getAdminChat( $chat_id, $user_id ) {
        if (
            $chat_id === null ||
            $user_id === null
        ) throw new Exception("Invalid Chat ID or User ID.");

        $sql = "SELECT * FROM messages WHERE chat_id = ? ORDER BY date ASC";
        $query = $this->db->query($sql, array( $chat_id ));
        $messages = $query->result();

        if($messages != null) {
            foreach ($messages as $msg) {
                $date = $msg->date;
                $msg->s_date = $this->util->formatTime($date)->time;
            }
        }

        return (object)array(
            'messages' => $messages,
            'update' => isset($messages[count($messages)-1]) ? $messages[count($messages)-1]->date : $this->util->getDateTime()
        );
    }

    public function getChatFrom ( $chat_id, $user_id, $update ) {
        if (
            $chat_id === null ||
            $user_id === null
        ) throw new Exception("Invalid Chat ID or User ID.");

        $sql = "SELECT * FROM messages WHERE chat_id = ? AND date > ? ORDER BY date ASC";
        $csql = "SELECT * FROM chats c LEFT JOIN users u ON (u.id = c.user_one OR u.id = c.user_two) WHERE u.id = ? AND c.chat_id = ?";

        //get the messages in chat
        $query = $this->db->query($csql, array($user_id, $chat_id));
        if(!$query) throw new Exception ("Unable to create message DB Error in Chats -> LN : 100");

        if ($query->num_rows() >= 1)
            $chat = $query->result()[0];
        else
            $chat = null;

        if($chat == null) throw new Exception("Invalid chat data.");

        if(!$this->haveAccess($user_id, $chat)) throw new Exception("Access Denied!");

        $query = $this->db->query($sql, array( $chat_id, $update ));
        if(!$query) throw new Exception ("Unable to create message DB Error in Chats -> LN : 140");
        $messages = $query->result();

        if($messages != null) {
            foreach ($messages as $msg) {
                $date = $msg->date;
                $msg->s_date = $this->util->formatTime($date)->time;
            }
        }

        return (object)array(
            'status' => true,
            'chat' => $chat,
            'messages' => $messages,
            'update' => isset($messages[count($messages)-1]) ? $messages[count($messages)-1]->date : $this->util->getDateTime()
        );
    }

    public function getAdminChatFrom ( $chat_id, $user_id, $update ) {
        if (
            $chat_id === null ||
            $user_id === null
        ) throw new Exception("Invalid Chat ID or User ID.");

        $sql = "SELECT * FROM messages WHERE chat_id = ? AND date > ? ORDER BY date ASC";

        $query = $this->db->query($sql, array( $chat_id, $update ));
        if(!$query) throw new Exception ("Unable to create message DB Error in Chats -> LN : 140");
        $messages = $query->result();

        if($messages != null) {
            foreach ($messages as $msg) {
                $date = $msg->date;
                $msg->s_date = $this->util->formatTime($date)->time;
            }
        }

        return (object)array(
            'status' => true,
            'chat' => null,
            'messages' => $messages,
            'update' => isset($messages[count($messages)-1]) ? $messages[count($messages)-1]->date : $this->util->getDateTime()
        );
    }

    public function haveAccess( $user_id, $chat ) {
        if($chat -> user_one == $user_id || $chat -> user_two == $user_id) return true;
        else return false;
    }

}