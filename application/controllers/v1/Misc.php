<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 23/10/16
 * Time: 6:53 PM
 */

/**
 * Class Misc
 *
 * @property MiscRest $MiscRest
 * @property Util $util
 * @property Urls $urls
 * @property CI_Session $session
 * @property VisitorModel $VisitorModel
 * @property CartModel $CartModel
 * @property CI_URI $uri
 * @property Valid $valid
 * @property CI_DB_driver $db
 * @property CI_Input $input
 * @property RESTModel $RESTModel
 * @property Exceptions $exceptions
 * @property UserRest $UserRest
 */

class Misc extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('REST/MiscRest');
        $this->load->model('REST/RESTModel');
        $this->load->library('Exceptions');

        $this->load->database();
    }

    public function getCountries() {
        try {
            if ($this->RESTModel->authorizeRequest()) {
                //authorized
                $data = $this->MiscRest->getCoutries();

                $this->load->view('rest', array(
                    'data' => $data
                ));
            }
            else throw new PixelRequestException('5A200|Access Denied');

        }catch (Exception $e) {
            $this->exceptions->parseMobileErrors($e);
        }
    }
}