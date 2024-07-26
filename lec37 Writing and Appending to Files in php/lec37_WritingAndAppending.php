<!-- #30 Writing and Appending to Files in php -->
<?php
    echo "This is File Handling.<br>";
    //WRITE mode
    $fptr = fopen("myFile2.txt", "w");  //if file do not exist then create one AND if exists then delete all the content.
    fwrite($fptr, "This is the best file on this planet.\nPlease dont argue with me on this.");
    fwrite($fptr, " This text will come after the above text.");

    //APPEND mode
    $fptr = fopen("myFile2.txt", "a");  //if file do not exist then create one AND if exists then append the below text to the end(where fptr exists).
    fwrite($fptr, "I am appending the new content to the file.");
    fwrite($fptr, " Another one append.");

    fclose($fptr);
?>