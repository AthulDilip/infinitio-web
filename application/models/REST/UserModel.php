<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 12/11/16
 * Time: 10:49 AM
 */
class UserModel extends CI_Model
{

    public function fbLogin($id_token) {
        $data = (object)array(
            'InfStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => false
        );

        if($id_token == null) {
            throw new PixelRequestException('1L201| No token specified.');
        }

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://graph.facebook.com/me?fields=id,name&access_token='. $id_token ;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1L201| Failed to verify the Facebook access token.');
        }

        $body = $res->getBody();
        $body = json_decode($body);
        $fb_id = $body->id;
        $name = $body->name;



        $this->load->database();
        $sql = "INSERT INTO users(id, name, fb_user_id) VALUES (NULL, ?, ?)";
        $query = $this->db->query($sql, array(
            $name,
            $fb_id
        ));

        $sql = "SELECT LAST_INSERT_ID() AS id";
        $query = $this->db->query($sql, array());
        $res = $query->result();
        $id = $res[0] -> id;

        $data->InfStatus->Status = 'Login Successful.';
        $data->InfStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'id' => $id,
            'name' => $name
        );

        return $data;
    }

    public function getPages($id_token, $id) {
        $data = (object)array(
            'InfStatus' => (object) array(
                'StatusCode' => '',
                'Status' => 'Failed to login'
            ),
            'data' => false
        );

        if($id_token == null) {
            throw new PixelRequestException('1L201| No token specified.');
        }

        $sql = "SELECT * FROM users WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        $res = $query->result();

        if($query->num_rows() < 1)
            throw new PixelRequestException('1L201| Invalid user.');

        $fb_id = $res[0]->fb_user_id;

        //verify the token
        $this->load->library('guzzle');
        $endpoint = 'https://graph.facebook.com/'.$fb_id.'/likes?access_token='. $id_token ;

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint
        );

        if($res->getStatusCode() != 200) {
            throw new PixelRequestException('1L201| Failed to verify the Facebook access token.');
        }

        $body = $res->getBody();
        $body = json_decode($body);

        return $body;

        /*$fb_id = $body->id;
        $name = $body->name;


        $data->InfStatus->Status = 'Login Successful.';
        $data->InfStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'id' => $id,
            'name' => $name
        );

        return $data;*/
    }

}