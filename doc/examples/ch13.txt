chapter: Modifying MySQL Objects and PHP Data
==================
Example: Creating a table from a PHP page in create_table.php
<?php
include('db_login.php');
require_once( 'DB.php' );
    $connection = DB::connect( "mysql://$db_username:$db_password@$db_host/
$db_database");
if (!$connection)
{
    die ("Could not connect to the database: <br>". DB::errorMessage(  ));
};
$query = 'CREATE TABLE purchases (
                       purchase_id int(11) NOT NULL auto_increment,

                       user_id varchar(10) NOT NULL,
                       title_id int(11) NOT NULL,
                       purchased timestamp NOT NULL,
          PRIMARY KEY (purchase_id))';
$result = $connection->query($query);
if (DB::isError($result))
{
    die ("Could not query the database: <br>". $query. " ".DB::errorMessage($result));
}
echo ("Table created successfully!");
$connection->disconnect(  );
?>

    
    
====================================

Table created successfully!

    
    
====================================
Example: Dropping the purchases table in drop.php
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$query = "DROP TABLE purchases
";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />". $query." ".DB::errorMessage($result));
}
echo "Table dropped successfully!";
$connection->disconnect(  );
?>

    
    
====================================

Table dropped successfully!

    
    
====================================
Example: Using a predefined INSERT statement in insert.php
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$query = "INSERT INTO purchases VALUES (NULL,'mdavis',2,NULL)
";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />". $query." ".DB::errorMessage($result));
}
echo "Inserted successfully!";
$connection->disconnect(  );
?>

    
    
====================================

Inserted successfully!

    
    
====================================
Example: Using embedded links to provide a purchase button in pear_purchase_example.php
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$query = "SELECT * FROM books";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />". $query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>Title</th><th>Pages</th><th>Buy</th></tr>";
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    echo "<tr><td>";
    echo $result_row["title"] . '</td><td>';
    echo $result_row["pages"] . '</td><td>';
    echo '<a href="purchase.php?title_id='.$result_row["title_id"].'">Click
to purchase</a></td></tr>';
}

echo "</table>";
$connection->disconnect(  );
?>

    
    
====================================
Example: The file purchase.php processes the user's action based on the title_id parameter
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/
$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage(
$connection));
}
$title_id = $_GET["title_id"];
if (get_magic_quotes_gpc(  )) {  //guard against SQL injection
     $title_id = stripslashes($title_id);
 }
 $title_id = mysql_real_escape_string($title_id);

 $user_id = 'mdavis';
 $query = "INSERT INTO purchases VALUES (NULL,'$user_id',$title_id,NULL)";
 $result = $connection->query($query);
 if (DB::isError($result)){
     die("Could not query the database: <br />". $query." ".DB::errorMessage(
$result));
 }
?>
<html>
<head>

    <title>Thanks for your purchase!</title>
 <meta http-equiv="refresh" content="4; url=pear_purchase_example.php">
 </head>
 <body>
 Thanks for your purchase!<br />
<?php

   $query = "SELECT * FROM purchases NATURAL JOIN books NATURAL JOIN authors";
   $result = $connection->query($query);
   if (DB::isError($result)){
    die("Could not query the database: <br />". $query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>User</th><th>Title</th><th>Pages</th>";
echo "<th>Author</th><th>Purchased</th></tr>";
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
     echo "<tr><td>";
     echo $result_row["user_id"] . '</td><td>';
     echo $result_row["title"] . '</td><td>';
     echo $result_row["pages"] . '</td><td>';
     echo $result_row["author"] . "</td><td>";
     echo $result_row["purchased"] . "</td></tr>";
}
echo "</table>";

$connection->disconnect(  );
?>
</body>
</html>

    
    
====================================

<meta http-equiv="refresh" content="seconds_before_refreshing; url=
url_to_redirect_to">

    
    
====================================
Example: Using input from a form to add a title
<?php
// Define a function to perform the database insert and display the titles 
function insert_db($title, $pages){
    require_once('db_login.php');
    require_once('DB.php');
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/
$db_database");
    if (DB::isError($connection)){
        die ("Could not connect to the database: <br />". DB::errorMessage(
$connection));
    }

    if (get_magic_quotes_gpc(  )) {  //guard against SQL injection
        $title = stripslashes($title);
        $pages = stripslashes($pages);
    }

    $title = mysql_real_escape_string($title);
    $pages = mysql_real_escape_string($pages);

    // The query includes the form submission values that were passed to the function
    $query = "INSERT INTO books VALUES (NULL,'$title', '$pages')";
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />". $query." ".DB::errorMessage
($result));
    }
    echo "Inserted OK.<br />";
    // Display the table
    $query = "SELECT * FROM books";
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />". $query." ".DB::errorMessage
($result));
    }
    echo '<table border="1">';
    echo "<tr><th>Title</th><th>Pages</th></tr>";
    while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
        echo "<tr><td>";
        echo $result_row["title"] . '</td><td>';
        echo $result_row["pages"] . '</td></tr>';
    }
echo "</table>";
$connection->disconnect(  );
}

?>
<html>
<head>
    <title>Inserting From a Form</title>
</head>
<body>
<?php
// Retrieve the variable from the form submission
$title = htmlentities($_GET["title"]);
$pages = htmlentities($_GET["pages"]);
if (($title != NULL ) && ($pages != NULL)){
    insert_db($title,$pages);
}
else {
    // Display the form
    echo '
    <h1>Enter a new title:</h1>
    <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
        <label> Title: <input type="text" name="title" /> </label>
        <label> Pages: <input type="text" name="pages" /> </label>
    <input type="submit" value="Go!" />
    </form>';
}
?>
</body>
</html>

    
    
====================================

$query = "INSERT INTO 'books' VALUES (NULL,'$title','$pages')";

    
    
====================================

 1,1);drop table users;

    
    
====================================

$query = "INSERT INTO books VALUES (NULL,$title,$pages)";

    
    
====================================

INSERT INTO books VALUES (NULL,1,1);drop table users; ,$pages)";

    
    
====================================

$query = "DELETE FROM books where title_id = '$title_id'";

    
    
====================================

DELETE FROM books where title_id = 1 OR '1'='1'

    
    
====================================
Example: Checking for magic quotes
<?php
if (get_magic_quotes_gpc(  )) {
    echo "Magic quotes are enabled.";
} else {
    echo "Magic quotes are disabled.";
}
    ?>

    
    
====================================

Magic quotes are enabled.

    
    
====================================
Example: Use mysql_real_escape( ) after checking for magic quotes
if (get_magic_quotes_gpc(  )) {  //guard against SQL injection
    $qstring = stripslashes($qstring);
}
$qstring = mysql_real_escape_string($qstring);

    
    
====================================

htmlentities(string_to_clean)

    
    
====================================

print "The title of the book is: " . htmlentities($_POST['title']);

    
    
====================================

<?php
$sample = "A sample is <i>italics</i>";
echo htmlentities($sample);
?>

    
    
====================================

A sample is &lt;i&gt;italics&lt;/i&gt;

    
    
====================================

A sample is <I>italics</I>

    
    
====================================

<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
// Display the table
$query = "SELECT * FROM books";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>Title</th><th>Pages</th></tr>";
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    echo "<tr><td>";
    echo htmlentities($result_row["title"]) . '</td><td>';
    echo htmlentities($result_row["pages"]) . '</td></tr>';
}
echo "</table>";
$connection->disconnect(  );
?>

    
    
====================================
Example: Updating a field
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$query = "UPDATE books SET pages=558 WHERE title_id=2";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
echo "Updated successfully!";
$connection->disconnect(  );
?>

    
    
====================================
Example: Providing a link to delete a purchase in deletion_link.php
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}

$query = "SELECT * FROM purchases NATURAL JOIN books";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>User</th><th>Title</th><th>Purchased</th><th>Remove</th></tr>";
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    echo "<tr><td>";
    echo $result_row["user_id"] . '</td><td>';
    echo $result_row["title"] . '</td><td>';
    echo $result_row["purchased"] . '</td><td>';
    echo '<a href="delete.php?purchase_id='.$result_row["purchase_id"]
.'">Click to remove
from purchases</a></td></tr>';
}
echo '</table>';
$connection->disconnect(  );
?>

    
    
====================================
Example: The delete.php code for performing a delete
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
$purchase_id = $_GET["purchase_id"];
if (get_magic_quotes_gpc(  )) {  //guard against SQL injection
    $qstring = stripslashes($purchase_id);
}
$purchase_id = mysql_real_escape_string($purchase_id);
$query = "DELETE FROM purchases WHERE purchase_id = '$purchase_id'";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
?>
<html>
<head>
    <title>Item deleted!</title>
<meta http-equiv="refresh" content="4"; url=deletion_link.php"> //redirect to
deletion_link.php
</head>
<body>
Item deleted!<br />

<?php
$query = "SELECT * FROM purchases NATURAL JOIN books NATURAL JOIN authors";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>User</th><th>Title</th><th>Pages</th>";
echo "<th>Author</th><th>Purchased</th></tr>";
while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    echo "<tr><td>";
    echo $result_row["user_id"] . '</td><td>';
    echo $result_row["title"] . '</td><td>';
    echo $result_row["pages"] . '</td><td>';
    echo $result_row["author"] . "</td><td>";
    echo $result_row["purchased"] . "</td></tr>";
}
echo "</table>";
$connection->disconnect(  );
?>
</body>
</html>

    
    
====================================

<meta http-equiv="refresh" content="4"; url=deletion_link.php">

    
    
====================================

int mysql_insert_id( [resource link_identifier] )

    
    
====================================

mysql_query($query);
$last_value = mysql_insert_id(  );
echo "The id that was created is: $last_value<br />";

    
    
====================================

int nextId( sequence_name )

    
    
====================================
Example: Using a PEAR DB sequence to link up an author to a title
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}

$connection->nextId('booksSequence');
$connection->nextId('booksSequence');
$connection->nextId('booksSequence');

$title_id = $connection->nextId('booksSequence');
if (PEAR::isError($title_id)) {
    die($title_id->getMessage(  ));
}

$query = "INSERT INTO books VALUES ($title_id,'Python in a Nutshell',600)";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />$query ".DB::errorMessage($result));
}
$query = "INSERT INTO authors VALUES (NULL,$title_id,'Alex Martelli')";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />$query ".DB::errorMessage($result));
}
echo "Inserted successfully!";
$connection->disconnect(  );
?>

    
    
====================================
Example: Displaying the authors in a list
<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection)){
    die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}
// Display the table
$query = "SELECT * FROM books";
$result = $connection->query($query);
if (DB::isError($result)){
    die("Could not query the database: <br />".$query." ".DB::errorMessage($result));
}
echo '<table border="1">';
echo "<tr><th>Title</th><th>Pages</th><th>Authors</th></tr>";

while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
    echo "<tr><td>";
    echo htmlentities($result_row["title"]) . '</td><td>';
    echo htmlentities($result_row["pages"]) . '</td><td>';
    $title_id = mysql_real_escape_string($result_row["title_id"]);
    $author_query = "SELECT * FROM authors WHERE title_id = $title_id";
    $author_result = $connection->query($author_query);
    if (DB::isError($author_result)){
        die("Could not query the database: <br />".$author_query." ".
                DB::errorMessage($author_result));
    }
    $author_count = $author_result->numRows(  );
    if (0 == $author_count) {
        echo 'none';
    }
    $counter = 0;
    while ($author_result_row = $author_result->fetchRow(DB_FETCHMODE_ASSOC)) {
        $counter++;
        echo htmlentities($author_result_row["author"]);
        if ($counter != $author_count) {
            echo ', ';
        }
    }
    echo '</td></tr>';
}
echo '</table>';
$connection->disconnect(  );
?>

    
    
==================