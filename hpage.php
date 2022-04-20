<?php
include('layout.php');


?>
<php>

<!DOCTYPE html>
<html>
    <head>
        <title>TICKETS</title>
        
    </head>
       <body>

        <div class="registerbox">

<link rel="stylesheet" type="text/css" href="pagestyle.css">
<div class="container_content" id= "table-id" align="center">
 

 <form action="hpagedb.php" method="POST">

        <h1>Chapel</h1>
        
        <label>Preacher:</label><br>
        <input type="text" name="Preacher" required=""><br>
         <label>Sermon:</label><br>
        <input type="text" name="Sermon" required=""><br>
         <label>Readings:</label><br>
        <input type="text" name="Readings" required=""><br>
         <label>Teachings:</label><br>
        <textarea style="height: inherit" class="form-control "
                              name="Teachings" id="Teachings" rows="10" cols="65"> </textarea><br><br>
                                   <label>Date:</label><br>
        <input type="text"  name="ttimes" id="date" readonly=""><br>
        <script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("date").value = date;
</script>
<br>
 
                    <input style="width:25%" type="submit" name="submit-" value="save">

 </br>
</div>
</form>

 </form>
 		</table>
	</body>


</html>