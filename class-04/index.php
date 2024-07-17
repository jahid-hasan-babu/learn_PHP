<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 04</title>
</head>

<body>
    <h1><?php echo "hello ";?>Jahid</h1>
    <?php
    
    
    echo "hello ";
    echo "Jahid ";
    // variable 
    $name = " Hasan";
    $price = 100 ;
    echo $price;
    echo $name;

    // যদি variable print করতে চাই তাহলে "" দিতে হবে
    echo " Hello $name your amount is $price ";
    //আর  যদি variable single '' print করতে চাই তাহলে . দিতে হবে
    echo ' Hello' .$name,' your amount is' .$price ;
    echo " Hello " .$name." your amount is".$price."";

    $first_name = "Rabbi";
    $name = "first_name";
    echo $$name;
    
    ?>
    <h1>Hello <?php echo $first_name;?>, Your amount is <?php echo $price;?></h1>
</body>

</html>