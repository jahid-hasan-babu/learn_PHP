<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 04</title>
</head>

<body>
    <h1><?php echo "hello ";?>Jahid</h1>
    <?php
    
    
    // echo "hello ";
    // echo "Jahid ";
    // // variable 
    // $name = " Hasan";
    // $price = 100 ;
    // echo $price;
    // echo $name;

    // যদি variable print করতে চাই তাহলে "" দিতে হবে
    // echo " Hello $name your amount is $price ";
    //আর  যদি variable single '' print করতে চাই তাহলে . দিতে হবে
    // echo ' Hello' .$name,' your amount is' .$price ;
    // echo " Hello " .$name." your amount is".$price."";

    // $first_name = "Rabbi";
    // $name = "first_name";
    // echo $$name;
    
    ?>
    <h1>Hello <?php echo $first_name;?>, Your amount is <?php echo $price;?></h1>
</body>

</html> -->


<!-- loop -->
<?php

// for(start;end;increment/decrement){
//     statement;
//  }


// for($i = 1; $i<= 10; $i++){
//     echo $i ."<br/>";
// }

// for($i = 1; $i<= 10; $i++){
//     echo $i ."<br/>";
//     if($i == 7){
//         break;
//     }
    
// }
// for($i = 1; $i<= 10; $i++){
   
//     if($i == 7){
//         break;
//     }
//     echo $i ."<br/>";
// }



// for($i = 1; $i<= 10; $i++){
//     if($i == 7 || $i == 8){
//         continue;
//     }
//     echo $i ."<br/>";
// }


// for($y = 2000; $y <= 2024; $y++){
//     if($y%4 == 0){
//         echo $y. "Is a leap year <br/>";
//     }else{
//         echo $y. "Is not a leap year <br/>";
//     }
// }

// for($i = 1; $i<= 10; $i++){
//     for($x = 0; $x <= $i; $x++){
//         echo "*";
//     }
//     echo "<br/>";
// }


// for($i = 10; $i>= 1; $i--){
//     for($x = 0; $x <= $i; $x++){
//         echo "*";
//     }
//     echo "<br/>";
// }

// $height = 5; // Number of levels in the pyramid

// for ($i = 1; $i <= $height; $i++) {
//     // Print leading spaces
//     for ($j = $i; $j < $height; $j++) {
//         echo "&nbsp;";
//     }  
//     // Print asterisks
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*";
//     }
//     echo "<br/>";
// }

// echo "Even number from 1 to 100 :" . PHP_EOL;
// for ($i = 1; $i <= 100 ; $i ++){
//     if($i % 2 == 0){
//         echo  $i .", ";
//     }
// }

// echo "<br/>";

// echo "Odd number from 1 to 100 :" . PHP_EOL;
// for ($i = 1; $i <= 100 ; $i ++){
//     if($i % 2 !== 0){
//         echo  $i .", ";
//     }
// }

//while loop

// $number = 10;
// while($number >0){
//     echo $number . "<br/>";
//     $number --;
// }

// $number = 1;
// while($number <=10){
//     echo $number . "#";
//     $number ++;
// }


$x=1;
do{
    echo $x. "<br/>";
    $x++;
}while($x<1);

?>