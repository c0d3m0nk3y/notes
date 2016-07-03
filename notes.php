<?php
	session_start();
	
	// redirect if not logged in
	if(!isset($_SESSION['id'])) {
		header("Location: index.php");
	}

	require 'db.php';

	$records = $db->prepare('SELECT id,username,password,email FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$username = NULL;

	if(count($results) > 0) {
		$username = $results;
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

	<a href="addnote.php">Add A Note</a>
	-
	<a href="profile.php"><?php echo $results['username'] ?></a>
	-
	<a href="logout.php">Logout</a>

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
	
	
	
</body>
</html>
