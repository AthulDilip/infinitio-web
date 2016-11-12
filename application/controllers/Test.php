<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 12:42 PM
 */
/**
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
 * @property FilterModel $FilterModel
 * @property AdminModel $AdminModel
 * @property AttributeModel $AttributeModel
 * @property EmailModel $EmailModel
 * @property SmsModel $SmsModel
 * @property LanguageModel $LanguageModel
 * @property UsersModel $UsersModel
 * @property UserRest $UserRest
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property CI_Image_lib $image_lib
 */

/**
 * @property RESTModel $RESTModel
 */


class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('valid');
        $this->load->database();

        $this->load->model('FilterModel');
        $this->load->model('SmsModel');
        $this->load->model('REST/UserRest');
        $this->load->model('REST/ZemoserRest');
        $this->load->model('REST/ProductRest');
    }

    public function index() {
        echo 'trying';
        $config['image_library'] = 'gd2';
        $config['source_image'] = '/var/www/zemose/public_html/static/Coffee_code_fantacode.jpg';
        $config['new_image'] = '/var/www/zemose/public_html/static/naoomw.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 100;
        $config['height']       = 100;
        $config['quality']       = 50;


        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    public function viewSessions(){
        var_dump($this->session);
    }

    public function fixDB() {
        $sql = "SET GLOBAL sql_mode = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'";
        $this->db->query($sql);
    }

    public function getPpic() {
        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM users WHERE id = ?";

        $query = $this->db->query($sql, array($user_id));
        $user = $query->result()[0];
        $this->load->model('RESTModel');
        echo 'PP : ' . $this->RESTModel->getProfilePic($user);

    }

    public function testRaw() {
        echo file_get_contents('php://input');
    }

    public function testPost() {
        var_dump($_POST);
        var_dump($_FILES);
    }

    public function testPDF() {
        $this->load->library('PDFLIB');
        $content = "
        <page>
            <h1 style=\"text-align: center;\">Zemose</h1>
            <div style=\"width: 100%;\">
                <p style=\"text-align: right;\">Order ID : ZORD545455</p>
            </div>
        </page>";
        $html2pdf = new HTML2PDF('P','A4','fr');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('exemple.pdf');
    }

    public function loadinv() {
        $this->load->view('inv');
    }

    public function imageCrop() {
        list($width, $height) = getimagesize('/var/www/zemose/public_html/static/Coffee_code_fantacode.jpg');

        $config['image_library'] = 'gd2';
        $config['source_image'] = '/var/www/zemose/public_html/static/Coffee_code_fantacode.jpg';
        $config['new_image'] = '/var/www/zemose/public_html/static/new.jpg';
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['x_axis'] = 0;
        $config['y_axis'] = $height;
        $config['quality']       = 50;


        $this->load->library('image_lib', $config);

        $this->image_lib->crop();

        echo $this->image_lib->display_errors();
    }

}