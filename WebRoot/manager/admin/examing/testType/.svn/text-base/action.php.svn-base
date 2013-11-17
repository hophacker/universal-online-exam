<?php

require_once '../../../../../class/autoload.inc';
require_once '../../../../../class/postGet.php';
error_reporting(E_ALL ^ E_WARNING);
class action {
    private $test_type;
    public function __construct() {
        $this->test_type = new test_type();
    }
    public function create() {
        $con = new DB_Connect();
        $sql = "insert into test_type ( style,
              name,
              sel_num,
              sel_score,
              jud_num,
              jud_score,
              ans_num,
              ans_score,
              duration,
              comment,
              grad_test_type_id
          ) values(" .
                JPOST('style') . "," .
                JPOSTS('name') . "," .
                JPOST('sel_num') . "," .
                JPOST('sel_score') . "," .
                JPOST('jud_num') . "," .
                JPOST('jud_score') . "," .
                JPOST('ans_num') . "," .
                JPOST('ans_score') . "," .
                JPOST('duration') . "," .
                JPOSTS('comment') . "," .
                JPOST('grad_test_type_id') . ")";
        $con->exec($sql);

        $res = $this->test_type->getAllColumns($con->lastInsertId());
        
        $jTableResult['Record'] = current($res);
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    public function update() {
        $con = new DB_Connect();
        $sql = "update test_type set 
            style=" . ($p_style = JPOST('style')) . ", 
            sel_num=" . JPOST('sel_num') . ",
            sel_score=" . JPOST('sel_score') . ",
            jud_num=" . JPOST('jud_num') . ",
            jud_score=" . JPOST('jud_score') . ",
            ans_num=" . JPOST('ans_num') . ",
            ans_score=" . JPOST('ans_score') . ",
            duration=" . JPOST('duration') . ",
            grad_test_type_id=" . JPOST('grad_test_type_id') .
                ", comment=" . JPOSTS('comment') . " where test_type_id=" . ($test_type_id = JPOST('test_type_id'));
        $con->exec($sql);
        $jTableResult = array();
        
        $res = $this->test_type->getAllColumns($test_type_id);
        
        $jTableResult['Record'] = current($res);
        $jTableResult['Result'] = "OK";
        
        print json_encode($jTableResult);
    }

    public function look() {
        $jTableResult['Records'] = $this->test_type->getAllColumns();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    public function delete() {
        $con = new DB_Connect();
        $con->exec('delete from test_type where test_type_id=' . JPOST('test_type_id'));
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
}
try {
    $action = new action();
    $act = $_GET["action"];
    $action->$act();
} catch (PDOException $ex) {
    $jTableResult = array();
    $jTableResult['Result'] = "ERROR";
    $jTableResult['Message'] = $ex->getMessage();
    print json_encode($jTableResult);
}
?>
