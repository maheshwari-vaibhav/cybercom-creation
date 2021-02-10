<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="libs/action.php" method="POST" onsubmit="return setLoginValidationResponse()">
					<div class="error">
						<?php if (isset($_SESSION['errormsg'])): ?>
							<?=$_SESSION['errormsg'];?>
						<?php endif ?>
					</div>
				  	<div class="form-group">
					    <label for="email">Email:</label>
					    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
					    <span id="email-error" class="error">
                        </span>
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
					    <span id="password-error" class="error">
                        </span>
				  	</div>
				  	
				  	<button type="submit" class="btn btn-primary" name="login">LOGIN</button>
				  	<a href="register.php" class="btn btn-primary">REGISTER</a>
				</form>
			</div> 
		</div>
	</div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/script.js"></script>
</html>