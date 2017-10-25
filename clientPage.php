<?php
  include("connection.php");
  
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
         
        
         
       }
       .piechart_3d
       {

          height:300px;
          width: 500px;
       }
       #page1
       {
        padding: 50px;
       }
       #page2
       {
        padding: 50px;
        text-align: center;
       }
       #page3
       {
        padding: 50px;
       }
       li
       {
        margin: 2px;
       }
       
     </style>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       

 <div class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header pull-left">
           <a href="/mastersurvey" class="navbar-brand">Master Survey</a>

         </div>
          <ul class="nav navbar-nav">
            <li ><a href="#">Data Stats</a></li>
            <li><a href="#page2">Compare with similar wesbite</a></li>
            <li><a href="#page3">Overall Ratings</a></li>
            
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="<?php echo '/mastersurvey/profileEdit.php?userName='.$_GET['userName'] ?>" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-user"></span>Profile
              </a>
            </li>
            
            <li class="active">
              <a href="/mastersurvey" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span>SignOut
              </a>
            </li>
          </ul>
         

       </div>
  </div>
  <div class="container" id="page1" >
    <div class="row">
       <div class="col-md-6 piechart_3d"   id="piechart_3d0"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d1"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d2"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d3"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d4"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d5"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d6"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d7"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d8"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3d9"></div>
       
    </div>
  </div>
  
  <div class="container" id="page2" >
    <div class="row">
       <p>Compare</p>
       <div class="col-md-6 "   ><h2 class="text-muted"><?php  echo $_GET['userName'];?></h2></div>
      <div class="col-md-6 "   ><h2 class="text-muted">Other Websites</h2></div>
       <div class="col-md-6 piechart_3d"   id="piechart_3dc0"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther0"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc1"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther1"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc2"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther2"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc3"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther3"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc4"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther4"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc5"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther5"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc6"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther6"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc7"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther7"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc8"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther8"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dc9"></div>
      <div class="col-md-6 piechart_3d"   id="piechart_3dcOther9"></div>
    </div>
  </div>
  <div class="container " id="page3">
    <div class="row">
       <p>Overall</p>
    </div>
  </div>
  <?php
  include("graph.php"); 
  include("compareGraph.php"); 
   ?>
</body>
</html>

       