
<style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 35%;
  top: 0;
  width: 60%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  align-self: auto;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  height:100% ;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 20px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 1px 8px;
  background-color: deepskyblue;
  color: white;
}

.modal-body {
  padding: 2px 16px;
  
}

.modal-footer {
  padding: 2px 16px;
  background-color: #4d4dff;
  color: white;
}
</style>
</style>

<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>



                                <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1>Counselling</h1>
             
                
      
            </div>
            
            <div class="modal-body">

                <div>     

 <form action="datadb.php?requestid=<?php echo $row['id'] ?> " method="POST">

                 <input type="text" value=" <?php echo $row['ptnumber'] ?>" class="form-control" id="ptnumber" name="ptnumber" readonly>
             <input type="text" value=" <?php echo $row['name'] ?>" class="form-control" id="pname" name="pname" readonly><br>
   
<br>
 
        <label>Counsellor: </label>
        <input type="text" name="counsellor" required=""><br><br>

  <label>Spiritual status: </label>
        <select name="saved" id="saved">
          <option>Already born again</option>
          <option>Born again in Kijabe</option>
          <option>Not born again</option>
        </select><br><br>

         <label>Church placed:</label>
        <input type="text" name="church" required=""><br>



         <label>Reason for visit:</label><br>
               <textarea style="height: inherit" class="form-control "
                              name="reason" id="reason" rows="4" cols="50"> </textarea><br><br>
                <label>assessment</label><br>
            <textarea style="height: inherit" class="form-control "
                              name="assessment" id="assessment" rows="4" cols="50"> </textarea><br><br>
       
                  <label>Additional information:</label><br>
        <textarea style="height: inherit" class="form-control "
                              name="information" id="information" rows="4" cols="50"> </textarea><br><br>



<!-- <label for="myCheck">Checkbox:</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()">

<p id="text" style="display:none">Checkbox is CHECKED!</p>

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
 -->

<!-- 
                               <label>next appointment</label><br>
        <input type="date" name="apptdate"><br>
 -->
       
       
<br>
 
                    <input style="width:25%" type="submit" name="submit-" value="save" class="form-control">
</div>
                                 </div>

                                 <div class="modal-footer">
                                   
                                    <p></p>
                                 </div>
        </div>
      </div>
    </div> 
  </form>




<!-- Trigger/Open The Modal -->


