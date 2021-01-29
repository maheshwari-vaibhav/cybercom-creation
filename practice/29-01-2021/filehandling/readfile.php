<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 78 - File Handling- Reading a File

    $filedata = file('name.txt');

    $filedata_count = count($filedata);
    $count = 1;
    foreach ($filedata as $name) {
        echo trim($name);

        if ($count < $filedata_count) {
            echo ', ';
        }
        $count++;
    }

    
?>