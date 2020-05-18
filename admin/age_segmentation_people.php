<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();


?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age Groupings', '#'],
          ['0 to 13 years', <?php echo $totalAges0_13; ?>],
          ['14 to 18 years', <?php echo $totalAges14_18; ?>],
          ['19 to 35 years', <?php echo $totalAges19_35; ?>],
          ['36 to 59 years', <?php echo $totalAges36_59 ?>],
          ['Older than 60 years', <?php echo $totalAges60Plus ?>]
        ]);

        var options = {
          title: 'Households Age Groupings',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('age_segmentation_pie_chart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="age_segmentation_pie_chart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
