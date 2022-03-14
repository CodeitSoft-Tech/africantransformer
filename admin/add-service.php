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
								<h2 class="text-white pb-2 fw-bold">Our Services</h2>
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
										<h4 class="card-title">Our Services Information</h4>
									</div>
								</div>
								<div class="card-body">
									
									
									<form class="form-horizontal" method="post" action="add-service.php" enctype="multipart/form-data">

										<div class="form-group">
											<label>Service Name</label>
											<input type="text" class="form-control" name="service_name" required>
										</div>

										<!--<div class="form-group">
											<label>Service Image</label>
											<input type="file" class="form-control" name="uploadfile" required>
										</div> -->

										<div class="form-group">
											<label>Service Description</label>
											<textarea name="service_desc" class="form-control">
											</textarea>
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
			$service_name   = mysqli_real_escape_string($db, $_POST['service_name']);
			$service_desc   = mysqli_real_escape_string($db, $_POST['service_desc']);
			
			//$filename = $_FILES["uploadfile"]["name"]; 
         //$tempname = $_FILES["uploadfile"]["tmp_name"];     
         //$folder   = "our_services_images/".$filename; 

         //move_uploaded_file($tempname, $folder);
			
			$insert_service = "INSERT INTO comp_services(service_name, service_desc)VALUES('$service_name', '$service_desc')";
			$run_service    = mysqli_query($db, $insert_service);

			if($run_service)
			{
				echo "<script>alert('Information added successfully')</script>";
				echo "<script>document.location='add-service.php'</script>";
			}
		}


	?>