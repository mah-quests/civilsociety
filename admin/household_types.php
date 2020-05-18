<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Type of Settlement', 'Informal Settlement', 'RDP', 'Village', 'Townhouse', 'Background Dwellers', 'Traditional','Farm Dwellers', 'Flats', 'Hostel'],
          ['#', <?php echo $totalNumberOfInformal ?>, <?php echo $totalNumberOfRDP ?>, <?php echo $totalNumberOfVillage ?>, <?php echo $totalNumberOfTownHouses ?>, <?php echo $totalNumberOfBackDwellers ?>, <?php echo $totalNumberOfTraditional ?>, <?php echo $totalNumberOfFarm ?>, <?php echo $totalNumberOfFlats ?>, <?php echo $totalNumberOfHostels ?>] 
        ]);

        var options = {
          chart: {
            title: 'Household Types',
            subtitle: 'Various types of Households visited',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 1000px; height: 500px;"></div>
  </body>
</html>