<!-- #30 Updating records in PHP & Where Clause -->
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
    
    //WHERE CLAUSE
    //To select all the rows from the table where person x is from Bihar:
    $sql = "SELECT * FROM `phptrip` WHERE `dest`='Bihar';";     //select with WHERE clause.
    $result = mysqli_query($conn, $sql);    //$result has all the data/rows.
    // To Find the number of rows returned:
    $num = mysqli_num_rows($result);
    echo "Number of rows selected = " . $num;
    echo "<br>";echo "<br>";
    //To display the rows (DATA) returned by the SQL query:
    if($num>0)      //if number of rows selected are > 0
    {
        $index=1;
        while($row = mysqli_fetch_assoc($result))       // mysqli_fetch_assoc($result): will return each row(associative array) for each iteration, but when there are no rows(it has returned all the rows) then it will return NULL(termination condition for while loop).
        {
            // echo var_dump($row);
            // echo "<br>";
            echo $index . ") Hello " . $row['name'] . " Welcome to " . $row['dest'];
            echo "<br>";
            $index++;
        }
    }
    echo "<br>";echo "<br>";

    //UPDATE query with WHERE clause
    $sql = "UPDATE `phptrip` SET `name` = 'Ravan5' WHERE `phptrip`.`sno` = 4;";     //UPDATE query. Returns TRUE and FALSE.
    $result = mysqli_query($conn, $sql);    //$result has TRUE or FALSE (bool).
    echo "TRUE(1) or FALSE(0) = ";
    echo var_dump($result);
    //To get the number of affected rows:
    echo "<br>The number of affected rows = " . mysqli_affected_rows($conn);
    echo "<br>";
    if($result)
    {
        echo "We updated the record successfully";
    }
    else
    {
        echo "We failed to updated the record successfully";
    }
?>