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
        $sql = "INSERT INTO ";
        $query = $this->db->query($sql, array($uid));
        if($query->num_rows() != 1) {
            throw new PixelRequestException('1L300| User is not signed up.');
        }

        //user exists
        $user = $query->result()[0];

        //create token
        $token = $this->APIAuth->createToken($user);

        $data->ZemoseStatus->Status = 'Login Successful.';
        $data->ZemoseStatus->StatusCode = '1L100';

        $data->data = (object) array(
            'zemoseAccessToken' => $token,
            'email' => $user->email,
            'phone' => $user->phone,
            'profilePicture' => $this->getProfilePic($user),
            'firstName' => $user->firstname,
            'lastName' => $user->lastname,
            'userID' => $user->id,
            'isZemoser' => $this->isZemoser($user)
        );

        return $data;
    }

}