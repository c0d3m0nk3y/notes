<?php
	session_start();
	
	// redirect if not logged in
	if(!isset($_SESSION['id'])) {
		header("Location: index.php");
	}

	include_once("db.php");
	
	$message = '';

	if(isset($_POST['title']) && isset($_POST['note']) && $_POST['title'] != "" && $_POST['note'] != "") {
		$title = $_POST['title'];
		$note = $_POST['note'];
		$tags = $_POST['tags'];
		$sql_store = "INSERT into notes (id, title, note, tags) VALUES (NULL, '$title', '$note', '$tags')";
		$sql = mysqli_query($db, $sql_store) or die(mysql_error());
		#echo "Note '$title' submitted.";
		header("Location: notes.php");
	} else {
		$message = "Enter Title and Note.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>- Notes -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="header">
		<a href="index.php">Notes</a>
	</div>
	
	<h1>Add A Note</h1>
	<form action="index.php" method="POST">
		<input type="text" name="title" value="" placeholder="Note Title" />
		<input type="text" name="note" value="" placeholder="Note" />
		<input type="text" name="tags" value="" placeholder="Tags" />
		<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>