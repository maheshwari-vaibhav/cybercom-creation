<?php
    /*
        author  : vaibhav maheshwari
        date    : 06-02-2021

    */
    require_once 'db.inc.php';

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
            return 'vaibhav'; 
        }
    }

    $conn = new vaibhav\Dbconnect('localhost', 'vaibhav', 'V@ibhav456', 'ccc_php');

    $db = $conn->connect();
    if($db)
    {
        echo 'ok';
    }
    else {
        echo 'error';
    }
    
?>