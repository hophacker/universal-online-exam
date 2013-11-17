<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of education
 *
 * @author j
 */
require_once 'DB_Connect.php';
class education extends DB_Connect{
    //put your code here
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return parent::getArray("SELECT `edu_id`, `edu_name` FROM `educations` where state=1");
    }
}

?>
