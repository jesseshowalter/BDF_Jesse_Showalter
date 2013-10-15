<div class="welcomepage">
	<?php include ('views/header.php'); ?> 
</div>	
	<article id="examples" class="stage">

      <div class="jumbotron">
		<h4>Sign In</h4>
		<?php $message = $_GET['message'];
		
		
		//Alert messages based on integers
		if($message == 1) {
		echo '
		<div class="alert">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Invalid username or password</strong>
		</div>
		';
		}
		
		else if($message == 2) {
		echo '
		<div class="alert alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>You have successfully logged out! </strong>
		</div>
		';
		}
		
		?>
		
		
		<form action="models/auth_check.php" method="post" class="form-signin">
			<input name="username" type="text" class="input-block-level" placeholder="Username">
			<input name="password" type="password" class="input-block-level" placeholder="Password"> 
			<button class="button" type="submit">Sign in</button>	
		</form>
	  
        <a class="button" href="register.php">Register New User</a>
      </div>

    </article>


<?php include ('views/footer.php'); ?> 