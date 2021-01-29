<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 73 - Setting PHP Sessions


    session_start(); //first declare in all where you want to use session

    $_SESSION['name'] = 'vaibhav'; // set value in session

    echo $_SESSION['name']; // read value from session variable


    // Video - 74 - Unsetting PHP Sessions

    unset($_SESSION['name']); // distroy particular session 
    
    session_destroy(); // distroy all session 


    
?>