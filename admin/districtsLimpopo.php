<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Limpopo:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsLimpopo;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Limpopo</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=capricorn">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsCapricorn;?>
                    </h1>
                    <span style="color: #132053"># in Capricorn District Municipality</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=mopani">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsMopani;?>
                    </h1>
                    <span style="color: #132053"># in Mopani District Municipality</span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=sekhukhune">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsSekhukhune;?>
                    </h1>
                    <span style="color: #132053"># in Sekhukhune District Municipality </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=vhembe">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsVhembe;?>
                    </h1>
                    <span style="color: #132053"># in Vhembe District Municipality </span>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-5" style="color: #132053">
                    </h1>
                    <span style="color: #132053"></span>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=waterberg">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsWaterberg;?>
                    </h1>
                    <span style="color: #132053"># in Waterberg District Municipality </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonlimpopo">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidLimpopoDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>