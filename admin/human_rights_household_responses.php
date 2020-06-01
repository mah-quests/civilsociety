<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawTotalChronicChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Household', 'Responses'],
          ['Specified Violation Type', <?php echo $totalSpecifiedViolation ?> ],
          ['Non Specified ', <?php echo $totalUnspecifiedViolations ?>]
        ]);

        var options = {
          title: 'Household Responded Positively to human rights violations: <?php echo $totalYesViolations ?> ',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }

      function drawTotalChronicChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Law Enforcement Violations', <?php echo $totalLawEnforcementViolations ?>],
          ['Community Member Violations', <?php echo $totalCommunityViolations ?>],
          ['Health Professiona Violations', <?php echo $totalHealthCareViolations ?>],
          ['Domestic Violations', <?php echo $totalGBViolations ?>]
        ]);

        // Set options for Sarah's pie chart.
        var overall_totals_options = {
                      title:'Total Number Of Violations: <?php echo $totalViolations ?>',
                       width:600,
                       height:400,
                       legend: 'none',
                       colors: ['#DC3912', '#DC3932', '#DC3952', '#DC3A12']
                     };

      
        var overall_totals_barchart = new google.visualization.BarChart(document.getElementById('chronic_total_div'));
        overall_totals_barchart.draw(data, overall_totals_options);
      }

    </script>
  </head>
  <body>

    <table class="columns">
      <tr>
        <td>
          <div id="donutchart" style="width: 500px; height: 400px;"></div>
        </td>
        <td>
          <div id="chronic_total_div" style="width: 800px; height: 400px;">
        </td>                
      </tr>
    </table>
 
  </body>
</html>