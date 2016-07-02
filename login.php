<?php

	require 'db.php';

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$records = $db->prepare('SELECT id,username,password,email FROM users WHERE username = :username');
		$records->bindParam(':username', $_POST['username']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		if(!count($results) > 0) {
			die('no results');
		}
		
		if(!password_verify($_POST['password'], $results['password'], PASSWORD_DEFAULT)) {
			die('password mismatch');
		}
		
		if(count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			die('logged in');
		} else {
			die('login error');
		}
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
		<input type="text" placeholder="Enter your username" name="username">
		<input type="password" placeholder="and password" name="password">
		<input type="submit">
	</form>
</body>
</html>
