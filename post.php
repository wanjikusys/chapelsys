
<?php
include ('dbcon.php');


// $item_id=$_POST['item_id'];
$name= $_POST['name'];
$category= $_POST['category'];
$testament= $_POST['testament'];
$description= $_POST['description'];


$sql="INSERT INTO biblestock (record_id, name, category,testament, description) VALUES (NULL,'$name', '$category','$testament', '$description')";
$r = mysqli_query($conn, $sql);



$sql2 = "INSERT INTO items_in (record_id,item_id,tdate,quantity,stock_type)VALUES( NULL,(SELECT record_id FROM biblestock ORDER BY record_id DESC LIMIT 1), NOW(),0,'New ')";
$r2 = mysqli_query($conn, $sql2);


if($r2) {
  # code...
  echo '<script>alert("Record inserted successfully");
  window.location = "bible_stock.php";


  </script>';

}

?>