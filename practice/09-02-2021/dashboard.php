<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php echo isset($_SESSION['username'])? $_SESSION['username']:''; ?><a href="libs/action.php?action=logout">logout</a>
</body>
</html>