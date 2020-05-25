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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['#', 'Household Requests', 'COVID-19 Front Agents', 'Civil Society Agents', 'Community Member Agents'],
          ['today',  <?php echo $totalTodayRequests; ?> , <?php echo $totalTodayPartners; ?> , <?php echo $totalTodayCivilSociety; ?> , <?php echo $totalTodayComminity; ?> ],
          ['yesterday',  <?php echo $totalYesterdayRequests; ?> , <?php echo $totalYesterdayPartners; ?> , <?php echo $totalYesterdayCivilSociety; ?> , <?php echo $totalYesterdayComminity; ?> ],
          ['2 days ago',  <?php echo $total2DaysRequests; ?> , <?php echo $total2DaysPartners; ?> , <?php echo $total2DaysCivilSociety; ?> , <?php echo $total2DaysComminity; ?> ],
          ['3 days ago',  <?php echo $total3DaysRequests; ?> , <?php echo $total3DaysPartners; ?> , <?php echo $total3DaysCivilSociety; ?> , <?php echo $total3DaysComminity; ?> ],
          ['4 days ago',  <?php echo $total4DaysRequests; ?> , <?php echo $total4DaysPartners; ?> , <?php echo $total4DaysCivilSociety; ?> , <?php echo $total4DaysComminity; ?> ],
          ['5 days ago',  <?php echo $total5DaysRequests; ?> , <?php echo $total5DaysPartners; ?> , <?php echo $total5DaysCivilSociety; ?> , <?php echo $total5DaysComminity; ?> ],
          ['6 days ago',  <?php echo $total6DaysRequests; ?> , <?php echo $total6DaysPartners; ?> , <?php echo $total6DaysCivilSociety; ?> , <?php echo $total6DaysComminity; ?> ]
        ]);

        var options = {
          title : 'Stats on activities on thusasechaba.org.za',
          vAxis: {title: '#'},
          hAxis: {title: '#'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 1100px; height: 500px;"></div>
  </body>
</html>