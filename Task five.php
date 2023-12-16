<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Five</title>
</head>
<body>

<?php
$number= 5;

    if($number < 10){
        echo $number . "is less then 10";
    }
    else{
        echo $number . "is bigger then 10";
    }

?>

<?php

$username = "Ujjal";
$password = "1234";

if ( $username == "Ujjal") {

    if ( $password == "1234"){

        echo "Welcome guest!";
    }

    else{
        echo "Password is wrong";
    }
    
}

else{
    echo "Welcome back!";
}
?>



</body>
</html>