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

class Reviews extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('Util');
        $this->load->library('Urls');
        $this->load->library('valid');
        $this->load->model('UsersModel');
    }

    public function index() {

        $id = $this->uri->segment(3,-1);
        $start = (int)$this->uri->segment(4,0);
        $limit = 4;

        $details = $this->UsersModel->loadDetailsOf($id);

        if($details->zemoser == 0){
            redirect('/home');
        }

        $reviews = $this->UsersModel->loadUserReviews($id,$start, $limit);
        $reviews_count = $this->UsersModel->loadUserReviewsCount($id);

        //initailize pagination
        $config['uri_segment'] = 4;
        $config['base_url'] = $this->urls->getUrl().'reviews/index/'.$id;
        $config['total_rows'] = $reviews_count;
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $links = $this->pagination->create_links();

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

        //genereate url for google login
        $client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
        $googleLoginUrl = $client->createAuthUrl();

        //generate facebook login url
        $fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');

        $headData =  array(
            'url' => $this->urls->getUrl(),
            'conUrl' => $this->urls->getConUrl(),
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
            'links' =>$links
        );


        $this->load->view('view-header', $headData);
        $this->load->view('view-userreviews', $conData);
        $this->load->view('view-footer', $headData);
    }

}