<?php  
	include("connection.php");
	$error="";
 	 $message="";
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  if(isset($_POST['surveySubmit'])&&$_POST['surveySubmit']=='Submit')
  {
  	if(!$_POST['surveyName'])
    {
      $error=$error."Please Enter Full Name";
    }
    
     
    if(!$_POST['surveyEmail'])
    {
      $error=$error."Please Enter Email";
    }
    else {
      if(!filter_var($_POST['surveyEmail'],FILTER_VALIDATE_EMAIL))
      {
        $error=$error."<br>Please Enter Valid Email";
      }
    }
    if(!$_POST['surveyAge'])
    {
    	$error=$error."<br>Please enter your Age";
    }
    else
    {
    	if (!preg_match("/^[0-9]+$/", $_POST['surveyAge']))
    	{
    		$error=$error."<br>Invalid Age";
    	}
    }
    if(!$_POST['optradio'])
    {
    	$error=$error."<br>Please select your Sex";
    }
    
    if($error)
    {
      $error="There were some Error(s) with your sign up form<br>".$error;
    }
    else
    {
    	$d=date("Y-m-d");
		echo $d;
      $query="INSERT into userdata values(null,'".$_POST['surveyName']."','".$_POST['surveyEmail']."',".$_POST['surveyAge'].",'".$_POST['optradio']."','".$_GET['website']."','".$d."')";
      $result=mysqli_query($link,$query);
      if($result)
        {
          	$error=$error."Sucessfully registered";
          	$query="SELECT max(personid) from userdata";
      		$result=mysqli_query($link,$query);
      		$row = mysqli_fetch_row($result);
      		

          header("Location:surveyQuestion.php?website=".$_GET['website']."&personid=".$row[0]);
        }
        else {
          $error=$error."Try again later";
        }

    

    }
  }


?>