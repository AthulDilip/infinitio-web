<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 19/6/16
 * Time: 11:48 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Urls
{

    private $url;
    private $conUrl;

    public function __construct() {

        $this->url = base_url();
        $this->conUrl = $this->url . 'static/';
    }

    public function getUrl() {
        return $this->url;
    }

    public function getAdminUrl() {
        return $this->url.'gdf79/';
    }

    public function getConUrl() {
        return $this->conUrl;
    }

    public function getAdminCon() {
        return $this->conUrl . 'admin/';
    }

}