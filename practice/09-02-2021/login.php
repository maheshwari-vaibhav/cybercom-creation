<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<?php if (isset($_GET['data'])): ?>
		<?php print_r($_GET['data']) ?>
	<?php endif ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="libs/action.php" method="POST">
				  	<div class="form-group">
					    <label for="username">Username:</label>
					    <input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
				  	</div>
				  	
				  	<button type="submit" class="btn btn-primary" name="login">Login</button>
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
</html>