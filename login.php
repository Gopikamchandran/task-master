
<?php
session_start();
require_once('db.php');
 
 
$email=$_POST['email'];
$password=$_POST['password'];
$email= stripslashes($email);
$password= stripslashes($password);
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
//$password=md5($password);
$_SESSION['user']=$email;
//echo $_SESSION['user'];
//return false;
$salt="zennode";
$password=sha1($password.$salt);
//echo "$password";
//return false;
$sql="SELECT * from register where email='$email' and password='$password'";
//echo "password";
//$sql="SELECT * from register where email='$email' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count= mysqli_num_rows($result);

if($count)
{
	?>
	<script>
		alert("Successfull");
		window.location="time.php";
	</script>
	
  <?php
  
}
else{
	?>

	<script>
		alert("Invalid Username or Password");
		window.location="sampleref.php";
	</script>
 
	<?php
}

?> 