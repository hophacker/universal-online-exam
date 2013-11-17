<?php
$username = "system";
$password = "system";
$connStr = "58.192.140.17/orcl";
$conn = oci_connect($username, $password, $connStr);
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
