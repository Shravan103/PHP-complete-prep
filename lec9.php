<!-- Operators in php -->
<?php
    $a = 45;
    $b = 8;
    //Arithmatic Operators
    echo "a + b = ".($a+$b)."<br>";
    echo "a - b = ".($a-$b)."<br>";
    echo "a * b = ".($a*$b)."<br>";
    echo "a / b = ".($a/$b)."<br>";
    echo "a % b = ".($a%$b)."<br>";
    echo "a^b = ".($a**$b)."<br>";
    echo "<br>";

    //Assignment Operator (=, +=, -=, *=, /=, %=) -- value in variable changes after these operations
    $x = $a;
    echo "x = ".$x."<br>";
    $x+=6;   //------> $x = $x + 6
    echo "x+=6 is ". $x ."<br>";
    echo "<br>";

    //Comparison Operator(==, >, <, >=, <=, <> not equal to)
    //Logical Operators (and / &&, or / ||, not / !)

?>