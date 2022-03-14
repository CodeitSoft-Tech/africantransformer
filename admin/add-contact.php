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
								<h2 class="text-white pb-2 fw-bold">Contact Page Details</h2>
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
										<h4 class="card-title">Contact Information</h4>
									</div>
								</div>
								<div class="card-body">
									
									
									<form class="form-horizontal" method="post" action="insert-contact.php" enctype="multipart/form-data">
										<h3>Contact Details:</h3>
										<div class="form-group">
											<label for="address_one">Contact Address 1</label>
											<input type="text" class="form-control" name="address_one" required>
										</div>


										<div class="form-group">
											<label for="address_two">Contact Address 2</label>
											<input type="text" class="form-control" name="address_two" required>
										</div>

										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" name="phone" class="form-control">
										</div>

										<div class="form-group">
											<label>Email</label>
											<input type="text" name="email" class="form-control">
										</div>

										<div class="form-group">
											<label>Website</label>
											<input type="text" name="website" class="form-control">
										</div>

										<h3>Partnership Opportunities</h3>
										<div class="form-group">
											<label>Mini Text</label>
											<input type="text" name="mini_text" class="form-control">
										</div>

										<div class="form-group">
											<label>Content One</label>
											<textarea name="content_one" class="form-control"></textarea>
										</div>

										<div class="form-group">
											<label>Content Two</label>
											<textarea name="content_two" class="form-control"></textarea>
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
			$address_one   = mysqli_real_escape_string($db, $_POST['address_one']);
			$address_two   = mysqli_real_escape_string($db, $_POST['address_two']);
			$phone         = mysqli_real_escape_string($db, $_POST['phone']);
			$email         = mysqli_real_escape_string($db, $_POST['email']);
			$website       = mysqli_real_escape_string($db, $_POST['website']);
			$mini_text     = mysqli_real_escape_string($db, $_POST['mini_text']);
			$content_one   = mysqli_real_escape_string($db, $_POST['content_one']);
			$content_two   = mysqli_real_escape_string($db, $_POST['content_two']);
		
			 		 	 	 	
			$insert_contact = "INSERT INTO contact_page(address_one, address_two, phone_number, email, website, mini_text, content_one, content_two)VALUES('$address_one', '$address_two', '$phone', '$email', '$website', '$mini_text', '$content_one', '$content_two')";
			$run_contact = mysqli_query($db, $insert_contact);

			if($run_contact)
			{
				echo "<script>alert('Information inserted successfully')</script>";
				echo "<script>document.location='insert-contact.php'</script>";
			}
		}


	?>