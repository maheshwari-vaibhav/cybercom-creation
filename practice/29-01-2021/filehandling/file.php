<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 77 -  File Handling- Writing to a File

    $handle = fopen('name.txt', 'w'); //open file in write mode
    fwrite($handle, 'vaibhav'); //write data in file
    fclose($handle); //close the file connection

?>