<?php
	session_start();
	include_once("db.php");
	
	if(isset($_POST['title']) && isset($_POST['note']) && $_POST['title'] != "" && $_POST['note'] != "") {
		$title = $_POST['title'];
		$note = $_POST['note'];
		$tags = $_POST['tags'];
		$sql_store = "INSERT into notes (id, title, note, tags) VALUES (NULL, '$title', '$note', '$tags')";
		$sql = mysql_query($db, $sql_store) or die(mysql_error());
		echo "Note '$title' submitted.";
	} else {
		echo "Enter Title and Note.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>- Notes -</title>
</head>

<body>

	<h1>Notes</h1>
	<form action="index.php" method="POST">
		<input type="text" name="title" value="" placeholder="Note Title" />
		<input type="text" name="note" value="" placeholder="Note" />
		<input type="text" name="tags" value="" placeholder="Tags" />
		<input type="submit" name="submit" value="Submit" />
	</form>
	
	<br />

	<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
		Click to display date.
	</button>

	<p id="demo" />

</body>
</html>
