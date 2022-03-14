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
								<h2 class="text-white pb-2 fw-bold">View Services</h2>
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
							<th>Service Name</th>
							<!--<th>Service Image</th> -->
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Service Title</th>
							<!--<th>Service Image</th>-->
							<th>Description</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
					<?php
						$i = 0;
						$select_service = "SELECT * FROM comp_services";
						$run_service    = mysqli_query($db, $select_service);

					    while($row_service = mysqli_fetch_array($run_service))
						{

								$service_id      = $row_service['service_id'];
								$service_title   = $row_service['service_name'];
								//$service_img     = $row_service['service_img'];
								$service_desc    = $row_service['service_desc'];

								$i++;

					?>
													
					<tr>
						<td><?php echo $i;   ?></td>
						<td><?php echo $service_title; ?></td>
						<!--<td><img  width="160" height="90" src="our_services_images/<?php echo $service_img; ?>" alt="<?php echo $service_title;?>">
						</td>-->
					    <td><?php echo $service_desc; ?></td>
					    <td>
					    
					    <a href="#update<?php echo $service_id; ?>" data-target="#update<?php echo $service_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: blue" class="fa fa-edit"></i></a>

               <a href="#delete<?php echo $service_id; ?>" data-target="#delete<?php echo $service_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: red" class="fa fa-trash"></i></a>
                         
					    </td>
					</tr>

		<!-- Update Modal -->
		<div id="update<?php echo $service_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="service_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label col-lg-3">Service Name</label>
              <div class="col-lg-9">
              	<input type="hidden" class="form-control" name="service_id" value="<?php echo $service_id; ?>" required>   
                <input type="text" class="form-control" name="service_title" value="<?php echo $service_title; ?>" required>  
              </div>
            </div> 

           <!--  <div class="form-group">
              <label class="control-label col-lg-3">Service Image</label>
               <div class="col-lg-9">
               	<input type="hidden" class="form-control" name="service_id" value="<?php echo $service_id; ?>" required>
                <input type="file" class="form-control" name="uploadfile"> <br><br>
                <img width="180" height="80" src="our_services_images/<?php echo $service_img; ?>" alt="<?php echo $service_title; ?>">  
              </div>
            </div> -->

             <div class="form-group">
              <label class="control-label col-lg-3">Service Description</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="service_id" value="<?php echo $service_id; ?>" required>  
              
               <textarea rows="10" name="service_desc" class="form-control">
               	   <?php echo $service_desc; ?>
               </textarea> 
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
       <div id="delete<?php echo $service_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
         <div class="modal-header">
             <h4 class="modal-title">Delete Details</h4>
         </div>

         <div class="modal-body">
          <form class="form-horizontal" method="post" action="service-del.php">
             
            <input type="hidden" class="form-control" name="service_id" value="<?php echo $service_id; ?>" required> 
                      
            <p>Are you sure you want to <b>Delete</b> this Service?</p>
              
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

