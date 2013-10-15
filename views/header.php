<?php include ('config.php'); ?> 

<!DOCTYPE html>

<html lang="en">

<!--

PHP Login Script - For more tutorials visit tutbuzz.com

-->

  <head>
    <meta charset="utf-8" />
		<title>MEDO | A visual todo app for the nerd on the go</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="title" content="MEDO | A visual todo app for the nerd on the go" />
		<meta name="description" content="A visual todo app for the nerd on the go." />
		<meta name="keywords" content="MEDO, todo, application, nerds, fullsail" />
		<meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">

	    <!-- Javascript -->
	    <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>

	    <!-- Stylesheets -->
	    <link href='http://fonts.googleapis.com/css?family=Raleway:500,900,200' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../assets/css/index.css" type="text/css" media="screen" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="/js/html5shiv.js"></script>
			<script type="text/javascript" src="/js/selectivizr.js"></script>
			<script type="text/javascript" src="/js/respond.js"></script>
		<![endif]-->

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	 <link href="../assets/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
	
	

  </head>

  <body>
  	<header>
		<h1><a href="dashboard.php"><span>ME</span>DO</a></h1>
		<div class="control_nav">
			<ul class="controls">
			  	<!-- <li><a href="add.php"> Add New List </a></li> -->
			  	<li><a href="settings.php"> Settings </a></li>
			  	<li><a href="logout.php" > Logout</a></li>
			</ul>       
		</div>
	</header>
  <div class="success_msg" style="display:none"> Saved! </div>
  
    <div class="container-narrow">
	
	