<?php

$queryn1="select questext from question where quesid in(select quesid from notification where website='".$_GET['userName']."')";
  $resultn1=mysqli_query($link,$queryn1);
  $k=1;
  while($rown1 = mysqli_fetch_row($resultn1))
  {
  	echo "<script type='text/javascript'>
  document.getElementById('notification".$k."').innerHTML='Your rating for the question <strong>".$rown1[0]."</strong> is below average'
  </script>";
  $k++;
  }
  ?>