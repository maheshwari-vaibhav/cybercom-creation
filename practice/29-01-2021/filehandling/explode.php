<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 80 - The explode Function with File Handling Example

    $filename = 'namecsv.txt';
    $handle = fopen($filename, 'r'); //open file in read mode
    $filedata = fread($handle, filesize($filename)); //read data from file

    $names_array = explode(',', $filedata); //convert the string to array

    foreach ($names_array as $name ) {
        echo $name.'<br>';
    }


    
?>