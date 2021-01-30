<?php
    /*
        author  : vaibhav maheshwari
        date    : 30-01-2021
    */

    // Video - 96 - Encryption Part 1
    // Video - 97 - Encryption Part 2

    if (isset($_POST['password'])) {
        if (!empty($_POST['password'])) {
            $password = md5($_POST['password']);

            $filename = 'hash.txt';
            $handler = fopen($filename, 'r');
            $paasword_hash = fread($handler, filesize($filename));
            if ($password == $paasword_hash) {
                echo 'Password Match!';
            } else {
                echo 'Password Not Match!';
            }
            
        } else {
            echo 'Password is required!';
        }
    }

   
?>

<form action="md5.php" method="post">
Password:<br><br>
<input type="text" name="password" id="password"><br><br>
<input type="submit" value="Login">
</form>