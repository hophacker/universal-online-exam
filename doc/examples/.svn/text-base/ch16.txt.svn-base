chapter: Validation and Error Handling
==================
Example: Building a form that validates its fields before submission
<html>
<head>
   <script language="JavaScript1.2" SRC="source.js"></script>
   <title>Sample Form</title>
</head>

<script language="JavaScript1.2">
    function check_valid(form) {
    var error = "";
    error += verify_username(form.username.value);
    error += verify_password(form.password.value);
    error += verify_phone(form.phone.value);
    error += verify_email(form.email.value);
    if (error != "") {
       alert(error);
       return false;
    }
return true;
}
</script>

<body bgcolor="#FFFFFF">
    <form action="process.php" method="post"
onSubmit="return check_valid(this)" id="test1" name="test1">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td width="30%" ALIGN="right">Username</td>
            <td width="70%">: <input type="text" name="username" /></td>
        </tr>

        <tr>
            <td align="right">Password</TD>
            <td>: <input type="password" NAME="password" /></td>
        </tr>
        <tr>
            <td ALIGN="right">Phone</td>
            <td>: <INPUT TYPE="phone" NAME="phone" /></td>
        </tr>
        <tr>
            <td align="right">Email</td>
            <td>: <input type="email" NAME="email" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="SUBMIT" value="Submit" /></td>
        </tr>
    </table>
    </form>
</body>
</html>

    
    
====================================
Example: The file source.js contains functions to check the various fields
// Verify username - 6-10 chars, uc, lc, and underscore only.
function verify_username (strng) {
var error = "";
if (strng == "") {
    error = "You didn't enter a username.\n";
}
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    if ((strng.length < 6) || (strng.length > 10)) {
        error = "The username is the wrong length. It must be 6-10 characters.\n";
    }
    else if (illegalChars.test(strng)) {
        error = "The username contains illegal characters.\n";
    }
    return error;
}

// Verify password - between 6-8 chars, uppercase, lowercase, and numeral
function verify_password (strng) {
    var error = "";
    if (strng == "") {
        error = "You didn't enter a password.\n";
    }
    var illegalChars = /[\W_]/; // allow only letters and numbers

    if ((strng.length <= 6) || (strng.length >= 8)) {
        error = "The password is the wrong length. It must be 6-8 characters.\n";
    }
    else if (illegalChars.test(strng)) {
        error = "The password contains illegal characters.\n";
    }
    else if (!((strng.search(/(a-z)+/)) && (strng.search(/(A-Z)+/)) &&
(strng.search(/(0-9)+/)))) {
        error = "The password must contain at least one uppercase letter, one
lowercase letter, and one numeral.\n";
    }
    return error;
}

// Verify email
function verify_email (strng) {
    var error="";
    if (strng == "") {
        error = "You didn't enter an email address.\n";
    }

    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(strng))) {
        error = "Please enter a valid email address.\n";
    }
    else {
        //test email for illegal characters
        var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
        if (strng.match(illegalChars)) {
            error = "The email address contains illegal characters.\n";
        }
    }
    return error;
}

// Verify phone number - strip out delimiters and verify for 10 digits
function verify_phone (strng) {
var error = "";
    if (strng == "") {
       error = "You didn't enter a phone number.\n";
    }
    //strip out acceptable non-numeric characters
    var stripped = strng.replace(/[\(\)\.\-\ ]/g, '');
    if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.";

    }
    if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length. Make sure you
included an area code.\n";
    }
    return error;
}

    
    
====================================

\b[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}\b

    
    
====================================

 [a-zA-Z]{2}

    
    
====================================

 [^a-zA-Z]

    
    
====================================

preg_match (string pattern, string subject [, array groups])

    
    
====================================
Example: Using preg_match to return an array of matches that start with ple
<?php
$subject = "example";
$pattern = '/^ple/';
preg_match($pattern, $subject, $matches);
print_r($matches);
?>

    
    
====================================

Array (  )

    
    
====================================
Example: Displaying an error from PHP and redisplaying the form with submitted values
<html>
<head>
<title>Sample Form</title>

<script type="text/javascript" src="source.js"></script>
<script type="text/javascript">
function check_valid(form) {
    var error = "";
    error += verify_username(form.username.value);
    error += verify_password(form.password.value);
    error += verify_phone(form.phone.value);
    error += verify_email(form.email.value);
    if (error != "") {
        alert(error);
        return false;
    }
    return true;
}
</script>
</head>
<body>
<?php
// Check for form post submit
if ($_POST["submit"]){
    require_once('db_login.php');
    require_once('DB.php');
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/
$db_database");
    if (DB::isError($connection)){
        die ("Could not connect to the database: <br />". DB::errorMessage
($connection));
    }
    // Remember to use htmlentities to prevent cross-site scripting vulnerabilities
    $username = $_POST["username"];
    $username=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes
($username) : $username);
    $password = $_POST["password"];
    $password=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($password) :
$password);
    $email = $_POST["email"];
    $email=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($password) :
$password);
    $phone = $_POST["phone"];
    $phone=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($phone) : $phone);
    $error = "";

    if (is_null($username == "")){
        $error .= "Username must not be null.<br />";
    }
    if ($password == ""){
        $error .= "Password must not be null.<br />";
    }
    if ($email == ""){
        $error .= "Email must not be null.<br />";
    }
    if ($phone == ""){
        $error .= "Phone must not be null.<br />";
    }

    // Query the posts with categories and user information
    $query = "SELECT * FROM users WHERE username='$username'";
    // Execute the database query
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />".$query." ".DB::errorMessage
($result));
    }
    $user_count = $result->numRows(  );
    if ($user_count > 0) {
        $error .= "Error: Username $username is taken already. Please select another.
<br />";
    }
    if ($error){
        echo $error;
    } else {
        echo "Username is available.";
        exit;
    }
}
?>
<!--This script will process the results as well as display the form-->
<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="POST"
onsubmit="return check_valid(this);" id="test1" name="test1">
    <table>
        <tr>
            <td width="30%" align="right">Username:</td>
            <td><input type="text" name="username"
value="<?php echo ($username); ?>" />
</td>
        </tr>
        <tr>
            <td align="right">Password:</td>
            <td><input type="password" name="password"
value="<?php echo($password); ?>" />
</td>
        </tr>
        <tr>
            <td align="right">Phone:</td>
            <td><input type="phone" name="phone" value="<?php echo($phone);
?>" /></td>
        </tr>
        <tr>
            <td align="right">Email:</td>
            <td><input type="email" name="email" value="<?php echo($email);
?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit" /></td>
         </tr>
    </table>
</form>
</body>
</html>

    
    
====================================

display_errors = On; //causes errors to print to the screen

    
    
====================================

error_reporting(bitwise_combination_of_levels);

    
    
====================================

error_reporting(E_ERROR | E_WARNING | E_PARSE);

    
    
====================================

error_log = /tmp/debug.log

    
    
==================