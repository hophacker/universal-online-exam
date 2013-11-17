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
     $connection->disconnect();
     // Display the page footer
     $smarty->display('footer.tpl');
 }
?>
