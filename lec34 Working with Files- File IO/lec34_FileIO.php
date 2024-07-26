<!-- #34 Working with files: File I/O in PHP -->
<?php
    //Reading the file 'myFile.txt'
    $a = readfile("myFile.txt");
    echo $a;        //This will give the content of the file with the number of characters read appended at the last. To avoid this only run this: "readfile("myFile.txt");"
    // readfile("myFile.txt");
    //if I have a image named "img1.png" and i use "readfile("img1.txt");" then it will not show me any error and will show the text content of the image file(which is of course unreadable)
    //"readfile("index.html");" will run the html file same as "Go Live".
?>