<?php
  $error="";
  $message="";
  $script="";
  $link=mysqli_connect("localhost","root","","imagetesting");
  if(isset($_POST['submit']))
  {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check!=false)
    {
      $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
      $query="INSERT into testing values ('quickCharge','".$imgContent."')";
        $result=mysqli_query($link,$query);
        if($result)
        {
            $message= "File uploaded successfully.";
             $query="SELECT image from testing where name='quickCharge' ";
             $result=mysqli_query($link,$query);
             if($row=mysqli_fetch_row($result))
             
             {
              $script= '<script type="text/javascript">
    document.getElementById("companyLogo").src="data:image/png;base64,'.base64_encode($row[0]).'";
  </script>';
              

              
             }
        }
        else
        {
            $error="File upload failed, please try again.";
        } 
    }
    else
    {
      $error="error";
    }
  }
  else
    {
        $error= "Please select an image file to upload.";
    }
    
?>