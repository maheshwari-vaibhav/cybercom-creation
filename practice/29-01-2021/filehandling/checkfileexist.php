<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 84 - File Handling- Checking if a File Exists

    $filename = 'files/fourth.txt';

    if (file_exists($filename)) {
        echo 'File already Exist!';
    } else {
        $handle = fopen($filename, 'w'); //open file in write mode
        fwrite($handle, 'fourth'); //write data in file
        fclose($handle); //close the file connection
    }
    


    
?>
