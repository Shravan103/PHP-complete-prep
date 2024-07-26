<!-- Multi Dimensional arrays in php -->
<?php
//  -            -
// |  2  5  7  8  |
// |  1  2  3  1  |
// |  4  5  0  1  |
//  -            -

    $multiDim = array(
        array(2,5,7,8),
        array(1,2,3,1),
        array(4,5,0,1)
    );
    echo var_dump($multiDim);   //not readable easily
    echo "<br>";echo "<br>";
    //To print value at a particular index
    echo $multiDim[0][2];
    echo "<br>";echo "<br>";

    //To print value in Tablular form usinf for loop
    for ($i=0; $i < count($multiDim); $i++)
    { 
        for ($j=0; $j < count($multiDim[$i]); $j++)
        { 
            echo $multiDim[$i][$j];
            echo "  ";
        }
        echo "<br>";
    }

  ?>