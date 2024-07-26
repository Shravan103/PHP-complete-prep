<!-- foreach loops in php  -->
<?php
    $arr = array("Banana","Apples","Harpic","Bread");
    echo "Contents of array arr using FOR LOOP are: <br>";
    for ($i=0; $i < count($arr); $i++)
    { 
        echo $arr[$i];
        echo "<br>";
    }
    echo "<br>";echo "<br>";
    // more simpler way is --> foreach loops
    echo "Contents of array arr using FOREACH LOOP are: <br>";
    foreach ($arr as $value) {
        echo "$value <br>";
    }

?>