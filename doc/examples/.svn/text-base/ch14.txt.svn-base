chapter: Cookies, Sessions, and Access Control
==================

setcookie ( name , value , expire , path, domain , secure )

    
    
====================================
Example: Creating a cookie
<?php
//Remember that setcookie must come before any other line that generates output
setcookie("username","michele");
echo 'Cookie created.';
?>

    
    
====================================
Example: Viewing the username cookie
<?php
if (!isset($_COOKIE['username']))
{
    echo ("Oops, the cookie isn't set!");
}
else
{
    echo ("The stored username is ". $_COOKIE['username'] . ".");
}
?>

    
    
====================================

The stored username is michele.

    
    
====================================
Example: Destroying a cookie by expiring it in the recent past
<?php
//Remember that setcookie must come before any other line that generates output
setcookie("username","", time(  )-10 );
echo 'Rosebud.';
?>

    
    
====================================

Rosebud.

    
    
====================================

Oops, the cookie isn't set!

    
    
====================================
Example: Using HTTP authentication with a PHP script
<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Member Area"');
    header("HTTP/1.0 401 Unauthorized");
    echo "Please login with a valid username and password.";
    exit;
} else {
   echo "You entered a username of: ".$_SERVER['PHP_AUTH_USER']." ";
   echo "and a password of: ".$_SERVER['PHP_AUTH_PW'].".";
}
?>

    
    
====================================
Example: Checking the values returned from the authentication prompt
<?php
$username = 'jon_doe';
$password = 'MyNameIsJonDoe';
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Member Area"');
    header("HTTP/1.0 401 Unauthorized");
    echo "You must enter in a username and password combination!";
    exit;
}
elseif (strcmp($_SERVER['PHP_AUTH_USER'], $username) !== 0 ||
    strcmp($_SERVER['PHP_AUTH_PW'], $password) !== 0) {
    header('WWW-Authenticate: Basic realm="Member Area"');
    header("HTTP/1.0 401 Unauthorized");
    echo "Your username and password combination was incorrect!";
    exit;
}
echo("You have successfully logged in!");
?>

    
    
====================================
Example: Creating the users table to store login information
CREATE TABLE users (user_id INT NOT NULL AUTO_INCREMENT,
                    first_name VARCHAR(100),
                    last_name VARCHAR(100),
                    username VARCHAR(45),
                    password CHAR(32),
       PRIMARY KEY (user_id));

    
    
====================================

Query OK, 0 rows affected (0.23 sec)

    
    
====================================
Example: Creating the entry in the database for a user with an encrypted password
INSERT INTO users (first_name, last_name, username, password)
           VALUES
                  ('Michele','Davis', 'mdavis', MD5('secret'));

    
    
====================================

Query OK, 1 row affected (0.01 sec)

    
    
====================================

SELECT * FROM users;

    
    
====================================

+---------+------------+-----------+----------+----------------------------------+
| user_id | first_name | last_name | username | password |
+---------+------------+-----------+----------+----------------------------------+
|       1 | Michele    | Davis     | mdavis   | 5ebe2294ecd0e0f08eab7690d2a6ee69 |
+---------+------------+-----------+----------+----------------------------------+
1 row in set (0.00 sec)

    
    
====================================
Example: The database login details
<?php
$db_host='localhost';
$db_database='test';
$db_username='test';
$db_password='yourpass';
?>

    
    
====================================
Example: Verifying a username and password against the database
<?php
require_once('db_login.php');
require_once('DB.php');
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="Member Area"');
    header("HTTP/1.0 401 Unauthorized");
    echo "You must enter in a username and password combination!";
    exit;
}
$web_username = $_SERVER['PHP_AUTH_USER'];
$web_password = $_SERVER['PHP_AUTH_PW'];
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$query = "SELECT user_id, username";
$query.= "  FROM users WHERE ";
$query.= "username='".$web_username."' AND password=MD5('".$web_password."') LIMIT 1";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
if (!$row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    header('WWW-Authenticate: Basic realm="Member Area"');
    header("HTTP/1.0 401 Unauthorized");
    echo "Your username and password combination was incorrect!";
    exit;
}
echo("You have successfully logged in as ".$row['username']."!");
?>

    
    
====================================

Warning:  headers already sent message causing the message box not to display.

    
    
====================================
Example: Simply starting a session
<?php
session_start(  );
?>

    
    
====================================
Example: Registering a variable with session_register
<?php
//DON'T USE THIS APPROACH
session_start(  );
session_register("hello");
$hello = "Hello World";
?>

    
    
====================================

Warning: Unknown(  ): Your script possibly relies on a session side-effect which
existed until PHP 4.2.3. Please be advised that the session extension does not
consider global variables as a source of data, unless register_globals is enabled.
You can disable this functionality and this warning by setting
session.bug_compat_42 or session.bug_compat_warn to off, respectively. in Unknown
on line 0

    
    
====================================
Example: Registering a variable by including it in $_SESSION
<?php
session_start(  );
$_SESSION['hello'] = 'Hello World';
echo $_SESSION['hello'];
?>

    
    
====================================
Example: Referencing a variable set on a prior page in the session
<?php
session_start(  );
echo $_SESSION['hello'];
?>

    
    
====================================
Example: Checking to see whether a user is valid
<?php
session_start();
require_once('db_login.php');
require_once('DB.php');
if (empty($_SESSION['user_id'])) {
    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
        header('WWW-Authenticate: Basic realm="Member Area"');
        header("HTTP/1.0 401 Unauthorized");
        echo "You must enter in a username and password combination!";
        exit;
    }
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
    if (DB::isError($connection)){
        die ("Could not connect to the database: <br />". DB::errorMessage($connection));
    }
    $username = mysql_real_escape_string($_SERVER['PHP_AUTH_USER']);
    $password = mysql_real_escape_string($_SERVER['PHP_AUTH_PW']);
    $query = "SELECT user_id, username FROM users WHERE
    username='".$username."' AND password=MD5('".$password."') LIMIT 1";
    $result = $connection->query($query);
    if(!($row = $result->fetchRow(DB_FETCHMODE_ASSOC))) {
        header('WWW-Authenticate: Basic realm="Member Area"');
        header("HTTP/1.0 401 Unauthorized");
        echo "Your username and password combination was incorrect!";
        exit;
    }
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
}
echo "You have successfully logged in as ".$_SESSION["username"].".";
?>

    
    
====================================
Example: Destroying a session
<?php
session_start(  );
//Do some miscellaneous work
$_SESSION['username'] = 'Michele';

// Logout of the site
session_destroy(  );
echo "At this point we can still see the value of username as ";
echo $_SESSION['username']."<br />";

//Unset the $_SESSION array value
unset ($_SESSION['username']);
if (is_null($_SESSION['username'])) {
    echo "Now the value of username is (blank)";
}
?>

    
    
====================================
Example: Session timeout
<IfModule mod_php4.c>
    php_value session.gc_maxlifetime "1440"
</IfModule>

    
    
====================================

<?php
ini_set("session.gc_maxlifetime","1440");
?>

    
    
====================================

session_set_save_handler(open_function,
                         close_function,
                         read_function,
                         write_function,
                         destory_function,
                         clean_function);

    
    
====================================
Example: pear install Auth output
downloading Auth-1.2.3.tgz ...
Starting to download Auth-1.2.3.tgz (24,040 bytes)
........done: 24,040 bytes
Optional dependencies:
package 'File_Passwd' version >= 0.9.5 is recommended to utilize some features.
package 'Net_POP3' version >= 1.3 is recommended to utilize some features.
package 'MDB' is recommended to utilize some features.
package 'Auth_RADIUS' is recommended to utilize some features.
package 'File_SMBPasswd' is recommended to utilize some features.
install ok: Auth 1.2.3

    
    
====================================
Example: pear install Auth_HTTP output
downloading Auth_HTTP-2.1.6.tgz ...
Starting to download Auth_HTTP-2.1.6.tgz (9,327 bytes)
.....done: 9,327 bytes
install ok: Auth_HTTP 2.1.6

    
    
====================================
Example: Using Auth_HTTP to authenticate a user
<?php
// Using Auth_HTTP to limit access
require_once('db_login.php');
require_once("Auth/HTTP.php");
// We use the same connection string as the pear DB functions
$AuthOpts = array('dsn' => "mysql://$db_username:$db_password@$db_host/$db_database",
                  'table' => "users", // your table name
                  'usernamecol' => "username", // the table username column
                  'passwordcol' => "password", // the table password column
                  'cryptType' => "md5" // password encryption type
                 );
$authenticate = new Auth_HTTP("DB", $AuthOpts);

// Set the realm name
$authenticate->setRealm('Member Area');
// Authentication failed error message
$authenticate->setCancelText('<h2>Access Denied</h2>');
// Request authentication
$authenticate->start(  );
// Compare username and password to stored values
if ($authenticate->getAuth(  )){
    echo "Welcome back to our site ".$authenticate->username.".";
}
?>

    
    
====================================
Example: Retrieving additional information for the user
<?php
// Example of Auth_HTTP that also returns additional information
require_once('db_login.php');
require_once("Auth/HTTP.php");
// We use the same connection string as the pear DB functions
$AuthOptions = array('dsn'=>"mysql://$db_username:$db_password@$db_host/$db_database",
                     'table'=>"users", // your table name
                     'usernamecol'=>"username", // the table username column
                     'passwordcol'=>"password", // the table password column
                     'cryptType'=>"md5", // password encryption type in your db
                     'db_fields'=>"*" // enabling fetch for other db columns
                    );
$authenticate = new Auth_HTTP("DB", $AuthOptions);
// Set the realm name
$authenticate->setRealm('Member Area');
// Authentication failed error message
$authenticate->setCancelText('<h2>Access Denied</h2>');
// Request authentication
$authenticate->start(  );

// compare username and password to stored values
if($authenticate->getAuth(  )){
    echo "Welcome back to our site ".$authenticate->username.".<br />";
    echo "Your full name is ";
    echo $authenticate->getAuthData('first_name');
    echo " ";
    echo $authenticate->getAuthData('last_name').".";
}
?>

    
    
==================