
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
$action= $_GET['action'];
if ($action != "add"){
	$post_id=$_POST[post_id];
	$title= $_POST['title'];
	$body= $_POST['body'];
	$category_id= $_POST['category_id'];
	$user_id=$_SESSION["user_id"];
}
//connected to database
$connection = DB::connect( "mysql://$db_username:$db_password@$db_host/$db_database" );
if (!$connection){
	die ("Could not connect to the database: <br>". DB::errorMessage(  ));
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


