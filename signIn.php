<?php 
	include("connection.php");
	$error="";
  $message="";
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  if(isset($_POST['submit'])&&$_POST['submit']=='signIn')
  {
  	if(!$_POST['username'])
    {
      $error=$error."Please Enter username";
    }
    
     if(!$_POST['password'])
    {
      $error=$error."<br>Please Enter Password";
    }
    else
    {
      if(!preg_match('`[A-Z]`',$_POST['password']))
      {
        $error=$error."<br>Please Enter a password with a capital letter";

      }
      if(strlen($_POST['password'])<5)
      {
        $error=$error."<br>Please Enter password of minimum length of 5";
      }
    }
    if($error)
    {
      $error="There were some Error(s) with your sign up form".$error;
    }
    else
    {
    	$query="SELECT * from webown WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_array($result);
    if($row)
    {
      header("Location:clientPage.php?userName=".$_POST['username']);
    }
    else {
      $error=$error."Cannot find user with username and password";
    }

    }
  }

 ?>