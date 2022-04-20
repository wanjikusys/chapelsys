<?php
include('dbcon.php');
include('layout.php');
?>


<!DOCTYPE html>
<html>

<head> 
  <meta charset="utf-8">
  <title>ITEM LIST </title>
 

</head>


<body>
  <script src="lib/jquery.min"></script>
<script src="lib/popper.min"></script>
<script src="lib/bootstrap.min"></script>
  

<div class="container_content" id= "table-id" align="center">

<div >
 
<br>

</div>
<br>
<br>
<br>


  <label  for="Search"><strong>Search</strong></label>
                    <input type="text" name="search" id="search" placeholder="search..." size="115px" class="table-filter" data-table="order-table" align="center" />

<table class="order-table" align="center" >
<tr><th>Patient number</th><th>Patient name</th><th>Requestor</th><th>Counsellor</th><th>Date</th><th>Appointment</th><th>Action</th></tr>


<?php


  



class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}



try { $sql = 'SELECT * from requests where status=1 ORDER BY id DESC' ;

                      $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result )) {

                                                $ptnumber=$row['ptnumber'];
                                                $name=$row['name'];
                                                $requestor=$row['requestor'];
                                                $counsellor=$row['counsellor'];
                                                 $tdate=$row['tdate'];
                                                 $appointment=$row['appointment'];
                                                 $requestid=$row['id'];
                                                                        
                        echo '<td>'. $row['ptnumber'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                        echo '<td>'. $row['requestor'].'</td>';
                        echo '<td>'. $row['counsellor'].'</td>';
                         echo '<td>'. $row['tdate'].'</td>';
                        echo '<td>'. $row['appointment'].'</td>';
                                               echo '<td>
                            
                             
                            <div class="dropdown">
  <button class="dropbtn">...</button>
  <div class="dropdown-content">
<li><button type="btn" class="btn btn-info" data-toggle="modal" data-target="#myMdl'.$row['id'].'" >Details</button></li>

  <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal'.$row['id'].'" >Report</button></li>
</div>
                             
                           </td>';
                           ?>

                            <?php 
      include 'data.php';
      include 'modal2.php';
      

      
           
                        echo'</tr>';
       
  }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo'</table>';
?>


</div>



</table
     </body>
</html>
                        
                   
