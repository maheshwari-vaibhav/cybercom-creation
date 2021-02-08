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

	    public function deleteById($table_name, $id)
	    {
	        $sql = "delete from `$table_name` where `id` = '".$id."'";
	        if ($query = mysqli_query($this->connection, $sql)) {
	            return true;
	        } else {
	            return false;
	        }
	    }

        public function fetchData($table_name)
        {
            $sql = "select * from `$table_name`";
            if ($query = mysqli_query($this->connection, $sql)) {
                if ($row = mysqli_fetch_all($query, MYSQLI_ASSOC)) {
                   return json_encode($row);
                }
            } else {
                return false;
            }
        }

        public function fetchDataLimit($table_name,$page,$limit)
        {
            $rows = $this->fetchData($table_name);
            $total_records = count(json_decode($rows));
            $total_page = ceil($total_records / $limit);
            $firstRecord = ($page - 1) * $limit;
            $sql = "select * from `$table_name` limit $firstRecord , $limit";
            if ($query = mysqli_query($this->connection, $sql)) {
                if ($row = mysqli_fetch_all($query, MYSQLI_ASSOC)) {
                   return json_encode($row);
                }
            } else {
                return false;
            }
        }

        public function fetchDataId($table_name, $id)
        {
            $sql = "select * from `$table_name` where `id` = '".$id."'";
            $data = '';
            if ($query = mysqli_query($this->connection, $sql)) {
                while ($row = mysqli_fetch_assoc($query)) {
                  $data = $row;
                }
                return $data;
            } else {
                return false;
            }
        }


        public function updateData($table_name, $data, $id)
        {
            $sql= "update $table_name set name = '".$data['name']."', email = '".$data['email']."', phone = '".$data['phone']."', title = '".$data['title']."', createdAt = '".$data['createdAt']."' where id = '".$id."'";
            if ($query = mysqli_query($this->connection, $sql)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>