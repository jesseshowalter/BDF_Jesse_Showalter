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
		<link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="/js/html5shiv.js"></script>
			<script type="text/javascript" src="/js/selectivizr.js"></script>
			<script type="text/javascript" src="/js/respond.js"></script>
		<![endif]-->
	</head>

	<body>

		<header>
			<h1><a href="#"><span>ME</span>DO</a></h1>
		</header>

		<!-- Features -->	
		

		<article id="examples">
			<h3>A simple todo app for the nerd on the go</h3>
			<ul>



				<?php  
					// 3. Use return data (if any)
					while($taskList = mysqli_fetch_assoc($result)) {
						// output data from each row
				?>
					<li>
						<a href="#">
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

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-9052680-6']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>

</html>


<?php 
	// 5. Close databse connection
	mysqli_close($connection);
?>