 <?php

  $queryo1="SELECT avg(text) from response natural join answers where website='".$_GET['userName']."'";
  $resulto1=mysqli_query($link,$queryo1);
  $rowo1 = mysqli_fetch_row($resulto1);
  $queryo2="SELECT avg(text) from response natural join answers where website='".$_GET['userName']."' and personid in (select personid from userdata where sex='M')";
  $resulto2=mysqli_query($link,$queryo2);
  $rowo2 = mysqli_fetch_row($resulto2);
  $queryo3="SELECT avg(text) from response natural join answers where website='".$_GET['userName']."' and personid in (select personid from userdata where sex='F')";
  $resulto3=mysqli_query($link,$queryo3);
  $rowo3 = mysqli_fetch_row($resulto3);

  $queryo4="SELECT website from response natural join answers
  where website<>'".$_GET['userName']."' and website in(
    select username from webown w, webtype t 
    where w.website=t.website and t.type in(
      select t1.type from webown w1,webtype t1
      where w1.username='".$_GET['userName']."' and w1.website=t1.website))
    group by (website)
    having avg(text)>(select avg(text) from response natural join answers
     where website='".$_GET['userName']."')";
  $resulto4=mysqli_query($link,$queryo4);
  $myVar="";
  while($rowo4 = mysqli_fetch_row($resulto4))
    {
      $myVar=$myVar.$rowo4[0];
    }

  echo "<script type='text/javascript'>
  document.getElementById('averageScore').innerHTML=".$rowo1[0].";
  document.getElementById('averageScoreM').innerHTML=".$rowo2[0].";
  document.getElementById('averageScoreF').innerHTML=".$rowo3[0].";
  document.getElementById('higherWeb').innerHTML='".$myVar."';
  </script>";

 ?>
