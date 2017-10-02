<?php  
	include("connection.php");
	$error="";
 	 $message="";
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  $website=$_GET['website']
  $personid=$_GET['personid'];
?>