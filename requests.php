 <?php
include('layout.php');
?>


 <html>
<head>
 </head>
 <body>

<br>
<div class="registerbox">

       <form action="requestsdb.php" method="POST">

        <h1>REQUESTS</h1>
        <link rel="stylesheet" type="text/css" href="pagestyle.css">

        <select class="drpdtwn" id="alphalist">   
     <option value="patient name">patient name</option>   
     <option value="patient number">patient number</option>
   </select>
 
     <input class="insearch" type="text" placeholder="Search..."/>        
     <span class="fa fa-search"></span>   
<br>

        <label>Patient number:</label><br>
        <input type="text" name="ptnumber" required="number"><br>
          <label>Patient name:</label><br>
        <input type="text" name="name" required="name"><br>
         <label>Requested by:</label><br>
        <input type="text" name="requestor" required="name"><br>
         <label>Assigned to:</label><br>
        <input type="text" name="counsellor" required="name"><br>

        <label>Counselling Date:</label><br>
        <input type="date" name="tdate"><br>
                              <label>Details:</label><br>
        <textarea style="height: inherit" class="form-control "
                              name="details" id="Details" rows="5" cols="68"> </textarea><br>
                
<br>
 <input style="width:25%" type="submit" name="submit-" value="save">

 </br>
</div>

           </form>
         </body>
   </html>