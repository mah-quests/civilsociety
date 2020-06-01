<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Violation Type', 
          'Community Member Cases', 
          'Health Professionals Cases',
          'Gender Based Violance Cases', 
          'Law Enforcement Cases'],

          ['Violations types', 
          <?php echo $totalCommunityViolations ?>, 
          <?php echo $totalHealthCareViolations ?>, 
          <?php echo $totalGBViolations ?>, 
          <?php echo $totalLawEnforcementViolations ?>],
        ]);

        var options = {
          chart: {
            title: 'Total Recorded Violations: <?php echo $totalViolations ?>',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('human_right_barchart'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="human_right_barchart" style="width: 1100px; height: 400px;"></div>
  </body>
</html>
