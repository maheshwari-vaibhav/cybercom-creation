<?php
    /*
        author  : vaibhav maheshwari
        date    : 06-02-2021
    */

    namespace vaibhav;

    class Dbconnect {
        private $host;
        private $username;
        private $password;
        private $database;
        public function __construct($host, $username, $password, $database)
        {
            $this -> host = $host;
            $this -> username = $username;
            $this -> password = $password;
            $this -> database = $database;
        }

        public function connect()
        {
            $conn = @mysqli_connect($this -> host, $this -> username, $this -> password, $this -> database);
            if ($conn) {
                return $conn;
            } else {
                return false;
            }
            
        }
    }
    
?>