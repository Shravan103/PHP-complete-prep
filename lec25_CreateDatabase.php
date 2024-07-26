<!-- Creating a MySQL database using php -->
<?php

    // 3 Things required to connect to a Database.
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Creating a connection
    $conn = mysqli_connect($servername, $username, $password);
    //Die if connection is not successfull.
    if (!$conn)
    {
        die("Sorry we failed to connect: ". mysqli_connect_error());
        echo "<br>";
    }
    //no need to write ELSE coz the program will DIE in IF statement itself.But lets use it,
    
    else
    {
        echo "Connection was successfull";
        echo "<br>";
    }

    //creating a Database using SQL in PHP code
    $sql = "CREATE DATABASE dbHarry";
    $result = mysqli_query($conn, $sql);    //returns TRUE or FALSE
    echo "The result is ";
    echo var_dump($result);     //will be TRUE if a new database is created, will be FALSE if the database name in the php code i.e dbHarry already exists in the PHPMyadmin. 
    echo "<br>";

    //check for Database creation
    if ($result)
    {
        echo "The datbase was created successfully";
    }
    else
    {
        echo "The datbase was not created successfully because of this error --> ". mysqli_error($conn); 
    }
?>