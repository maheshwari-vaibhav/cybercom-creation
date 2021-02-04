<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021

        video - 187 - Custom Exceptions
        video - 188 - Custom Error Messages
        

    */

    $host = 'localhost'; //database hostname
    $username = 'vaibhavw'; //database username
    $password = 'V@ibhav456'; //database password
    $database = 'ccc_php'; //database name
    $db_error = 'Could not connect!!!'; //database error

    class ServerException extends Exception {
        //custom error message 
        function customMessage()
        {
            return 'Error thrown on line '.$this->getLine().' in file '.$this->getFile();
        }
    }
    class DatabaseException extends Exception {
        //custom error message 
        function customMessage()
        {
            return 'Error thrown on line '.$this->getLine().' in file '.$this->getFile();
        }
    }

    try {
        $conn = @mysqli_connect($host, $username, $password); //connection function to connect to database server
        if (!$conn) {
            throw new ServerException('can\'t connect to sever');
        } else {
            if (!@mysqli_select_db($conn, $database)) { //select database function
                throw new DatabaseException('can\'t select database');
            }
        }
    } catch (ServerException $ex) {
        // echo 'Error : '.$ex->getMessage(); //get message pass in throw
        echo $ex->customMessage();
    } catch (DatabaseException $ex) {
        echo 'Error : '.$ex->getMessage();
    }
    

?>