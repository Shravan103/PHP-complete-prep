<!-- data types in php -->
<?php
    $name="Harry";
    $income=200;
    
    //some other data types
    //STRING
    $friend='shravan';          //can use single quotes also
    echo "$name ka friend is $friend";
    echo "<br>";echo "<br>";

    //FLOAT
    $income=344.5;
    $debth=233.7;
    echo $income;
    echo "- $debth";
    echo "<br>";echo "<br>";

    //BOOLEAN
    //var_dump() ---> prints the TYPE and VALUE of the variable
    $x=true;
    $y=false;
    echo var_dump($x);
    echo "<br>";
    echo var_dump($y);
    echo "<br>";echo "<br>";

    //Object --->instances of classes
    //       --->EMPLOYEE is a class & HARRY is a object of class EMPLOYEE
    
    //ARRAY--->index starts from 0
    $friends = array("Rohan","Shubham","Sidhu","Larry");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";echo "<br>";

    //NULL
    $var1=NULL;
    echo var_dump($var1);
?>