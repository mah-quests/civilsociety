<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Violation Type', 
          'Total Violation', 
          'Law Enforcement', 
          'Community Member', 
          'Health Professionals', 
          'GBV'],

          ['Violations types', 
          <?php echo $totalViolations ?>, 
          <?php echo $totalLawEnforcementViolations ?>, 
          <?php echo $totalCommunityViolations ?>, 
          <?php echo $totalHealthCareViolations ?>, 
          <?php echo $totalGBViolations ?>],
        ]);

        var options = {
          chart: {
            title: 'Violations Stats',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('human_right_barchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="human_right_barchart" style="width: 1100px; height: 500px;"></div>
  </body>
</html>
