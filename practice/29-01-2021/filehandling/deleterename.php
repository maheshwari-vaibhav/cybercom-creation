<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 85 - File Handling- Deleting and Renaming Files Part 1
    // Video - 86 - File Handling- Deleting and Renaming Files Part 2
    

    //delete file
    $filename = 'files/fourth.txt';
    
    if (file_exists($filename)) {
        if (unlink($filename)) {
            echo 'File '.$filename. ' is deleted!';
        } else {
            echo 'File not deleted!';
        }
    } else {
        echo 'File Not Exist!';
    }

    $filename = 'files/third.txt';
    $new_filename = 'files/'.rand(1000,9999).'.txt';
    //rename file 
    if (file_exists($filename)) {
        if (rename($filename, $new_filename)) {
            echo 'File '.$filename. ' is rename to '.$new_filename.'!';
        } else {
            echo 'File not renamed!';
        }
    } else {
        echo 'File Not Exist!';
    }
   
?>
