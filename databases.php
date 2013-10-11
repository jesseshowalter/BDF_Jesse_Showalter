<?php 
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "bdf1310";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occured.
	if(mysqli_connect_errno()){
		die("Database connection failed: " . 
			mysqli_connect_error() . 
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>

<?php  
	// 2. Perform databse query
	$honeydo = "SELECT * ";
	$honeydo .= "FROM taskInfo ";
	//$honeydo .= "WHERE taskGroup_id = 1 ";


	$result = mysqli_query($connection, $honeydo);
	// test if there was a query error
	if(!$result){
		die("Database query failed.");
	}

?>
<!DOCTYPE>
<html>
<head>
	<title>BDF - Jesse Showalter</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper">
		<h1>MeDo</h1>
		<h2>My Honey Do List</h2>
		<ul>
		<?php  
			// 3. Use return data (if any)
			while($taskList = mysqli_fetch_assoc($result)) {
				// output data from each row
		?>
			<li><a href="#"><?php echo $taskList["taskTitle"]; ?></a></li>
		<?php 
			};
		?>
		</ul>
		<?php  
			// 4. Release returned data
			mysqli_free_result($result);
		?>
	</div>
</body>
</html>

<?php 
	// 5. Close databse connection
	mysqli_close($connection);
?>