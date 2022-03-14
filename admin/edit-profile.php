<?php


   include("includes/db_conn.php");
   include("edit-profile-script.php");
   include("includes/header.php"); 


 ?>

 <?php

 		$select_admin = "SELECT * FROM admin";
 		$run_admin   = mysqli_query($db, $select_admin);

 		$row_admin = mysqli_fetch_array($run_admin);

 		$admin_id   = $row_admin['admin_id'];
 		$admin_name = $row_admin['username'];

 ?>

				<div class="main-panel">
			    <div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Edit Profile</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">			
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">Administrator Profile</h4>
									</div>
								</div>
								<div class="card-body">
									<form class="form-horizontal" method="post" action="edit-profile.php" enctype="multipart/form-data">

										<h3 style="font-size: 20px; color: #2b7fea">Change Username :</h3>
										 
										<div class="form-group">
										<label>Username</label>
										
										<input type="hidden" class="form-control" name="admin_id" value="<?php echo $admin_id; ?>" required>  

										<input type="text" class="form-control" name="username" value="<?php echo $admin_name; ?>" required>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary" name="btn_user" style="text-transform: uppercase;">Change Username</button>
										</div>

									</form>	

									<hr>

									<form class="form-horizontal" method="post" action="edit-profile.php">
										
										<h3 style="font-size: 20px; color: #2b7fea">Change Password :</h3>

										<div class="messages">
							              <?php 
							                  if($ErrorLogin)
							                  {
							                    foreach ($ErrorLogin as $key => $value) {
							                      echo '<div class="alert alert-danger  role="alert">
							                      <i class="fa fa-exclamation text-white"></i>
							                      '.$value.'
							                      </div>';
							                    }
							                  }

							              ?>
							            </div>  

										<div class="form-group">
											<label> Old Password </label>
											<input type="password" class="form-control" name="old_pass" placeholder="Enter Old Password">
										</div>

										<div class="form-group">
											<label> New Password </label>
											<input type="password" class="form-control" name="new_pass" placeholder="Enter New Password">
										</div>

									
										<div class="form-group">
											<button type="submit" class="btn btn-primary" name="btn_pass" style="text-transform: uppercase;">Change Password</button>
										</div>
	
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include("includes/footer.php"); ?>
		</div>
	</div>
	<?php include("includes/footer_links.php"); ?>

