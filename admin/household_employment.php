<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawIncomeComposition);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawIncomeChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawIncomeComposition() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Employed With Income', <?php echo $employedWithIncome; ?>],
          ['Employed Without Income', <?php echo $employedWithOutIncome; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Income Percentages',
                       width:500,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Composition_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawIncomeChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Employed', <?php echo $totalPeopleEmployed; ?>],
          ['Employment Lost', <?php echo $totalPeopleLostEmployment; ?>],
          ['Social Grants', <?php echo $totalPeopleSocialGrants; ?>],
          ['Receiving Income', <?php echo $totalReceivingIncome; ?>], 
          ['Lost Income', <?php echo $totalNotReceivingIncome; ?>], 
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Employment & Income Stats',
                       width:700,
                       height:600};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Income_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="Composition_chart_div" style="border: 0px solid #ccc"></div></td>
        <td><div id="Income_chart_div" style="border: 0px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>
