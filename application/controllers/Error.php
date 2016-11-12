<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 24/10/16
 * Time: 8:30 PM
 */
class Error extends CI_Controller{
    //@TODO Find Usages

    public function authority() {
        header("HTTP/1.1 401 Unauthorized");
        echo 'No donut for you.';
    }

}