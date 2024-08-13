<?php


// $numbers = array(1,2,3,4);

//index array
// $numbers = [1,2,3,4];
// echo "<pre>";
// print_r($numbers);


//foreach
// foreach(array as index=> value){
//     statement;
// }


// foreach($numbers as $index=> $value){
//     echo "Index = $index > value = $value <br/>";
// }


// echo $numbers[3];

// echo count($numbers);


//associate array
// $student_data = ['name'=>'Jahid','roll'=>22,'age'=>24,'class'=>'Ten'];

// echo $student_data['roll'];

// foreach($student_data as $index=> $value){
//     echo "$index =  $value <br/>";
// }


//Multidimensional  array

// $students_data = array(
//                     ['name'=>'Jahid','roll'=>22,'age'=>24,'class'=>'Ten'],
//                     ['name'=>'Karim','roll'=>12,'age'=>22,'class'=>'Ten']
//                 );
    


// $students_data = [
//                     ['name'=>'Jahid','roll'=>22,'age'=>24,'class'=>'Ten'],
//                     ['name'=>'Karim','roll'=>12,'age'=>22,'class'=>'Ten'],
//                 ];


//     foreach($students_data as $index=> $student_data){
//             foreach($student_data as $key=>$info){
//                 echo "$key = $info <br/>";
//             }
//             echo "<br/>";

//    }

// $students_data = [
//     ['name'=>'Jahid','roll'=>22,'age'=>24,'class'=>'Ten'],
//     12,
//     ['name'=>'Karim','roll'=>12,'age'=>22,'class'=>'Ten'],
// ];


// echo $students_data[2]['roll'];

// foreach($students_data as $index=> $student_data){
//     if(is_array($student_data)){
//         foreach($student_data as $key=>$info){
//             echo "$key = $info <br/>";
//         }
//     }else{
//         echo $student_data;
//     }

//     echo "<br/>";

// }


// $students_data = [
//     ['name'=>'Jahid','roll'=>22,'age'=>24,'class'=>'Ten'],
//     ['name'=>'Karim','roll'=>12,'age'=>22,'class'=>'Ten'],
// ];
          


//     foreach($students_data as $index=> $student_data){
//             echo ++$index . ". Name:  ".$student_data['name'], " Roll:  ".$student_data['roll']," Age:  ".$student_data['age'], 
//             "  Class:  ".$student_data['class']. "<br/>";

//    }

// function multiplyArray($arr) {
//     return array_reduce($arr, function($accumulator, $currentValue) {
//         return $accumulator * $currentValue;
//     }, 1);
// }


// $numbers = [2, 3, 4];
// $result = multiplyArray($numbers);
// echo $result; 


// Function to generate an array with numbers from 1 to 100
function createArray() {
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    return $arr;
}



// Function to find all even numbers in the array
function findEvenNumbers($arr) {
    $evenNumbers = [];
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $evenNumbers[] = $num;
        }
    }
    return $evenNumbers;
}

// Create the array
$numbers = createArray();
// print_r($numbers);

// Find even numbers
$evenNumbers = findEvenNumbers($numbers);

// Output the even numbers
echo "Even numbers in the array: " . implode(', ', $evenNumbers);



?>