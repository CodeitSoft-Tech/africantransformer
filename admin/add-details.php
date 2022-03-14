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
								<h2 class="text-white pb-2 fw-bold">Company Details</h2>
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
										<h4 class="card-title">Company's Contact Information</h4>
									</div>
								</div>
								<div class="card-body">
									
									
									<form class="form-horizontal" method="post" action="add-details.php" enctype="multipart/form-data">

										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" name="comp_address"  required>
										</div>


										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" name="phone_number" required>
										</div>

										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Logo</label>
											<input type="file" name="uploadfile" class="form-control" required>
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
			$address       = mysqli_real_escape_string($db, $_POST['comp_address']);
			$phone_number  = mysqli_real_escape_string($db, $_POST['phone_number']);
			$email         = mysqli_real_escape_string($db, $_POST['email']);


		
			   $filename = $_FILES["uploadfile"]["name"]; 
            $tempname = $_FILES["uploadfile"]["tmp_name"];     
            $folder = "comp_details_images/".$filename; 

            move_uploaded_file($tempname, $folder);

			
			$insert_comp = "INSERT INTO comp_details(comp_address, phone_number, email, comp_logo)
			               VALUES('$address', '$phone_number', '$email', '$filename')";
			$run_comp = mysqli_query($db, $insert_comp);

			if($run_comp)
			{
				echo "<script>alert('Information added successfully')</script>";
				echo "<script>document.location='add-details.php'</script>";
			}
		}


	?>