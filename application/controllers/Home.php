<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('urls');
		$this->load->library('util');
		//$this->load->library('HybridAuthLib');

		$this->load->model('UsersModel');
		$this->load->model('CategoryModel');
		$this->load->model('ProductModel');
	}

	public function index() {

		$cats = $this->CategoryModel->loadParentCategories();

		//genereate url for google login
		$client = $this->UsersModel->getGoogleClient($this->urls->getUrl() . "users/googlelogin");
		$googleLoginUrl = $client->createAuthUrl();

		/*//genereate url for google login
		$client = $this->UsersModel->getGoogleClient("https://zemose.dev/users/googlesignup");
		$googleSignupUrl = $client->createAuthUrl();*/

		$fbLoginUrl = $this->UsersModel->getFacebookUrl($this->urls->getUrl() . 'users/fblogin/');
		//$fbSignupUrl = $this->UsersModel->getFacebookUrl('https://zemose.dev/users/fbsignup/');

		$featuredCategories = $this->CategoryModel->listFeaturedArray();
		$featuredProducts = $this->ProductModel->listFeaturedProductsPhp();
		$searchProducts = $this->ProductModel->listProductNames();


		$headData =  array(
			'url' => $this->urls->getUrl(),
			'conUrl' => $this->urls->getConUrl(),
			'cats' =>$cats,
			'googleLoginUrl' => $googleLoginUrl,
			'fbLoginUrl' => $fbLoginUrl,
			'featuredCategories' => $featuredCategories,
			'featuredProducts' => $featuredProducts,
			'searchProducts' => $searchProducts
		);

		$this->load->view('view-home',$headData);
		$this->load->view('view-footer',$headData);
	}
}
