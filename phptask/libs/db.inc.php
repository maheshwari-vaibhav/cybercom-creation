<?php 
	/*
        author  : vaibhav maheshwari
        date    : 10-02-2021
    */

    class Database{
    	
    	private $host = 'localhost';
        private $username = 'vaibhav';
        private $password = 'V@ibhav456';
        private $database = 'ccc_blog';
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

        public function insertPostData($table_name, $data)
        {
            $keys = implode(", " ,array_keys($data));
            $values = "'".implode("', '" ,array_values($data))."'";
            $sql = "INSERT INTO `$table_name` (".$keys.") VALUES ($values)";
            if ($query = mysqli_query($this->connection, $sql)) {
                return $this->connection->insert_id;
            } else {
                return false;
            }
        }


        public function checkEmail($table_name, $email)
        {
            $sql = "select * from `$table_name` where `email` = '".$email."'";
            $query = mysqli_query($this->connection, $sql);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            if (count($data) > 0) {
                return true;
            } else {
                return false;
            }

        }


        public function fetchData($table_name)
        {
            $sql = "select * from `$table_name`";
            $data = array();
            if ($query = mysqli_query($this->connection, $sql)) {
                while ($row = mysqli_fetch_assoc($query)) {
                    array_push($data, $row);
                }
                return $data;
            } else {
                return false;
            }
        }


        public function checkUrl($table_name, $url)
        {
            $sql = "select * from `$table_name` where `url` = '".$url."'";
            $query = mysqli_query($this->connection, $sql);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            if (count($data) > 0) {
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

        public function deletePostCategory($id)
        {
            $sql = "delete from `post_category` where `pid` = '".$id."'";
            if ($query = mysqli_query($this->connection, $sql)) {
                return true;
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

        public function fetchPostCategoryId($table_name, $id)
        {
            $sql = "select * from `$table_name` where `pid` = '".$id."'";
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

        public function getUser($email)
        {
            $sql = "select `id` from `user` where `email` = '".$email."'";
            if ($query = mysqli_query($this->connection, $sql)) {
                while ($row = mysqli_fetch_assoc($query)) {
                  $data = $row;
                }
                return $data;
            } else {
                return false;
            }
        }


        public function loadPost($userid)
        {
            $sql = 'SELECT p.*,group_concat(c.title) as "ctitle" FROM post_category pc INNER JOIN blog_post p ON pc.pid = p.id INNER JOIN category c ON JSON_CONTAINS(pc.cid,concat(\'["\',c.id,\'"]\'),\'$\') where p.userid = '.$userid.' group by p.id';
            $data = array();
            if ($query = mysqli_query($this->connection, $sql)) {
                while ($row = mysqli_fetch_assoc($query)) {
                    array_push($data, $row);
                }
                return $data;
            } else {
                return false;
            }
        }



        public function login($username,$password)
        {
            $password = md5($password);
            $sql = "select * from `user` where `email` = '$username' and `passwordHash` = '$password'";

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


        public function updatePostData($table_name,$data,$id)
        {
            $sql = 'UPDATE `blog_post` SET `title` = '.$data['title'].', `url` = '.$data['url'].', `content` = '.$data['content'].', `image` = '.$data['image'].' WHERE `id` = '.$id;

            if ($query = mysqli_query($this->connection, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        public function updatePostCategory($pid,$cid)
        {
            $sql = "update `post_category` set cid = $cid where pid = $pid";
            if ($query = mysqli_query($this->connection, $sql)) {
                return true;
            } else {
                return false;
            }
        }
	    
    }
?>