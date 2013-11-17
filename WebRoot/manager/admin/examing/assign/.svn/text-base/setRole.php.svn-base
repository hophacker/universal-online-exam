<?php
require_once "../../../../../class/autoload.inc";

function doIt($s_role, $s_ids, $con){
    foreach($s_ids as $s_id){
        $ex = "update student set s_role='$s_role' where s_id=$s_id";
        $con->exec($ex);
    }
}
$s_ids1 = explode(" ", $_POST['s_id1']);
$s_ids2 = explode(" ", $_POST['s_id2']);
$s_role1 = util::getInt('s_role1', -1);
$s_role2 = util::getInt('s_role2', -1);
$con = new DB_Connect();
doIt($s_role1, $s_ids1, $con);
doIt($s_role2, $s_ids2, $con);
?>
