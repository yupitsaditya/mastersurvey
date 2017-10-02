<?php  
	include("connection.php");
	$error="";
 	 $message="";
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  if(isset($_POST['submit'])&&$_POST['submit']=='signUp')
  {
  	if(!$_POST['signUpName'])
    {
      $error=$error."Please Enter username";
    }
    
     if(!$_POST['signUpPassword'])
    {
      $error=$error."<br>Please Enter Password";
    }
    else
    {
      if(!preg_match('`[A-Z]`',$_POST['signUpPassword']))
      {
        $error=$error."<br>Please Enter a password with a capital letter";

      }
      if(strlen($_POST['signUpPassword'])<5)
      {
        $error=$error."<br>Please Enter password of minimum length of 5";
      }
    }
    if(!$_POST['signUpPassword2'])
    {
      $error=$error."<br>Please re-enter Password";
    }
    else
    {
      if($_POST['signUpPassword']!=$_POST['signUpPassword2'])
      {
      	$error=$error."<br>Passwords do not match";
      }
    }
    if(!$_POST['signUpEmail'])
    {
      $error=$error."Please Enter Email";
    }
    else {
      if(!filter_var($_POST['signUpEmail'],FILTER_VALIDATE_EMAIL))
      {
        $error=$error."<br>Please Enter Valid Email";
      }
    }
    if(!$_POST['signUpWebsite'])
    {
    	$error=$error."<br>Please enter your website";
    }
    if(!$_POST['optradio'])
    {
    	$error=$error."<br>Please select your website type";
    }
    if($error)
    {
      $error="There were some Error(s) with your sign up form".$error;
    }
    else
    {
    	$query="SELECT * from webown WHERE username='".$_POST['signUpName']."'";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_array($result);
    if($row)
    {
      $error=$error."<br>username already taken";
    }
    else {
      $query="INSERT into webown values(null,'".$_POST['signUpEmail']."','".$_POST['signUpName']."','".$_POST['signUpPassword']."','".$_POST['signUpWebsite']."')";
      $result=mysqli_query($link,$query);
      if($result)
        {
          $error=$error."Sucessfully registered";
          $query="INSERT into webtype values(null,'".$_POST['signUpWebsite']."',null,'".$_POST['optradio']."')";
      $result=mysqli_query($link,$query);
        }
        else {
          $error=$error."Try again later";
        }

    }

    }
  }


?>