<!-- #29 Selecting and Displaying data from MySQL using mysqli -->
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

    //To select all the rows and columns from the table:
    $sql = "SELECT * FROM `phptrip`;";
    $result = mysqli_query($conn, $sql);    //$result has all the data/rows.
    // To Find the number of rows returned:
    $num = mysqli_num_rows($result);
    echo "Number of rows selected = " . $num;
    echo "<br>";echo "<br>";
    
    // echo var_dump($result);
    // echo "<br>";echo "<br>";

    //To display the rows (DATA) returned by the SQL query:
    if($num>0)      //if number of rows selected are > 0
    {
        while($row = mysqli_fetch_assoc($result))       // mysqli_fetch_assoc($result): will return each row(associative array) for each iteration, but when there are no rows(it has returned all the rows) then it will return NULL(termination condition for while loop).
        {
            // echo var_dump($row);
            // echo "<br>";
            echo $row['sno'] . ") Hello " . $row['name'] . " Welcome to " . $row['dest'];
            echo "<br>";
        }
    }
?>