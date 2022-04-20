     <?php
     include ("dbcon.php");
    

     $name = $_POST['name'];
     
     // $TransactionDate = $_POST['TransactionDate'];
     
     
      
     $TransactionQuantity = $_POST['TransactionQuantity'];
        $department=$_POST['department'];
     $pname = $_POST['pname'];
     $gender = $_POST['gender'];
 $age = $_POST['age'];
 $grantor = $_POST['grantor'];

     // $grantor = $grantor;
 // $tdate = $TransactionDate;
$quantity = $TransactionQuantity;
$activity='Less';
    

//     $item_id = $_POST['item_id'];
// $tdate = $_POST['tdate'];
// $quantity = $_POST['quantity'];
// $activity='Add';


$sql = "INSERT INTO items_out (id, name,TransactionDate, TransactionQuantity,  department, pname, gender, age,grantor)VALUES 
(NULL, '$name', NULL,  '$TransactionQuantity', '$department', '$pname', '$gender', '$age','$grantor')";

$r = mysqli_query($conn, $sql);


if($r)

{
        # code...
    
    

 include('transactions_calc.php');
    // code...
    // echo '<script>alert("Success");
    // window.location = "bible_stock.php";


    


    // </script>';







    
}




     ?>
     