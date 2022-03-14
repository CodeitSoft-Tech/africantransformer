<?php

   include("includes/db_conn.php");
   include("includes/header.php"); 

 ?>

				<div class="main-panel">
			    <div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Home Page</h2>
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
										<h4 class="card-title">Home Page Information</h4>
									</div>
								</div>
								<div class="card-body">
									
									
									<form class="form-horizontal" method="post" action="insert-home.php" enctype="multipart/form-data">

										<div class="form-group">
											<label>Slider Text</label>
											<input type="text" class="form-control" name="slider_text"required>
										</div>


										<div class="form-group">
											<label>Who We Are Content</label>
											<textarea class="form-control" name="wwa_content"></textarea>
										</div>

										<div class="form-group">
											<label>Content Image (Who We Are)</label>
											<input type="file" class="form-control" name="wwa_img" required>
										</div>

										<div class="form-group">
											<label>Mini Text (Under What We do)</label>
											<input type="text" class="form-control" name="wwd_mini_text"required>
										</div>

										<div class="form-group">
											<label>Info (What We Do)</label>
											<input type="text" class="form-control" name="wwd_info" required>
										</div>

										<div class="form-group">
											<label>Footer Image </label>
											<input type="file" class="form-control" name="comp_logo" required>
										</div>


										<div class="form-group">
											<label>What We Do One</label>
											<input type="text" class="form-control" name="wwd_one" required>
										</div>

										<div class="form-group">
											<label>What We Do Two</label>
											<input type="text" class="form-control" name="wwd_two" required>
										</div>


										<div class="form-group">
											<label>What We Do Three</label>
											<input type="text" class="form-control" name="wwd_three" required>
										</div>

										<div class="form-group">
											<label>What We Do Four</label>
											<input type="text" class="form-control" name="wwd_four" required>
										</div>


										<div class="form-group">
											<label>CopyRight Info</label>
											<input type="text" class="form-control" name="copyright" required>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary" name="btn_submit" style="text-transform: uppercase;">Submit</button>
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

	<?php

		if(isset($_POST['btn_submit']))
		{
			$slider_text   = mysqli_real_escape_string($db, $_POST['slider_text']);
			$wwa_content   = mysqli_real_escape_string($db, $_POST['wwa_content']);
			$wwd_mini_text = mysqli_real_escape_string($db, $_POST['wwd_mini_text']);
			$wwd_info      = mysqli_real_escape_string($db, $_POST['wwd_info']);
			$wwd_one       = mysqli_real_escape_string($db, $_POST['wwd_one']);
			$wwd_two       = mysqli_real_escape_string($db, $_POST['wwd_two']);
			$wwd_three     = mysqli_real_escape_string($db, $_POST['wwd_three']);
			$wwd_four      = mysqli_real_escape_string($db, $_POST['wwd_four']);
			$copyright     = mysqli_real_escape_string($db, $_POST['copyright']);
			
			$wwd_img  = $_FILES["wwa_img"]["name"]; 
            $tempname = $_FILES["wwa_img"]["tmp_name"];     
            $folder   = "home_images/".$wwd_img; 

            move_uploaded_file($tempname, $folder);


            $comp_logo = $_FILES["comp_logo"]["name"]; 
            $tempname  = $_FILES["comp_logo"]["tmp_name"];     
            $folder    = "home_images/".$comp_logo; 

            move_uploaded_file($tempname, $folder);
			 	 	 	 	 	 	 	 	 	 	 	
			$insert_home = "INSERT INTO system_settings(slider_text, home_wwa_content, home_wwa_img, home_wwd_mini_text, home_wwd_info, footer_img, footer_wwd_one, footer_wwd_two, footer_wwd_three, footer_wwd_four, footer_copyright)
			    VALUES('$slider_text', '$wwa_content', '$wwd_img', '$wwd_mini_text', '$wwd_info', '$comp_logo', '$wwd_one', '$wwd_two', '$wwd_three', '$wwd_four', '$copyright')";
			$run_home = mysqli_query($db, $insert_home);

			if($run_home)
			{
				echo "<script>alert('Information inserted successfully')</script>";
				echo "<script>document.location='insert-contact.php'</script>";
			}
		}


	?>