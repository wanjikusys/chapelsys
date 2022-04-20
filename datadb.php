<?php
include 'dbcon.php';

$reqid=$_GET['requestid'];
$ptnumber= $_POST['ptnumber'];
$pname= $_POST['pname'];
$counsellor= $_POST['counsellor'];
$saved= $_POST['saved'];
$church= $_POST['church'];
$reason= $_POST['reason'];
$assessment= $_POST['assessment'];
$information=$_POST['information'];
// $apptdate=$_POST['apptdate'];



$sql="INSERT INTO consellingdata(id,ptnumber,pname,counsellor,saved,church,reason,assessment,information,ttimes)VALUES(NULL,'$ptnumber','$pname','$counsellor','$saved','$church','$reason','$assessment','$information',NULL)";
$r = mysqli_query($conn, $sql);
$sql2="UPDATE requests SET status='2' WHERE id= $reqid ";
	$r2 = mysqli_query ($conn, $sql2);

// if(!is_null($apptdate)){
// $sql2="UPDATE requests SET status='1',tdate='$apptdate',appointment='NEXT' WHERE id= $reqid ";
// $r2 = mysqli_query ($conn, $sql2);

// }
// if (is_null($apptdate)) {


// 	$sql2="UPDATE requests SET status='2' WHERE id= $reqid ";
// 	$r2 = mysqli_query ($conn, $sql2);


// }


if ($r) {
	// code...
	echo '<script>alert("Record inserted successfully");
	window.location="counselling records.php";
	</script>';
}
else
 {
 	echo '<script>alert("exit");
	window.location="patientsessions.php";
 	</script>';
}
?>