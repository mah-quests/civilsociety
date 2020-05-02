<?php
include_once 'header_app.php';
?>
    <div class="page-wrapper">
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active">
                        <span>1</span>
                            <a href="local_partners.php"> Find Your Nearest CCC Representative
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>2</span>
                            <a href="partner_registration.php"> Add A New CCC Represantative
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>3</span>
                            <a href="household_application_form.php"> Log A Need Request
                            </a>
                    </li>
                </ul>
            </div>
        </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-sotho.png">
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
                                <div class="pull-left right-text white-txt">
                                    <h6><a href="#"></a></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> <a class="nav-link active" href="#"><i></i></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i></i></a> 
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

            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div>
                                    <h3 class="widget-title text-dark">
                                        Search By Province
                                    </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body" id="provice">
                                    <ul class="tags">
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Gauteng
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Kwa-zulu Natal
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Northen Cape
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Free State
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Eastern Cape
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Western Cape
                                            </a> 
                                        </li>                                    
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Limpopo
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                Mpumalanga
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#provice" class="tag">
                                                North West
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
							<?php $ress= mysqli_query($db,"select * from users where network='P'");
									while($rows=mysqli_fetch_array($ress))
									{
									echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
											<div class="entry-logo">
											</div>
											<!-- end:Logo -->
											<div class="entry-dscr">
												<h5>
                                                    <a href="request.php?res_id='.$rows['f_name'].'" >'.$rows['l_name'].'
                                                    </a>
                                                </h5> 
                                                    <span>'.$rows['address'].' 
                                                    <a href="#">...</a>
                                                    </span>
													<ul class="list-inline">
                                                        <li class="list-inline-item">
                                                        </li>
                                                    <li class="list-inline-item">
                                                    </li>
													</ul>
												</div>
												<!-- end:Entry description -->
											</div>
														
											<div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                                <div class="right-content bg-white">
                                                <div class="right-review">
											<p> Contact Number</p> 
                                                <span>'.$rows['phone'].' 
                                                </span>
                                                </div>
											</div>
											<!-- end:right info -->
										</div>';
									}
						          ?>
                                </div>
                                <!--end:row -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

<?php
include_once 'footer.php';
?>