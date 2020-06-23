<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Progress', 'House Requests'],
          ['Unprocessed Requests', <?php echo $totalUnProcessed ?>],
          ['In Progress Requests', <?php echo $totalBeingProcessed ?>],
          ['Completed Requests', <?php echo $totalClosed ?>],
          ['Rejected Requests', <?php echo $totalRejected ?>]
        ]);

        var options = {
          title: 'Visual Progress Report',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 1200px; height: 500px;"></div>
  </body>
</html>