<?php
session_start(  );

require_once('config.php');
require_once('db_login.php');
require_once('DB.php');

// Display the header
$smarty->assign('blog_title',$blog_title);
$smarty->display('header.tpl');

// Check for valid login
if (!isset($_SESSION["username"])) {
    echo 'Please <a href="login.php">login</a>.';
    exit;
}

// Connect to the database
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");

if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}

$post_id = $_GET["post_id"];
$post_id=mysql_real_escape_string(get_magic_quotes_gpc( ) ? stripslashes($post_id) : $post_id);

$query = "SELECT * FROM users NATURAL JOIN posts NATURAL JOIN categories
                   WHERE post_id=$post_id";
$result = $connection->query($query);

if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}

while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    $test[]=$result_row;
}

$smarty->assign('owner_id',$_SESSION["user_id"]);
$query = "SELECT * FROM users NATURAL JOIN comments WHERE post_id=$post_id";
$result = $connection->query($query);

if (DB::isError($result)){
die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
$comment_count = $result->numRows(  );
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    $comments[] = $result_row;
}
$smarty->assign('posts',$test);
$smarty->assign('comments',$comments);
$smarty->assign('comment_count',$comment_count);
$smarty->display('view_post.tpl');

$connection->disconnect(  );

// Display the footer
$smarty->display('footer.tpl');

?>

