<?php
session_start();
include 'dbcon.php';

$username=$_POST['username'];
$password=$_POST['password'];


$rs = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and password='$password'");

$rq = (mysqli_fetch_array($rs));	
if ($rq>0){

	$_SESSION['user'] = $username;


	echo '<script>
			window.location = "records.php";
		 
			</script>';
}
else{
	echo '<script>alert("Invalid username or password");
	window.location="login.php";
	</script>';
}
?>