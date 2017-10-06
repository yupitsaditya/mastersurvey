 <?php
  $query55="SELECT quesid from surveyques s,webtype w where website like '%".$_GET['userName']."%' and s.type=w.type";
        $result55=mysqli_query($link,$query55);
    $k=0;
   while($row55 = mysqli_fetch_row($result55)) 
   {
      
        $j=$row55[0];
        
      
     
      
        $query="SELECT ansid from response where website='".$_GET['userName']."' and quesid=".($j);
        $result=mysqli_query($link,$query);
            
            $responseCount = array(0,0,0,0,0);
            $i=0;
            while($row = mysqli_fetch_row($result))
            {
              
              $responseCount[$row[0]-1]++;
            }
            $query1="SELECT questext from question where quesid=".($j);
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
      
              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d".$k."'));
              
              chart.draw(data, options);
              
            }
          </script>
      ";
    $k++;
  }

 ?>
