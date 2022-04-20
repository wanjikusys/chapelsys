<?php
include 'dbcon.php';
include 'layout.php';
?>


<html>
<head>
    <meta charset="utf-8">
    <title>CHAPEL RECORDS</title>
</head>
<body>

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

        <tr><b>
            <th>Date</th><th>Preacher</th>
            <th>Sermon</th>
            <th>Readings</th></b>
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

<script>

  (function() {
  'use strict';

var TableFilter = (function() {
 var Arr = Array.prototype;
    var input;
  
    function onInputEvent(e) {
      input = e.target;
      var table1 = document.getElementsByClassName(input.getAttribute('data-table'));
      Arr.forEach.call(table1, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, filter);
        });
      });
    }

    function filter(row) {
      var text = row.textContent.toLowerCase();
       //console.log(text);
      var val = input.value.toLowerCase();
      //console.log(val);
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = onInputEvent;
        });
      }
    };
 
  })();

  /*console.log(document.readyState);
  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      console.log(document.readyState);
      TableFilter.init();
    }
  }); */
  
 TableFilter.init(); 
})();

</script>
</table>
</body>
</html>

