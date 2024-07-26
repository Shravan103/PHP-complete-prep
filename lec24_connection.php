<!-- connecting to MySQL database frpm php script  -->
<?php
    //Ways to connect to MySQL Database
    // 1.MySQLi extension
    //     a. Procedural --> we will see this first
    //     b. Object Oriented
    // 2.PDO (PHP DATA OBJECTS)

    // 3 Things required to connect to a Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Creating a connection
    $conn = mysqli_connect($servername, $username, $password);

    //Die if connection is not successfull
    if (!$conn)
    {
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    //no need to write ELSE coz the program will DIE in IF statement itself.But lets use it,
    else
    {
        echo "Connection was successfull";
    }

?>