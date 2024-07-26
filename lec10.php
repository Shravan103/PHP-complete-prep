<!-- if else conditions -->
<?php
    $a = 65;
    $b = 9;
    if($a > 70)
    {
        echo "$a is greater than 70 <br>";
    }
    else
    {
        echo "$a is less than 70 <br>";
    }
    echo "<br>";echo "<br>";

    $age = 54;
    if ($age>18) {
        echo "You are above 18";
    }
    elseif($age<18)     //------>elseif and not else if
    {
        echo "You are below 18";
    }
    else
    {
        echo "You are 18";
    }
    echo "<br>";echo "<br>";
?>