<?php
	$error="";
	if(isset($_POST["submit"])&&$_POST['submit']=='submit')
	{



		$query0="SELECT type from webtype WHERE website like '%".$_GET['website']."%'";
	    $result0=mysqli_query($link,$query0);
	    $row0=mysqli_fetch_row($result0);
		$query="SELECT q.quesid from surveyques s, question q where s.quesid=q.quesid and s.type='".$row0[0]."'";
		$result=mysqli_query($link,$query);
		while ($row=mysqli_fetch_row($result))
		{
			
			
			if(!isset($_POST[$row[0]]))
			{
				$error="Please answer all the questions";
				


			}
			
		}
		if(!$error)
		{
			$query="SELECT q.quesid from surveyques s, question q where s.quesid=q.quesid and s.type='".$row0[0]."'";
			$result=mysqli_query($link,$query);
			while ($row=mysqli_fetch_row($result))
			{
				$query2="INSERT into response values(".$_GET['personid'].",'".$_GET['website']."',".$row[0].",".$_POST[$row[0]].")";
				$result2=mysqli_query($link,$query2);
				header("location:thankyou.php");
			}
		}
	}
  ?>