<!-- Scope,local,global variables in php -->
<?php
    $a = 98;    //Global variable
    $b = 2;
    function PrintValue()
    {
        $a = 90;    //Local Variable
        echo "Value of a = $a<br>";
        //how to print global variable value i.e a=98 inside the function.
        global $a,$b;
        // we can also change the value of the gobal variable a and b (After using GLOBAL keyword only) inside this function as:
        //$a = 1000;
        //$b = 2000;
        echo "The value of a and b globaly are = $a , $b";
    }
    echo $a;
    echo "<br>";echo "<br>";
    PrintValue();
    echo "<br>";echo "<br>";
    echo var_dump($GLOBALS);    //gives all the global variable present.
?>