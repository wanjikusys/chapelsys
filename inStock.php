<?php
include('layout.php');
include("dbcon.php");
?>

<!DOCTYPE HTML>
<HEAD>
  <TITLE>In Stock</TITLE>
    <link rel="stylesheet" type="text/css" href="pagestyle.css">


<BODY>


  <div class="registerbox">
    <h1>IN STOCK PAGE</h1>
  <form action="instockDB.php" method="post">

    <?php

    $name=$_GET['name'];
    $catid=$_GET['catid'];

    ?>
    
<!--       <label>Item ID:</label> <br>
        <input type="text" id ="item_id" readonly name="item_id"  value=" <?php echo $catid ?>" > <br><br>
 -->        <label>Description</label><br>
        <input type="text" name="descibe" readonly value="<?php echo $name ?>"><br>

        <label>Date:</label><br>
        <input type="text"  name="tdate" id="tdate" readonly=""><br><br>
        <script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("tdate").value = date;
</script>
        <label>Quantity:</label><br>
        <input type="text" name="quantity" id="quantity" required><br>
         <label>Stock Type:</label><br>
        

        <select name="stock_type" id="stock_type">
          <option>New</option>
          <option>Opening Stock</option>
          <option>Return</option>
        </select>



  <br><br><input type="submit" value="SAVE">


      
  </form>
</BODY>
<?