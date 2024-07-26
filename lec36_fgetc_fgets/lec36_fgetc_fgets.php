<?php
    $fptr = fopen("myFile.txt", "r");
    //1) fgets() - line by line
    //"fgets(pointer_name)" --> Reads only one line from file and puts the pointer to the start of next line.
    //                      --> Returns STRING and when no string exists it returns FALSE.

    // echo fgets($fptr);      //Reads the first line and put fptr on 2nd line
    // echo fgets($fptr);      //Reads the second line and put fptr on 3rd line

    // //for reading whole file:
    // while($a = fgets($fptr))
    // {
    //     echo $a;
    // }



    //2) fgetc() - character by character
    // echo fgetc($fptr);        //Reads only single character. "T" in this case. //Reads the first character and put fptr after the 1st character.
    // echo fgetc($fptr);        //Reads the second character and put fptr after the 2nd character.

    //for reading whole file:
    while($a = fgetc($fptr))
    {
        echo $a;
    }

    fclose($fptr);
?>