<?php
  include('surveyForm.php');

 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width intial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <title>Survey</title>
     <style media="screen">
       body
       {
         
         text-align: center;
         transition: background-color 1s ease-in; 
        
         
       }
       #page1
       {
        padding-top: 70px;
        height: 650px;
        width: 100%;
         background-image: url('images/indexPhotos/page1.jpg');
       }
     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 <div class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header pull-left">
           <a href="/" class="navbar-brand">Master Survey</a>

         </div>

         
       </div>
  </div>
  <div class="container" class="mySignUpForm" id="page1">
    <div class="row">
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
      	<div class="col-md-4"></div>
         <div class="col-md-4 ">
            <h3>Please Fill out this form first</h3>
            
            
            <form method="post" action="">
              <label for="surveyName">Name</label>
              <input class="form-control" type="text" name="surveyName" placeholder="Your full name">
              <br>
              <label for="surveyEmail">Email</label>
              <input type="email" name="surveyEmail" class="form-control" placeholder="Email">
              <br>
              <label for="surveyAge">Age</label>
              <input type="text" name="surveyAge" placeholder="Your Age" class="form-control">
              <br>
              <label for="surveySex">Sex</label>
              <br>
              <label class="custom-control custom-radio">
                <input id="radio1" name="optradio" value="M" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">M</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio1" type="radio" name="optradio"  value="F" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">F</span>
              </label>
              <br>
              <h4 class="bold">Website <?php echo $_GET['website'] ?></h4>
              <br>
              <br>
              <input class="btn btn-success form-control" type="submit" name="surveySubmit" value="Submit">
            </form>
        </div>
    </div>
  </div>
 
</body>
</html>

       