chapter: Working with Forms
==================
Example: A simple form example
<html>
<head>
    <title>Building a Form</title>
</head>
<body>
<form action="<?php echo(htmlentities($_SERVER['PHP_SELF'])); ?>" method="GET">
    <label>
        Search: <input type="text" name="search" />
    </label>
    <input type="submit" value="Go!" />
</form>
</body>
</html>

    
    
====================================
Example: Modifying our simple search to process the results
<html>
<head>
    <title>Building a Form</title>
</head>
<body>
<?php
$search = htmlentities($_GET["search"]);
$self = htmlentities($_SERVER['PHP_SELF']);
if ($search === '' ){
    echo ('
    <form action="'.$self.'" method="GET">
        <label>Search: <input type="text" name="search" /></label>
        <input type="submit" value="Go!" />
    </form>');
}
else {
    echo "The search string is: <strong>$search</string>";
}
?>
</body>
</html>

    
    
====================================

<html>
<head>
    <title>Building a Form</title>
</head>
<body>
<form action="/oreilly/ch10/simple.php" method="GET" />
     <label> Search: <input type="text" name="search" id="search">
    </label>
    <input type="submit" value="Go!" />
</form>

</body>
</html>

    
    
====================================
Example: Form default values
<html>
<head>
    <title>Form Default Values</title>
</head>
<body>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="GET" />
        <label>Min Price <input type="text" name="min_price" value="0" /></
label><br />
        <label>Max Price <input type="text" name="max_price" value="1000" /></label>
        <br />
        <input type="submit" value="Go!" />
    </form>
</body>
</html>

    
    
====================================

<input type="text" name="name" size="display size"
maxlength="max characters allowed" />

    
    
====================================

<form>
    <input type="text" name="search" size="20" maxlength="30" />
</form>

    
    
====================================

<textarea name="name" cols="# of cols" rows="# of rows"></textarea>

    
    
====================================

<form>
    <label>Suggestion: <textarea name="suggestions" cols="40" rows="5"></textarea>
    </label>
    <input type="submit" value="Go!" />
</form>

    
    
====================================

<input type="checkbox" name="name" value="checkbox value" />

    
    
====================================

<form>
    <fieldset>
        <label>Italian <input type="checkbox" name="food[]" value="Italian" />
</label>
        <label>Mexican <input type="checkbox" name="food[]" value="Mexican" />
</label>
        <label>Chinese <input type="checkbox" name="food[]" value="Chinese"
        checked="checked" /></label>
    </fieldset>
    <input type="submit" value="Go!" />
</form>

    
    
====================================

<input type="radio" name="name" value="radio button value" />

    
    
====================================

<form>
    <fieldset>
        <label>Italian <input type="radio" name="food" value="Italian" /></label>
        <label>Mexican <input type="radio" name="food" value="Mexican" /></label>
        <label>Chinese <input type="radio" name="food" value="Chinese"
        checked="checked" /></label>
    </fieldset>
    <input type="submit" value="Go!" />
</form>

    
    
====================================

<input type="hidden" name="name" value="hidden value" />

    
    
====================================

<form>
    <input type="hidden" name="submitted" value="true" />
</form>

    
    
====================================

<select name="name"> <option>Label of Option</option> </select>

    
    
====================================
Example: Multiple book types
<form>
    <select name="media" multiple="multiple">
        <option></option>
        <option value=hard_cover>Hard Cover</option>
        <option value=soft_cover>Soft Cover</option>
        <option value=reference>Reference</option>
        <option value=audio_book>Audio Books</option>
    </select>
</form>

    
    
====================================
Example: A form with checkboxes using the same name to store multiple values
<html>
<head>
    <title>Using Default Checkbox Values</title>
</head>
<body>
<?php
$food = $_GET["food"];
if (!empty($food)){
    echo "The foods selected are: <strong>";
    foreach($food as $foodstuff){
        echo '<br />'.htmlentities($foodstuff);
    }
    echo "</strong>.";
}
else {
    echo ('
    <form action="'. htmlentities($_SERVER["PHP_SELF"]).'" method="GET">
        <fieldset>
            <label>
                Italian
                <input type="checkbox" name="food[]" value="Italian" />
            </label>
            <label>
                Mexican
                <input type="checkbox" name="food[]" value="Mexican" />
            </label>
            <label>
                Chinese
                <input type="checkbox" name="food[]" value="Chinese"
checked="checked" />
            </label>
        </fieldset>
        <input type="submit" value="Go!" />
    </form> ');
    }
?>
</body>
</html>

    
    
====================================

<html>
<head>
    <title>Using Default Checkbox Values</title>
</head>
<body>
<?php
$food = $_GET[food];
$self = htmlentities($_SERVER['PHP_SELF']);
if (!empty($food)) {
    echo "The foods selected are:<br />";
    foreach($food as $foodstuf)
    {
        echo "<strong>".htmlentities($foodstuf)."</strong><br />";
    }
}
else
{
    echo ("<form action=\"$self\" ");
    echo ('method="get">
    <fieldset>
        <label>Italian <input type="checkbox" name="food[]" value="Italian" />
</label>
        <label>Mexican <input type="checkbox" name="food[]" value="Mexican" />
</label>
        <label>Chinese <input type="checkbox" name="food[]" value="Chinese"
        checked="checked" /></label>
    </fieldset>
    <input type="submit" value="Go!" >');
}
?>
</body>
</html>

    
    
====================================
Example: Checking input from a radio button or a single select
<?php
$options = array('option 1', 'option 2', 'option 3');

// Coming from a radio button or single select statement
if (in_array($_GET['input'], $options)) {
    echo "Valid";
} else
{
    echo "Not Valid";
} 
?>

    
    
====================================
Example: Checking input from a checkbox or a multiple select
<?php
$options = array('option 1', 'option 2', 'option 3');

//Coming from a checkbox or a multiple select statement
$valid = true;
if (is_array($_GET['input'])) {
    $valid = true;
    foreach($_GET['input'] as $input) {
        if (!in_array($input, $options)) {
            $valid = false;
        }
    }
    if ($valid) {
        //process input
    }
}
?>

    
    
====================================
Example: PHP feet-to-meters converter
<head>
    <title>Feet to meters conversion</title>
</head>
<body>
<?php
//Check to see if the form has been submitted
$feet = htmlentities($_GET["feet"]);
if ($_GET[feet] != NULL){
    echo "<strong>$feet</strong> feet converts to <strong>";
    echo $feet * 0.3048;
    echo "</strong> meters.<br />";
}
?>
<form action="<?php echo(htmlentities($_SERVER['PHP_SELF'])); ?>" method="GET">
    <label>Feet:
        <input type="text" name="feet" value="<?php echo $feet; ?>" />
    </label>
    <input type="submit" value="Convert!" />
</form>
</body>
</html>

    
    
====================================
Example: Converting between time zones based on user input
<html>
<head>
<title>Time Zone Converter</title>
</head>
<body>
<?php
// An array holds the standard time zone strings
$time_zones = array("Asia/Hong_Kong",
                    "Africa/Cairo",
                    "Europe/Paris",
                    "Europe/Madrid",
                    "Europe/London",
                    "Asia/Tokyo",
                    "America/New_York",
                    "America/Los_Angeles",
                    "America/Chicago");
// Check to see if the form has been submitted
if ($_GET["start_time"] != NULL){
    $start_time_input = htmlentities($_GET["start_time"]);
    $start_tz = $_GET["start_tz"];
    $end_tz = $_GET["end_tz"];
    putenv("TZ=$start_tz");
    $start_time = strtotime($start_time_input);
    echo "<p><strong>";
    echo date("h:i:sA",$start_time)."\n";
    echo "</strong>";
    putenv("TZ=$end_tz");

    echo "in $start_tz becomes ";
    echo "<strong> ";
    echo date("h:i:sA",$start_time)."\n";
    echo "</strong>";
    echo " in $end_tz.</p><hr />";

}
?>
<form action="<?php echo(htmlentities($_SERVER['PHP_SELF'])); ?>" method="GET">
    <label>
        Your Time:
        <input type="text" name="start_time" value="<?php echo $start_time_input; ?>" />
    </label> in
    <select name="start_tz">
    <?php
    foreach ($time_zones as $tz) {
        echo '<option';
        if (strcmp($tz, $start_tz) == 0){
            echo 'selected="selected"';
        }
        echo ">$tz</option>";
    }
    ?>
    </select>
    <p>Convert to:
    <select name="end_tz">
    <?php
    foreach ($time_zones as $tz) {
        echo '<option';
        if (strcmp($tz, $end_tz) == 0){
            echo ' selected="selected"';
        }
    echo ">$tz</option>";
}
?>
</select></p>
    <input type="submit" value="Convert!" />
</form>
</body>
</html>

    
    
====================================
Example: Combining form processing and database querying
<?php
function query_db($qstring) {
    include('db_login.php');  //connection details
    require_once('DB.php');  //PEAR DB
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");

    if (DB::isError($connection)){  //check for connect errors
        die ("Could not connect to the database: <br />". DB::errorMessage($connection));
    }
    if (get_magic_quotes_gpc()) {  //guard against SQL injection
        $qstring = stripslashes($qstring);
    }
    $qstring = mysql_real_escape_string($qstring);
    $query = "SELECT title, pages, author_id, author FROM books NATURAL JOIN authors
               WHERE books.title LIKE '%$qstring%'";  //build the query
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
    }
    echo ('<table border="1">');
    echo "<tr><th>Title</th><th>Author</th><th>Pages</th></tr>";
    while ($result_row = $result->fetchRow()) {
        echo "<tr><td>";
        echo $result_row[1] . '</td><td>';
        echo $result_row[3] . '</td><td>';
        echo $result_row[2] . '</td></tr>';
    }
    echo ("</table>");
    $connection->disconnect();
}
?>
<html>
<head>
    <title>Building a Form</title>
</head>
<body>
<?php
$search = htmlentities($_GET["search"]);
$self = htmlentities($_SERVER['PHP_SELF']);
if ($search != NULL){
    echo "The search string is: <strong>$search</strong>.";
    query_db($search);
}
else {
    echo ('
    <form action="'.$self.'" method="get">
        <label>Search:
            <input type="text" name="search"/>
        </label>
        <input type="submit" value="Go!" />
    </form>
    ');
}

?>
</body>
</html>

    
    
====================================

<?php
echo $_SERVER["DOCUMENT_ROOT"];
?>

    
    
====================================
Example: The myapp/smarty.php file to create
<?php
// Use the absolute path for Smarty.class.php
$base_path= dirname(__FILE__);
require($base_path.'/Smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = $base_path.'/myapp/smarty/templates';
$smarty->compile_dir = $base_path.'/myapp/smarty/templates_c';
$smarty->cache_dir = $base_path.'/myapp/smarty/cache';
$smarty->config_dir = $base_path.'/myapp/smarty/config';
?>

    
    
====================================

<?php
require_once("smarty.php");
$smarty->assign('test', '123');
$smarty->display('index.tpl');
?>

    
    
====================================
Example: The sample index.tpl template to create
<html>
<head>
    <title>Smarty</title>
</head>
<body>
It's as easy as {$test}.
</body>
</html>

    
    
====================================
Example: The myapp/search.php file uses the template to display the table
<?php
function query_db($qstring){
    require_once("smarty.php");
    require_once("../db_login.php");
    require_once("DB.php");
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/
$db_database");
    if (DB::isError($connection)){
        die("Could not connect to the database: <br />". DB::errorMessage
($connection));
    }
    $query = "SELECT * FROM books
        NATURAL JOIN authors
               WHERE books.title like '%$qstring%'";
    $result = $connection->query($query);
    if (DB::isError($result)){
        die ("Could not query the database: <br>". $query. " ".DB::errorMessage
($result));
    }
    while ($result_row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
        $test[] = $result_row;
    }
    $connection->disconnect(  );
    $smarty->assign('users', $test);
    $smarty->display('table.tpl');
}
?>
<html>
<head>
    <title>Building a Form</title>
</head>
<body>
<?php
$search = $_GET["search"];
$self = htmlentities($_SERVER['PHP_SELF']);
if ($search != NULL){
    echo "The search string is: <strong>$search</strong>.";
    query_db($search);
}
else {
    echo '
    <form action="'.$self.'" method="GET">
         <label>
             Search:
             <input type="text" name="search" id="search" />
         </label>
         <input type="submit" value="Go!">
    </form>';
}
?>
</body>
</html>

    
    
====================================
Example: The new table template
<table border=1>
    <tr><th>Title</th><th>Author</th><th>Pages</th></tr>
    {section name=mysec loop=$users}
        {strip}
        <tr>
            <td>{$users[mysec].title}</td>
            <td>{$users[mysec].author}</td>
            <td>{$users[mysec].pages}</td>
        </tr>
        {/strip}
    {/section}
</table>

    
    
====================================

{$users[mysec].title

    
    
==================