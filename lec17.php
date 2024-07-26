<!-- Date functions : handling dates in php  -->
<?php
    $d = date("l");     //l--> Used for DAY
    echo "Todays DAY is DATE(l) = $d<br>";
    $a = date("d");     //d--> date will be 01,02,.....
    $c = date("j");     //j--> date will be 1,2,......
    echo "Todays Tarik is DATE(d) = $a<br>Todays Tarik is DATE(j) = $c<br>";
    $b = date("d l");
    echo "DATE(d l) = $b<br>";
    $e = date("d S");   //S--> suffix of the tarik eg: 12th,3rd,...
    echo "DATE(d S) = $e<br>";
    $f = date("d F Y");
    echo "DATE(d F Y) = $f<br>";    //d--> date will be 01,02,.....
                                    //F--> Textual representation of the month.
                                    //Y--> 4 character representation of the year eg:1993,2023,...
                                    //y--> 2 character representation of the year eg:93,23,....
    $g = date("h : i : s A");
    echo "DATE(h : i : s A) = $g";      //h--> 12 hour format with leading zeros.
                                        //i--> minutes with leading zeros
                                        //s--> seconds with leading zeros.
                                        //A--> am or pm
?>