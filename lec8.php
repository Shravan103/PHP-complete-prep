<!-- String Functions -->
<!-- . operator is used for string concatination -->
<?php
    $name="Harry";

    //STRLEN()
    // echo "The length of $name = strlen($name)"      WRONG
    echo "The length of $name = " . strlen($name);
    echo "<br>";echo "<br>";

    //STR_WORD_COUNT()
    $name2="Harry is a good boy";
    echo "The words in string - $name2 - =".str_word_count($name2);
    echo "<br>";echo "<br>";

    //STRREV() -- string reverse
    echo "Reverse of $name = ".strrev($name);
    echo "<br>";echo "<br>";

    //STRPOS() -- for searching a string/word from the string --gives the starting index of string/word
    echo strpos($name,"rry");
    echo "<br>";
    echo strpos($name,"r");
    echo "<br>";
    echo strpos($name2,"boy");
    echo "<br>";echo "<br>";

    //STR_REPLACE() -- to replace word/string withe other word/string in a string
    echo str_replace("Harry","Shravan",$name2);
    echo "<br>";
    echo $name2;
    echo "<br>";echo "<br>";

    //STR_REPEAT() -- to repeat string many times
    echo str_repeat($name2,10);
    echo "<br>";echo "<br>";

    //rtrim() -- reomves right spaces in a string
    //ltrim() -- removes left spaces in a string
    //<pre></pre> -- php removes extra spaces by default.But pre tag retains these spaces
    echo "<pre>";
        echo ltrim("    This is ltrim     ");
        echo "<br>";
        echo rtrim("    This is rtrim     ");
    echo "</pre>";
    
?>