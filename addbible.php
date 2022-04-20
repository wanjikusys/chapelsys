<?php
include('layout.php');
include ('dbcon.php');
?>

<!DOCTYPE HTML>
<HEAD>
	<TITLE>New_Category</TITLE>
		<link rel="stylesheet" type="text/css" href="pagestyle.css">

<BODY>


	<div class="registerbox">
		<h1>NEW CATEGORY</h1>
	<form action="post.php" method="post">
       
                     <label>Name:</label><br>
      <input type="text" name="name" required=""><br> 
        <label>Version:</label><br>
    	<input type="text" name="category" required=""><br>
 <label>Testament: </label><br>
        <select name="testament" id="testament">
          <option>Old Testament</option>
          <option>New Testament</option>
          <option>Both</option>
        </select><br>

        <label>Language:</label><br>
        <input type="text" name="description" placeholder="" required=""><br><br>
        <input type="submit" name="save" value="save">
 
	</form>


</BODY>




