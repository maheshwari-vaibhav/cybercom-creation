<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 45 - More on Expression Matching

    function has_space($string)
    {
        if (preg_match('/ /', $string)) {
            return true;
        } else {
            return false;
        }
    }

    $string = 'vaibhav maheshwari';

    if (has_space($string)) {
        echo 'has atleast once space';
    } else {
        echo 'has no space';
    }
    
?>