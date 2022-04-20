
<?php
include 'dbcon.php';
include 'layout3.php';
?>


<html>
<head>
    <meta charset="utf-8">
    <title>HOME</title>
</head>
<body>
  
<link rel="stylesheet" type="text/css" href="layout2.css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<script src="lib/jquery.min"></script>
<script src="lib/popper.min"></script>
<script src="lib/bootstrap.min"></script>



<div class="container_content" id= "table-id" align="center">

<br>
<br>
<br>
<br>
<br>
  <label  for="Search"><b>Search</b></label>
                    <input type="text" name="search" id="search" placeholder="search..." size="115px" class="table-filter" data-table="order-table" align="center" />

<table class="order-table" align="center" >

        <tr>
            <th>Date</th>

                       <th>Preacher</th>
            <th>Sermon</th>
            <th>Readings</th>
                    </tr>
                    
        
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



try { $sql = 'SELECT * from lists ORDER BY ttimes DESC' ;

                      $result = mysqli_query($conn, $sql);

                        $i = 1; 
                        while ($row = mysqli_fetch_assoc($result )) {

                            $recsermon=$row['Sermon'];
                            $recteaching=$row['Teachings'];
                        
                                               
                        echo '<td>'. $row['ttimes'].'</td>';


                        echo '<td>'. $row['Preacher'].'</td>';
                         echo '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal'.$row['id'].'" > '.$row['Sermon']. '</button> </td>';
                        echo '<td>'. $row['Readings'].'</td>';
                        

                                 ?>

                                       


    <?php
        
        include 'modal.php';
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

