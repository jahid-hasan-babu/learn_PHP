<?php
//function
// function fact($number){
//     $fact = 1;
//     for($i = 1; $i <= $number; $i++){
//         $fact *= $i;
//     }
//     return $fact;
// }

// echo fact(5);

// function factorial($number) {
//     if ($number <= 1) {
//         return 1;
//     }
//     return $number * factorial($number - 1);
// }

// $number = 5;
// echo "The factorial of $number is " . factorial($number) . ".";



// function is_prime($number) {
//     // Handle special cases
//     if ($number <= 1) {
//         return false; // 0 and 1 are not prime numbers
//     }
//     if ($number == 2) {
//         return true; // 2 is a prime number
//     }
//     if ($number % 2 == 0) {
//         return false; // Exclude even numbers greater than 2
//     }

    
//     for ($i = 3; $i <= sqrt($number); $i += 2) {
//         if ($number % $i == 0) {
//             return false; 
//         }
//     }
    
//     return true; 
// }

// // Example usage
// $number = 29;
// if (is_prime($number)) {
//     echo "$number is a prime number.";
// } else {
//     echo "$number is not a prime number.";
// }


function bio_data($name, $phone,  $address = false, $email = "abc@gmail.coom"){

    $bio = "My name is $name. My phone number is $phone.My email is $email";
    if($address){
        $bio .= "My address is $address";
    }
    return $bio;
}

$name = "Jahid";
$phone = "01750845484";
$address = "Savar, Dhaka";
$email = "J@gmail.com";

$bio = bio_data(name:$name,phone:$phone,address:$address);
echo $bio;



?>