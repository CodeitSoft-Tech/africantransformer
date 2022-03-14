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
								<h2 class="text-white pb-2 fw-bold">Add About Us Information</h2>
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
										<h4 class="card-title">About Us</h4>
									</div>
								</div>
								<div class="card-body">
									<form class="form-horizontal" method="post" action="add-about.php" enctype="multipart/form-data">

										<div class="form-group">
										<label>About Title</label>
										<input type="text" class="form-control" name="main_text" required>
										</div>

										<!--<div class="form-group">
										<label>About Mini Title</label>
										<input type="text" class="form-control" name="mini_text" required>
										</div>-->

										<div class="form-group">
											<label>About Us Content</label>
											<textarea height="1500" class="form-control" name="about_content">
											</textarea>
										</div>

										<div class="form-group">
											<label>About Us Image</label>
											<input type="file" class="form-control" name="uploadfile" required>
										</div>

										<!--<div class="form-group">
											<label>Our Team Content</label>
											<textarea class="form-control" name="our_team_content">
											</textarea>
										</div> -->
									   
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
			 	 	 	 
			$main_text 		    = mysqli_real_escape_string($db, $_POST['main_text']);
			$about_content  = mysqli_real_escape_string($db, $_POST['about_content']);
			

			   $filename = $_FILES["uploadfile"]["name"]; 
            $tempname = $_FILES["uploadfile"]["tmp_name"];     
            $folder   = "about_us_images/".$filename; 

            move_uploaded_file($tempname, $folder);

			
		   $insert_about = "INSERT INTO about_comp(about_header, about_img, about_desc)VALUES('$main_text', '$filename', '$about_content')";

			$run_about = mysqli_query($db, $insert_about);

			if($run_about)
			{
				echo "<script>alert('Information added successfully')</script>";
				echo "<script>document.location='add-about.php'</script>";
			}
		}


	?>