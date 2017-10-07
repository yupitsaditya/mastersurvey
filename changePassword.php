<?php
	include("connection.php");
	$error777="";
  $message777="";
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  if(isset($_POST['changePasswordSubmit'])&&$_POST['changePasswordSubmit']=='changePassword')

  {
  	if(!($_POST['oldPassword']))
  	{
  		$error777=$error777."Enter old password";
  	}
  	if(!($_POST['newPassword']))
  	{
  		$error777=$error777."<br>Enter new password";
  	}
  	if(!($_POST['newPassword2']))
  	{
  		$error777=$error777."<br>Re-Enter new password";
  	}
  	if(!$error777)
  	{
  		$query777="SELECT * from webown WHERE username='".$_GET['userName']."' AND password='".$_POST['oldPassword']."'";
    	$result777=mysqli_query($link,$query777);
    	
    	if($row777=mysqli_fetch_array($result777))

    	{
    		if(!preg_match('`[A-Z]`',$_POST['newPassword']))
		      {
		        $error777=$error777."<br>Please Enter new password with a capital letter";

		      }
		      if(strlen($_POST['newPassword'])<5)
		      {
		        $error777=$error777."<br>Please Enter new password of minimum length of 5";
		      }
		      if($_POST['newPassword']!=$_POST['newPassword2'])
      			{	
      				$error777=$error777."<br>Passwords do not match";
      			}
      		$query777="UPDATE webown set password=  '".$_POST['newPassword']."' WHERE username='".$_GET['userName']."'";
    		$result777=mysqli_query($link,$query777);
    		if($result777)
    		{
    			$message777=$message777."Password updated successfully";
    		}
    	}
  	}
  }
  ?>