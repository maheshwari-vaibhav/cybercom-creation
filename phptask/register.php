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
				<form action="libs/action.php" method="POST" onsubmit="return setRegisterValidationResponse()">
					<div class="form-group">
					    <label for="prefix">Prefix:</label>
					    <select class="form-control" name="prefix" id="prefix">
					    	<option value="">Please select prefix</option>
					    	<option value="1">Mr.</option>
					    	<option value="2">Mrs.</option>
					    	<option value="3">Miss.</option>
					    	<option value="4">Dr.</option>
					    </select>
					    <span id="prefix-error" class="error">
					    	<?php if (isset($_SESSION['prefixerror'])){ echo $_SESSION['prefixerror']; } ?>
					    </span>
				  	</div>
					<div class="form-group">
					    <label for="fname">First Name:</label>
					    <input type="text" class="form-control" placeholder="Enter first name" id="fname" name="fname" <?php if (isset($_SESSION['fname'])): ?>
					    	value = <?=$_SESSION['fname']?>
					    <?php endif ?>>
					    <span id="fname-error" class="error">
					    	<?php if (isset($_SESSION['fnameerror'])){ echo $_SESSION['fnameerror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" placeholder="Enter Last Name" id="lname" name="lname" <?php if (isset($_SESSION['lname'])): ?>
					    	value = <?=$_SESSION['lname']?>
					    <?php endif ?>>
					    <span id="lname-error" class="error">
					    	<?php if (isset($_SESSION['lnameerror'])){ echo $_SESSION['lnameerror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <label for="email">Email:</label>
					    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email"<?php if (isset($_SESSION['email'])): ?>
					    	value = <?=$_SESSION['email']?>
					    <?php endif ?>>
					    <span id="email-error" class="error">
					    	<?php if (isset($_SESSION['emailerror'])){ echo $_SESSION['emailerror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <label for="mnumber">Mobile Number:</label>
					    <input type="text" class="form-control" placeholder="Enter mobile number" id="mnumber" name="mnumber" <?php if (isset($_SESSION['mnumber'])): ?>
					    	value = <?=$_SESSION['mnumber']?>
					    <?php endif ?>>
					    <span id="mnumber-error" class="error">
					    	<?php if (isset($_SESSION['phoneerror'])){ echo $_SESSION['phoneerror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
					    <span id="password-error" class="error">
					    	<?php if (isset($_SESSION['passworderror'])){ echo $_SESSION['passworderror']; } ?>
					    </span>
				  	</div>

				  	<div class="form-group">
					    <label for="cpassword">Confirm Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="cpassword" name="cpassword">
					    <span id="cpassword-error" class="error">
					    	<?php if (isset($_SESSION['cpassworderror'])){ echo $_SESSION['cpassworderror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <label for="info">Information:</label>
					    <textarea class="form-control" cols="30" rows="3" name="info" id="info">
					    	<?php if (isset($_SESSION['info'])): ?>
					    		<?=$_SESSION['info']?>
					    	<?php endif ?>
					    </textarea>
					    <span id="info-error" class="error">
					    	<?php if (isset($_SESSION['infoerror'])){ echo $_SESSION['infoerror']; } ?>
					    </span>
				  	</div>
				  	<div class="form-group">
					    <input type="checkbox" name="term" id="term"> Hereby, I accept terms & condition
					    <span id="term-error" class="error">
					    </span>
				  	</div>
				  	<button type="submit" class="btn btn-primary" name="register">SUBMIT</button>
				  	
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