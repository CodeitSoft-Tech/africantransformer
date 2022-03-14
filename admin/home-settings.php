<?php

   include("includes/header.php"); 

 ?>
 	 	 	 	 	 	 	 	 	 	
 <?php 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 
 		$select_settings = "SELECT * FROM system_settings";
 		$run_settings    = mysqli_query($db, $select_settings);

 		if(mysqli_num_rows($run_settings) < 1)
 		{
 			echo "No Data Found";
 		}
 		else
 		{
 			$row_settings = mysqli_fetch_array($run_settings);

	 		$settings_id = $row_settings['settings_id'];
	 		$text1 = $row_settings['home_slider_text_one'];
	 		$text2 = $row_settings['home_slider_btn_text_one'];
	 		$text3 = $row_settings['home_slider_btn_text_two'];
	 		$text4 = $row_settings['home_wwa_title'];
	 		$text5 = $row_settings['home_wwa_content'];
	 		$text6 = $row_settings['home_wwa_img'];
	 		$text7 = $row_settings['home_wwa_btn'];
	 		$text8 = $row_settings['home_wwd_title'];
	 		$text9 = $row_settings['home_wwd_mini_text'];
	 		$text10 = $row_settings['home_wwd_info'];
	 		$text11 = $row_settings['home_wwd_btn'];
	 		$text12 = $row_settings['footer_img'];
	 		$text13 = $row_settings['footer_wwd_one'];
	 		$text14 = $row_settings['footer_wwd_two'];
	 		$text15 = $row_settings['footer_wwd_three'];
	 		$text16 = $row_settings['footer_wwd_four'];
	 		$text17 = $row_settings['footer_address_one'];
	 		$text18 = $row_settings['footer_address_two'];
	 		$text19 = $row_settings['footer_contact_number'];
	 		$text20 = $row_settings['footer_email'];
	 		$text21 = $row_settings['footer_website'];
	 		$text22 = $row_settings['footer_copyright'];
	 	}
 				
 ?>


			<div class="main-panel">
			 <div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">System Settings</h2>
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
					<div class="row">
					<div class="col-md-6">
					<ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Homepage Information</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Footer Information</a>
						</li>					
					
					</ul>
				<div class="tab-content mt-2 mb-3" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<form method="post" action="home-settings.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="text1">Home page Slider Title</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text1" class="form-control" value="<?php echo $text1; ?>" required>
							</div>

							<div class="form-group">
								<label for="text2">Home page Slider button Text One</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text2" class="form-control" value="<?php echo $text2; ?>" required>
							</div>

							<div class="form-group">
								<label for="text3">Home page Slider button Text Two</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text3" class="form-control" value="<?php echo $text3; ?>" required>
							</div>

							<div class="form-group">
								<label for="text4">Home page Title One (Who We Are)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text4" class="form-control" value="<?php echo $text4; ?>">
							</div>

							<div class="form-group">
								<label for="text5">Home page Title One Content (Who We Are)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<textarea name="text5" class="form-control" required>
									<?php echo $text5; ?>
								</textarea>
							</div>
								

							<div class="form-group">
								<label for="text6">Home page Title One Image (Who We Are)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="file" class="form-control" name="text6_uploadfile"><br>
                                <img width="100" height="80" src="images/<?php echo $text6; ?>" alt="<?php echo $text4; ?>">  
							</div>

							<div class="form-group">
								<label for="text7">Home page Title One button text (Who We Are)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text7" class="form-control" value="<?php echo $text7; ?>">
							</div>

							<div class="form-group">
								<label for="text8">Home page Title Two (Who We Do)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text8" class="form-control" value="<?php echo $text8; ?>">
							</div>

							<div class="form-group">
								<label for="text9">Home page Mini Title (Who We Do)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text9" class="form-control" value="<?php echo $text9; ?>">
							</div>

							<div class="form-group">
								<label for="text10">Home page Info Text (Who We Do)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text10" class="form-control" value="<?php echo $text10; ?>">
							</div>

							<div class="form-group">
								<label for="text10">Home page Info button (Who We Do)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text11" class="form-control" value="<?php echo $text11; ?>">
							</div>

							<div class="form-group">
							  <button type="submit" class="btn btn-primary" name="form1">Update</button>
							</div>
							
						</form>
					</div>

					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<form method="post" action="home-settings.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="text12">Company Image (Footer) </label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="file" class="form-control" name="text12_uploadfile"><br>
                                <img width="100" height="80" src="images/<?php echo $text12; ?>" alt="<?php echo "P4R"; ?>">  
							</div>

							<div class="form-group">
								<label for="text13">What We Do One (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text13" class="form-control" value="<?php echo $text13; ?>">
							</div>

							<div class="form-group">
								<label for="text14">What We Do Two (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text14" class="form-control" value="<?php echo $text14; ?>">
							</div>

							<div class="form-group">
								<label for="text15">What We Do Three (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text15" class="form-control" value="<?php echo $text15; ?>">
							</div>

							<div class="form-group">
								<label for="text16">What We Do Four (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text16" class="form-control" value="<?php echo $text16; ?>">
							</div>

							<div class="form-group">
								<label for="text17">Address One (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text17" class="form-control" value="<?php echo $text17; ?>">
							</div>
							<div class="form-group">
								<label for="text18">Address Two (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text18" class="form-control" value="<?php echo $text18; ?>">
							</div>

							<div class="form-group">
								<label for="text19">Phone Number (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text19" class="form-control" value="<?php echo $text19; ?>">
							</div>

							<div class="form-group">
								<label for="text20">Email (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text20" class="form-control" value="<?php echo $text20; ?>">
							</div>

							<div class="form-group">
								<label for="text21">Website Address (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text21" class="form-control" value="<?php echo $text21; ?>">
							</div>

							<div class="form-group">
								<label for="text22">Website Copyright (Footer)</label>
								<input type="hidden" name="settings_id" class="form-control" value="<?php echo $settings_id; ?>">
								<input type="text" name="text22" class="form-control" value="<?php echo $text22; ?>">
							</div>

							<div class="form-group">
							  <button type="submit" class="btn btn-primary" name="form2">Update</button>
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
		    </div>
			</div> 
			</div>
			<?php include("includes/footer.php"); ?>
		</div>
	</div>
	<?php include("includes/footer_links.php"); ?>

