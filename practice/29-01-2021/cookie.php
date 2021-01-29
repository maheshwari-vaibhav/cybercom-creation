<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 75 - Creating Cookies with PHP

    setcookie('name', 'vaibhav', time() + 60); //set cookkie for 60 secconds 

    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name']; //read the value of cookie
    }

    // Video - 76 - Deleting Cookies with PHP

    /*
        to remove cookie we simply change the value to null and set old timestamp
    */
    setcookie('name', '', time() - 60); //unset cookkie 
    

    
?>