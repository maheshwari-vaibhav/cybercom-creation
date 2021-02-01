<?php 


    if (isset($_POST['email']) && isset($_POST['password'])) {
       echo 'Email : '.$_POST['email'].'<br>';
       echo 'Password : '.$_POST['password'].'<br>';

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
                        <input type="submit" value="Sign In" class="btn btn-success">
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