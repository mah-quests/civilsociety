<?php

session_start();
error_reporting(0);
include("../connection/connect.php");

if(isset($_POST['submit'] ))
{
    if(
        empty($_POST['f_name']) ||  //fetching and find if its empty
        empty($_POST['l_name']) ||
        empty($_POST['username']) ||
        empty($_POST['email']) ||
        empty($_POST['phone']) ||
        empty($_POST['provice']) ||            
        empty($_POST['district']) ||     
        empty($_POST['municipality']) ||     
        empty($_POST['sex']) ||
        empty($_POST['alt_person']) ||
        empty($_POST['alt_number']) ||
        empty($_POST['nationality']) ||
        empty($_POST['organization_name']) ||
        empty($_POST['organization_structure']) ||
        empty($_POST['network']) ||
        empty($_POST['password'])
        )
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>All fields Required!</strong>
					</div>';
	} else {
		
    if(strlen($_POST['password']) < 6)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Password must be >=6!</strong>
				</div>';
	}
	
	elseif(strlen($_POST['phone']) < 10)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>invalid phone!</strong>
				</div>';
	}
	
	else{
       
	
  $mql = "UPDATE  users
        SET 
            organization_structure='$_POST[organization_structure]', 
            organization_name='$_POST[organization_name]', 
            f_name ='$_POST[f_name]', 
            l_name ='$_POST[l_name]', 
            username='$_POST[username]', 
            sex='$_POST[sex]', 
            phone='$_POST[phone]', 
            email='$_POST[email]', 
            network='$_POST[network]', 
            nationality='$_POST[nationality]', 
            address='$_POST[address]', 
            municipality='$_POST[municipality]', 
            district='$_POST[district]', 
            provice='$_POST[provice]', 
            alt_person='$_POST[alt_person]', 
            alt_number='$_POST[alt_number]',             
            password='$_POST[password]'
        
        where u_id='$_GET[user_upd]' ";

	mysqli_query($db, $mql);

	$success = 	'<div class="alert alert-success alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>User Updated!</strong>
                    </div>';
	
        }
	}

}

include 'header_admin.php';
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">User Menu</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                 <div class="row">
				
				 <div class="container-fluid">
                <!-- Start Page Content -->
                  
	<?php  
		echo $error;
		echo $success; 
		echo var_dump($_POST);
											
	?>
									
								
    <div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Update User Details</h4>
        </div>
        <div class="card-body">
			<?php $ssql ="select * from users where u_id='$_GET[user_upd]'";
			$res=mysqli_query($db, $ssql); 
			$newrow=mysqli_fetch_array($res);?>
            <form action='' method='post'  >
                <div class="form-body">
            <hr>
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">
                            Partner Network/ NPO Reg Number
                        </label>
                        <input type="text" name="organization_structure" class="form-control" value="<?php  echo $newrow['organization_structure']; ?>" placeholder="organization_structure">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">
                            Organization Name
                        </label>
                        <input type="text" name="organization_name" class="form-control form-control-danger"  value="<?php  echo $newrow['organization_name'];  ?>" placeholder="Please enter your organization name">
                        </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">First Names </label>
                        <input type="text" name="f_name" class="form-control" placeholder="Please enter the first name"  value="<?php  echo $newrow['f_name']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Surname</label>
                        <input type="text" name="l_name" class="form-control form-control-danger"  value="<?php  echo $newrow['l_name'];  ?>" placeholder="Please enter the Surname">
                        </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label"> Identification Number</label>
                        <input type="text" name="username" class="form-control" placeholder="Please enter your Identification Number"  value="<?php  echo $newrow['username']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Sex</label>
                        <input type="text" name="sex" class="form-control form-control-danger"  value="<?php  echo $newrow['sex'];  ?>" placeholder="Please enter your sex">
                        </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Cellphone number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Please enter the Cellphone number"  value="<?php  echo $newrow['phone']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Email address</label>
                        <input type="email" name="email" class="form-control form-control-danger"  value="<?php  echo $newrow['email'];  ?>" placeholder="Please enter a valid email">
                        </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nationality</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Please enter the nationality"  value="<?php  echo $newrow['nationality']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Home Address</label><br>
                            <textarea class="form-control" rows=3 >
                                <?php echo $newrow['address']; ?>
                            </textarea>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Municipality </label>
                        <input type="text" name="municipality" class="form-control" placeholder="Please enter a valid municipality"  value="<?php  echo $newrow['municipality']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">District</label>
                        <input type="text" name="district" class="form-control form-control-danger"  value="<?php  echo $newrow['district'];  ?>" placeholder="Please enter valid district">
                        </div>
                </div>
                <!--/span-->
            </div>
                <!--/span-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Province </label>
                        <input type="text" name="provice" class="form-control" placeholder="Please enter a valid province"  value="<?php  echo $newrow['provice']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Network Type (C/ N/ P)</label>
                        <input type="text" name="network" class="form-control form-control-danger"  value="<?php  echo $newrow['network'];  ?>" placeholder="Please enter a valid Network Type">
                        </div>
                </div>
                <!--/span-->
            </div>                
            <!--/row-->
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Alternative Contact Person </label>
                        <input type="text" name="alt_person" class="form-control" placeholder="Please enter an Alternative Contact Person"  value="<?php  echo $newrow['alt_person']; ?>">
                       </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="control-label">Alternative Contact Number</label>
                        <input type="text" name="alt_number" class="form-control form-control-danger"  value="<?php  echo $newrow['alt_number'];  ?>" placeholder="Please enter an Alternative Contact Person number">
                        </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->                                                            
			 <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-danger"   value="<?php  echo $newrow['password'];  ?>" placeholder="password">
                    </div>
                </div>
            </div>
                <!--/span-->
                
          
                <!--/span-->
            </div>
        </div>
                    <div class="form-actions">
                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
				
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

<?php
include 'footer.php';
?>