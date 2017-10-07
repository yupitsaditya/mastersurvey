<?php
include("connection.php");
include("upload.php");
 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width intial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <title>Master Survey</title>
     <style media="screen">
       body
       {
         
         text-align: center;
         height: 2400px; transition: background-color 1s ease-in; 
        
         
       }
       #page1
       {
        
        height: 800px;
        width: 100%;
         background-image: url('images/indexPhotos/page1.jpg');
       }
       
       
     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 
  <div class="container" class="mySignUpForm" id="page1">
    <div class="row">
     <h2>hello <?php echo $_GET['userName']; ?></h2>   
     
    </div>
    <div class="row">
    	<div class="col-md-4">
			    	<img src="" id="companyLogo">
			    	<?php
			    			$query="SELECT image from webown where website like '%".$_GET['userName']."%' ";
			             $result=mysqli_query($link,$query);
			             if($row=mysqli_fetch_row($result))
			             
			             {
			              $script= '<script type="text/javascript">
			    document.getElementById("companyLogo").src="data:image/png;base64,'.base64_encode($row[0]).'";
			  </script>';
			              
			  			echo $script;
			              
			             } 
			    	 ?>
			    	<form action="" method="post" enctype="multipart/form-data" >
			    
			        
			        <br>
			        <input class="input-group form-control-file" type="file" name="image" accept="image/*" />
			        <br>
			        <input type="submit" name="submit" value="submit" class="btn btn-success">
			      
			  </form>
		</div>
    </div>
  </div>
  <?php  echo $script22; ?>
</body>
</html>

       