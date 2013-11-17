<?php
require_once('../../private/class/SMT.php');
require_once('../../private/class/DB_Connect.php');
require_once('../../private/class/util.php');
util::sessionRequire(util::student);
/*
session_start();
if(!array_key_exists("dxU1",$_SESSION))
{
    //
    $_SESSION["dxU1"] = "qwe123";
    //
}
*/
$con = new DB_Connect();

$query = 'select  student.s_name s_name,student.s_date s_date,department.dept_name s_dept,student.s_class s_class,student.s_num s_num,student.s_mail s_mail from student,department where student.state = 1 and student.dept_id = department.dept_id and student.s_user =  \''.$_SESSION["dxU1"].'\'';
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $student = $stmt->fetch();
  
    //$stmt->close();
}


  
$smt = new SMT('PerInfo');
$smt->render(array(   
    'title' => '用户信息',
    'student_info' => $student
    ));

?>
