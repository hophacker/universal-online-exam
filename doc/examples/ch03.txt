chapter: Exploring PHP
==================
Example: All you need to start with PHP is a simple HTML document
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <p>I sure wish I had something to say.</p>
    </body>
</html>

    
    
====================================
Example: A wrong way to add some PHP code to the HTML file
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        echo "<p>Now I have something to say.</p>";
    </body>
</html>

    
    
====================================
Example: Correctly calling print in hello.php
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <?php
        print "Hello world!<br />";
        print "Goodbye.<br />";
        print "Over and out.";
        ?>
    </body>
</html>

    
    
====================================
Example: The HTML markup produced by the PHP code in 
<html>
<head>
        <title>Hello World</title>
    </head>
    <body>
        Hello world!<br />Goodbye.<br />Over and out.
    </body>
</html>

    
    
====================================
Example: Using comments to make your code easier to read
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <?php

        // A single line comment could say that we are going to
        // print hello world.

        /* This is how to do a
           multiline comment and could be used to comment out a block
           of code */

        echo "Hello world!<br />";
        echo "Goodbye.<br />";

        ?>
    </body>
</html>

    
    
====================================

$variable_name = value;

    
    
====================================

<?php
$age = 30;
?>

    
    
====================================
Example: Reassigning a variable
<?php
$age = 30;
$age = 31;
echo $age;
?>

    
    
====================================

31

    
    
====================================
Example: The default handling of variable scope
<?php

// Define a function
function birthday(  ){
    // Set age to 1
    $age = 1;
}

// Set age to 30
$age = 30;

// Call the function
birthday(  );

// Display the age
echo $age;

?>

    
    
====================================

30

    
    
====================================
Example: Using a global variable changes the result
<?php

// Define a function
function birthday(  ){
    // Define age as a global variable
    global $age;

    // Add one to the age value
    $age = $age + 1;
}

// Set age to 30
$age = 30;

// Call the function
birthday(  );

// Display the age
echo $age;

?>

    
    
====================================

31

    
    
====================================
Example: A static variable remembering its last value
<?php

// Define the function

function birthday(  ){
    // Define age as a static variable
    static $age = 0;

    // Add one to the age value
    $age = $age + 1;

    // Print the static age variable
    echo "Birthday number $age<br />";
}

// Set age to 30
$age = 30;

// Call the function twice
birthday(  );
birthday(  );

// Display the age
echo "Age: $age<br />";

?>

    
    
====================================

Birthday number 1
Birthday number 2
Age: 30

    
    
====================================
Example: PHP_SELF being used with a file called test.php
<?php
echo htmlentities($_SERVER["PHP_SELF"]);
?>

    
    
====================================

/test.php

    
    
====================================
Example: Working with strings
<?php
$my_string = "Margaritaville - Suntan Oil Application!";
echo "Margaritaville - Suntan Oil Application!";
?>

    
    
====================================
Example: Using a variable in a string definition
<?php
$my_string = "Margaritaville - Suntan Oil Application!";
echo "Time for $my_string";
?>

    
    
====================================
Example: Single quotes used in a string assignment
<?php
$my_string = 'Margaritaville - Suntan Oil Application!';
echo $my_string;
?>

    
    
====================================
Example: Various special characters in string assignments
<?php
$newline = "A newline is \n";
$return = "A carriage return is \r";
$tab = "A tab is \t";
$dollar = "A dollar sign is \$";
$doublequote = "A double-quote is \"";
?>

    
    
====================================
Example: Breaking echo with special characters
// This won't work because of the quotes around specialH2!
echo "<h2 class="specialH2">Margaritaville!</h2>";
?>
specialH2

    
    
====================================

Parse error: parse error, unexpected T_STRING, expecting ','
or ';' in /home/www/html/oreilly/ch3/parse.php on line 3

    
    
====================================
Example: Correct escaping of special characters
<?php
// OK because we used single quotes
echo "<h2 class=\"specialH2\">Margaritaville!</h2>";
echo '<h2 class="specialH2">Margaritaville!</h2>';
?>

    
    
====================================
Example: Using strcasecmp to compare two strings
<?php

$name1 = "Bill";
$name2 = "BILL";

$result = strcasecmp($name1, $name2);

if (!$result){
    echo "They match.";
}

?>

    
    
====================================

They match.

    
    
====================================
Example: Concatenating strings together
<?php
$my_string = "Hello Max. My name is: ";
$newline = "<br />";
echo $my_string . "Paula" . $newline;
echo "Hi, I'm Max. Who are you? " . $my_string . $newline;
echo "Hi, I'm Max. Who are you? " . $my_string . "Paula";
//The last line is the same as echo "Hi, I'm Max. Who are you? $my_string Paula";
?>

    
    
====================================
Example: Combining a string and a number
<?php
$str = "This is an example of ". 3 ." in the middle of a string.";
echo $str;
?>

    
    
====================================

This is an example of 3 in the middle of a string.

    
    
====================================
Example: Using a constant in your program
<?php
define("HELLO", "Hello world! ");
echo HELLO; // outputs "Hello world!"

$constant_name = "HELLO";
echo constant($constant_name);
?>

    
    
====================================

Hello world! Hello world!

    
    
====================================

// define ("HELLO", "Hello world!");

    
    
====================================

HELLO

    
    
====================================
Example: Echoing the line and file predefined constants for a script called predefined_constants.php
<?php
echo "Executing line " . __LINE__ . " of PHP script " . __FILE_  _ . ".";
?>

    
    
====================================

Executing line 2 of PHP script /home/www/html/oreilly/ch3/predefined_constants.php.

    
    
====================================
Example: PHP mathematical function usage
<?php>
$sunny_days=300;
$Margaritaville_sunny_days_ratio=$sunny_days/365;
echo $Margaritaville_sunny_days_ratio;
?>

    
    
====================================

$counter=$counter+1;

    
    
====================================

$counter+=1;

    
    
====================================

$counter++;

    
    
====================================

$counter+=1;

    
    
====================================
Example: Using autoincrement to add to a variable
<?php
$counter=1;
$counter++;
echo $counter
?>

    
    
====================================

2

    
    
====================================
Example: Using the autodecrement operator
<?php
$counter=1;
$counter--;
echo $counter
?>

    
    
====================================

0

    
    
====================================

--$counter;

    
    
====================================

++$counter;

    
    
====================================
Example: Using pre- and postincrement
<?php
$test=1;
echo "Preincrement: ".(++$test);
echo "<BR>";
echo "Value afterwards: ".$test;
echo "<BR>";
$test=1;
echo "Postincrement: ".($test++);
echo "<BR>";
echo "Value afterwards: ".$test;
?>

    
    
====================================

Preincrement: 2
Value afterwards: 2
Postincrement: 1
Value afterwards: 2

    
    
==================