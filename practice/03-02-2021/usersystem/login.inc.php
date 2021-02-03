<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = mysqli_escape_string($conn, $_POST['username']);
            $password = mysqli_escape_string($conn, $_POST['password']);
            $sql = "select * from `user` where `username` = '".$username. "' and `password` = '".md5($password)."'";

            if ($query = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $user_id = $row['id'];
                    }
                    $_SESSION['user_id'] = $user_id;
                    header('Location: '.$current_file);
                } else {
                    echo 'Wrong Email or Password';
                }
                
            }
        } else {
            echo 'All Fields are required!!!';
        }  
    }

    
?>

<form action="<?= $current_file; ?>" method="post">
Username: <br>
<input type="text" name="username" id="username"> <br><br>
Password: <br>
<input type="password" name="password" id="password"><br><br>
<input type="submit" value="Login">
</form>
