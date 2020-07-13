<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Free State:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsFreeState;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Free State</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=mangaung">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsMangaung;?>
                    </h1>
                    <span style="color: #132053"># in Mangaung Metropolitan</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=feziledabi">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsFezileDabi;?>
                    </h1>
                    <span style="color: #132053"># in Fezile Dabi District</span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=lejweleputswa">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsLejweleputswa;?>
                    </h1>
                    <span style="color: #132053"># in Lejweleputswa District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=mofutsanyana">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsMofutsanyana;?>
                    </h1>
                    <span style="color: #132053"># in Thabo Mofutsanyana District  </span>
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
                <a href="showAgentPerDistrict.php?district=xhariep">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsXhariep;?>
                    </h1>
                    <span style="color: #132053"># in Xhariep District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonfreestate">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidFreeStateDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>