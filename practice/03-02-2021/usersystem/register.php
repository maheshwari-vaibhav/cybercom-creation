<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */
    require 'core.inc.php';
    require 'db.inc.php';
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        header('Location: index.php');
    }

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
       if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
           $username = $_POST['username'];
           $password = $_POST['password'];
           $cpassword = $_POST['password'];
           $firstname = $_POST['firstname'];
           $lastname = $_POST['lastname'];

           if ($password != $cpassword) {
               echo 'Password and confirm password not match!';
           } else {
               $sql = 'select * from `user` where `username` = \''.$username.'\'';
               $query = mysqli_query($conn, $sql);
               if (mysqli_num_rows($query) > 0) {
                   echo 'username already exist!!!';
               } else {
                   $sql = "INSERT INTO `user` (`username`, `password`, `firstname`, `surname`) VALUES ('$username', '".md5($password)."', '$firstname', '$lastname')";
                   if ($query = mysqli_query($conn, $sql)) {
                       echo 'Register successfull!!';
                   } else {
                       echo 'Somthing went wrong please try after sometime';
                   }
               }
           }
       } else {
           echo 'All Fields are required';
       }
       
    }


?>


<form action="<?= $current_file; ?>" method="post">
    Username: <br>
    <input type="text" name="username" id="username"><br><br>
    Password: <br>
    <input type="password" name="password" id="password"><br><br>
    Confirm Password: <br>
    <input type="password" name="cpassword" id="cpassword"><br><br>
    Firstname: <br>
    <input type="text" name="firstname" id="firstname"> <br><br>
    Lastname: <br>
    <input type="text" name="lastname" id="lastname"> <br><br>
    <input type="submit" value="Register">
</form>