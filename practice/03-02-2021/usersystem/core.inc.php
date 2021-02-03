<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */
    session_start();

    $current_file = $_SERVER['SCRIPT_NAME'];
    if (isset($_SERVER['HTTP_REFERER'])) {
        $http_referer = $_SERVER['HTTP_REFERER'];
    }
    else {
        $http_referer = $current_file;
    }

    function getUserField($field)
    {
        global $conn;
        $sql = "select * from `user` where `id` = '".$_SESSION['user_id']. "'";

            if ($query = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                       return $row[$field];
                    }
                    
                }
            }
    }
    
   
?>
