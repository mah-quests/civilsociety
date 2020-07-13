<?php
include("../connection/dataCollection.php");
?>

  <div class="row" style="color: #132053">
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Total Agents In Eastern Cape:
                <br><br>
              <div class="card-body text-center" style="color: #132053">
                    <h1 class="display-4" style="color: #132053">
                        <?php echo $totalAgentsEasternCape;?>
                    </h1>
                <span style="color: #132053"># Total Agents In Eastern Cape</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3" >
                <br>
              <div class="card-body text-center">
                <a href="showAgentPerDistrict.php?district=alfrednzo">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsAlfredNzo;?>
                    </h1>
                    <span style="color: #132053"># in Alfred Nzo District  </span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=amathole">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsAmathole;?>
                    </h1>
                    <span style="color: #132053"># in Amathole District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=chrishani">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsChrisHani;?>
                    </h1>
                    <span style="color: #132053"># in Chris Hani District Municipality </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=joegqabi">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsJoeGqabi;?>
                    </h1>
                    <span style="color: #132053"># in Joe Gqabi District  </span>
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
                <a href="showAgentPerDistrict.php?district=ort">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsORTambo;?>
                    </h1>
                    <span style="color: #132053"># in OR Tambo District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=sbaartman">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsSarahBaartman;?>
                    </h1>
                    <span style="color: #132053"># in Sarah Baartman District  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=nelsonmandela">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNelsonMandela;?>
                    </h1>
                    <span style="color: #132053"># in Nelson Mandela Bay Metropolitan  </span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center" style="color: #132053">
                <a href="showAgentPerDistrict.php?district=buffalocity">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsBuffaloCity;?>
                    </h1>
                    <span style="color: #132053"># in Buffalo City Metropolitan  </span>
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
                <a href="showAgentPerDistrict.php?district=noneasterncape">
                    <h1 class="display-5" style="color: #132053">
                        <?php echo $totalAgentsNoValidEasternCapeDistrict;?>
                    </h1>
                    <span style="color: #132053"># in Non Valid District </span>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>