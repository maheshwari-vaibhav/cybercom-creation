<?php 
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    // Video - 30 - Expression Matching

    $str = 'Hello I am Vaibhav Maheswari.';

    if (preg_match('/am/', $str)) {
    	echo 'Match Found.<br>';
    } else {
    	echo ' No Match Found.<br>';
    }


    if (preg_match('/vm/', $str)) {
    	echo 'Match Found.<br>';
    } else {
    	echo ' No Match Found.<br>';
    }
    
?>