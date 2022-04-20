<?php
include ('dbcon.php');



// get the post records
// $item_id = $_POST['item_id'];
$tdate = $_POST['tdate'];
$quantity = $_POST['quantity'];
$stock_type = $_POST['stock_type'];
$activity='Add';


//database insert SQL code
 $sql = "INSERT INTO items_in (record_id,item_id,tdate,quantity,stock_type)VALUES( NULL,'$item_id','$tdate', '$quantity',
 '$stock_type')";

// //insert in database 
$r=mysqli_query($conn, $sql);

if($r) 
{

require('transactions_calc.php');

    # code...
//  
 

}
else{

echo '<script>
    window.location = "bible_stock.php"; 
    
 alert("Not saved") </script>';

}

?>