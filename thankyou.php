<?php  

	include("connection.php");
	
  
  if(mysqli_connect_error())
  {

    die("Problem with database");

  }
  
  
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width intial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <title>Thank You</title>
     <style media="screen">
       body
       {
         
         text-align: center;
         transition: background-color 1s ease-in; 
          background-image: url('images/thankyou.jpg');

         background-size:cover;
          background-repeat: no-repeat;
         
       }

     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 
  <div class="container" id="myContainer">
    <div class="row">
        <div class="col-md-12">
          <h1>Your Response has been recorded</h1>
        </div>
    </div>


  </div>
  
</body>
</html>
<?php 

 ?>
 
