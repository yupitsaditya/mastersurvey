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
       #indexImage
       {
        width: 40%;
        height: 40%;
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
        <div class="col-md-6 ">
          <img id="indexImage" src="images/Picture1.png">
          <p class="lead text-capitalize">We</p>
          <p class="lead text-capitalize">Empower Organisations </p>
          <p class="lead text-capitalize">with world class survey tools to help them</p>
          <p class="lead text-capitalize">make better decisions</p>
        </div>
         <div class="col-md-6 ">
            <h3>Create an Account Now</h3>
            <h5>Because you want to know your customer</h5>
            
            <form method="post" action="">
              <label for="signUpName">Name</label>
              <input class="form-control" type="text" name="signUpName" placeholder="UserName">
              <br>
              <label for="signUpPassword">Password</label>
              <input class="form-control" type="password" name="signUpPassword" placeholder="Password">
              <br>
              <label  for="signUpPassword2">Re-enter Password</label>
              <input class="form-control" type="password" name="signUpPassword2" placeholder="Re-enter password">
              <br>
              <label for="signUpEmail">Email</label>
              <input type="email" name="signUpEmail" class="form-control" placeholder="Email">
              <br>
              <label for="signUpWebsite">Website Name</label>
              <input type="text" name="signUpWebsite" placeholder="Your Website" class="form-control">
              <br>
              <label for="signUpWebsiteType">Type</label>
              <br>
              <label class="custom-control custom-radio">
                <input id="radio1" name="optradio" value="eShopping" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">eShopping</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio1" type="radio" name="optradio"  value="Streaming" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Streaming</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio1" type="radio" name="optradio" value="Automotive" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Automotive</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio1" type="radio" name="optradio" value="eTravelBookings" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">eTravelBookings</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio1" type="radio" name="optradio" value="ePayment" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">ePayment</span>
              </label>
              
              <br>
              <br>
              <input class="btn btn-success form-control" type="submit" name="submit" value="signUp">
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
    
      
      <div class="col-md-4">
        <a href="/mastersurvey/myTube.html"><img src="images/indexPhotos/myTube.png" class="img-circle" alt="Cinque Terre" width="280" height="210"></a>
      </div>
      <div class="col-md-4">
        <a href="/mastersurvey/planMyTrip.html"><img src="images/indexPhotos/planMyTrip.png" class="img-circle" alt="Cinque Terre" width="280" height="210"></a>
      </div>
      <div class="col-md-4">
       <a href="/mastersurvey/quickCharge.html"><img src="images/indexPhotos/quickCharge.png" class="img-circle" alt="Cinque Terre" width="280" height="210"></a>
       </div>
     </div>
     <div class="row">
      
      <div class="col-md-6">
        <a href="/mastersurvey/catalogueCars.html"><img src="images/indexPhotos/catalogueCar.png" class="img-circle" alt="Cinque Terre" width="280" height="210"></a>
      </div>
      <div class="col-md-6">
        <a href="/mastersurvey/shopKart.html"><img src="images/indexPhotos/shopKart.png" class="img-circle" alt="Cinque Terre" width="280" height="210"></a>
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

       