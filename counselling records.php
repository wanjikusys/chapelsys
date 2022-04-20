<?php
include('dbcon.php');
include('layout.php');
?>


<!DOCTYPE html>
<html>

<head> 
  <meta charset="utf-8">
  <title>counselling records</title>
 

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
<tr><th>Patient number</th><th>Patient name</th><th>Counsellor</th><th>Date</th></tr>



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

try { $sql = 'SELECT * from consellingdata ORDER BY ttimes DESC' ;

                      $result = mysqli_query($conn, $sql);

                        $i = 1; 
                        while ($row = mysqli_fetch_assoc($result )) {

                            $recptnumber=$row['ptnumber'];
                            $recreason=$row['reason'];
                        
                                               
                        

                    
                         echo '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal'.$row['id'].'" > '.$row['ptnumber']. '</button> </td>';
                        echo '<td>'. $row['pname'].'</td>';
echo '<td>'. $row['counsellor'].'</td>';
echo '<td>'. $row['ttimes'].'</td>';


                                 ?>

                                       


    <?php
        
        include 'modal3.php';
            $i++;            
                        echo'</tr>';
   
                  
       
  }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo'</table>';



?>


</body>
</html>



