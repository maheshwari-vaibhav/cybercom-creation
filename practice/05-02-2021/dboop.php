<?php
    /*
        author  : vaibhav maheshwari
        date    : 05-02-2021
        
        video - 199 - Connecting to a Database the OOP Way
        video - 200 - Final PHP Video!!!


    */

    class DatabaseConnection {

        public function __construct($host, $username, $password)
        {
            if ($this->connect($host, $username, $password)) {
                echo 'Connected';
            } else {
                echo 'Not Connected';
            }
            
        }

        public function connect($host, $username, $password)
        {
            $conn = @mysqli_connect($host, $username, $password); //connection function to connect to database server
            if (!$conn) {
                return false;
            } else {
                return true;
            }
        }
    }
    

    $database = new DatabaseConnection('localhost', 'vaibhav' ,'V@ibhav456');
?>