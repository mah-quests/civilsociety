<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Mpumalanga:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsMpumalanga;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Mpumalanga</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=sibande">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsSibande;?>
                    </h1>
                    <span style="color: #132053"># in Gert Sibande</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nkangala">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNkangala;?>
                    </h1>
                    <span style="color: #132053"># in Nkangala</span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=ehlanzeni">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsEhlanzeni;?>
                    </h1>
                    <span style="color: #132053"># in Ehlanzeni </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonmpumalanga">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidMpumalangaDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>