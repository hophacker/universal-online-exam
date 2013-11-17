<?php

require_once '../../../../../class/autoload.inc';
$oper = (string)$_POST['oper'];
$oper();

function updatePerInfo() {
    $st_name = $_POST['st_name'];
    $st_date = $_POST['st_date'];
    $st_user = $_POST['st_user'];
    $db = new DB_Connect();
    $statement = "update students set s_name=? , s_date=? where s_user=?";
    $result = $db->prepare($statement);
    $result->execute(array($st_name,$st_date,$st_user));
    echo json_encode(array('success'=>$result->rowCount()));
}

function updateCommInfo() {
    $st_phone = $_POST['st_phone'];
    $st_mail = $_POST['st_mail'];
    $st_user = $_POST['st_user'];
    $db = new DB_Connect();
    $statement = "update students set s_phone=? , s_mail=? where s_user=?";
    $result = $db->prepare($statement);
    $result->execute(array($st_phone,$st_mail,$st_user));
    echo json_encode(array('success'=>$result->rowCount()));
}

function updateSchoolInfo() {
    $st_num = $_POST['st_num'];
    $st_class = $_POST['st_class'];
    $st_edu = $_POST['st_edu'];
    $st_user = $_POST['st_user'];
    $db = new DB_Connect();
    $statement = "update students set class_id=? , s_num=? , edu_id=? where s_user=?";
    $result = $db->prepare($statement);
    $result->execute(array($st_class,$st_num,$st_edu,$st_user));
    echo json_encode(array('success'=>$result->rowCount()));
}

function checkPassword() {
    $st_user = $_POST['st_user'];
    $st_pwd = $_POST['st_pwd'];
    $db = new DB_Connect();
    $statement = "select * from students where s_user=? and s_pwd=?";
    $result = $db->prepare($statement);
    $result->execute(array($st_user,md5($st_pwd)));
    echo json_encode(array('success'=>$result->rowCount()));
}

function updatePassword() {
    $st_user = $_POST['st_user'];
    $st_pwd = $_POST['st_pwd'];
    $db = new DB_Connect();
    $statement = "update students set s_pwd=? where s_user=?";
    $result = $db->prepare($statement);
    $result->execute(array(md5($st_pwd),$st_user));
    echo json_encode(array('success'=>$result->rowCount()));
}
?>
