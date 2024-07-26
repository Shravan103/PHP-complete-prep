<?php
    //How to OPEN file in modes.
    $fptr = fopen("myFile.txt", "r");   //we have just created a file pointer pointing to a file, and opened file in read mode(it has not started reading yet). //returns a file pointer on success and FALSE on failure.
    if(!$fptr)
    {
        die("Unable to open file.");
    }

    //How to READ file.
    //Syntax: fread(file_pointer,file_length);
    $content = fread($fptr,filesize("myFile.txt"));
    echo $content;

    //How to CLOSE the file.
    fclose($fptr);
    
?>

<!-- 
'r'	    Open for reading only; place the file pointer at the beginning of the file.
'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
'w'	    Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
'w+'	Open for reading and writing; otherwise it has the same behavior as 'w'.
'a'	    Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
'a+'	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
-->