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
      google.charts.setOnLoadCallback(drawDisabilityAge);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawDisabilityType);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawDisabilityAge() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Adults', <?php echo $totalAdultsWithDisabilities; ?>],
          ['Children', <?php echo $totalChildrenWithDisabilities; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Total Number of household people: <?php echo $actualDisabilities ?>',
                       width:600,
                       height:600};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('DisabilityAge_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawDisabilityType() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Physical Disability', <?php echo $totalPhysicalDisabilities; ?>],
          ['Psycho social Disability', <?php echo $totalPsycoDisabilities; ?>],
          ['Other disability type', <?php echo $totalOtherDisabilities; ?>]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Sexual and Gender Composition',
                       width:600,
                       height:600};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('DisabilityType_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td>
          <div id="DisabilityAge_chart_div" style="border: 0px solid #ccc">
          </div>
        </td>
        <td>
          <div id="DisabilityType_chart_div" style="border: 0px solid #ccc">
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>
