<?php
	require 'db.php';
	
	// TODO: Check passwords match

	if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>- Register -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">Notes</a>
	</div>
	
	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>
	
	<form action="register.php" method="POST">
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="password" placeholder="confirm password" name="confirm_password">
		<input type="submit">
	</form>
	
</body>
</html>
