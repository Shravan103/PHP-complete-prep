<!-- #38 Setting Cookies & $_COOKIE super global in PHP -->
<?php
    echo "Welcome to the world of COOKIES:<br><br>";
    //COOKIES: Stores less secure data. Eg: Category the customer is into, screening time.
    //SESSIONS: Stores more secure data. Eg: password, token number, Payment details.

    //Syntax: setcookie(name,value,expires(in seconds, in 1 day = 86400 secs),"/"(use the cookie throughout the website));
    setcookie("category", "Books", time() + 86400, "/");
    echo "The cookie is set.<br>";
?>