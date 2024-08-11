<?php 

//variable
$studentName = "Jahid";
$age = 23;
echo "My name is $studentName, my age is $age <br/>";
$studentName = "Rahim";
echo "My name is $studentName <br/>";

//constant variable

define("NAME", "Shakib");

echo "My Name is " . NAME . "<br/>";

//in php className is no case sensitive
define("PI", 3.1416);
define("pi", 3.1415);

echo PI . "<br/>";
echo pi . "<br/>";

// variable name example best practice
$student_name;
$studentName;

//output of php
$name = "Labib";
$age = 23;

//reserve key
echo $name . "<br/>";

//print is a built in function
print ($age) . "<br/>";

echo 'My name is ' . $name . '.' .'I am ' .$age. 'years old';

echo '<h1 style="color:red">'.$name.'</h1>';
print('<h1 style="color:red">'. $name .'</h1>');

// s=string,d=digit,f=floating
printf('<h1 style="color:red">My name is %s</h1><h2 style="color:green">My age is %d</h2>',$name,$age);

$data = sprintf('<h1 style="color:red">My name is %s</h1><h2 style="color:green">My age is %d</h2>',$name,$age);


echo $data;

//home work swap two variables

$x = 20;
$y = 30;

echo "The output is x = $y, y = $x <br/>";

//another solve

$x = 20;
$y = 30;

echo "Before swap: x = $x, y = $y<br/>";

// Swap the values
$temp = $x;
$x = $y;
$y = $temp;

echo "After swap: x = $x, y = $y<br/>";


?>