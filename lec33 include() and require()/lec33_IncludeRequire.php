<!-- #33 Include and Require in php -->
<?php
    //both will give error if it is a big error.
    //but if we misspell the the '_dbconnect.php' file name to 'dbconnect1.php' then:
    //INCLUDE will throw warning and will execute the echo statement(will execute the rest/below code);
    //REQUIRE will throw a fatal error and will not execute the echo statement(will not execute the rest/below code); 
    // include '_dbconnect.php';
    require '_dbconnect.php';
    echo "<br>Hey There.....<br><br>";

    //To select all the rows and columns from the table:
    $sql = "SELECT * FROM `phptrip`;";
    $result = mysqli_query($conn, $sql);    //$result has all the data/rows.
    // To Find the number of rows returned:
    $num = mysqli_num_rows($result);
    echo "Number of rows selected = " . $num;
    echo "<br>";echo "<br>";
?>