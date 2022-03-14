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
								<h2 class="text-white pb-2 fw-bold">View What We Do Section</h2>
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
				<h4  class="card-title">Information</h4>
				</div>
				</div>
				<div class="card-body">
				<div class="table-responsive">
				<table id="multi-filter-select" class="display table table-striped table-hover" >
					<thead>
						<tr>
							<th>No.</th>
							<th>Slider Text</th>
							<th>Content (Who We Are)</th>
							<th>Image (Who We Are)</th>
							<th>Mini Text (What We Do)</th>
							<th>Content (What We Do)</th>
							<th>Company Logo (Footer)</th>
							<th>What We Do One</th>
							<th>What We Do Two</th>
							<th>What We Do Three</th>
							<th>What We Do Four</th>
							<th>Copyright Info</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Slider Text</th>
							<th>Content (Who We Are)</th>
							<th>Image (Who We Are)</th>
							<th>Mini Text (What We Do)</th>
							<th>Content (What We Do)</th>
							<th>Company Logo (Footer)</th>
							<th>What We Do One</th>
							<th>What We Do Two</th>
							<th>What We Do Three</th>
							<th>What We Do Four</th>
							<th>Copyright Info</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
					<?php
						$i = 0;
						$select_home = "SELECT * FROM system_settings";
						$run_home    = mysqli_query($db, $select_home);

					    while($row_home = mysqli_fetch_array($run_home))
						{

								$settings_id      = $row_home['settings_id'];
								$slider_text      = $row_home['slider_text'];
								$wwa_content      = $row_home['home_wwa_content'];
								$wwa_img          = $row_home['home_wwa_img'];
								$mini_text		  = $row_home['home_wwd_mini_text'];
								$wwd_info         = $row_home['home_wwd_info'];
								$comp_logo  	  = $row_home['footer_img'];
								$wwd_one          = $row_home['footer_wwd_one'];
								$wwd_two          = $row_home['footer_wwd_two'];
								$wwd_three        = $row_home['footer_wwd_three'];
								$wwd_four         = $row_home['footer_wwd_four'];
								$copyright        = $row_home['footer_copyright'];

								$i++;

					?>
													
					<tr>
						<td><?php echo $i;   ?></td>
						<td><?php echo $slider_text; ?></td>
						<td><?php echo $wwa_content; ?></td>
						<td><img  width="160" height="90" src="home_images/<?php echo $wwa_img; ?>" alt="<?php echo $slider_text;?>">
						</td>
						<td><?php echo $mini_text; ?></td>
					    <td><?php echo $wwd_info; ?></td>
					    <td><img  width="160" height="90" src="home_images/<?php echo $comp_logo; ?>" alt="<?php echo $slider_text;?>">
						</td>
					    <td><?php echo $wwd_one; ?></td>
					    <td><?php echo $wwd_two; ?></td>
					    <td><?php echo $wwd_three; ?></td>
					    <td><?php echo $wwd_four; ?></td>
					    <td><?php echo $copyright; ?></td>
					    <td>
					    
					    <a href="#update<?php echo $settings_id; ?>" data-target="#update<?php echo $settings_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: blue" class="fa fa-edit"></i></a>

                         <a href="#delete<?php echo $settings_id; ?>" data-target="#delete<?php echo $settings_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: red" class="fa fa-trash"></i></a>
                         
					    </td>
					</tr>

		<!-- Update Modal -->
		<div id="update<?php echo $settings_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="home-update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label col-lg-3">Slider Text</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="slider_text" value="<?php echo $slider_text; ?>" required>  
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label col-lg-3">Content (Who We Are)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>          
               <textarea rows="10" name="wwa_content" class="form-control">
               	   <?php echo $wwa_content; ?>
               </textarea> 
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label col-lg-3">Image (Who We Are)</label>
               <div class="col-lg-9">
               	<input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>
             
                <input type="file" class="form-control" name="wwa_img"> <br><br>
                <img width="180" height="80" src="home_images/<?php echo $wwa_img; ?>" alt="<?php echo $slider_text; ?>">  
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label col-lg-3">Mini Text (Under What We Do)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
              
               <textarea rows="5" name="service_desc" class="form-control">
               	   <?php echo $mini_text; ?>
               </textarea> 
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">Text (After What We Do)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="wwd_info" value="<?php echo $wwd_info; ?>" required>  
              </div>
            </div> 


             <div class="form-group">
              <label class="control-label col-lg-3">Company Logo (Footer)</label>
               <div class="col-lg-9">
               	<input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>     
                <input type="file" class="form-control" name="comp_logo"> <br><br>
                <img width="180" height="80" src="home_images/<?php echo $comp_logo; ?>" alt="<?php echo $slider_text; ?>">  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">What We Do One (Footer)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="wwd_one" value="<?php echo $wwd_one; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">What We Do Two (Footer)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="wwd_two" value="<?php echo $wwd_two; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">What We Do Three (Footer)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="wwd_three" value="<?php echo $wwd_three; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">What We Do Four (Footer)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="wwd_four" value="<?php echo $wwd_four; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">Copyright Information (Footer)</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="settings_id" value="<?php echo $settings_id; ?>" required>  
                <input type="text" class="form-control" name="copyright" value="<?php echo $copyright; ?>" required>  
              </div>
            </div> 


            </div><br><br>
            
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
            </div>
            </div>
            </div>
          <!--end of modal-->   

         <!-- Delete Category Modal -->         
       <div id="delete<?php echo $settings_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
         <div class="modal-header">
             <h4 class="modal-title">Delete Details</h4>
         </div>

         <div class="modal-body">
          <form class="form-horizontal" method="post" action="home-del.php">
             
            <input type="hidden" class="form-control" name="settings_id" value="<?php echo $row_home['settings_id']; ?>" required> 
                      
            <p>Are you sure you want to <b>Delete</b> this Information?</p>
              
         </div><br>
         <div class="modal-footer">
          <button type="submit" name="delete" class="btn btn-danger"> 
           Delete
          </button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">
           Close
          </button>
          </div>
         </form>
        </div>
        </div>
      </div>  

               
	         <?php } ?>
			</tbody>
			</table>
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

