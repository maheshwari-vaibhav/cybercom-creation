<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 48 - String Functions- String Position Part 1
    // Video - 49 - String Functions- String Position Part 2

 
    $string = 'this is demo string.it is use for testing purpose only';

    $find = 'is';
    $find_length = strlen($find);
    $offset = 0;

    while ($strposition = strpos($string, $find, $offset)) {
        echo '<b>'.$find.'</b> found at '.$strposition.'<br>';
        $offset = $strposition + $find_length;
    }
    
?>