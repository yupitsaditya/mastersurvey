<?php
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
  </div>
  
</body>
</html>

       