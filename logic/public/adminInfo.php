<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../private/class/SMT.php');
require_once('../../private/class/DB_Connect.php');
    
$con = new DB_Connect();
$admin_info = array();
session_start();
if(!array_key_exists("dxU1",$_SESSION))
{
    //
    $_SESSION["dxU1"] = "qwe123";
    //
}

$query = 'select info_id,title,info_date from info_board where state = 1';
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $info = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

  
$smt = new SMT('adminInfo');
$smt->render(array(   
    'title' => '公告通知',
    'adminInfo' => $info
    ));

?>
