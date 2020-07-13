<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Northern Cape:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsNorthernCape;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Northern Cape</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=francesbaard">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsFrancesBaard;?>
                    </h1>
                    <span style="color: #132053"># in Frances Baard District </span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=gaetsewe">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsGaetsewe;?>
                    </h1>
                    <span style="color: #132053"># in John Taolo Gaetsewe District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=namakwa">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNamakwa;?>
                    </h1>
                    <span style="color: #132053"># in Namakwa District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=pixley">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsPixley;?>
                    </h1>
                    <span style="color: #132053"># in Pixley ka Seme District Municipality </span>
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
                <a href="showAgentPerDistrict.php?district=mgcawu">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsMgcawu;?>
                    </h1>
                    <span style="color: #132053"># in ZF Mgcawu District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonnotherncape">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidNorthernCapeDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>