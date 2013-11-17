<?php
require_once '../../../../../class/autoload.inc';
require_once '../../../../../class/postGet.php';

$test_type_id = JPOST('test_type_id');
$test_times1 = JPOST('test_times1');
$test_times2 = JPOST('test_times2');
$highest1 = JPOST('highest1');
$highest2 = JPOST('highest2');

$con = new DB_Connect();
$sql = "update test_type set test_times1=$test_times1, test_times2=$test_times2, highest1=$highest1, 
   highest2=$highest2 where test_type_id=$test_type_id";

$num = $con->exec($sql);

if ($num == 1)
    echo json_encode(array("ret" => "修改成功"));
else
    echo json_encode(array("ret" => "重复修改 或 修改失败?"));
?>
