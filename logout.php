<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>- Logout -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">Notes</a>
	</div>
	
	<h1>You have logged out...</h1>
	<meta http-equiv="refresh" content="1;url=login.php" />
</body>
</html>
