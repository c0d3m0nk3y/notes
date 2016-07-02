<?php
	session_start();
	include("db.php");
	
	// If we land on the page with no query, go to index.php
	if(!isset($_GET['id'])) {
		header("Location: index.php");
	} else {
		$id = $_GET['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>- Note -</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="header">
		<a href="index.php">Notes</a>
	</div>
	
	<?php
		$sql_search = "SELECT * FROM notes WHERE id=$id LIMIT 1";
		$results = mysqli_query($db, $sql_search) or die(mysql_error());
		
		if(mysqli_num_rows($results) > 0) {
			while($row = mysqli_fetch_assoc($results)) {
				$title = $row['title'];
				$note = $row['note'];
				$tags = $row['tags'];
				$date = $row['date'];
				
				echo "<h2>$title - $date</h2><p>$note</p><p><i>$tags</i></p>";
			}
		} else {
			echo "Nothing here...";
		}
	?>

</body>
</html>
