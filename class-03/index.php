<?php

// $names = [
//     'Ranim' =>[122,478],
//     1=>'Karim'
// ];
// echo "<pre>";
// print_r($names);
// echo "</pre>";

// if(condition){
//     statement;
// }

// if(condition){
//     statement;
// }else{
//     statement;
// }


// if(condition){
//     statement;
// }else if(condition){
//     statement;
// }else{
//     statement;
// }

// if(condition):

// elseif(condition):

// else:

// endif



// switch(statement){
//     case(condition):
//         statement;
//         break;
//     case(condition):
//         statement;
//         break;
//     default:
// }



// $number1 = 130;
// $number2 = 100;
// $number3 = 120;

// //big number
// if($number1 > $number2 && $number1 > $number3){
//     echo $number1 . "<br/>";
// }else if($number2 > $number1 && $number2 > $number3){
//     echo $number2 . "<br/>";
// }else{
//    echo $number3 . "<br/>";
// }


// // small number
// if($number1 < $number2 && $number1 < $number3){
//     echo $number1 . "<br/>";
// }else if($number2 < $number1 && $number2 < $number3){
//     echo $number2 . "<br/>";
// }else{
//    echo $number3 . "<br/>";
// }
// //middle number
// if($number1 < $number2 && $number1 > $number3){
//     echo $number1 . "<br/>";
// }else if($number2 < $number1 && $number2 > $number3){
//     echo $number2 . "<br/>";
// }else{
//    echo $number3 . "<br/>";
// }


// $name = "Jahid";
// $j_roll = 2024;
// $age = 20;
// $class = 10;

// $k_name = "Karim";
// $k_roll = 2025;
// $k_age = 18;
// $k_class = 8;
//nested if
// if($j_roll == 2024 || $k_roll == 2025){
//     if($class == 10){
//         echo "Student of class 10: <br/> ";
//         echo "Student Name $name. Age = $age <br/>";
//     }
//     if($k_class == 8){
//         echo "Student of class 8: <br/>";
//         echo "Student Name $k_name. Age = $k_age <br/>";
//     }
// }


//leap year

// $year = 2023;

// if($year % 4 == 0){
//     echo $year." is a leap year <br/>";
// }else{
//     echo $year." is not a leap year <br/>";
// }
//switch case



// $number = 59;
// switch($number){
//     case($number >= 80):
//         echo "Your grade is A+ <br/>";
//         break;
//     case($number >= 70):
//         echo "Your grade is A <br/>";
//         break;
//     case($number >= 60):
//         echo "Your grade is A- <br/>";
//         break;
//     default: 
//     echo "Your are fail <br/>";
// }

//home work


$number = 29;
if($number % 2 == 0){
    echo "$number is Even. <br/>";
}else{
    echo "$number is Odd. <br/>";
}

switch($number){
    case($number % 2 ==0):
        echo "$number is Even. <br/>";
        break;
    default:
        echo "$number is Odd. <br/>";
}

$letter = "F";
switch($letter){
    case($letter == 'a' || $letter == 'A'):
        echo "$letter is a vowel<br/>";
        break;
    case($letter == 'e' || $letter == 'E'):
        echo "$letter is a vowel<br/>";
        break;
    case($letter == 'i' || $letter == 'I'):
        echo "$letter is a vowel<br/>";
        break;
    case($letter == 'o' || $letter == 'O'):
        echo "$letter is a vowel<br/>";
        break;
    case($letter == 'u' || $letter == 'U'):
        echo "$letter is a vowel<br/>";
        break;
    default: 
    echo "$letter is a consonant<br/>";
}

$name = "";
//ternary operator
$result = $name ? $name : "Name not found";
//null operator
$result = $name ?? "Name not found";
echo $result;

?>