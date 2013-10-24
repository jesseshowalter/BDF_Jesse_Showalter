<!DOCTYPE html>
<html lang="en">
	<head>
		
	</head>
	<body>
		<div id="container">
			<h1>Users in my database</h1>

			<!--
			<?php 

				print_r($results);

			?>
			-->

			<?php

			foreach ($results as $row) {
				echo "<strong>User #". $row->id. "<br> </strong>";
				echo $row->username. "<br>";
				echo $row->fullname. "<br>";
				echo $row->location. "<br>";
				echo $row->gender;
				echo "</br>";
				echo "</br>";
			}

			?>



		</div>
	</body>
</html>