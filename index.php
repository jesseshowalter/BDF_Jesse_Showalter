<?php include ("models/OpenConnection.php"); ?>
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
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>MEDO | A visual todo app for the nerd on the go</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="title" content="MEDO | A visual todo app for the nerd on the go" />
		<meta name="description" content="A visual todo app for the nerd on the go." />
		<meta name="keywords" content="MEDO, todo, application, nerds, fullsail" />
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

	    <!-- Javascript -->
	    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>

	    <!-- Stylesheets -->
	    <link href='http://fonts.googleapis.com/css?family=Raleway:500,900,200' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/index.css" type="text/css" media="screen" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="/js/html5shiv.js"></script>
			<script type="text/javascript" src="/js/selectivizr.js"></script>
			<script type="text/javascript" src="/js/respond.js"></script>
		<![endif]-->
	</head>

	<body>

		<header>
			<h1><a href="#"><span>ME</span>DO</a></h1>
			<h2>A simple task list</h2>
		</header>

		<!-- Features -->	

		<article id="examples" class="stage">
			<h3>Add New Task</h3>
			<a class="button" href="#">Click to add</a>


			<ul>



				<?php  
					// 3. Use return data (if any)
					while($taskList = mysqli_fetch_assoc($result)) {
						// output data from each row
				?>
				<?php $link_name = "Details"; ?>
				<?php $id = task; ?>
					<li>
						<a href="details.php?id=<?php echo $id; ?>">
							<img src="<?php echo $taskList["taskPhoto"]; ?>" />
							<h4><?php echo $taskList["taskTitle"]; ?></h4>
							<span><?php echo $taskList["taskDescription"]; ?></span>
						</a>
					</li>

					
				<?php 
					};
				?>
				</ul>
				<?php  
					// 4. Release returned data
					mysqli_free_result($result);
				?>

			</ul>
		</article>


		
		<footer>
			<div class="center">
				<h3>BUILT BY</h3>
				<section id="company">
					<a href="http://www.jesseshowalter.com">Jesse Showalter</a>
				</section>
			</div>
		</footer>

	</body>

</html>


<?php include ("models/CloseConnection.php"); ?>