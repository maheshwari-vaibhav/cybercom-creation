<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */

    $host = 'localhost'; //database hostname
    $username = 'vaibhav'; //database username
    $password = 'V@ibhav456'; //database password
    $database = 'ccc_php'; //database name
    $db_error = 'Could not connect!!!'; //database error

    $conn = mysqli_connect($host, $username, $password); //connection function to connect to database server
    if (!$conn) {
        die($db_error);
    } else {
        if (!@mysqli_select_db($conn, $database)) { //select database function
            die($db_error);
        }
    }
?>