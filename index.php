<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Ujjal Banik</h2>

<?php
 
 echo $name = "ujjal Banik";
 echo $Name = "Uzzol Datta";
 echo $email = "info@gmail.com";
 echo $number = "+880 1234 5678";

 echo $name , "<br>" , $Name , "<br>" , $email , "<br>" , $number;
 
?>

<!-- =================================== -->
Deta type

    1. String - text/number/space/sign -> "I love Bangladesh too much"
    2. Integer - 1,2,3,500
    3. Float - 5.5/55.5
    4. Boolean - True/ False (0/1)
    5. array - array("name/" "email" , "number")
    6. object 
    7. null 
<!-- =================================== -->

<?php
 
    echo var_dump($name)  (If you indentify a deta type type this code);
    echo strlen($name);
    echo str_word_count($name) (If you count word type this code);
    echo strrev($email)

?>


<!-- =================================== -->

PHP Operators

1. Arithetic Operators. (+,-,*, /, **)
2. Assignment Operators ( =, +=, -=, *=, /=, %=)
3. Logical Operators. ( &&, ||, !, )
4. Comparision Operators. ( ==, ===, !==, <, >, >=, <= )
5. String Operators ( . , .= )
6. Array Operators. ( +, ==, ===, <>, !==,  )
7. Update Operators. (Increment / Decrement) (++, --, +=,)

<!-- =================================== -->



<!-- If & Else statement  -->

<?php

$username = "Ujjal";
$password = "1234";

if ( $username == "Ujjal") {

    if ( $password == "1234"){

        echo "welcome" , $username;

    }

    else{
        echo "Password is worng";
    }
    
}

else{
    echo "username is not match";
}
?>



</body>
</html>