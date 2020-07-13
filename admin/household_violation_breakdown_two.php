<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChronicChartTwo);
      google.charts.setOnLoadCallback(fieldWorkerChartFour);

      function drawChronicChartTwo() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Discrimination', <?php echo $totalAllHPDiscrimination ?>],
          ['Disclosure of confidential information', <?php echo $totalAllHPDisclosure ?>],
          ['Access to health care', <?php echo $totalAllHPAccessToHealth ?>],
          ['Access to Sexual and Reproductive health care', <?php echo $totalAllHPAccessToSexRepHealth ?>],
          ['Undefined', <?php echo $totalhealthCareYes ?>]
        ]);

        
        var second_bar_options = {
                      title:'Health Care Professional',
                       width:600,
                       height:300,
                       legend: 'none'};

      
        var first_barchart = new google.visualization.BarChart(document.getElementById('second_chronic_chart_div'));
        first_barchart.draw(data, second_bar_options);
      }

      
      function fieldWorkerChartFour() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Assault', <?php echo $totalAllDVAssult ?>],
          ['Abuse', <?php echo $totalAllDVAbuse ?>],
          ['Discrimination', <?php echo $totalAllDVDiscrimination ?>],
          ['Undefined', <?php echo $totalDomesticYes ?>]
        ]);

        // Set options for Anthony's pie chart.
        var fourth_chart_options = {
                      title:'Domestic Violance',
                       width:600,
                       height:300,
                       legend: 'none'};

        var fourth_barchart = new google.visualization.BarChart(document.getElementById('fourth_barchart_div'));
        fourth_barchart.draw(data, fourth_chart_options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td>
            <div id="fourth_barchart_div" style="border: 0px solid #ccc">
            </div>
        </td>
        <td>
            <div id="second_chronic_chart_div" style="border: 0px solid #ccc">
            </div>
        </td>                
      </tr>
    </table>
  </body>
</html>
