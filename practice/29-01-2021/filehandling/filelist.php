<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 82 - File Handling- Listing Files Part 1
    // Video - 83 - File Handling- Listing Files Part 2

    $dir = 'files';

    

    if ($handle = opendir($dir)) {
        echo 'Lokking inside '.$dir.' : <br>';
        while ($file = readdir($handle)) {
            if ($file != '.' && $file != '..') {
                echo '<a href="'.$dir.'/'.$file.'">'.$file.'</a><br>';
            }
        }
    }

    
?>
