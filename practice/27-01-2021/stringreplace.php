<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 50 - String Functions- Replacing Part of a String

    $string = 'Hello i am vaibhav maheshwari. i am student.<br>';

    $string_new = substr_replace($string,'developer',36,7);

    echo $string_new;


    // Video - 51 - String Functions- Replacing Predefined Part of a String

    $string_new = str_replace(' am', '\'m', $string);

    echo $string_new;


    $find = array('vaibhav', 'maheshwari','student');
    $replace = array('renil', 'soni', 'developer');

    $string_new = str_replace($find, $replace, $string);

    echo $string_new;
    
?>