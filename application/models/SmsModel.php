<?php

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

class SmsModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function loadSmsTemplate($id){
        $sql = "SELECT * FROM sms_template where id = ?";
        $query = $this->db->query($sql, array($id));

        return $query->result()[0];
    }

    public function editSmsTemplate($id){
        $sub =  $this->input->post('subject');
        $body = $this->input->post('body');

        $sql = "UPDATE sms_template SET subject=?, body=? WHERE id=?";
        $query = $this->db->query($sql, array($sub,$body,$id));
    }

    public function listAllTemplates(){
        $limit = (int) $this->input->get('limit');
        $off = (int) $this->input->get('offset');

        $sql = "SELECT * FROM sms_template;";
        $query = $this->db->query($sql, array());

        $res = $query->result();
        $templates = array();

        foreach ($res as $value) {
            $templates[(int)$value->id] = $value;
            $templates[(int)$value->id]->type = $value->type;
        }

        $list = array();
        $i = 0;
        $j = 0;

        $url = $this->urls->getAdminUrl();

        foreach ($templates as $key => $value) {
            if( $j < $off ) {
                $j++;
                continue;
            }
            if ($i >= $limit) {
                $j ++;
                continue;
            }
            $list[$i] = array(
                'id' => $value -> id,
                'name' => $value -> type,
                'actions' => '<a href="'.$url.'SmsTemplates/edit/'.$value->id.'" class=" btn btn-primary">Edit</svg></a>'
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
}
?>