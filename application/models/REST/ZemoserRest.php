<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 9/10/16
 * Time: 11:56 PM
 */

/**
 * @property APIAuth $APIAuth
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

class ZemoserRest extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->model('REST/APIAuth');
        $this->load->model('REST/UserRest');
        $this->load->library('util');
        $this->load->model('UsersModel');
        $this->load->model('SmsModel');
    }


    public function isEligibleZemoser($userId) {

        if(empty($userId))
            throw new PixelRequestException('2A201| userId is not provided.');

        if($this->UserRest->checkPersonalDetailsCompleted($userId) == 1){
            if($this->UserRest->checkContactDetailsCompleted($userId) == 1){
                if($this->UserRest->checkContactDetailsVerified($userId) == 1){
                    $data = (object)array(
                        'ZemoseStatus' => (object)array(
                            'StatusCode' => '2A100',
                            'Status' => 'All details successfully completed! Eligible to become a zemoser.'
                        ),
                        'data' => true
                    );

                    return $data;
                }else throw new PixelRequestException('2A202| Contact details is not verified.');
            }else throw new PixelRequestException('2A203| Contact details is not completed.');
        }else throw new PixelRequestException('2A204| Personal details is not completed.');
    }

    public function becomeZemoser($userId) {

        if(empty($userId))
            throw new PixelRequestException('2B201| userId is not provided.');

        $shopName = $this->input->post("shopName");
        $shopAddress = $this->input->post("shopAddress");
        $city = $this->input->post("city");
        $lat = $this->input->post("lat");
        $lon = $this->input->post("lon");


        $sql = "select * from zemoser where user_id = ?;";
        $query = $this->db->query($sql, array($userId));

        if($query->num_rows() <= 0) {
            $sql = "insert into zemoser(`user_id`,`shopname`,`shopaddress`,`city`,`lat`,`lon`) values (?,?,?,?,?,?)";
            $query = $this->db->query($sql, array($userId, $shopName, $shopAddress, $city, $lat, $lon));

            $data = (object)array(
                'ZemoseStatus' => (object)array(
                    'StatusCode' => '2B100',
                    'Status' => 'Data inserted proceed for proof submission'
                ),
                'data' => false
            );
            return $data;
        }else {
            $sql = "update zemoser set shopname=?, shopaddress=?, city=?, lat=?, lon=? where user_id=?";
            $query = $this->db->query($sql, array($shopName, $shopAddress, $city, $lat, $lon, $userId));

            $data = (object)array(
                'ZemoseStatus' => (object)array(
                    'StatusCode' => '2B100',
                    'Status' => 'Data updated proceed for proof submission'
                ),
                'data' => false
            );
            return $data;
        }
    }

    public function requiredProofs($userId){

        if(empty($userId))
            throw new PixelRequestException('2C201| userId is not provided.');

        $sql = "SELECT country from users where id = ?;";
        $query = $this->db->query($sql,array($userId));

        if($query->num_rows() > 0){
            $country = $query->result()[0]->country;
            $sql = "SELECT * FROM proofs WHERE country_id = ".$country.";";
            $query = $this->db->query($sql);
            $res = $query->result();

            $proofs = array();
            $i=0;
            foreach ($res as $item){
                $proofs[$i] = $item;
                ++$i;
            }

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '2C100',
                    'Status' => 'Success'
                ),
                'data' => (object) array(
                    'proofs' => $proofs
                )
            );

            //var_dump($data);

            return $data;

        }else throw new PixelRequestException('2C202| User id not valid.');
    }

    public function loadZemoserDetails($userId){
        $sql = "SELECT * FROM zemoser where user_id=?;";
        $query = $this->db->query($sql, array($userId));

        return $query;
    }

    public function loadZemoserProofs($userId){
        $sql = "SELECT id,proof_id as proofId,`number` as uniqueKey,image FROM zemoser_docs where user_id=?;";
        $query = $this->db->query($sql, array($userId));

        return $query;
    }

    public function getZemoserData($userId){
        if(empty($userId))
            throw new PixelRequestException('2D201| userId is not provided.');

        $query1 = $this->loadZemoserDetails($userId);
        $query2 = $this->loadZemoserProofs($userId);

        if($query1->num_rows() > 0) {
            $res = $query1->result()[0];
            $details = (object) array(
                'shopName' => $res->shopname,
                'shopAddress' => $res->shopaddress,
                'city' => $res->city,
                'lat' => $res->lat,
                'lon' => $res->lat
            );

            $proofs = array();
            if($query2->num_rows() > 0) {
                $res = $query2->result();
                $i=0;
                foreach ($res as $item){
                    $image = $item->image;
                    $item->image = $this->util->getUrl() . 'uploads/zemoser_proofs/' .$image;
                    $proofs[$i] = $item;
                    ++$i;
                }
            }

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '2D100',
                    'Status' => 'Success'
                ),
                'data' => (object) array(
                    'shop' => $details,
                    'zemoserProofs' => $proofs,
                )
            );

            return $data;
        }

        throw new PixelRequestException('2D200| Data not found.');

    }

    //local Function
    public function proofsCompleted($userId){

        $sql = "SELECT country from users where id = ?;";
        $query = $this->db->query($sql,array($userId));

        if($query->num_rows() > 0){
            $country = $query->result()[0]->country;
            $sql1 = "SELECT * FROM proofs WHERE country_id = ".$country.";";
            $query1 = $this->db->query($sql1);
            $res = $query1->result();

            foreach ($res as $item) {
                $proofId = $item->id;
                $sql2 = "SELECT * FROM zemoser_docs WHERE user_id = ? AND proof_id = ?;";
                $query2 = $this->db->query($sql2, array($userId,$proofId));

                if($query2->num_rows() <= 0){
                    return false;
                }
            }
        }

        return true;
    }

    //local function
    public function dataCompleted($userId){
        $sql = "select * from zemoser where user_id = ?;";
        $query = $this->db->query($sql, array($userId));

        if($query->num_rows() > 0){
            $res = $query->result()[0];

            if(!empty($res->shopname) &&
                !empty($res->shopaddress) &&
                !empty($res->city) &&
                !empty($res->lat) &&
                !empty($res->lon)
            ){
                return true;
            }
        }

        false;
    }

    public function postProof($userId,$proofId, $uniqueKey){
        if(empty($userId))
            throw new PixelRequestException('2E201| userId is not provided.');

        if(empty($proofId) || empty($uniqueKey) ) {
            throw new PixelRequestException('2E202| All details about the proof is not provided.');
        }

        $sql = "SELECT `name` FROM proofs WHERE id = ?";
        $query = $this->db->query($sql,array($proofId));

        if($query->num_rows() > 0){
            $proofName = $query->result()[0]->name;
        }else{
            throw new PixelRequestException('2E204| Wrong proof id.');
        }

        //config for image uploads
        $base = FCPATH . 'uploads/zemoser_proofs/';

        $config['upload_path'] = $base;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $sql = "select * from zemoser_docs where user_id = ? and proof_id = ?;";
        $curr = $this->db->query($sql, array($userId,$proofId));

        if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] !== '') {

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('image')) {
                throw new PixelRequestException('2E203| Unable to upload the image.');
            }else {
                $newFile = $this->upload->data()['file_name'];
                
                if($curr->num_rows() > 0) {
                    //delete old image
                    $path = $base . $curr->result()[0]->image;
                    if (file_exists($path)) unlink($path);
                }
            }
        }

        if($curr->num_rows() <= 0 ){
            //insert
            if(!empty($newFile)){
                $sql = "insert into zemoser_docs(`number`,`image`,`proof_id`,`proof_name`,`user_id`) values (?,?,?,?,?)";
                $query = $this->db->query($sql, array($uniqueKey,$newFile, $proofId, $proofName, $userId));

                $data = (object)array(
                    'ZemoseStatus' => (object) array(
                        'StatusCode' => '2E100',
                        'Status' => 'Success'
                    ),
                    'data' => false
                );
                return $data;

            }else{
                throw new PixelRequestException('2E203| Unable to upload the image.');
            }
        }else{
            //update
            if(!empty($newFile)){
                $sql = "update zemoser_docs set `number`=?,`image`=?, `proof_name`=? where user_id=? AND `proof_id`=?";
                $query = $this->db->query($sql, array($uniqueKey,$newFile, $proofName, $userId, $proofId));
            }else{
                $sql = "update zemoser_docs set `number`=?, `proof_name`=? where user_id=? AND `proof_id`=?";
                $query = $this->db->query($sql, array($uniqueKey, $proofName, $userId, $proofId));
            }

            $data = (object)array(
                'ZemoseStatus' => (object) array(
                    'StatusCode' => '2E100',
                    'Status' => 'Success'
                ),
                'data' => false
            );
            return $data;
        }


    }

}