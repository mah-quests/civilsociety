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
      google.charts.setOnLoadCallback(drawSexComposition);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawGenderChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSexComposition() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Males', <?php echo $totalNumberOfMales; ?>],
          ['Females', <?php echo $totalNumberOfFemales; ?>],
          ['Intersex', <?php echo $totalNumberOfIntersex; ?>],
          ['Others', <?php echo $totalNumberOfOtherSexuality; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Total Number of household people: <?php echo $totalNumberOfPeople ?>',
                       width:700,
                       height:450};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('SexComposition_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawGenderChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Heterosexual', <?php echo $totalNumberOfHeteroSex; ?>],
          ['Homosexual', <?php echo $totalNumberOfHomoSex; ?>],
          ['Bisexual', <?php echo $totalNumberOfBiSex; ?>],
          ['Cisgender', <?php echo $totalNumberOfCisGender; ?>], 
          ['Transgender', <?php echo $totalNumberOfTransGender; ?>], 
          ['Gender Nonconfirming', <?php echo $totalNumberOfNonConGender; ?>], 
          ['Queer / Questioning', <?php echo $totalNumberOfQueerGender; ?>] 
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Sexual and Gender Composition',
                       width:400,
                       height:400};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('genderComposition_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="SexComposition_chart_div" style="border: 0px solid #ccc"></div></td>
        <td><div id="genderComposition_chart_div" style="border: 0px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>
