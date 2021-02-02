<?php 

    require 'dbconnect.php';

    if (isset($_POST['submit'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "select * from `form3` where `email` = '".$email. "' and `password` = '".$password."'";

                if ($query = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($query) > 0) {
                        echo 'Login Success';
                    } else {
                        echo 'Wrong Email or Password';
                    }
                    
                } else {
                    echo 'somthing went wrong';
                }
            } else {
                echo 'Somthing Went wrong!!!';
            }  
        } else {
            echo 'Somthing Went wrong!!!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="container mt-5">
  <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card border-round">
            <form name="form5" action="form5.php" onsubmit="return validateForm5();" method="post">
                <div class="card-header bg-danger text-white border-round-top"><h3><i class="fa fa-lock"></i> &nbsp;Sign in</h3></div>
                <div class="card-body">
                    E-mail Address<br>
                    <input type="text" name="email" id="email" placeholder="mail@address.com"><span class="error" id="emailerror"></span>
                    Password<br>
                    <input type="password" name="password" id="password" placeholder=""><span class="error" id="passworderror"></span><br>
                    <div class="text-center">
                        <input type="submit" name="submit" value="Sign In" class="btn btn-success">
                    </div>
                </div> 
            </form>
        </div>
      </div>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>