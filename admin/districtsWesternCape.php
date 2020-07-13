<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Western Cape:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsWesternCape;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Western Cape</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=winelands">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsCapeWinelands;?>
                    </h1>
                    <span style="color: #132053"># in Cape Winelands District </span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=karoo">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsKaroo;?>
                    </h1>
                    <span style="color: #132053"># in Central Karoo District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=gardenroute">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsGardenRoute;?>
                    </h1>
                    <span style="color: #132053"># in Garden Route District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=overberg">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsOverberg;?>
                    </h1>
                    <span style="color: #132053"># in Overberg District </span>
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
                <a href="showAgentPerDistrict.php?district=westcoast">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsWestCoast;?>
                    </h1>
                    <span style="color: #132053"># in West Coast District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=capetown">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsCapeTown;?>
                    </h1>
                    <span style="color: #132053"># in City of Cape Town Metropolitan </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonwesterncape">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidWesternCapeDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>