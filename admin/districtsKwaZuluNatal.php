<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Kwazulu Natal:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsKZN;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Kwazulu Natal</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=amajuba">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsAmajuba;?>
                    </h1>
                    <span style="color: #132053"># in Amajuba District </span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=gwala">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsHarryGwala;?>
                    </h1>
                    <span style="color: #132053"># in Harry Gwala District </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=ilembe">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsiLembe;?>
                    </h1>
                    <span style="color: #132053"># in iLembe District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=cetshwayo">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsKingCetshwayo;?>
                    </h1>
                    <span style="color: #132053"># in King Cetshwayo District  </span>
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
                <a href="showAgentPerDistrict.php?district=ugu">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsUgu;?>
                    </h1>
                    <span style="color: #132053"># in Ugu District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=umgungundlovu">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsuMgungundlovu;?>
                    </h1>
                    <span style="color: #132053"># in uMgungundlovu District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=umkhanyakude">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsuMkhanyakude;?>
                    </h1>
                    <span style="color: #132053"># in uMkhanyakude District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=umzinyathi">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsuMzinyathi;?>
                    </h1>
                    <span style="color: #132053"># in uMzinyathi District  </span>
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
                <a href="showAgentPerDistrict.php?district=uthukela">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsuThukela;?>
                    </h1>
                    <span style="color: #132053"># in uThukela District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=zululand">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsZululand;?>
                    </h1>
                    <span style="color: #132053"># in Zululand District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=ethekwini">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentseThekwini;?>
                    </h1>
                    <span style="color: #132053"># in eThekwini Metropolitan </span>
                </a>
              </div>
            </div>


            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nonkzn">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidKZNDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>