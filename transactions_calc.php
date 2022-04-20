<?php
include ('dbcon.php');


// get the post records

$item_id_int=(int)$item_id;


//Get pervious bal
$r = mysqli_query($conn, 'SELECT CurrentBalance from items_transaction where ItemId='.$item_id_int.' ORDER BY transTime DESC LIMIT 1');

if (mysqli_num_rows($r)==0) { $bal=0;}
else {  

     while ($row = $r->fetch_object()) {


        $bal = $row->CurrentBalance;
        
    }
}

    Switch($activity){

      case 'Add': $new_bal=(int)$bal+(int)$quantity;
      $act=1;
      break;
      Case 'Less': $new_bal=(int)$bal-(int)$quantity;
      $act=0;
      break;
    }

    
    // echo (int)$bal;
    //   echo "</br>";
    // echo $new_bal; 
    //   echo "</br>";
    // echo $item_id_int;
    // echo "</br>";
    // echo $act;
   $r->close();

   $sql2 = "INSERT INTO items_transaction 
    (Record_id,RecordDate,transTime,ItemId,PreviousBalance,Activity,Quantity,CurrentBalance)
    VALUES( NULL,'$tdate',NOW(),'$item_id','$bal','$act', '$quantity','$new_bal')";

$rs2=mysqli_query($conn, $sql2);
//   if ($rs2) 
// {
// //  $rs2->close();
// }
    
   

// else
// {
//    echo 'something went wrong';
// }



?>