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

     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 
  <div class="container" id="myContainer">
    <?php
    	$i=0;
    	for ($i=0; $i <10 ; $i++) { 
    		echo '<div class="row">
      	<div class="col-md-12">
      		<form>
      			<p>Here is your first question</p>
      			<input type="radio" name="quesid" value="ansid">1

      			<input type="radio" name="quesid" value="ansid">2
      			
      		</form>

      	</div>
    </div>';
    	}
    ?>
  </div>
 
</body>
</html>

       