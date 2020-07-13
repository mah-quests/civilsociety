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
      google.charts.setOnLoadCallback(drawMediumChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawLanguageChart);


      function drawMediumChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['E-mail', <?php echo $totalCOVIDMeduimEmail; ?>],
          ['Social Media', <?php echo $totalCOVIDMeduimSocialMedia; ?>],
          ['Billboards', <?php echo $totalCOVIDMeduimBillboards; ?>],
          ['Internet Search', <?php echo $totalCOVIDMeduimInternet; ?>],
          ['Printed Media', <?php echo $totalCOVIDMeduimPrintMedia; ?>],
          ['SMS', <?php echo $totalCOVIDMeduimSMS; ?>],
          ['Radio and TV', <?php echo $totalCOVIDMeduimRadioTv; ?>],
          ['Municipalities', <?php echo $totalCOVIDMeduimMunicipality; ?>],
          ['Neighbourhood Committee', <?php echo $totalCOVIDMeduimNeighbourhoodCommittee; ?>],
          ['Local NPOs', <?php echo $totalCOVIDMeduimLocalNPO; ?>]
        ]);

        var options = {title:'Medium Of Infomation',
                       width:600,
                       height:400};

        var mediumChart = new google.visualization.PieChart(document.getElementById('medium_chart_div'));
        mediumChart.draw(data, options);
      }


      function drawLanguageChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['IsiNdebele', <?php echo $totalCOVIDInfoIsindebele; ?>],
          ['Sesotho sa Leboa', <?php echo $totalCOVIDInfoSesothoSaLeboa; ?>],
          ['Sesotho sa Borwa', <?php echo $totalCOVIDInfoSesothoSaBorwa; ?>],
          ['SiSwati', <?php echo $totalCOVIDInfoSiswati; ?>], 
          ['Xitsonga', <?php echo $totalCOVIDInfoXitsonga; ?>], 
          ['Setswana', <?php echo $totalCOVIDInfoSetswana; ?>], 
          ['Tshivenḓa', <?php echo $totalCOVIDInfoTshivenda; ?>],
          ['IsiXhosa', <?php echo $totalCOVIDInfoIsiXhosa; ?>],
          ['IsiZulu', <?php echo $totalCOVIDInfoIsiZulu; ?>], 
          ['Afrikaans', <?php echo $totalCOVIDInfoAfrikaans; ?>], 
          ['English', <?php echo $totalCOVIDInfoEnglish; ?>]
        ]);

        var options = {title:'Languages Mostly Used',
                       width:600,
                       height:400};

        var languageChart = new google.visualization.PieChart(document.getElementById('language_chart_div'));
        languageChart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="medium_chart_div" style="border: 0px solid #ccc"></div></td>
        <td><div id="language_chart_div" style="border: 0px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>
