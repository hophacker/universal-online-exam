<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of REValidator
 *
 * @author j
 */
require_once getenv("DOCUMENT_ROOT")."/KoolPHPSuite/KoolControls/KoolForm/koolform.php";

class REValidator {
    //put your code here
    public static function password(){
        $validator = new RegularExpressionValidator();
        $validator->ValidationExpression = '/^[a-zA-Z0-9_-]{6,18}$/';
        $validator->ErrorMessage = '出于系统安全，请使用6到18个a-z,A-Z,0-9,_,-,中的字符作为密码';
        return  $validator;
    }
    public static function username(){
        $validator = new RegularExpressionValidator();
        $validator->ValidationExpression = '/^[a-zA-Z0-9_-]{6,18}$/';
        $validator->ErrorMessage = '出于系统安全，请使用6到18个a-z,A-Z,0-9,_,-,中的字符作为用户名';
        return  $validator;
    }
}
?>
