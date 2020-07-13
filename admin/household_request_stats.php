<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Day', 'Number of Households'],
          ["Today", <?php echo $totalTodayRequests; ?>],
          ["Yesterday", <?php echo $totalYesterdayRequests; ?>],
          ["2 days ago", <?php echo $total2DaysRequests; ?>],
          ["3 days ago", <?php echo $total3DaysRequests; ?>],
          ["4 days ago", <?php echo $total4DaysRequests; ?>],
          ["5 days ago", <?php echo $total5DaysRequests; ?>],
          ["6 days ago", <?php echo $total6DaysRequests; ?>]
        ]);

        var options = {
          title: 'Household Requests Stats',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Requests Done In The Past Week',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
