<?php
include("connection.php");
include("upload.php");
include("changePassword.php");
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
         
        height: 600px;
         transition: background-color 1s ease-in; 
        
         
       }
       #page1
       {
        padding: 60px;
        height: 700px;
        width: 100%;
         background-image: url('images/indexPhotos/page1.jpg');
       	img {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
}
       }
       
       
     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 <div class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header pull-left">
           <a href="javascript:history.back()" class="navbar-brand"><?php echo $_GET['userName']; ?></a>

         </div>
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="/mastersurvey" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span>SignOut
              </a>
            </li>
            
            
          </ul>
          
         

       </div>
        <?php 
     if($error)
    {
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
    if($message)
    {
        echo '<div class="alert alert-success">'.$message.'</div>';
    }
    if($error777)
    {
      echo '<div class="alert alert-danger">'.$error777.'</div>';
    }
    if($message777)
    {
        echo '<div class="alert alert-success">'.$message777.'</div>';
    }
    ?>
  </div>

  <div class="container" class="mySignUpForm" id="page1">
    <div class="row">
        
    
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
			        <label for ="image">Change Logo</label><input class="input-group form-control-file" type="file" name="image" accept="image/*" />
			        <br>
			        <input type="submit" name="submit" value="submit" class="btn btn-success">
			      
			  </form>
		</div>
		<div class="col-md-4 pull-right">

			<h3>Change password</h3>
			<form method="post" action="">
				<label>Enter Old Password</label>
				<input type="password" class="form-control" name="oldPassword">
				<br>
				<label>Enter New Password</label>
				<input type="password" name="newPassword" class="form-control">
				<br>
				<label>Re-Enter New Password</label>
				<input type="password" name="newPassword2" class="form-control">
				<br>
				<input type="submit" name="changePasswordSubmit" value="changePassword" class="btn btn-danger">
			</form>
		</div>
    </div>
  </div>
  <?php  echo $script22; ?>
</body>
</html>

       