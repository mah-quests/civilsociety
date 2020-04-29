<?php
include_once 'header_app.php';
?>

        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item">
                            <span>1</span>
                                <a href="local_partners.php"> 
                                    Choose Nearest Network Partner
                                </a>
                        </li>
                        <li class="col-xs-12 col-sm-4 link-item active">
                            <span>2</span>
                                <a href="request.php?res_id=<?php echo $_GET['res_id']; ?>"> Pick Your Request
                                </a>
                        </li>
                        <li class="col-xs-12 col-sm-4 link-item">
                            <span>3</span>
                                <a href="checkout.php">Confirm and Submit Request
                                </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <?php $ress= mysqli_query($db,"select * from restaurant where rs_id='$_GET[res_id]'");
                    $rows=mysqli_fetch_array($ress);
                    ?>
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-ori.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br></p>        
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt" id="sec01">
                                    <h6><a href="#sec01"></a></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> <a class="nav-link active" href="#sec01"><i></i></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#sec01"><i></i></a> 
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->

            <div class="breadcrumb">
                <div class="container">
                </div>
            </div>

            <div class="container m-t-30">
                <div class="row" align="center">
                    <div class="col-xs-16 col-sm-8 col-md-8 col-lg-9">
                        <!-- end:Widget menu -->
                        <div class="menu-widget">
                            <div>
                                <h3 class="widget-title text-dark">
                                  Type of assistance required for household 
                                    <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                                  </a>
                                </h3>
                                <div class="clearfix"></div>
                            </div>
                        <div class="collapse in" id="popular2">

			<?php  // display values and item of food/dishes
				$stmt = $db->prepare("select * from dishes where rs_id='$_GET[res_id]'");
				$stmt->execute();
				$products = $stmt->get_result();
					if (!empty($products)) {
						foreach($products as $product){
            ?>
            <div class="food-item">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-8">
						<form method="post" action='request.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                            <div class="rest-logo pull-left" id="sec03">
                                <a class="restaurant-logo pull-left" href="#sec03">
                                    <?php echo '<img src="images/assist/'.$product['img'].'" alt="Food logo">'; 
                                    ?>
                                </a>
                            </div>
                            <!-- end:Logo -->
                                <div class="rest-descr" id="sec02">
                                    <h6>
                                        <a href="#sec02"><?php echo $product['title']; ?>
                                        </a>
                                    </h6>
                                    <p> <?php echo $product['slogan']; ?>
                                    </p>
                                </div>
                                <!-- end:Description -->
                            </div>
                            <!-- end:col -->
                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
							<span class="price pull-left" >
                            </span>
							  <input class="b-r-0" type="text" name="quantity"  style="margin-left:30px;" value="1" size="2" />
							  <input type="submit" class="btn theme-btn" style="margin-left:40px;" value="Add" />
						</div>
					</form>
                </div>
                <!-- end:row -->
            </div>
            <!-- end:Food item -->
			<?php
				  }
				}
				
			?>
                        </div>
                        <!-- end:Collapse -->
                    </div>
                    <!-- end:Widget menu -->
                       
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="widget widget-cart">
                        <div>
                            <h3 class="widget-title text-dark">
                                 Total Request
                            </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="order-row bg-white">
                        <div class="widget-body">
                    <?php
                        $item_total = 0;
                        foreach ($_SESSION["cart_item"] as $item)  // fetch items define current into session ID
                    {
                    ?>
                    <div class="title-row">
                        <?php echo $item["title"]; ?>
                        <a href="request.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                            <i class="fa fa-trash pull-right"></i>
                        </a>
                    </div>
                                        
                    <div class="form-group row no-gutter">
                        <div class="col-xs-8">
                            <input type="text" class="form-control b-r-0" readonly id="exampleSelect1">
                        </div>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" readonly value='<?php echo $item["quantity"]; ?>' id="example-number-input"> 
                    </div>
                                        
                </div>
                                      
                <?php
                    $item_total += ($item["price"]*$item["quantity"]); // calculating current price into cart
                }
                ?>                                
            </div>
        </div>
                               
        <!-- end:Order row -->
                             
        <div class="widget-body">
            <div class="price-wrap text-xs-center">
                <p></p>
                    <h3 class="value"><strong></strong>
                    </h3>
                <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn theme-btn btn-lg">
                    Confirmation
                </a>
            </div>
        </div>
        </div>
        </div>
        <!-- end:Bar -->
        <!-- end:Right Sidebar -->
    </div>
    <!-- end:row -->
</div>
<!-- end:Container -->

<?php
include_once 'footer.php';
?>