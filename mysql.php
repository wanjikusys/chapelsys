<?php
session_start();
include 'dbcon.php';


$connection = mysql_connect("localhost", "root", "");

$db = mysql_select_db("logintest", $connection);

$query = mysql_query("select * from "lists", $connection);


?>

