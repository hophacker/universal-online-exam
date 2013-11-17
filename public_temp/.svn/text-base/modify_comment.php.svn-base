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

$stop = FALSE;

$post_id=$_POST[post_id];
$title= $_POST['title'];
$body= $_POST['body'];
$action= $_POST['action'];
$category_id= $_POST['category_id'];
$user_id=$_SESSION["user_id"];
$comment_id = $_POST['comment_id'];

if ($_GET['action'] == "delete" and !$stop) {
    $comment_id = $_GET["comment_id"];
    $comment_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes
($comment_id) : $comment_id);
    $query = "DELETE FROM comments WHERE comment_id='".$comment_id."'AND user_id='"
.$user_id."'";
    $result = $connection->query($query);
    if (DB::isError($result)){
       die("Could not query the database: <br />".$query." ".DB::errorMessage
($result));
    }
    echo "Deleted successfully.<br />";
    $stop = TRUE;
}

// We're editing an entry, explicitly grab the id from the URL
if ($_GET["comment_id"] and !$stop) {
    $comment_id = $_GET["comment_id"];
    $query = "SELECT * FROM comments NATURAL JOIN users WHERE comment_id="
.$_GET["comment_id"];
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />".$query." ".DB::errorMessage
($result));
    }
    while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
        $comments[] = array('title'=>htmlentities($result_row['title']),
                            'body'=>htmlentities($result_row['body']),
                            'comment_id'=>$result_row['comment_id']);
    }
    $post_id = $_GET["post_id"];
    $smarty->assign('action','edit');
    $smarty->assign('comments',$comments);
    $smarty->assign('post_id',htmlentities($post_id));
    $smarty->display('comment_form.tpl');

    // Display the footer
    $smarty->display('footer.tpl');
    exit;
}

//The form was submitted, was it an add or an update?
if ($_POST['submit'] and !$stop) {
    // Validate fields
    if ($title == ""){
    echo 'Title must not be null.<br />';
    $found_error = TRUE;
    $stop = TRUE;
}
if ($body == ""){
    echo "Body must not be null.<br />";
    $found_error = TRUE;
    $stop = TRUE;
}
// Validated OK let's hit the database
if ($_POST['action'] == "add" AND !$stop) {
    $title=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($title) : $title);
    $body=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($body) : $body);
    $post_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($post_id) : $post_id);
    $user_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($user_id) : $user_id);
    $query = "INSERT INTO comments VALUES (NULL,'".$user_id."','".
$post_id."','".$title."','".$body."', NULL)";
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />".$query." ".DB::errorMessage
($result));
    }
    echo "Posted successfully.<br />";
    $stop = TRUE;
}
if ($_POST['action']=="edit" and !$stop){
    $title=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($title) : $title);
    $body=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($body) : $body);
    $comment_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($comment_id) : $comment_id);
    $user_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?
stripslashes($user_id) : $user_id);
    $query = "UPDATE comments SET title='".$title."',body='".$body."'
WHERE comment_id='".$comment_id."' AND user_id='".$user_id."'";
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
    }

    echo 'Updated successfully.<br />';
    $stop = TRUE;
    }
}

if (!$stop){
    // Display blank form
    // Create an empty entry
    $post_id = $_GET["post_id"];
    $result_row = array('title'=>NULL,'body'=>NULL,'comment_id'=>NULL);
    $comments[] = $result_row;
    // Get the categories
    $smarty->assign('post_id',htmlentities($post_id));
    $smarty->assign('comments',$comments);
    $smarty->assign('action','add');
    $smarty->display('comment_form.tpl');
}

if ($found_error) {
    // Assign old vals
    // Redisplay form
    $post_id = $_POST["post_id"];
    $result_row = array('title'=>htmlentities($title),'body'=>htmlentities
($body),'comment_id'=>htmlentities($comment_id));
    $comments[] = $result_row;
    $smarty->assign('action',htmlentities($action));
    $smarty->assign('post_id',htmlentities($post_id));
    $smarty->assign('comments',$comments);
    $smarty->display('comment_form.tpl');
}

// Display the footer
$smarty->display('footer.tpl');

?>
