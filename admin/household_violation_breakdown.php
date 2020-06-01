<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChronicChart);
      google.charts.setOnLoadCallback(fieldWorkerChart);

      function drawChronicChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Unlawful Detention', <?php echo $totalAllLEUnlawfulDetention ?>],
          ['Assault', <?php echo $totalAllLEAssult ?>],
          ['Inhuman Treatment', <?php echo $totalAllLEInhumanTreatment ?>],
          ['Undefined', <?php echo $totalLawEnforcementYes ?>]          
        ]);

        // Set options for Sarah's pie chart.
        var firstbar_options = {
                      title:'Law Enforcement Violations',
                       width:600,
                       height:400,
                       legend: 'none'};

      
        var first_barchart = new google.visualization.BarChart(document.getElementById('chronic_chart_div'));
        first_barchart.draw(data, firstbar_options);
      }

      
      function fieldWorkerChart() {

        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Discrimination', <?php echo $totalAllCMDiscrimination ?>],
          ['Stigma', <?php echo $totalAllCMStigma ?>],
          ['Domestic violence', <?php echo $totalAllCMDomesticViolance ?>],
          ['Undefined', <?php echo $totalDomesticViolanceYes ?>]
        ]);

        // Set options for Anthony's pie chart.
        var barchart_options = {
                      title:'Community Member Violations',
                       width:500,
                       height:400,
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
