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
      google.charts.setOnLoadCallback(drawStreamComposition);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawNeedChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawStreamComposition() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Social Mobalization', <?php echo $totalAssignedSocialMobalization; ?>],
          ['Human Right', <?php echo $totalAssignedHumanRights; ?>],
          ['Advocacy', <?php echo $totalAssignedAdvocacy; ?>],
          ['Comms & Media', <?php echo $totalAssignedComms; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Requests Assigned To Various Streamhead ',
                       width:600,
                       height:400};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('StramComposition_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawNeedChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Access To Food', <?php echo $totalAccessToFoodRequest; ?>],
          ['Access To Jobs', <?php echo $totalAccessJob; ?>],
          ['Access To Electricity', <?php echo $totalAccessToElectricity; ?>],
          ['Access To Medication', <?php echo $totalAccessToMedication; ?>],
          ['Access To Identity Documents', <?php echo $totalAccessIDDocuments; ?>],
          ['Access To Clothes & Blankets', <?php echo $totalAccessClothingBlankets; ?>],
          ['Access To Data & Internet', <?php echo $totalAccessDataInternet; ?>]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Sexual and Gender Composition',
                       width:600,
                       height:400};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('needComposition_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="StramComposition_chart_div" style="border: 0px solid #ccc"></div></td>
        <td><div id="needComposition_chart_div" style="border: 0px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>
