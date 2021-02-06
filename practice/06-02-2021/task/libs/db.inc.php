<?php 
	/*
        author  : vaibhav maheshwari
        date    : 06-02-2021
    */

    class Database{
    	
    	private $host = 'localhost';
        private $username = 'vaibhav';
        private $password = 'V@ibhav456';
        private $database = 'ccc_php';
        private $connection;
        public function __construct()
        {
            $this->connection = $this->connect();
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

        public function insertData($table_name, $data)
	    {
	        $keys = implode(", " ,array_keys($data));
	        $values = "'".implode("', '" ,array_values($data))."'";
	        $sql = "INSERT INTO `$table_name` (".$keys.") VALUES ($values)";
	        if ($query = mysqli_query($this->connection, $sql)) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    function deleteById($table_name, $id)
	    {
	        $sql = "delete from `$table_name` where `id` = '".$id."'";
	        if ($query = mysqli_query($this->connection, $sql)) {
	            return true;
	        } else {
	            return false;
	        }
	    }
    }
?>