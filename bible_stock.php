<?php
include('dbcon.php');
include('layout.php');
?>


<!DOCTYPE html>
<html>

<head> 
  <meta charset="utf-8">
  <title>Bible stock </title>
 

</head>


<body>
  

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
<tr><th>Number</th><th>Name</th><th>Category</th><th>Testament</th><th>Description</th><th>Balance</th><th>Action</th></tr>
 
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



try { $sql = "SELECT A.item_id, A.name, A.category,A.testament, A.description,B.CurrentBalance, B.transTime
FROM  biblestock A
INNER JOIN items_transaction B
ON A.item_id= B.ItemId WHERE (item_id, transTime )IN
(SELECT item_id, MAX(C.transTime) AS lastdate
   FROM items_transaction C
   GROUP BY C.ItemId) ORDER BY item_id ASC" ;

// try { $sql = "SELECT * from biblestock ORDER BY record_id" ;

 $result = mysqli_query($conn, $sql)or die (mysqli_error($conn));


                         while ($row = mysqli_fetch_assoc( $result )) {
                                          $item_id=$row['item_id'];
                                               $name=$row['name'];
                                                $category=$row['category'];
                                                  $testament=$row['testament'];

                                                 $description=$row['description'];

                                                $bal=$row['CurrentBalance'];
                                                If ($bal<=0){$issue="Hidden";}
                                                else{$issue="";}
                        
                        
                     echo '<td>'. $row['item_id'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                       echo '<td>'. $row['category'].'</td>';
                       echo '<td>'. $row['testament'].'</td>';

                        echo '<td>'. $row['description'].'</td>'; 
                         echo '<td>'. $row['CurrentBalance'].'</td>';
                        echo '<td></td>';

                           echo '<td>
                            
                             
                            <div class="dropdown">
  <button class="dropbtn">...</button>
  <div class="dropdown-content">
    <li><a href="inStock.php?name='.$name.' &catid='.$item_id.'">Received copies</a></li>
    <li><a href="stock_assigning.php?name='.$name.' &catid='.$item_id.'">Issue copies</a></li>
    
  </div>
</div>
                             
                           </td>';           
                        echo'</tr>';
       
  }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo'</table>';
?>
 </div>



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


 
