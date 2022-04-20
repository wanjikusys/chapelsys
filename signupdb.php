<?php
include 'dbcon.php';

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO users(id,fname,lname,email,username,password)VALUES(NULL,'$fname','$lname','$email','$username','$password')";


$r = mysqli_query($conn,$sql);

if ($r) {
	// code...
	echo '<script>alert("Record inserted successfully");
	window.location="login.php";
	</script>';
}

?>