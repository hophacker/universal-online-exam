<?php
session_start();
if(array_key_exists("time",$_SESSION) && time() - $_SESSION["time"] > 10)
{
    echo '<meta http-equiv="refresh" content="10; url=http://www.baidu.com">';
    session_destroy();
    return;
}
$_SESSION["time"] = time();
echo $_SESSION["time"] ;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
