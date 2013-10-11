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
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";


	$result = mysqli_query($connection, $query);
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
		<h1>Jesse Showalter</h1>
		<p><?php 
			echo "Hello everyone, the current time in Hawaii is" . " " . date("D M d, Y G:i a") ;
			?>
		</p>
		<?php  
			// 3. Use return data (if any)
			while($row = mysqli_fetch_row($result)) {
				// output data from each row
				var_dump($row);
				echo "<hr />";
			};
		?>
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