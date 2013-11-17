chapter: Practical PHP
==================
Example: Displaying a number in binary format
<?php
printf("The computer stores the number 42 internally as %b.",42);
?>

    
    
====================================
Example: printf puts the numbers into the string
<?php
printf("The computer stores the numbers 42, and 256 internally as %b and %b.",
       42,256);
?>

    
    
====================================
Example: Displaying the same number in different formats
<?php
$value=42;
printf("%d<br />",$value);
printf("%b<br />",$value);
printf("%c<br />",$value);
printf("%f<br />",$value);
printf("%o<br />",$value);
printf("%s<br />",$value);
printf("%x<br />",$value);
printf("%X<br />",$value);
?>

    
    
====================================

42
101010
*
42.000000
52
42
2a
2A

    
    
====================================
Example: Using left zero padding
<?php
printf("Zero padding can help alignment %05d.", 42);
?>

    
    
====================================
Example: Using left space padding
<?php
printf("Space padding can be tricky in HTML % 5d.", 42);
?>

    
    
====================================
Example: Adding the <pre> and </pre> tags so the spaces display
<?php
printf("<pre>Space padding can be tricky in HTML % 5d.</pre
>", 42);
?>

    
    
====================================
Example: Left padding using the default of spaces
<?php
printf("<pre>Space padding can be tricky in HTML %5d.
</pre>", 42);
?>

    
    
====================================
Example: Right padding with spaces
<?php
printf("<pre> Space padding can be tricky in HTML %-5d.</pre>", 42);
?>

    
    
====================================

%.number_of_decimals_to_displayf

    
    
====================================
Example: Displaying a real number in money format
<?php
printf("Please pay $%.2f. ", 42.4242);
?>

    
    
====================================

Please pay $42.00.

    
    
====================================
Example: Using sprintf with a variable
<?php
$total = sprintf("Please pay $%.2f. ", 42.4242 );
echo $total;
?>

    
    
====================================
Example: Calculating the length of a string
<?php
$password="scr1";

if (strlen($password) <= 5){

    echo("Passwords must be at least 5 characters long.");
}
else {
    echo ("Password accepted.");
}
?>

    
    
====================================
Example: Using the word case functions
<?php
$username="John Doe";
echo("$username in uppercase is ".strtoupper($username).".<br />");
echo("$username in lowercase is ".strtolower($username).".<br />");
echo("$username in first letter uppercase is ".ucwords($username).".<br />");
?>

    
    
====================================

John Doe in uppercase is JOHN DOE.
John Doe in lowercase is john doe.
John Doe in first letter uppercase is John Doe.

    
    
====================================
Example: Detecting whether a string is contained in another string
<?php
$password="secretpassword1";

if (strstr($password,"password")){
    echo('Passwords cannot contain the word "password".');
}
else {
    echo ("Password accepted.");
}
?>

    
    
====================================

Passwords cannot contain the word "password".

    
    
====================================
Example: Using several functions together to extract a portion of a string
<?php
$test_string="testing testing Username:Michele Davis";
$position=strpos($test_string,"Username:");

//Add on the length of the Username:
$start=$position+strlen("Username:");

echo "$test_string<br />";
echo "$position<br />";
echo substr($test_string,$start);
?>

    
    
====================================

echo "$position<br />";

    
    
====================================
Example: A simple echo of the timestamp
<?php
$timestamp= time();
echo $timestamp;
?>

    
    
====================================
Example: Making the date and time appear like we expect
<?php
$timestamp= time();
echo date("m/d/y g:i:sa",$timestamp);
?>

    
    
====================================
Example: Adding two days to the date
<?php
$timestamp= time();
echo date("m/d/y G.i:s",$timestamp);
$seconds=2*24*60*60;
$timestamp+=$seconds;
echo "<br />new dates
 is:";
echo date("m/d/y G.i:s",$timestamp);
?>

    
    
====================================

12/13/05 16.28:32
new dates is:12/15/05 16.28:32

    
    
====================================
Example: Validating two dates
<?php
echo("Validating: 4/31/2005<br />");
if (checkdate(4,31,2005)) {
    echo('Date accepted.');
}
else {
    echo ('Invalid date.');
}
echo("<br />");
echo("Validating: 5/31/2005<br />");
if (checkdate(5,31,2005)) {
    echo('Date accepted.');
}
else {
    echo ('Invalid date.');
}
?>

    
    
====================================
Example: Creating a timestamp from the components of a date
<?php
echo("Validating: 5/31/2005<br />");
if (checkdate(5,31,2005)) {
    echo('Date accepted: ');
    $new_date=mktime(18,05,35,5,31,2005);
    echo date("r",$new_date);
}
else {
    echo ('Invalid date.');
}
?>

    
    
====================================
Example: The file_exists.php script checks to see whether the file is there
<?php
$file_name="file_exists.php";

if(file_exists($file_name)) {
    echo ("$file_name does exist.");
}
else {
    echo ("$file_name does not exist.");
}
?>

    
    
====================================

The file exists.php does exist.

    
    
====================================

$file_name = $path_to_file . $file_name_only;

    
    
====================================
Example: Checking the permissions of a file
<?php
$file_name="permissions.php";

if(is_readable($file_name)) {
    echo ("The file $file_name is readable.<br />");
}
else {
    echo ("The file $file_name is not readable.<br />");
}
if(is_writeable($file_name)) {
    echo ("The file $file_name is writeable.<br />");
}
else {
    echo ("The file $file_name is not writeable.<br />");
}
//Only works on Windows with PHP 5.0.0 or later
if(is_executable($file_name)) {
    echo ("The file $file_name is executable.<br />");
}
else {
    echo ("The file $file_name is not executable.<br />");
}
?>

    
    
====================================
Example: Using file_exists, touch, and unlink together
<?php
$file_name="test.txt";

if(file_exists($file_name)) {
    echo ("$file_name does exist.<br />");
}
else {
    echo ("The file $file_name does not exist.<br />");
    touch($file_name);
}
if(file_exists($file_name)) {
    echo ("The file $file_name does exist.<br />");
    unlink($file_name);
}
else {
    echo ("The file $file_name does not exist.<br />");
}
if(file_exists($file_name)) {
    echo ("The file $file_name does exist.<br />");
}
else {
    echo ("The file $file_name does not exist.<br />");
}
?>

    
    
====================================
Example: Renaming a file
<?php
$file_name="test.txt";
touch($file_name); //since it was deleted in the last example

$new_file_name="production.txt";
$status=rename($file_name,$new_file_name);
if ($status) {
    echo ("Renamed file.");
}
?>

    
    
====================================

Renamed file.

    
    
====================================
Example: Prompting to upload a file
<html>
<head></head>
<body>
<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']))?>"
method="post" enctype="multipart/form-data">
    <br /><br />
    Choose a file to upload:<br />
    <input type="file" name="upload_file">
    <br />
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>

    
    
====================================

$_FILES['upload_file']['name']

    
    
====================================
Example: Checking for the existence of an uploaded file
<?php

if (!is_uploaded_file($_FILES['upload_file']['tmp_name'])) {
    $error = "You must upload a file!";
}
else {
    //Proceed to process the file.
}

?>

    
    
====================================
Example: Checking the file size
<?php
$maxsize=28480;
if ($_FILES['upload_file']['size'] > $maxfilesize) {
    $error = "Error, file must be less than $maxsize bytes.";
    unlink($_FILES['upload_file']['tmp_name']);
}
else {
    //Proceed to process the file.
}
?>

    
    
====================================
Example: Checking the file type
<?php

if($_FILES['upload_file']['type'] != "image/gif" AND
$_FILES['upload_file']['type'] != "image/pjpeg" AND
$_FILES['upload_file']['type'] !="image/jpeg") {
    $error = "You may only upload .gif or .jpeg files";
    unlink($_FILES['upload_file']['tmp_name']);
}

else {
     //the file is the correct format
}

?>

    
    
====================================

move_uploaded_file($_FILES['upload_file']['tmp_name'],
"uploads/".$_FILES
                   ['upload_file']['name']);

    
    
====================================
Example: Processing an uploaded file
<?php
$maxsize=28480; //set the max upload size in bytes
if (!$HTTP_POST_VARS['submit']) {
    //print_r($_FILES);
    $error=" ";
   //this will cause the rest of the processing to be skipped
   //and the upload form displays
}
if (!is_uploaded_file($_FILES['upload_file']['tmp_name']) AND
!isset($error)) {
    $error = "<b>You must upload a file!</b><br /><br />";
    unlink($_FILES['upload_file']['tmp_name']);
}
if ($_FILES['upload_file']['size'] > $maxsize AND !isset($error)) {
    $error = "<b>Error, file must be less than $maxsize bytes.</b><br /><br />";
    unlink($_FILES['upload_file']['tmp_name']);
}
if($_FILES['upload_file']['type'] != "image/gif" AND
$_FILES['upload_file']['type'] != "image/pjpeg" AND
$_FILES['upload_file']['type'] !="image/jpeg" AND !isset($error)) {
    $error = "<b>You may only upload .gif or .jpeg files.</b><br /><br />";
    unlink($_FILES['upload_file']['tmp_name']);
}

if (!isset($error)) {
    move_uploaded_file($_FILES['upload_file']['tmp_name'],
                       "uploads/".$_FILES['upload_file']['name']);
    print "Thank you for your upload.";
    exit;
}
else
{
    echo ("$error");
}
?>

<html>
<head></head>
<body>
<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']))?>"
method="post" enctype="multipart/form-data">
    Choose a file to upload:<br />
    <input type="file" name="upload_file" size="80">
    <br />
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

    
    
====================================
Example: Executing df and displaying the results
<?phpexec(escapeshellcmd("df"),$output_lines,$return_value);echo ("Command returned a value of $return_value.\n");echo "<pre>";foreach ($output_lines as $output) {    echo "$output\n";}echo "</pre>";?>

    
    
==================