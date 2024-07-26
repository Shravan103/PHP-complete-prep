<!-- Instead of writing this code everytime for each php file we create, we can write it once and import it to the new file we create -->
 
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

?>