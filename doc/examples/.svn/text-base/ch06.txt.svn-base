chapter: Arrays
==================

<?php
$weekdays[] = 'Monday';
$weekdays[] = 'Tuesday';
?>

    
    
====================================

<?php
$weekdays[0] = 'Monday';
$weekdays[1] = 'Tuesday';
?>

    
    
====================================

<?php
$weekdays[0] = 'Monday';
$weekdays[1] = 'Tuesday';
$weekdays[3] = 'Wednesday';
?>

    
    
====================================
Example: Using the array function to create an array of weekdays
<?php
$weekdays = array('Monday',
                  'Tuesday',
                  'Wednesday',
                  'Thursday',
                  'Friday',
                  'Saturday',
                  'Sunday');
?>

    
    
====================================
Example: Creating an associative array of shapes
<?php
$shapes = array('Soda Can' => 'Cylinder',
                'Note Pad' => 'Rectangle',
                'Apple' => 'Sphere',
                'Orange' => 'Sphere',
                'Phonebook' => 'Rectangle');
?>

    
    
====================================

<?php
$yes = array('this', 'is', 'an array');
echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br />";
$no = 'this is a string';
echo is_array($no) ? 'Array' : 'Not an Array';
?>

    
    
====================================

Array
Not an Array

    
    
====================================
Example: Displaying one value from an array
<?php
$shapes = array('Soda can' => 'Cylinder',
                'Notepad' => 'Rectangle',
                'Apple' => 'Sphere',
                'Orange' => 'Sphere',
                'Phonebook' => 'Rectangle');
print "A notepad is a {$shapes['Notepad']}.";
?>

    
    
====================================

A Notepad is a Rectangle.

    
    
====================================
Example: Displaying the contents of an array using a loop
<?php
$shapes = array('Soda can' => 'Cylinder',
                'Notepad' => 'Rectangle',
                'Apple' => 'Sphere',
                'Orange' => 'Sphere',
                'Phonebook' => 'Rectangle');
foreach ($shapes as $key => $value) {  // every associative array has $key and $value pairs
    print "The $key is a $value.<br />";
}
?>

    
    
====================================

The Soda can is a Cylinder.
The Notepad is a Rectangle.
The Apple is a Sphere.
The Orange is a Sphere.
The Phonebook is a Rectangle.

    
    
====================================

<?php
$weekdays[] = "Thursday";
?>

    
    
====================================

<?php
$shapes["Megaphone"]= "Cone";
?>

    
    
====================================
Example: Counting the elements in an array
<?php
$shapes = array('Soda can' => 'Cylinder',
                'Notepad' => 'Rectangle',
                'Apple' => 'Sphere',
                'Orange' => 'Sphere',
                'Phonebook' => 'Rectangle');
$numElements = count($shapes);
print "The array has $numElements elements.<br />";
?>

    
    
====================================

The array has 5 elements.

    
    
====================================
Example: Using sort to alphabetize
<?php
$shapes = array("rectangle", "cylinder", "sphere");
sort($shapes);
//The foreach loop selects each element from the array and assigns its value to $key
//before executing the code in the block.
foreach ($shapes as $key => $val) {
    echo "shapes[" . $key . "] = " . $val . "<br />";
}
?>

    
    
====================================

shapes[0] = cylinder
shapes[1] = rectangle
shapes[2] = sphere

    
    
====================================

1
10
11
2
20

    
    
====================================
Example: Creating a multidimensional array
<?php
$objects=array('Soda can' =>    array('Shape'    => 'Cylinder',
                                      'Color'    => 'Red',
                                      'Material' => 'Metal'),
               'Notepad' =>    array('Shape'    => 'Rectangle',
                                      'Color'    => 'White',
                                      'Material' => 'Paper'),
               'Apple' =>       array('Shape'    => 'Sphere',
                                      'Color'    => 'Red',
                                      'Material' => 'Fruit'),
               'Orange' =>      array('Shape'    => 'Sphere',
                                      'Color'    => 'Orange',
                                      'Material' => 'Fruit'),
               'Phonebook' =>  array('Shape'    => 'Rectangle',
                                      'Color'    => 'Yellow',
                                      'Material' => 'Paper'));
echo $objects['Soda can']['Shape'];
?>

    
    
====================================

Cylinder

    
    
====================================
Example: Displaying a multidimensional array
<?php
foreach ($objects as $obj_key => $obj)
{
    echo "$obj_key:<br>";
    while (list ($key,$value)=each ($obj))
    {
        echo "$key = $value ";
    }
    echo "<br />";
}
?>

    
    
====================================

var_dump($objects);

    
    
====================================

array(5) { ["Soda can"]=> array(3) { ["Shape"]=> string(8)
"Cylinder" ["Color"]=> string(3) "Red" ["Material"]=> string(5) "Metal" }
["Notepad"]=> array(3) { ["Shape"]=> string(9) "Rectangle" ["Color"]=> string(5)
"White" ["Material"]=> string(5) "Paper" } ["Apple"]=> array(3) { ["Shape"]=>
string(6) "Sphere" ["Color"]=> string(3) "Red" ["Material"]=> string(5) "Fruit" }
["Orange"]=> array(3) { ["Shape"]=> string(6) "Sphere" ["Color"]=> string(6)
"Orange" ["Material"]=> string(5) "Fruit" } ["Phonebook"]=> array(3) {
["Shape"]=> string(9) "Rectangle" ["Color"]=> string(6) "Yellow"
["Material"]=> string(5) "Paper" } }

    
    
====================================
Example: Using extract on an associative array
<?php
$shapes = array('Sodacan' => 'Cylinder',
                'Notepad' => 'Rectangle',
                'Apple' => 'Sphere',
                'Orange' => 'Sphere',
                'Phonebook' => 'Rectangle');

extract($shapes);
// $Sodacan, $Notepad, $Apple, $Orange, and $Phonebook are now set
echo $Apple;
echo "<br />";
echo $Notepad;
?>

    
    
====================================

expand($array,EXTR_PREFIX_ALL,"the prefix");

    
    
====================================
Example: Using extract with the EXTR_PREFIX_ALL directive
<?php
$Apple="Computer";
$shapes=array('SodaCan' => 'Cylinder',
              'NotePad' => 'Rectangle',
              'Apple' => 'Sphere',
              'Orange' => 'Sphere',
              'PhoneBook' => 'Rectangle');

extract($shapes,EXTR_PREFIX_ALL,"shapes");
//$shapes_SodaCan, $shapes_NotePad, $shapes_Apple, $shapes_Orange, and
//$shapes_PhoneBook are now set

echo "Apple is $Apple.<br />";
echo "Shapes_Apple is $shapes_Apple";
echo "<br />";
echo "Shapes_NotePad is $shapes_NotePad";
?>

    
    
====================================

Apple is Computer.
Shapes_Apple is Sphere
Shapes_NotePad is Rectangle

    
    
====================================
Example: Using EXTR_PREFIX_ALL on a numeric array
<?php
$shapes=array( 'Cylinder',
               'Rectangle');
extract($shapes,EXTR_PREFIX_ALL,"shapes");
echo "Shapes_0 is $shapes_0
 <br />";
echo "Shapes_1 is $shapes_1
";
?>

    
    
====================================

Shapes_0 is Cylinder
Shapes_1 is Rectangle

    
    
====================================

<?php
$SodaCan = 'Cylinder';
$NotePad = 'Rectangle';
$Apple = 'Sphere';
$Orange = 'Sphere';
$PhoneBook = 'Rectangle';

$shapes = compact('SodaCan', 'NotePad', 'Apple', 'Orange', 'PhoneBook');
var_dump($shapes);
?>

    
    
==================