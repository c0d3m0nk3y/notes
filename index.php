<?php
	session_start();
	
	// redirect if not logged in
	if(!isset($_SESSION['id'])) {
		header("Location: login.php");
	}
	
	include_once("db.php");
	
	if(isset($_POST['title']) && isset($_POST['note']) && $_POST['title'] != "" && $_POST['note'] != "") {
		$title = $_POST['title'];
		$note = $_POST['note'];
		$tags = $_POST['tags'];
		$sql_store = "INSERT into notes (id, title, note, tags) VALUES (NULL, '$title', '$note', '$tags')";
		$sql = mysqli_query($db, $sql_store) or die(mysql_error());
		echo "Note '$title' submitted.";
	} else {
		echo "Enter Title and Note.";
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

	<h1>New Note</h1>
	<form action="index.php" method="POST">
		<input type="text" name="title" value="" placeholder="Note Title" />
		<input type="text" name="note" value="" placeholder="Note" />
		<input type="text" name="tags" value="" placeholder="Tags" />
		<input type="submit" name="submit" value="Submit" />
	</form>
	
	<br />
	
	<h1>Notes</h1>
	<table border='1'>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Tags</th>
			<th>Date</th>
		</tr>
		
		<?php
			$sql_list = "SELECT * FROM notes ORDER BY id ASC";
			$results = mysqli_query($db, $sql_list) or die(mysql_error());
			$notes = "";
			
			if(mysqli_num_rows($results) > 0) {
				while($row = mysqli_fetch_assoc($results)) {
					$id = $row['id'];
					$title = $row['title'];
					$tags = $row['tags'];
					$date = $row['date'];
					
					$notes .= "<tr><td>$id</td><td>$title</td><td>$tags</td><td>$date</td><td><a href='note.php?id=$id'>Open</a></td></tr>";
				}
				
				echo $notes;
			} else {
				echo "No resutls";
			}
		?>
	</table>
	<br />

	<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
		Click to display date.
	</button>

	<p id="demo" />

</body>
</html>
