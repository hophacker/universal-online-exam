<?php
#mail("506452674@qq.com","mail","mail from php","admin@Axiom");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(E_ALL);
//ini_set('display_errors',1);
require_once 'autoload.inc';
class errorHandler {
    public static $num = 0;
    public static function uuid($prefix = '') {
        $chars = md5(uniqid(mt_rand(), true));
        $uuid = substr($chars, 0, 8) . '-';
        $uuid .= substr($chars, 8, 4) . '-';
        $uuid .= substr($chars, 12, 4) . '-';
        $uuid .= substr($chars, 16, 4) . '-';
        $uuid .= substr($chars, 20, 12);
        return $prefix . $uuid;
    }
    
    public static function error_function($error_level, $error_message, $error_file, $error_line, $error_context) {
        echo "catch error:";
        echo $error_message;
        $fp = fopen('./' . errorHandler::uuid() . '.log', 'wb');
        fwrite($fp, "level:" . $error_level . "\nmessage:" . $error_message . "\nfile:" . $error_file . "\nline:" . $error_line . "\n");
        fclose($fp);
    }

    public static function error_report_string($e) {
        $fp = fopen('./' . errorHandler::time_date() . '.log', 'wb');
        fwrite($fp, $e);
        fclose($fp);
    }

    public static function error_report($e) {
        $fp = fopen('./' . errorHandler::uuid() . '.log', 'wb');
        fwrite($fp, $e->getMessage());
        fclose($fp);
    }
    public static function time_date(){
        $date = new DateTime();
        return $date->format("m-d G:i:s");
    }
    public static function error_report_array($arr){
        $fp = fopen('./' . errorHandler::uuid() . '.log', 'wb');
        $res = "";
        util::printArray($res, $arr);
        fwrite($fp, $res);
        fclose($fp);
    }
}
?>
