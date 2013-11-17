chapter: PHP Decision-Making
==================

$account_balance=$credits-$debits;

    
    
====================================
Example: Sum of values
<?php
$Margaritaville = 3; // Three margaritas
$Sun_Tan_Application = 2; // Two applications of sun tan
$Fun_in_the_Sun = $Margaritaville + $Sun_Tan_Application;
echo $Fun_in_the_Sun;
?>

    
    
====================================

5

    
    
====================================
Example: Casting a variable
$test=1234;
$test_string = (string)$test;

    
    
====================================
Example: Lefthand expressions
3 = $locations; // bad - a value cannot be assigned to the literal 3
$a + $b = $c; //bad - the expression on the left isn't one variable
$c = $a + $b; //OK
$stores = "Becker"." "."Furniture"; // OK

    
    
====================================
Example: Order of precedence
2 + 4 - 5 == 1;
4 - 5 + 2 == 1;

4 * 5 / 2 == 10;
5 / 2 * 4 == 10;

2 + 4 - 5 == 1;
4 - 5 + 2 == 1;

    
    
====================================
Example: Changing the default precedence using parentheses
echo 2 * 3 + 4 + 1;
echo 2 * (3 + 4 + 1);

    
    
====================================

11
16

    
    
====================================

'1' != 'A'    // true
'1' != '1'    // false

    
    
====================================

if (conditional expression){
    block of code;
}

    
    
====================================

if ($username == "Admin") {
    echo ('Welcome to the admin page.');
}

    
    
====================================
Example: else and if statements
if ($username == "Admin"){
    echo ('Welcome to the admin page.');
}
else {
    echo ('Welcome to the user page.');
}

    
    
====================================
Example: Checking multiple conditions
if ($username == "Admin"){
    echo ('Welcome to the admin page.');
}
elseif ($username == "Guest"){
    echo ('Please take a look around.');
}
else {
    echo ("Welcome back, $username.");
}

    
    
====================================

{expression} ? return_when_expression_true : return_when_expression_false;

    
    
====================================
Example: Using the ? operator to create a message
<?php
$logged_in = TRUE;
$user = "Admin";
$banner = ($logged_in==TRUE)?"Welcome back, $user!":"Please login.";

echo "$banner";
?>

    
    
====================================

Welcome back, Admin!

    
    
====================================
Example: Using if to test for multiple values
if ($action == "ADD") {
    echo "Perform actions for adding.";
    echo "As many statements as you like can be in each block.";
}
elseif ($action == "MODIFY") {
    echo "Perform actions for modifying.";
}
elseif ($action == "DELETE") {
    echo "Perform actions for deleting.";
}

    
    
====================================
Example: Using switch to test for multiple values
switch ($action) {
    case "ADD":
        echo "Perform actions for adding.";
        echo "As many statements as you like can be in each block.";
        break;
    case "MODIFY":
        echo "Perform actions for modifying.";
        break;
    case "DELETE":
        echo "Perform actions for deleting.";
        break;
}

    
    
====================================
Example: What happens when there are no break keywords
$action = "ASSEMBLE ORDER";
switch ($action) {
    case "ASSEMBLE ORDER":
        echo "Perform actions for order assembly.<br />";
    case "PACKAGE":
        echo "Perform actions for packing.<br />";
    case "SHIP":
        echo "Perform actions for shipping.<br />";
    }

    
    
====================================

Perform actions for order assembly.
Perform actions for packing.
Perform actions for shipping.

    
    
====================================

Perform actions for packing.
Perform actions for shipping.

    
    
====================================
Example: Using the DEFAULT: statement to generate an error
switch ($action) {
    case "ADD":
        echo "Perform actions for adding.";
        break;

    case "MODIFY":
        echo "Perform actions for modifying.";
        break;
    case "DELETE":
        echo "Perform actions for deleting.";
        break;
    default:
        echo "Error: Action must be either ADD, MODIFY, or DELETE.";
}

    
    
====================================
Example: Using endswitch to end the switch definition
switch ($action):
    case "ADD":
       echo "Perform actions for adding.";
       break;
    case "MODIFY":
       echo "Perform actions for modifying.";
       break;
    case "DELETE":
       echo "Perform actions for deleting.";
       break;
    default:
       echo "Error: Action must be either ADD, MODIFY, or DELETE.";
endswitch;

    
    
====================================

while (expression)
{
  code to  execute;
}

    
    
====================================
Example: A sample while loop that counts to 10
<?php
$num = 1;

while ($num <= 10){
    print "Number is $num<br />";
    $num++;
}

print 'Done.';
?>

    
    
====================================

Number is 1
Number is 2
Number is 3
Number is 4
Number is 5
Number is 6
Number is 7
Number is 8
Number is 9
Number is 10
Done.

    
    
====================================

do {
  code to execute;
} while (expression);

    
    
====================================
Example: Counting to 10 with do ... while
<?php

$num = 1;

do {
    echo "Number  is ".$num."<br />";
    $num++;
} while ($num <= 10);

echo "Done.";

?>

    
    
====================================

<?php

$num = 11;

do {
    echo $num;
    $num++;
} while ($num <= 10);

?>

    
    
====================================

11

    
    
====================================

for (initialization expression; condition expression; modification expression){
  code that is executed;
}

    
    
====================================

<?php
for ($num = 1; $num <= 10; $num++) {
    print "Number is $num<br />\n";
}
?>

    
    
====================================

Number is 1
Number is 2
Number is 3
Number is 4
Number is 5
Number is 6
Number is 7
Number is 8
Number is 9
Number is 10

    
    
====================================
Example: Using break to avoid division by zero
<?php

$counter = −3;

for (; $counter < 10; $counter++){
    // Check for division by zero
    if ($counter == 0){
        echo "Stopping to avoid division by zero.";
        break;
    }

    echo "100/$counter<br />";
}

?>

    
    
====================================

100/-3
100/-2
100/-1
Stopping to avoid division by zero.

    
    
====================================
Example: Using continue instead of break
<?php

$counter=-3;

for (;$counter<10;$counter++){
    //check for division by zero
    if ($counter==0){
        echo "Skipping to avoid division by zero.<br>";
        continue;
    }

    echo "100/$counter ",100/$counter,"<br />";
}

?>

    
    
====================================

100/−3 −33.3333333333
100/−2 −50
100/−1 −100
Skipping to avoid division by zero.
100/1 100
100/2 50
100/3 33.3333333333
100/4 25
100/5 20
100/6 16.6666666667
100/7 14.2857142857
100/8 12.5
100/9 11.1111111111

    
    
==================