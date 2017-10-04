
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width intial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <title>quickCharge</title>
     <style media="screen">
       body
       {
         
         text-align: center;
          
        
         
       }
       .piechart_3d
       {
          height:300px;
          width: 400px;
       }
     </style>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <div class="contianer">
    <div class="row">
      <div class="col-md-4 piechart_3d"   id="piechart_3d0"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d1"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d2"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d3"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d4"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d5"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d6"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d7"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d8"></div>
      <div class="col-md-4 piechart_3d"   id="piechart_3d9"></div>
  </div>
  </div>     
 <?php
  include("connection.php");
   $j=0;
      for($j=0;$j<10;$j++)
      
     
      {
        $query="SELECT ansid from response where website='quickCharge' and quesid=".($j+1);
        $result=mysqli_query($link,$query);
            
            $responseCount = array(0,0,0,0,0);
            $i=0;
            while($row = mysqli_fetch_row($result))
            {
              
              $responseCount[$row[0]-1]++;
            }
            $query1="SELECT questext from question where quesid=".($j+1);
        $result1=mysqli_query($link,$query1);
        $row1 = mysqli_fetch_row($result1);
            echo "<script type='text/javascript'>
            google.charts.load('current', {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['ansid', 'count'],
                ['Rating 1',     ".$responseCount[0]."],
                ['Rating 2',      ".$responseCount[1]."],
                ['Rating 3',  ".$responseCount[2]."],
                ['Rating 4', ".$responseCount[3]."],
                ['Rating 5',    ".$responseCount[4]."]
              ]);
      
              var options = {

                title: '".$row1[0]."',
                is3D: true,
              };
      
              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d".$j."'));
              
              chart.draw(data, options);
              
            }
          </script>
      ";
    }
 ?>

</body>
</html>

       