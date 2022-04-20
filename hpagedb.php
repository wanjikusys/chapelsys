<?php
include 'dbcon.php';

$Sermon= $_POST['Sermon'];
$Preacher= $_POST['Preacher'];
$Readings= $_POST['Readings'];
$Teachings=$_POST['Teachings'];
$ttimes=$_POST['ttimes'];

$sql="INSERT INTO lists(id,Preacher,Sermon,Readings,Teachings,ttimes)VALUES(NULL,'$Preacher','$Sermon','$Readings','$Teachings', '$ttimes')";


$r = mysqli_query($conn, $sql);

if ($r) {
	// code...
	echo '<script>alert("Record inserted successfully");
	window.location="records.php";
	</script>';
}
else
{
	echo '<script>alert("exit");
	window.location="records.php";
	</script>';
}
?>