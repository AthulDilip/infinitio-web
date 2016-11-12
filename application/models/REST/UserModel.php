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
            'ZemoseStatus' => (object) array(
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
        $endpoint = 'https://graph.facebook.com/me?access_token='. $id_token ;

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

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'id' => '',
            'name' => ''
        );

        return $data;
    }

}