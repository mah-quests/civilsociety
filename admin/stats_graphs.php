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
      google.charts.setOnLoadCallback(drawAgentsRegistrations);

      function drawAgentsRegistrations() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['#', 'COVID-19 Front Agents', 'Civil Society Agents', 'Community Member Agents', 'Average'],
          ['today',  <?php echo $totalTodayPartners; ?> , <?php echo $totalTodayCivilSociety; ?> , <?php echo $totalTodayComminity; ?>, <?php echo $todayAverage; ?> ],
          ['yesterday', <?php echo $totalYesterdayPartners; ?> , <?php echo $totalYesterdayCivilSociety; ?> , <?php echo $totalYesterdayComminity; ?>, <?php echo $yesterdayAverage; ?> ],
          ['2 days ago', <?php echo $total2DaysPartners; ?> , <?php echo $total2DaysCivilSociety; ?> , <?php echo $total2DaysComminity; ?>, <?php echo $twoDaysAgoAverage; ?> ],
          ['3 days ago', <?php echo $total3DaysPartners; ?> , <?php echo $total3DaysCivilSociety; ?> , <?php echo $total3DaysComminity; ?>, <?php echo $threeDaysAgoAverage; ?> ],
          ['4 days ago', <?php echo $total4DaysPartners; ?> , <?php echo $total4DaysCivilSociety; ?> , <?php echo $total4DaysComminity; ?>, <?php echo $fourDaysAgoAverage; ?> ],
          ['5 days ago', <?php echo $total5DaysPartners; ?> , <?php echo $total5DaysCivilSociety; ?> , <?php echo $total5DaysComminity; ?>, <?php echo $fiveDaysAgoAverage; ?> ],
          ['6 days ago', <?php echo $total6DaysPartners; ?> , <?php echo $total6DaysCivilSociety; ?> , <?php echo $total6DaysComminity; ?>, <?php echo $sixDaysAgoAverage; ?> ]
        ]);

        var options = {
          title : 'Stats on activities on thusasechaba.org.za',
          vAxis: {title: 'Number of registration'},
          hAxis: {title: 'Day Stats'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}        
        };

        var chart = new google.visualization.ComboChart(document.getElementById('draw_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="draw_chart_div" style="width: 1100px; height: 500px;"></div>
  </body>
</html>