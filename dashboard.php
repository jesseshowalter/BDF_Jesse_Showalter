<?php
//place this code on top of all the pages which you need to authenticate

//--- Authenticate code begins here ---
session_start(); 
//checks if the login session is true
if(!session_is_registered(username)){
header("location:index.php");
}
$username = $_SESSION['username'];

// --- Authenticate code ends here ---
?>
<div id="dashboard_main">
<?php include ('views/header.php'); ?> 
</div>

<?php
$delete = $_GET['delete'];
$document_get = mysql_query("SELECT * FROM users WHERE username='$username'");
$match_value = mysql_fetch_array($document_get);
$fullname = $match_value['fullname'];
$gender = $match_value['gender'];
$location = $match_value['location'];
$user_id = $match_value['id'];

$user_id = $match_value['id'];
?>
	

	<article id="examples" class="stage">
	


    
		<h3>Aloha <?php echo $username; ?> <!--</br> Add a New Task --></h3>
		<a class="button" href="add.php">Click to add a task</a>
		
		<!-- this is the succes message once the itme is deleted -->
		<?php
		if($delete) {
			
			$success = mysql_query("DELETE FROM todolist WHERE id='$delete'");
			
		if($success) {
			echo '<div class="alert alert-success">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong> Successfully Deleted! </strong>. </div>';
			}
		}
		?>
		<ul>
			<legend class="shorter">Your Current Tasks </legend>
		</ul>
		<ul>


			<?php
			$document_get = mysql_query("SELECT * FROM todolist WHERE user_id='$user_id' ORDER BY id DESC");
			while($match_value = mysql_fetch_array($document_get)) { 
			?>
			<li>
				
			
		
				<h4><textarea id="<?php echo $match_value['id']; ?>" class=" task_description task_title <?php echo $match_value['id']; ?>" onchange="javascript:getText(this)" <?php if($match_value['check_value'] == 'true') { echo 'disabled '; echo ' style="text-decoration:line-through"'; } ?> > <?php echo $match_value['description']; ?></textarea></h4>
			</li>
			<?php
			}
			?>

			
		</ul>
		


	 </article>

	

<script>

$('textarea').autoResize();

function getText(text){

	var id = text.id;
	var text = text.value;
	model = {
            id: id,
			text: text
             };
	 $.ajax({
      url: "save.php",
      type: "post",
      data: model,
      success: function(data){
		  $('.success_msg').show().fadeIn(2000).fadeOut(4000);
      },
      error:function(){
          alert('error is saving');
      }   
    }); 
}



function getcheck(check){

	var id = check.id;
	var check = check.checked;
	if(check == true) {
	 $("."+id).prop('disabled', true).attr('style','text-decoration:line-through');
	} else {
	 $("."+id).prop('disabled', false).attr('style','text-decoration:none');
	}
	model = {
            id: id,
			check: check
             };
	 $.ajax({
      url: "save.php",
      type: "post",
      data: model,
      success: function(data){
		    $('.success_msg').show().fadeIn(2000).fadeOut(4000);
      },
      error:function(){
          alert('error is saving');
      }   
    }); 
}

</script>
	
	
	
	
	
 <script>
 $('.logout').click(function(){
    return confirm("Are you sure you want to Logout?");
});
$('.delete').click(function(){
    return confirm("Are you sure you want to Delete it?");
});
</script>
<?php include ('views/footer.php'); ?> 