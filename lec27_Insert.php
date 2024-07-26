<!-- Insert data into MySQL using MySQLi in PHP -->
<?php
    // 3 Things required to connect to a Database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbharry";      //Specifying the database before itself. database dbHarry must be created before running this code.

    // Creating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
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

    // Variables to be inserted into the TABLE
    $name = "Vikrant";
    $Destination = "Russia";

    //SQL query to insert data into `phptrip` table
    // $sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ('Shubham,','Bihar')";      //no need to specify `sno` since it is AUTO_INCREMENT and PRIMARY KEY. Disadavntage of this is, if I relode this code multiple times than the duplicate records will be created in the table `phptrip`.

    $sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ('$name','$Destination')";
    $result = mysqli_query($conn, $sql);

    //Check for Record insertion in Table
    if ($result)
    {
        echo "The Record has been inserted successfully";
    }
    else
    {
        echo "The Record has not been inserted successfully because of this error --> ". mysqli_error($conn); 
    }
?>