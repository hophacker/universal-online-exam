<?php
 
if(!isset($step)) $step = null;
if(!isset($err)) $err = null;
if(!isset($errMsg)) $errMsg = null;
 
if($step==1)
{
	$err = isset($_GET["err"])?$_GET["err"]:null;
	if($err!==null)
	{
		$errMsg = "Could not connect to the database, see error message below:<br>".$_SESSION["mysqlErr"];		
	}	
?>
<div class="install-err">
	<?php echo $errMsg;?>
</div>
<div class="install-db-form">
<form action="?step=2" method="post">



<table border="0">
  <tr>
    <td width="70">Hostname:</td>
    <td width="144"><input class="txt" type="text" name="dbhost" id="dbhost" /></td>
  </tr>
  <tr>
    <td>
        UserName:
     </td>
    <td><input class="txt" type="text" name="dbuser" id="dbuser" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input class="txt" type="text" name="dbpass" id="dbpass" /></td>
  </tr>
  <tr>
    <td>Database:</td>
    <td><input class="txt" type="text" name="dbname" id="dbname" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input class="btn" type="submit" name="button" id="button" value="Proceed to next step" />
    </label></td>
  </tr>
</table>
</form>
</div>
<?php
}elseif($step==2){
	$dbhost = $_POST["dbhost"];
	$dbuser = $_POST["dbuser"];
	$dbpass = $_POST["dbpass"];
	$dbname = $_POST["dbname"];
	
	$conn = @mysql_connect($dbhost,$dbuser,$dbpass);
	$db_selected = @mysql_select_db($dbname, $conn);
	
	
	$_success = true;
	if(!$conn){
		$_SESSION["mysqlErr"] = mysql_error();
		$_success = false;
	}elseif(!$db_selected){
		@mysql_query("CREATE DATABASE ".$dbname, $conn);
		$db_created = mysql_select_db($dbname, $conn);
		if(!$db_created){
			$_SESSION["mysqlErr"] = "Could not create the dabtabase! Please create a blank database manually.";

			$_success = false;
		}
		else
		{
			$_success = true;
		}
	}

	if(!$_success)
	{
		header("Location: index.php?step=1&err=true");
	}
	else{
		$fp = @fopen($resourcesURL.'/config.php', 'w');
		$data = "<?php \n";
		$data .= "\$dbhost = \"".$dbhost."\"; \n";
		$data .= "\$dbuser = \"".$dbuser."\"; \n";
		$data .= "\$dbpass = \"".$dbpass."\"; \n";
		$data .= "\$dbname = \"".$dbname."\"; \n";
		$data .= "@define('INSTALLED', true); \n";
		$data .= "?>";
		@fwrite($fp, $data);
		@fclose($fp);
	?>
	
    <div class="install-err">
		Successful connection
    </div>
    <div class="install-db-form">
    <form action="?step=3" method="post">
          <input class="btn" type="submit" name="button" id="button" value="Proceed to next step" />
    </form>
    </div>

	<?php 
	mysql_close();
	}
	
	
	
	
}elseif($step==3){
	
	include($resourcesURL.'/config.php');
	$conn = @mysql_connect($dbhost,$dbuser,$dbpass);
	@mysql_select_db($dbname, $conn);
	parse_mysql_dump("data.sql");
	mysql_close();
?>
	<div class="install-err">
		Successful Install.
    </div>
    <div class="install-db-form">
    <form action="<?php echo $_SESSION["expURL"];?>" method="post">
      <input class="btn" type="submit" name="button" id="button" value="Back to the example" />
    </form>
    </div>
<?php
}else
{
	$_SESSION["expURL"] = $_SERVER['PHP_SELF'];
?>
	<div class="install-err">
    <table><tr><td>
	<img src="<?php echo $imgURL?>/attention.png" align="absbottom" />
    </td>
    <td>The example requires database in order to run. <a style="color:green;" href="<?php echo $installURL?>/index.php?step=1">Click here to install now!</a></td>
    </tr></table>
    </div>	
<?php
}
function parse_mysql_dump($url) {
   
    $handle = @fopen($url, "r");
    $query = "";
    while(!feof($handle)) {
        $sql_line = fgets($handle);
		
        if (trim($sql_line) != "" && strpos($sql_line, "--") === false) {
            $query .= $sql_line;
            if (preg_match("/;\s*$/", $sql_line)) {
                $result = mysql_query($query) or die(mysql_error());
                $query = "";
            }
        }
    }
}
?>