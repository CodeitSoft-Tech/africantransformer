
<?php
	
	session_start();
	include("includes/db_conn.php");
	include("user_login.php");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Transformer | Login </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper sidebar_minimize">
		<div class="main-header">
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">				
			</nav>
		</div>
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">African Transformer Limited</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="index.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<!--<li class="nav-item">
								<a href="index.php"></a>
							</li>-->
							<!--<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>-->
							<li class="nav-item">
								<a href="index.php">Login</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Login</div>
								</div>
								<div class="card-body">
									<div class="row">    
									  <form action="index.php" method="POST">
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
											<label for="Username">Username</label>
											<input type="text" class="form-control" name="admin_name">
											</div>
											
											<div class="form-group">
											<label for="Password">Password</label>
											<input type="password" class="form-control" name="admin_pass">
											</div>
											
											<div class="form-group">
											<button type="submit" name="btn_login" class="btn btn-primary">Login</button>
										    </div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>


		
		
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
</body>
</html>



