<?php

include('layout.php');
include ('dbcon.php');
?>

<!DOCTYPE HTML>
<HEAD>
	<TITLE>Bible Assigning</TITLE>
		<link rel="stylesheet" type="text/css" href="pagestyle.css">
    </HEAD>
<BODY>

      
    <?php

    $name=$_GET['name'];
    $catid=$_GET['catid'];

    ?>


	<div class="registerbox">
		<h1> ASSIGNING</h1>
	<form style="font-weight: bold;" action="stockOutDB.php" method="post" >
      <label>Item ID:</label> <br>
        <input type="text" id ="id" readonly name="item_id"  value=" <?php echo $catid ?>" > <br><br>
        <label>Description</label><br>
        <input type="text" name="name" readonly value="<?php echo $name ?>"><br>

  

        
    	<br><label>Transaction Quantity: <br><input type="text" placeholder="" required="" name="TransactionQuantity"></label>
    	<!-- <br><label>PRQ Number: <br><input type="text" placeholder="" required="" name="PRQ_Number"></label>
 -->    	<br><label>Department: <br>
                <input type="text" placeholder="" required="" name="department"> 

    	<br><label>Patient name: <br><input type="text" placeholder="" required="" name="pname"> </label>
</label>
    <br><label>Gender: <br>
               <select name="gender" id="gender">
          <option>Female</option>
          <option>Male </option>
                </select> 
</label>
    <br><label>Age: <br>
                <input type="text" placeholder="" required="" name="age"> 
</label>


    	<br><label>Grantor: <br><input type="text" placeholder="" required="" name="grantor"></label>
    	<br>
        <br><input type="submit" value="SAVE">
     
  </div>

</form>
</div>
</BODY>