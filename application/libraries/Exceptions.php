<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 8/10/16
 * Time: 11:46 AM
 */
class PixelArgumentException extends Exception {
    public function PixelArgumentException( $msg ) {
        parent::__construct($msg);
        log_message('DEBUG', 'Exception : ' . $msg);
    }

    public function userMessage() {
        return "Something went wrong while trying to process your request. Admins will be notified.";
    }
}

class PixelAccessException extends Exception {
    public function PixelAccessException($msg) {
        parent::__construct($msg);
        log_message('DEBUG', 'Exception : ' . $msg);
    }

    public function userMessage() {
        return "Access is denied for the requested resource.";
    }
}

class PixelRequestException extends Exception {
    public function PixelRequestException( $msg ) {
        parent::__construct($msg);
        log_message('DEBUG', 'Exception : ' . $msg);
    }

    public function userMessage() {
        return "Invalid Request. Please try again.";
    }
}

class PixelDatabaseException extends Exception {
    public function PixelDatabaseException( $msg ) {
        parent::__construct($msg);
        log_message('DEBUG', 'Exception : ' . $msg);
    }

    public function userMessage() {
        return "Failed to fetch or update information.";
    }
}

class Pixel404Exception extends Exception {
    public function Pixel404Exception( $msg ) {
        parent::__construct($msg);
        log_message('DEBUG', 'Exception : ' . $msg);
    }

    public function userMessage() {
        return "404 Not Found.";
    }
}

function PixelExceptionHandler( $e ) {
    if( method_exists( $e, 'userMessage' ) ) {
        $msg = $e->userMessage();
    }
    else {
        log_message('DEBUG', 'Exception : ' . $e->getMessage());
        $msg = 'An unidentified error occurred, please try again.';
    }

    return $msg;
}

function HandleExceptions( $e ){
    $msg = PixelExceptionHandler( $e );

    switch (ENVIRONMENT)
    {
        case 'development':
            echo $e->getMessage();
            break;

        case 'testing':
            echo $e->getMessage();
            break;

        case 'production':
            $in = & get_instance();
            $in->session->set_userdata('error', $msg);
            redirect('Error/e500?r=' . $msg);
            break;

        default:
            header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
            echo 'The application environment is not set correctly.';
            exit(1); // EXIT_ERROR
    }
}

class Exceptions {
    private $CI;

    public function __construct() {
        set_exception_handler('HandleExceptions');

        $this->CI = & get_instance();
    }

    public function handleRestErrors( $e ) {
        $msg = PixelExceptionHandler( $e );
        $this->CI->load->view('rest', array('data' => array(
            'status' => false,
            'error' => $msg
        )));
    }

    public function parseMobileErrors($e) {
        $msg = $e->getMessage();
        $ma = explode('|', $msg);
        $code = $ma[0];
        $m = !empty($ma[1]) ? $ma[1] : '';

        $data = (object)array(
            'ZemoseStatus' => (object) array(
                'StatusCode' => $code,
                'Status' => $m
            ),
            'data' => null
        );

        $this->CI->load->view('rest', array('data' => $data));
    }

    public function handleMobileErrors( $e ) {
        $msg = PixelExceptionHandler( $e );
    }

    public function handleMainErrors( $e ) {
        HandleExceptions( $e );
    }
}