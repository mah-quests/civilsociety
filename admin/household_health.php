<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawChronicChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(fieldWorkerChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawChronicChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Health care', <?php echo $totalHealthCareWorkers ?>],
          ['Disaster Management', <?php echo $totalDisasterWorkers ?>],
          ['Retail', <?php echo $totalRetailWorkers ?>],
          ['Emegency Respondants', <?php echo $totalEmegencyWorkers ?>],
          ['Transport Services', <?php echo $totalTransportWorkers ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'',
                       width:500,
                       height:500,                       
                       pieHole: 0.4,
                     };

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('chronic_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function fieldWorkerChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Needs Chronic Medication', <?php echo $totalChronicPatients ?>],
          ['Pregnant', <?php echo $totalPeoplePregnant ?>],
          ['Front line workers', <?php echo $totalFrontLineWorkers ?>]
        ]);

        // Set options for Anthony's pie chart.
        var barchart_options = {
                      title:'Households Medics',
                       width:600,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('responseWorker_barchart_div'));
        barchart.draw(data, barchart_options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td>
            <div id="responseWorker_barchart_div" style="border: 0px solid #ccc">
            </div>
        </td>
        <td>
            <div id="chronic_chart_div" style="border: 0px solid #ccc">
            </div>
        </td>                
      </tr>
    </table>
  </body>
</html>
