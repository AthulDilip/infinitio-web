<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 29/7/16
 * Time: 1:45 PM
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
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class InterestModel extends CI_Model
{
    public function __construct() {
        parent::__construct();

        $this->load->library('valid');
    }

    public function postScore($userId,$sports,$business,$politics,$tech,$entertainment){
        $sql = "UPDATE users SET sports=?,business=?,politics=?,tech=?,entertainment=? WHERE id=?";
        $query = $this->db->query($sql,array($sports,$business,$politics,$tech,$entertainment,$userId));
    }

    public function getScore($userId){

        if(empty($userId)) {
            $data = (object)array(
                'IStatus' => (object) array(
                    'StatusCode' => '1D200',
                    'Status' => 'User Id not provided.'
                ),
                'data' => false
            );

            return $data;
        }


        $sql = "SELECT * FROM users WHERE id = ?; ";
        $query = $this->db->query($sql,array($userId));
        $res = $query->result()[0];

        $data = (object)array(
            'IStatus' => (object) array(
                'StatusCode' => '1D100',
                'Status' => 'Got score successfully'
            ),
            'data' => (object) array(
                'sports' => $res->sports,
                'business' => $res->business,
                'politics' => $res->politics,
                'tech' => $res->tech,
                'entertainment' => $res->entertainment
            )
        );

        return $data;
    }

    //63f803a8-5fd8-5b12-9997-906dd1373e94
    public function getLatestNews() {

        $this->load->library('guzzle');

        $endpoint = 'https://developer.manoramaonline.com/api/editions/en/sections/news_science-&-tech/articles';
        $headers = ['Authorization' => '63f803a8-5fd8-5b12-9997-906dd1373e94'];

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint,
            ['headers' => $headers]
        );

        $articles = array();
        $articles[0] = json_decode($res->getBody()->getContents())->articleSummary[0];
        $articles[1] = json_decode($res->getBody()->getContents())->articleSummary[1];

        $data = (object)array(
            'IStatus' => (object) array(
                'StatusCode' => '1E100',
                'Status' => 'Got score successfully'
            ),
            'data' => (object) array(
                'articles' => $articles
            )
        );

        return $data;
    }

    public function getInterestedNews(){
        $this->load->library('guzzle');

        $endpoint = 'https://developer.manoramaonline.com/api/editions/en/sections/business_news/articles';
        $headers = ['Authorization' => '63f803a8-5fd8-5b12-9997-906dd1373e94'];

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint,
            ['headers' => $headers]
        );
        $article1 = json_decode($res->getBody()->getContents())->articleSummary[0];

        $endpoint = 'https://developer.manoramaonline.com/api/editions/en/sections/news_science-&-tech/articles';

        $headers = ['Authorization' => '63f803a8-5fd8-5b12-9997-906dd1373e94'];

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            $endpoint,
            ['headers' => $headers]
        );

        $article2 = json_decode($res->getBody()->getContents())->articleSummary[1];
        $articles = array();
        $articles[0] = $article1;
        $articles[1] = $article2;

        $data = (object)array(
            'IStatus' => (object) array(
                'StatusCode' => '1F100',
                'Status' => 'Got score successfully'
            ),
            'data' => (object) array(
                'articles' => $articles
            )
        );

        return $data;

    }
}