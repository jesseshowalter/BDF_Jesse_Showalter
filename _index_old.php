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
<!--
		<?php 
			$dsn = "mysql:host=127.0.0.1;port=8889;dbname=bdf1310";
			$db_user = "root";
			$db_pass = "root";
			$db = new \PDO($dsn, $db_user, $db_pass);
			$statement = $db->prepare("
				SELECT taskTitle, taskDescription
				FROM taskInfo
			");
			if ($statement->execute()){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				//var_dump($statement);
				foreach ($rows as $num => $row) {
					echo "taskTitle";
				};

			};
		 ?>
-->
	</div>
</body>
</html>