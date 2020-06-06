<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Responses', 'Responses'],
          ['Yes', <?php echo $totalWhatsAppSubscriptions ?>],
          ['No', <?php echo $totalNotSubscibeWhatsApp ?>]
        ]);

        var options = {
          title: 'Should We Share Covid-19 Related Infomation',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 800px; height: 500px;"></div>
  </body>
</html>