<?php
  include("upload2.php")
  ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>
  <?php
    if($error)
    {
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
    if($message)
    {
        echo '<div class="alert alert-success">'.$message.'</div>';
    }
    ?>
    <img src="images/indexPhotos/quickCharge.png" id="companyLogo">
  <form action="" method="post" enctype="multipart/form-data">
    
        
        <br>
        <input class="input-group" type="file" name="image" accept="image/*" />
        <br>
        <input type="submit" name="submit" value="submit">
      
  </form>
  <?php 
  if($script) 
  {
    echo $script;
  }
  ?>
</body>
</html>

