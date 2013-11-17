chapter: Sample Application
==================
Example: The config.php script defines settings that are used throughout the site
<?php
// put full path to Smarty.class.php
require('/usr/share/php/Smarty/Smarty.class.php');
$smarty = new Smarty(  );

$smarty->template_dir = '/home/www/htmlkb/smarty/templates';
$smarty->compile_dir = '/home/www/htmlkb/smarty/templates_c';
$smarty->cache_dir = '/home/www/htmlkb/smarty/cache';
$smarty->config_dir = '/home/www/htmlkb/smarty/configs';

$blog_title="Coffee Talk Blog";
?>

    
    
====================================
Example: The header.tpl file
<html>
<head>7
    <title>{$blog_title}</title>
</head>
<body>
<h1>Welcome to the {$blog_title}</h1>

    
    
====================================
Example: The footer.tpl file
<hr>
<a href='posts.php'>Home</a> || <a href='logout.php'>Logout</a>
</body>
</html>

    
    
====================================
Example: The login script, called login.php
 <?php
 // Example of Auth_HTTP the also returns additional information about the user
 require_once('config.php');
 require_once('db_login.php');
 require_once('Auth/HTTP.php');
 // We use the same connection string as the pear DB functions
 $AuthOptions = array(
                      'dsn'=>"mysql://$db_username:$db_password@$db_host/$db_database",
                      'table'=>"users", // your table name
                      'usernamecol'=>"username", // the table username column
                      'passwordcol'=>"password", // the table password column
                      'cryptType'=>"md5", // password encryption type in your db
                      'db_fields'=>"*" // enabling fetch for other db columns
 );
 $authenticate = new Auth_HTTP("DB", $AuthOptions);
 // set the realm name
 $authenticate->setRealm('Member Area');
 // authentication failed error message
 $authenticate->setCancelText('<h2>Access Denied</h2>');
 // request authentication

 $authenticate->start(  );
 // compare username and password to stored values
 if ($authenticate->getAuth(  )) {
     session_start(  );
     $smarty->assign('blog_title',$blog_title);
     $smarty->display('header.tpl');
     //setup session variable
     $_SESSION['username'] = $authenticate->username;
     $_SESSION['first_name'] = $authenticate->getAuthData('first_name');
     $_SESSION['last_name'] = $authenticate->getAuthData('last_name');
     $_SESSION['user_id'] = $authenticate->getAuthData('user_id');
     echo "Login successful. Great to see you ";
     echo $authenticate->getAuthData('first_name');
     echo " ";
     echo $authenticate->getAuthData('last_name').".<br />";
     $smarty->display('footer.tpl');
 }
 ?>

    
    
====================================
Example: SQL to create the posts table
CREATE TABLE posts (
                    post_id int(11) NOT NULL auto_increment,
                    category_id int(11) NOT NULL,
                    user_id int(11) NOT NULL,
                    title varchar(150) NOT NULL,
                    body text NOT NULL,
                    posted timestamp,
                    PRIMARY KEY (post_id)
                   );

    
    
====================================

Query OK, 0 rows affected (0.02 sec)

    
    
====================================
Example: SQL to create the categories table
CREATE TABLE categories (
                         category_id int(11) NOT NULL auto_increment,
                         category varchar(150) NOT NULL,
                         PRIMARY KEY (category_id)
);

    
    
====================================

Query OK, 0 rows affected (0.01 sec)

    
    
====================================
Example: SQL to create the comments table
CREATE TABLE comments (
                       comment_id int(11) NOT NULL auto_increment,
                       user_id int(11) NOT NULL,
                       post_id int(11) NOT NULL,
                       title varchar(150) NOT NULL,
                       body text NOT NULL,
                       posted timestamp,
                       PRIMARY KEY (comment_id)
                      );

    
    
====================================

Query OK, 0 rows affected (0.02 sec)

    
    
====================================
Example: SQL to create the users table (may have already been created)
CREATE TABLE users (
                    user_id int(11) NOT NULL auto_increment,
                    first_name varchar(100) NOT NULL,
                    last_name varchar(100) NOT NULL,
                    username varchar(45) NOT NULL,
                    password varchar(32) NOT NULL,
                    PRIMARY KEY (user_id));

    
    
====================================

Query OK, 0 rows affected (0.02 sec)

    
    
====================================
Example: Inserting sample data for the tables
INSERT INTO categories VALUES (1,'Press Releases');
INSERT INTO categories VALUES (2,'Feature Requests');

INSERT INTO posts VALUES (NULL,1,1,'PHP Version 12','PHP Version 12, to be
released third quarter 2020. Featuring the artificial inteligence engine that
writes the code for you.',NULL);
INSERT INTO posts VALUES (NULL,1,1,'MySQL Version 8','Returns winning lotto
number.',NULL);
INSERT INTO posts VALUES (NULL,2,2,'Money Conversion',' Please add functions
for converting between foreign currencies. ',NULL);

INSERT INTO comments VALUES (NULL,1,1,'Correction','Release delayed till the
year 2099',NULL);

INSERT INTO users VALUES (NULL,'Michele','Davis','mdavis',md5('secret'));
INSERT INTO users VALUES (NULL,'Jon','Phillips','jphillips',md5('password'));

    
    
====================================

Query OK, 1 row affected, 1 warning (0.03 sec)

    
    
====================================
Example: The posts.php script displays a listing of posts and their subjects
 <?php
 session_start(  );
 require_once('config.php');
 require_once('db_login.php');
 require_once('DB.php');
 // Display the page header
 $smarty->assign('blog_title',$blog_title);
 $smarty->display('header.tpl');
 // Check for valid login
 if (!isset($_SESSION['username'])) {
     echo 'Please <a href="login.php">login</a>.';
 }
 else {
     // Connect to the database
     $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");

     if (DB::isError($connection)){
        die ("Could not connect to the database: <br />". DB::errorMessage($connection));
     }
     // Query the posts with catagories and user information
     $query = "SELECT * FROM users NATURAL JOIN posts NATURAL JOIN categories ORDER BY posted DESC";
     // Execute the database query
     $result = $connection->query($query);
     if (DB::isError($result)){

         die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
     }
     // Place the query results into an array
     while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
         $test[] = $result_row;
     }
     // Send the data to the template
     $smarty->assign('posts', $test);
     // Display the template with the data plugged in
     $smarty->display('posts.tpl');
     // Close the database connection
     $connection->disconnect(  );
     // Display the page footer
     $smarty->display('footer.tpl');
 }
?>

    
    
====================================
Example: The posts.tpl template file defines how the postings appear on the page
{section name=mysec loop=$posts}
<a href="view_post.php?post_id={$posts[mysec].post_id}">
{$posts[mysec].title}</a>
by <b>{$posts[mysec].first_name} {$posts[mysec].last_name}</b>
from the <b>{$posts[mysec].category}</b> category at <b>{$posts[mysec].posted}</b>.
<br />
{/section}
<br />
Click to <a href="modify_posts.php?action=add">add</a> a posting.<br />

    
    
====================================
Example: The view_post.php script displays a summary of its comments
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
$post_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes
($post_id) : $post_id);

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

    
    
====================================

$comment_count=$result->numRows(  );

    
    
====================================

$smarty->assign('owner_id',$_SESSION[user_id]);

    
    
====================================
Example: view_post.tpl
{section name=mysec loop=$posts}
    <h2>{$posts[mysec].title}</h2>
    {$posts[mysec].body}
    <br />
    Posted by <b>{$posts[mysec].first_name} {$posts[mysec].last_name}</b>
    from the <b>{$posts[mysec].category}</b> category at
    <b>{$posts[mysec].posted}</b>.<br />
    {if $posts[mysec].user_id == $owner_id}
        <a href="modify_posts.php?post_id={$posts[mysec].post_id}&action=
edit">Edit</a> ||
        <a href="modify_posts.php?post_id={$posts[mysec].post_id}&action=
delete">Delete
</a> ||
        <a href="modify_comment.php?post_id={$posts[mysec].post_id}&action=
add">Add a comment</a>
        <br />
    {/if}
{/section}
{if $comment_count != "0"}
<h3>Comments</h3>
{section name=mysec2 loop=$comments}
    <hr />
    <b>{$comments[mysec2].title}</b>
    <br />
    {$comments[mysec2].body}
    <br />
    Posted by <b>{$comments[mysec2].first_name} {$comments[mysec2].last_name}</b>
    at <b>{$comments[mysec2].posted}</b>.<br />
    {if $comments[mysec2].user_id == $owner_id}
        <a href="modify_comment.php?comment_id={$comments[mysec2].comment_id}
&action=edit">
        Edit</a> ||
        <a href="modify_comment.php?comment_id={$comments[mysec2].comment_id}
&action=delete"
        >Delete</a>
        <br />
    {/if}
{/section}
{/if}

    
    
====================================
Example: modify_posts.php
 <?php
 include('db_login.php');
 require_once('DB.php');
 require_once('config.php');

  //check for valid login
  session_start(  );

  $stop=FALSE;
 $found_error=FALSE;
 //display the header
 $smarty->assign('blog_title',$blog_title);
 $smarty->display('header.tpl');

 if  (!isset($_SESSION['username'])) {
     echo ("Please <a href='login.php'>login</a>.");
     $stop=TRUE;
 }
 //grab submission variables
 $post_id=$_POST[post_id];
 $title= $_POST['title'];
 $body= $_POST['body'];

 $action= $_POST['action'];
 $category_id= $_POST['category_id'];
 $user_id=$_SESSION["user_id"];

 //connected to database
 $connection = DB::connect( "mysql://$db_username:$db_password@$db_host/$db_database" );
 if (!$connection){
     die ("Could not connect to the database: <br>". DB::errorMessage(  ));
 }
 if ($_GET['action']=="delete" AND !$stop){
     $get_post_id=$_GET[post_id];
     $get_post_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($get_post_id) : $get_post_id);
     $user_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($user_id) : $user_id);
     $query = "DELETE FROM posts WHERE post_id='".$get_post_id."' AND
     user_id='".$user_id."'";
     $result = $connection->query($query);
     if (DB::isError($result)){
         die ("Could not query the database: <br>". $query. " ".
         DB::errorMessage($result));
     }
     echo ("Deleted successfully.<br />");
     $stop=TRUE;
 }

 //we're editing an entry, explicitly grab the id from the URL
 if ($_GET['post_id'] AND !$stop) {
     $get_post_id=$_GET[post_id];
     $get_post_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($get_post_id) : $get_post_id);
     $query = "SELECT * FROM users NATURAL JOIN posts NATURAL JOIN categories
     where post_id = $get_post_id";
     $result = $connection->query($query);
     if (DB::isError($result)){
         die ("Could not query the database: <br>". $query. " ".DB::errorMessage($result));
     }
     while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
         $posts[]=$result_row;
     }
     $smarty->assign('action','edit');
     $smarty->assign('posts',$posts);
     //get those categories
     $query = "SELECT category_id, category FROM categories";
     $smarty->assign('categories',$connection->getAssoc($query));
     $smarty->display('post_form.tpl');
     $stop=TRUE;
 }


 //The form was submitted, was it an add or an edit?
 if ($_POST['submit'] AND !$stop)
 {
     //validate fields
     if ($title == ""){
         echo ("Title must not be null.<br>");
         $found_error=TRUE;
         $stop=TRUE;
     }
     if ($body == ""){
         echo ("Body must not be null.<br>");
         $found_error=TRUE;
         $stop=TRUE;
     }
     //validated OK let's hit the database
     if ( $_POST['action']=="add" AND !$stop){
         $category_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($category_id) : $category_id);
         $title=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($title) : $title);
         $body=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($body) : $body);
         $user_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes($user_id) : $user_id);
         $query = "INSERT INTO posts VALUES (NULL,
         "."'".$category_id."','".$user_id."','".$title."','".$body."', NULL)";
         $result = $connection->query($query);
         if (DB::isError($result))
         {
             die ("Could not query the database: <br>". $query. " ".DB::errorMessage($result));
         }
         echo ("Posted successfully.<br />");
         $stop=TRUE;
     }
 }
 if ($_POST['action']=="edit" and !$stop) {
     $category_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?stripslashes($category_id) : $category_id);
     $title=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?stripslashes($title) : $title);
     $body=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?stripslashes($body) : $body);
     $user_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?stripslashes($user_id) : $user_id);
     $post_id=mysql_real_escape_string(get_magic_quotes_gpc(  ) ?stripslashes($post_id) : $post_id);

     $query = "UPDATE posts SET category_id ='".$category_id."',
     title ='".$title."',body='".$body."' WHERE post_id='".$post_id."'
      AND user_id='".$user_id."'";
     $result = $connection->query($query);

     if (DB::isError($result)){
         die ("Could not query the database: <br>". $query. " ".
         DB::errorMessage($result));
     }
     echo ("Updated successfully.<br />");
     $stop=TRUE;
 }
 if (!$stop){
     //display blank form
     //create an empty entry
     $result_row=array('title'=>NULL,'body'=>NULL);
     $posts[]=$result_row;
     //get the categories
     $query = "SELECT category_id, category FROM categories";
     $smarty->assign('categories',$connection->getAssoc($query));
     $smarty->assign('posts',$posts);
     $smarty->assign('action','add');
     $smarty->display('post_form.tpl');
 }

 if ($found_error) {
     //assign old vals
     //redisplay form
     $result_row=array('title'=>"$title",'body'=>"$body",'post_id'=>"$post_id");
     $posts[]=$result_row;
     $smarty->assign('action',$action);
     $smarty->assign('posts',$posts);
     $smarty->display('post_form.tpl');
 }
 //display the footer
 $smarty->display('footer.tpl');

 ?>

    
    
====================================
Example: post_form.tpl
{section name=mysec loop=$posts}
    <form action="modify_posts.php" method="POST">
        <label>
            Title: <input type="text" name="title" value="{$posts[mysec].
title|escape}">
        </label>
        <br /><br />
        <label>
            Body: <textarea name="body" cols="40" rows="4">{$posts[mysec].
body|escape }
</textarea>
        </label>
        <input type="hidden" name="action" value="{$action|escape}">
        <input type="hidden" name="post_id" value="{$posts[mysec].post_id
|escape}"><br>
        <label>
            Category:
            {html_options name="category_id" options=$categories
selected=$posts[mysec].category_id|escape }
        </label>
        <br />
        <input type="submit" name="submit" value="Post" />
    </form>
{/section}

    
    
====================================
Example: modify_comment.php
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
        die("Could not query the database: <br />".$query." ".DB:
:errorMessage($result));
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

    
    
====================================
Example: comment_form.tpl
{section name=mysec loop=$comments}
    <form action="modify_comment.php" method="post">
        <label>

            Title:
            <input type="text" name="title" value="{$comments[mysec].title}" />
        </label>
        <br />
        <br />
        <label>
            Body:
            <textarea name="body" cols="40" rows="4">{$comments[mysec].body}
</textarea>
        </label>
        <input type="hidden" name="action" value="{$action}" />
        <input type="hidden" name="post_id" value="{$post_id}" />
        <input type="hidden" name="comment_id" value="{$comments[mysec]
.comment_id}" />
        <br /><br />
        <input type="submit" name="submit" value="Post" />
    </form>
{/section}

    
    
==================