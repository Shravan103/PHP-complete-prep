<!-- Creating a table in MySQL using PHP  -->
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

    //creating a Table in the Database
    $sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
    $result = mysqli_query($conn, $sql);

    //Check for Table creation
    if ($result)
    {
        echo "The Table was created successfully";
    }
    else
    {
        echo "The Table was not created successfully because of this error --> ". mysqli_error($conn); 
    }
?>