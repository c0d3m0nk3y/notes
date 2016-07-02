<?php

	if(!empty($_POST['email']) && !empty($_POST['password'])) {
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>- Login -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">Notes</a>
	</div>
	
	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>
	
	<form action="login.php" method="POST">
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="submit">
	</form>
</body>
</html>
