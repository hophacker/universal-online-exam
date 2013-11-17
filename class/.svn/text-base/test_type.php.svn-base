<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_type
 *
 * @author j
 */
require_once 'DB_Connect.php';
error_reporting(E_ALL);
ini_set('display_errors',1);
class test_type extends DB_Connect{
    //put your code here
    private $names;
    public function __construct() {
        parent::__construct();
        $this->refreshNames();
    }
    public function refreshNames(){
        $this->names = parent::getArray("SELECT `test_type_id`, `name` FROM `test_type`");
    }
    public function getNameOptions(){
        return parent::getOptions("SELECT `test_type_id`, `name` FROM `test_type`");
    }
    
    public function getStyleName($style) {
        if ($style == '0')
            return '抽取题库';
        else if ($style == '1')
            return '抽取试卷';
    }
    public function grad_test_type_id_name($grad_test_type_id){
        $grad_test_type_id = intval($grad_test_type_id);
        if (!array_key_exists($grad_test_type_id, $this->names)){
            return "未知";
        }
        else 
            return $this->names[$grad_test_type_id];
    }
    public function getPromotion(){
        $data = parent::query("select test_type_id, test_times1, test_times2, highest1, highest2, grad_test_type_id
            from test_type where test_type_id != grad_test_type_id and grad_test_type_id > 0 and test_type_id > 0");
        $rows = array();
        while($row = $data->fetch()){
            $row['test_type_id_name'] = $this->names[$row['test_type_id']];
            $row['grad_test_type_id_name'] = $this->names[$row['grad_test_type_id']];
            $rows[] = $row;
        }
        return $rows;
    }
    public function getAllColumns($test_type_id = -1){
        $this->refreshNames();
        $sql = "select * from test_type";
        if ($test_type_id != -1) $sql .= " where test_type_id=$test_type_id";
        $data = parent::query($sql);
        $rows = array();
        while($row = $data->fetch()){
            $row['test_type_id_name'] = $this->names[$row['test_type_id']];
            $row['grad_test_type_id_name'] = $this->grad_test_type_id_name($row['grad_test_type_id']);
            $rows[] = $row;
        }
        return $rows;
    }
    public function getLegalTypes(){
        $query = "select test_type_id, name from test_type";
        return parent::getArray($query);
    }
    public function getTestTypePanel(){
        $types = $this->getLegalTypes();
        $test_type_panel = "<div id='test_type_radio'>";
        foreach ($types as $key=>$val){
            $test_type_panel .= "<input type='radio' name='deg' id='deg$key' value='$key' checked />
            <label for='deg$key'>$val</label>";
        }
        $test_type_panel .= "</div>";
        return $test_type_panel;
    }
}
//$ha = new test_type();
//echo $ha->getNameOptions();
?>
