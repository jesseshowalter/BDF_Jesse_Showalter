<div class="welcomepage">
<?php include ('views/header.php'); ?> 
</div>

<?php
//Gets the form submitted data

$register = $_GET['register'];

if($register == 1 && !empty($_POST)) // Checks if the form is submitted or not

{

//retrieve all submitted data from the form

$username = $_POST['username'];
$username = strip_tags($username); //strip tags are used to take plain text only, in case the register-er inserts dangours scripts.
$username = str_replace(' ', '', $username); // to remove blank spaces

$password = $_POST['password'];
$password = strip_tags($password); 
$password = md5($password); // md5 is used to encrypt your password to make it more secure.

$full_name = $_POST['full_name'];
$full_name = strip_tags($full_name);

$location = $_POST['location'];
$location = strip_tags($location);

$gender = $_POST['gender'];


$sql="SELECT id FROM users WHERE username='$username'"; // checking username already exists
$qry=mysql_query($sql);
$num_rows = mysql_num_rows($qry); 


//alert if it already exists
if($num_rows > 0) 
{
echo '
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>username already exists!</strong> please choose another username
</div>
';
}

else 
{
// if username doesn't exist insert new records to database
 $success = mysql_query("INSERT INTO users(username, password, fullname, location, gender) VALUES ('$username', '$password', '$full_name','$location','$gender')");

 
 //messages if the new record is inserted or not
if($success) { 
echo '
<div class="alert alert-success">
Registration Successful ! please login to your account
</div>
';
} 

else {
echo '
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Registration Unsuccessful! </strong> please try again
</div>
';


}

}

}
?>
<article id="examples" class="stage">
  <div class="jumbotron">

  <?php
  //hiding form once the registration is successful
   if(!$success) { 
   ?>
  <form action="register.php?register=1" method="post" name="myForm" onsubmit="return(validate());">
    <h4>Sign Up as a new user</h4>

      <input name="username" type="text" class="input-block-level"  placeholder="Username">

      <input name="password" type="password" class="input-block-level" placeholder="Password">

      <input name="full_name" type="text" class="input-block-level" placeholder="Full Name">

      <input name="location" type="text" class="input-block-level" placeholder="Location">

      <label>Gender</label>
        <select name="gender">
          <option>Male</option>
          <option>Female</option>
        </select>
   
   
        <!-- Ready made validation script, if you want any mandatory fields  (optional) --> 
  
 
      <script type="text/javascript">
        <!--
        function validate()
        {
           if( document.myForm.username.value == "" )
           {
             alert( "Please provide your username!" );
             document.myForm.username.focus() ;
             return false;
           }
           if( document.myForm.password.value == "" )
           {
             alert( "Please provide your password!" );
             document.myForm.password.focus() ;
             return false;
           }
           
           if( document.myForm.full_name.value == "" )
           {
             alert( "Please provide your full name!" );
             document.myForm.full_name.focus() ;
             return false;
           }
           
           return( true );
        }
        //-->
        </script> 
   

    <button type="submit" class="button">Register Now</button>
    </br>
    <a class="button" href="signin.php" > ← Sign In </a>

    </form>
  </div> <!--jumbotron -->
</article> <!--examples -->
<?php } ?>















<?php include ('views/footer.php'); ?> 