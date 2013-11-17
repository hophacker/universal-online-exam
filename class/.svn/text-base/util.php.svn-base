<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of util
 *
 * @author j
 */

class util {

    //put your code here
    public static function getInt($key, $default) {
        if (isset($_POST[$key]))
            return intval($_POST[$key]);
        else
            return $default;
    }

    public static function getIntByGet($key, $default) {
        if (isset($_GET[$key]))
            return intval($_GET[$key]);
        else
            return $default;
    }

    public static function printArray(&$res, $array) {
        foreach ($array as $key => $value) {
            $res .= "$key => $value";
            if (is_array($value)) { 
                util::printArray($res, $value);
            }
        }
    }

}
?>
