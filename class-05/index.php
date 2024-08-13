<?php
//learn comment
//single comment
#single comment
/*
*multiline
*comment 
*/
// $firstPrice = 10;
// $secondPrice = 20;
// $totalPrice = $firstPrice + $secondPrice;
// echo $totalPrice

$number = 5; // You can change this to any number you want to find the factorial of
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i; // Multiply factorial by the current number
}

echo "The factorial of $number is $factorial.";


$terms = 10; // Number of terms in the Fibonacci series

// Starting values for the Fibonacci series
$first = 0;
$second = 1;

echo "Fibonacci Series: ";

for ($i = 1; $i <= $terms; $i++) {
    echo $first . " "; // Print the current term
    
    // Calculate the next term
    $next = $first + $second;
    
    // Update the previous two terms
    $first = $second;
    $second = $next;
}


?>