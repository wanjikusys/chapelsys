<?php
//include('dbcon.php');
session_start();
 
if(isset($_SESSION['user']))
{
	
		$user_in = $_SESSION['user'];
}
else {

		echo '<script>alert("Please Login!")

	window.location ="login.php";
    </script>';	

	}
?>