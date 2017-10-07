<?php
  $error="";
  $message="";
  $script="";
 
  if(isset($_POST['submit']))
  {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check!=false)
    {
      $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
      $query33="UPDATE webown set image ='".$imgContent."' where website like '%".$_GET['userName']."%' ";
        $result33=mysqli_query($link,$query33);
        if($result33)
        {
            $message= "File uploaded successfully.";
             $query22="SELECT image from webown where website like '%".$_GET['userName']."%' ";
             $result22=mysqli_query($link,$query22);
             if($row22=mysqli_fetch_row($result22))
             
             {
              $script22= '<script type="text/javascript">
    document.getElementById("companyLogo").src="data:image/png;base64,'.base64_encode($row22[0]).'";
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