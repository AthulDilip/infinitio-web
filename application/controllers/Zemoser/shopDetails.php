<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 30/7/16
 * Time: 4:22 PM
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

class ShopDetails extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Urls');
        $this->load->database();
        $this->load->library('session');
        $this->load->library('Util');
        $this->load->model('CategoryModel');
        $this->load->model('UsersModel');
        $this->load->model('ProductModel');
    }

    public function index() {
        $cats = $this->CategoryModel->loadParentCategories();

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $id = $this->uri->segment(4, null);

        //load Reviews
        $start = 0;
        $limit = 4;
        $reviews = $this->UsersModel->loadUserReviews($id,$start, $limit);
        $reviews_count = $this->UsersModel->loadUserReviewsCount($id);
        $res = $this->UsersModel->loadRatingCounts($id);

        $sum=0;
        $ratings = array(0,0,0,0,0);
        foreach ($res as $ob){
            if($reviews_count >0)
                $ratings[$ob->rating-1] = ((int)$ob->cnt)/$reviews_count;

            $sum = $sum + $ob->rating*$ob->cnt;
        }

        if($reviews_count >0) {
            $avg = round($sum / ($reviews_count), 1);
        }else
            $avg=0;

        //load zemoserDetails
        $details = $this->UsersModel->loadZemoserDetailsOf($id);
        //var_dump($details);


        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'active' => 2,
            'cats' => $cats,
            'googleLoginUrl' => $googleLoginUrl,
            'fbLoginUrl' => $fbLoginUrl
        );

        $conData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
            'data' => $details,
            'reviews' => $reviews,
            'reviews_count' => $reviews_count,
            'ratings' => $ratings,
            'avg_rating' => $avg,
            'userId' => $id
        );

        $this->load->view('view-header2',$headData);
        $this->load->view('ZemoserShop',$conData);
        $this->load->view('view-footer',$headData);
    }
}