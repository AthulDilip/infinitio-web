<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 31/7/16
 * Time: 6:55 PM
 */
class Valid
{
    function isNum($value) {
        if (!filter_var($value, FILTER_VALIDATE_INT) === false) {
            return true;
        } else {
            return false;
        }
    }

    function isFloat($value) {
        return ($value == (string)(float)$value);
    }

    function isValidString($value) {
        return (trim ($value) != '');
    }


    function filter($value) {
        return filter_var($value, FILTER_SANITIZE_STRING);
    }
}