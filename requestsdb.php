<?php
include 'dbcon.php';


$ptnumber= $_POST['ptnumber'];
$name= $_POST['name'];
$requestor= $_POST['requestor'];
$counsellor= $_POST['counsellor'];
$tdate= $_POST['tdate'];
$appointment="New";
$details=$_POST['details'];


$sql="INSERT INTO requests(id,ptnumber,name,requestor,counsellor,tdate,details,status,appointment)VALUES(NULL,'$ptnumber','$name','$requestor','$counsellor','$tdate','$details','1','$appointment')";


$r = mysqli_query($conn, $sql);

if ($r) {
	// code...
	echo '<script>alert("Record inserted successfully");
	window.location="patientsessions.php";
	</script>';
}
else
{
	echo '<script>alert("exit");
	window.location="patientsessions.php";
	</script>';
}
?>