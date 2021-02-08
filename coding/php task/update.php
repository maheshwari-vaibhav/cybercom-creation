<?php 
	session_start();
 	require_once 'libs/db.inc.php';
    $db = new Database;

 	if (isset($_GET['id']) && !empty($_GET['id'])) {
 		$data = $db->fetchDataId('contacts',$_GET['id']);
 		if (!$data) {
 			die("No record found!!"); 
 		} 
 	} 
 	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
	    <a class="navbar-brand" href="#">Webapp</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	                <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="contacts.php"><i class="fas fa-address-book"></i> Contacts</a>
	            </li>
	        </ul>
	    </div>
	</nav>

    <div class="container mt-5">
    	<div class="row">
    		<div class="col-12">
    			<h3>Update Contact</h3>
    			<hr>
    		</div>
    	</div>
    	<form action="libs/action.php" method="post" id="createform" name="createform" onsubmit="return setValidationResponse()">
    		<div class="row">
    			<input type="hidden" name="id" id="id" value="<?= isset($_SESSION['id'])? $_SESSION['id']:$data['id'] ?>">
	    		<div class="col-md-6">
	    			<div class="form-group">
					    <label for="name">Name:</label>
					    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?= isset($_SESSION['name'])? $_SESSION['name']:$data['name'] ?>">
					    <span id="name-error" class="error">
					    	<?php if (isset($_SESSION['nameerror'])){ echo $_SESSION['nameerror']; } ?>  
					    </span>
					 </div>
	    		</div>

	    		<div class="col-md-6">
	    			<div class="form-group">
					    <label for="email">Email:</label>
					    <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" value="<?= isset($_SESSION['email'])? $_SESSION['email']:$data['email'] ?>">
					    <span id="email-error" class="error">
					    	<?php if (isset($_SESSION['emailerror'])){ echo $_SESSION['emailerror']; } ?>
					    </span>

					 </div>
	    		</div>
    		</div>

    		<div class="row">
	    		<div class="col-md-6">
	    			<div class="form-group">
					    <label for="phone">Phone:</label>
					    <input type="text" class="form-control" placeholder="Enter Phone" name="phone" id="phone" value="<?= isset($_SESSION['phone'])? $_SESSION['phone']:$data['phone'] ?>">
					    <span id="phone-error" class="error">
					    	<?php if (isset($_SESSION['phoneerror'])){ echo $_SESSION['phoneerror']; } ?>
					    </span>
					 </div>
	    		</div>

	    		<div class="col-md-6">
	    			<div class="form-group">
					    <label for="title">Title:</label>
					    <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="<?= isset($_SESSION['title'])? $_SESSION['title']:$data['title'] ?>">
					    <span id="title-error" class="error">
					    	<?php if (isset($_SESSION['titleerror'])){ echo $_SESSION['titleerror']; } ?>
					    </span>
					 </div>
	    		</div>
    		</div>
    		<div class="row">
	    		<div class="col-md-6">
	    			<div class="form-group">
					    <label for="datetime">Created:</label>
					    <input type="datetime-local" class="form-control" placeholder="Enter Title" name="datetime" id="datetime"
					    value="<?= isset($_SESSION['datetime'])? $_SESSION['datetime']:date('Y-m-d\TH:i', strtotime($data['createdAt'])) ?>" >
					    <span id="datetime-error" class="error">
					    	<?php if (isset($_SESSION['dateerror'])){ echo $_SESSION['dateerror']; } ?>
					    </span>
					 </div>
	    		</div>	
    		</div>
    		<div class="row">
	    		<div class="col-md-12">
	    			<div class="form-group">
					    <button type="submit" class="btn px-5 btn-success" name="update">Update</button>
					 </div>
	    		</div>

	    		
    		</div>
    	</form>
    </div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Latest fonawesome icon JavaScript -->
<script src="https://kit.fontawesome.com/ea4f69ef80.js" crossorigin="anonymous"></script>

<!-- Validation JavaScript -->
<script src="js/script.js"></script>
</html>