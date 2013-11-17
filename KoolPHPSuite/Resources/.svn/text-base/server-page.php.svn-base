<?php 
//Receive data
	include("config.php");
	$conn = @mysql_connect($dbhost,$dbuser,$dbpass);
	@mysql_select_db($dbname, $conn);
	//basuc info
	$name 		= $_POST["name"];
	$email 		= $_POST["email"];
	$control 	= $_POST["control"];
	$content 	= $_POST["content"];
	//advanced info
	$scriptname 	= $_POST["scriptname"];
	$readpath		= $_POST["readpath"];
	$demourl 		= $_POST["demourl"]."?act=done";
	//Collect errors
	$_errors = $content."\n\n";
	$_errors .= "<b>Server info :</b> \n";
	$_errors .= "SCRIPT_NAME: ".$scriptname."\n";
	$_errors .= "REAL_PATH: ".$readpath."\n";
	
	$sql_insert = "INSERT INTO tbl_demoErr ('name','email,'control','errors') 
					VALUES ('$name','$email,'$control','$_errors')";
	@mysql_query($sql_insert);
	@mysql_close($conn);
	header("Location: $demourl");
?>