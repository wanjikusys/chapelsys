<?php
require('sessions.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kijabe CHAPEL</title>
 <link rel="stylesheet" type="text/css" href="layout2.css">
  <link href="layout2.css" rel="stylesheet">
</head>
<body>


<div class="topnav">
  <a class="active">Chapel</a>


  <button><a href="logout.php" class="dropdown">Logout</a></button>
  <div class="dropdown-content">
    <a href=""></a>
    
  </div>
</div>
  
<div class="sidenav">
           <nav class="sidenav-logo">
              <img src="kijabe_logo.png" alt="" width="100%" height="100%">
          </nav> <br>

        <span data-feather="home"></span>
            <strong>HEALTHCARE TO GOD'S GLORY</strong>
        <span class="sr-only"></span><br><br>

<div class="dropdown">
    <button class="dropbtn">CHAPEL EVENTS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content a">
    <a href="records.php">Records</a>
    <a href="hpage.php">Tickets</a>
  </div>
</div>
<div></div>

<div class="dropdown">

   <button class="dropbtn">PATIENT COUNSELLING
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content a">
    <a href="requests.php">Requests</a>
    <a href="patientsessions.php">Sessions</a>
    <a href="counselling records.php">Records</a>
  </div>
</div>


<div class="dropdown">
    <button class="dropbtn">BIBLE MANAGER
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content a">
    <a href="addbible.php">Stock add</a>
    <a href="bible_stock.php">Bible stock</a>
  </div>
</div>
<div></div>

    <script>
var dropdown = document.getElementsByClassName("dropbtn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</li>

</div>

<!-- <div class="main">
  
  
</div> -->

   
</body>
</html> 