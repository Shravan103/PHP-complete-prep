<!-- #30 Deleting Records in PHP & Limit clause -->
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
    echo "<br>";echo "<br>";

    //DELETE query
    $sql = "DELETE FROM `phptrip` WHERE `dest` = 'Bihar' LIMIT 4";     //DELETE query // will delete only 4 rows affected bcoz of limit query.
    $result = mysqli_query($conn, $sql);    //$result has TRUE/FALSE (bool).
    echo "TRUE(1) or FALSE(0) = ";
    echo var_dump($result);
    //To get the number of affected rows:
    echo "<br>The number of affected rows = " . mysqli_affected_rows($conn);
    echo "<br>";
    if($result)
    {
        echo "We deleted the record successfully";
    }
    else
    {
        echo "We failed to delete the record successfully. error is : " . mysqli_error($conn);
    }
?>