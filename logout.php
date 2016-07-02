<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>- Logout -</title>
</head>
<body>
	<h1>You have logged out...</h1>
	<meta http-equiv="refresh" content="1;url=login.php" />
</body>
</html>
