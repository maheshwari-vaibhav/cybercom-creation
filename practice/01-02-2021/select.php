<?php
    /*
        author  : vaibhav maheshwari
        date    : 01-02-2021
    */

    // Video - 115 - SELECT Part 1
    // Video - 116 - SELECT Part 2
    // Video - 117 - SELECT Part 3

    require 'dbconnect.php';

    $sql = "select `fname`, `lname` from `users` order by id desc";

    if ($query = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['fname'].' '.$row['lname'].'<br>';
            }
        } else {
            echo 'no record found';
        }
        
    } else {
        echo 'somthing went wrong';
    }
    
    
?>