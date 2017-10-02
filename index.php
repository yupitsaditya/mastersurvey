<?php
  include('signIn.php');
  include('signUp.php');
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
        padding-top: 70px;
        height: 800px;
        width: 100%;
         background-image: url('images/indexPhotos/page1.jpg');
       }
       #page2
       {
        padding-top: 50px;
        height: 1000px;
        width: 100%;
         background-image: url('images/indexPhotos/page2.jpg');
       }
       #page3
       {
        padding-top: 50px;
        height: 800px;
        width: 100%;
        background-image: url('images/indexPhotos/page3.jpg');
       }
     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 <div class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header pull-left">
           <a href="" class="navbar-brand">Master Survey</a>

         </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">About</a></li>
            <li><a href="#page2">Clients</a></li>
            <li><a href="#page3">Contact Us</a></li>
            
          </ul>

         <form class="navbar-defaultorm form-inline pull-right" method="post">
           <label for="username"></label>
           <input type="text" name="username" value="" placeholder="Username">
           <label for="password"></label>
           <input type="password" name="password" placeholder="Enter your password">
           <input type="submit" name="submit" value="signIn" class="btn btn-success">
         </form>

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
         <div class="col-md-6 col-md-offset-6">
            <h3>Create an Account Now</h3>
            <h5>Because you want to know your customer</h5>
            
            <form method="post" >
              <label for="signUpName">Name</label>
              <input class="form-control" type="text" name="signUpName" placeholder="UserName">
              <label for="signUpPassword">Password</label>
              <input class="form-control" type="password" name="signUpPassword" placeholder="Password">
              <label  for="signUpPassword2">Re-enter Password</label>
              <input class="form-control" type="password" name="signUpPassword2" placeholder="Re-enter password">
              <label for="signUpEmail">Email</label>
              <input type="email" name="signUpEmail" class="form-control" placeholder="Email">
              <label for="signUpWebsite">Website Name</label>
              <input type="text" name="signUpWebsite" placeholder="Your Website" class="form-control">
              <label for="signUpWebsiteType">Type</label>
              <br>
              <label class="radio-inline"><input type="radio" name="optradio" value="eShopping">eShopping</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Streaming">Streaming</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Automotive">Automotive</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="eTravelBookings">eTravelBookings</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="ePayment">ePayment</label>
              <input class="btn btn-success" type="submit" name="submit" value="signUp">
            </form>
        </div>
    </div>
  </div>
  <div class="container" id="page2">
    <h1>Our Clients</h1>
    <div class="row">
      <br>
      <br>
    </div>
    <div class="row">
    
      
      <div class="col-md-3">
        <img src="images/indexPhotos/myTube.png" class="img-circle" alt="Cinque Terre" width="280" height="210">
      </div>
      <div class="col-md-4">
        <img src="images/indexPhotos/planMyTrip.png" class="img-circle" alt="Cinque Terre" width="280" height="210">
      </div>
      <div class="col-md-5">
       <img src="images/indexPhotos/quickCharge.png" class="img-circle" alt="Cinque Terre" width="280" height="210">
       </div>
     </div>
     <div class="row">
      
      <div class="col-md-5">
        <img src="images/indexPhotos/catalogueCar.png" class="img-circle" alt="Cinque Terre" width="280" height="210">
      </div>
      <div class="col-md-6">
        <img src="images/indexPhotos/shopKart.png" class="img-circle" alt="Cinque Terre" width="280" height="210">
      </div>
      
     </div>
  </div>
  <div class="container" id="page3">
    <h1>Contact Us</h1>
    <div class="row">
      <br>
      <br>
    </div>
    <div class="row">
      <div class="col-md-3">
        <img src="images/indexPhotos/aditya.jpg" class="img-circle" alt="Cinque Terre" width="140" height="105">

      </div>
      <div class="col-md-4">
        <a href="https://facebook.com/adityavns"><img class="img-circle" src="images/indexPhotos/fbLogo.png" width="50" height="50"></a>
        <a href="mailto:aadityajajodia@gmail.com"><img class="img-circle" src="images/indexPhotos/emailLogo.png" width="50" height="50"></a>
      </div>
      
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <img src="images/indexPhotos/shyamal.jpg" class="img-circle" alt="Cinque Terre" width="140" height="105">
        
      </div>
      <div class="col-md-4">
        <a href="https://www.facebook.com/profile.php?id=100009819571888"><img class="img-circle" src="images/indexPhotos/fbLogo.png" width="50" height="50"></a>
        <a href="mailto:chaudharyshyamal0908@gmail.com"><img class="img-circle" src="images/indexPhotos/emailLogo.png" width="50" height="50"></a>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <img src="images/indexPhotos/rishav.jpg" class="img-circle" alt="Cinque Terre" width="140" height="105">  
        
      </div>
      <div class="col-md-4">
        <a href="https://facebook.com/rishav.kumar.9212"><img class="img-circle" src="images/indexPhotos/fbLogo.png" width="50" height="50"></a>
        <a href="mailto:kumarrishav7625@gmail.com"><img class="img-circle" src="images/indexPhotos/emailLogo.png" width="50" height="50"></a>
      </div>
    </div>
  </div>
</body>
</html>

       