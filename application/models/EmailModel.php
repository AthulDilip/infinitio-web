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

    class EmailModel extends CI_Model {

        public function __construct() {
            parent::__construct();

            $this->load->library('email');
        }

        function sendEmail($email,$sub,$msg){
            log_message('DEBUG', 'MAil Sending');

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://zamose.com',
                'smtp_port' => 465,
                'smtp_user' => 'no-reply@zamose.com', // change it to yours
                'smtp_pass' => 'A9,tZ4}.W*+^', // change it to yours
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('no-reply@zamose.com', "Zemose Team");
            $this->email->to($email);
            $this->email->subject($sub);
            $this->email->message($msg);
            $this->email->send();

        }

        public function loadEmailTemplate($id){
            $sql = "SELECT * FROM email_templates where id = ?";
            $query = $this->db->query($sql, array($id));

            return $query->result()[0];
        }

        public function editEmailTemplate($id){
            $sub =  $this->input->post('subject');
            $body = $this->input->post('body');

            $sql = "UPDATE email_templates SET subject=?, body=? WHERE id=?";
            $query = $this->db->query($sql, array($sub,$body,$id));
        }

        public function listAllTemplates(){
            $limit = (int) $this->input->get('limit');
            $off = (int) $this->input->get('offset');

            $sql = "SELECT * FROM email_templates;";
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
                    'actions' => '<a href="'.$url.'EmailTemplates/edit/'.$value->id.'" class=" btn btn-primary">Edit</svg></a>'
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