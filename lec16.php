<!-- Functions in php  -->
<?php
    echo "Functions in PHP:<br>";
    function ProcessMarks($marksarr)
    {
        $sum=0;
        foreach ($marksarr as $value)
        {
            $sum += $value;
        }
        return $sum;
    }

    //Rohan Das marks out of 600
    $RohanDas = [34,98,45,12,98,93];    //new way of defining a array
    $sumRohanDas = ProcessMarks($RohanDas);
    $harry = [99,98,93,94,17,100];      //new way of defining a array
    $sumHarry = ProcessMarks($harry);
    echo "Toatal marks scored by Rohan Das out of 600 = ". $sumRohanDas . "<br>";
    echo "Toatal marks scored by Harry out of 600 = ". $sumHarry . "<br>";
?>