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
</head>

<body>
	<?php
		$sql_search = "SELECT * FROM notes WHERE id=$id LIMIT 1";
		$results = mysqli_query($db, $sql_search) or die(mysql_error());
		
		if(mysqli_num_rows($results) > 0) {
			while($row = mysqli_fetch_assoc($results)) {
				$title = $row['title'];
				$note = $row['note'];
				$tags = $row['tags'];
				$date = $row['date'];
				
				echo "<h2>$title - $date</h2><h1>$note</h1><h3>tags</h3>";
			}
		} else {
			echo "Nothing here...";
		}
	?>

</body>
</html>
