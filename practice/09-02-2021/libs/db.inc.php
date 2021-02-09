<?php 
	/*
		 Author : Vaibhav Maheshwari
		 Date 	: 09/02/2021
	*/

	/**
	 * 
	 */
	class Database {
		
		private $host = 'localhost';
		private $username = 'vaibhav';
		private $password = 'V@ibhav456';
		private $database = 'ccc_php';
		private $connection;
		public function __construct()
		{
			$this->connection = $this->connect($this->host, $this->username, $this->password, $this->database);
		}

		public function connect($host, $username, $password, $database)
		{
			$conn = @mysqli_connect($host, $username, $password, $database);
			if ($conn) {
				return $conn;
			} else {
				return false;
			}
		}

		public function login($table_name,$username,$password)
		{
			$sql = "select * from `$table_name` where `username` = '$username' and `password` = '$password'";

			if ($query = mysqli_query($this->connection,$sql)) {
				$data = mysqli_fetch_array($query,MYSQLI_ASSOC);
				if ($data) {
					return true;
				} else {
					return false;
				}
			}
			else
			{
				return mysqli_error($this->connection);
			}
		}

		public function addSession($username,$intime,$outtime)
		{
			
			$sql = "insert into `sessions` (`user_name`, `logintime`,`logouttime`) values ('$username','$intime','$outtime')";
			if ($query = mysqli_query($this->connection,$sql)) {
				return true;
			}
			else
			{
				return mysqli_error($this->connection);;
			}
		}
	}

	

?>