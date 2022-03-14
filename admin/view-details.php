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
								<h2 class="text-white pb-2 fw-bold">View Details</h2>
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
							<th>Address</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Logo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Address</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Logo</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
					<?php
						
						$i = 0;

						$select_comp = "SELECT * FROM comp_details";
						$run_comp    = mysqli_query($db, $select_comp);

					    while($row_comp = mysqli_fetch_array($run_comp))
						{

								$comp_id        = $row_comp['comp_id'];
								$comp_address   = $row_comp['comp_address'];
								$phone_number   = $row_comp['phone_number'];
								$email          = $row_comp['email'];
								$logo           = $row_comp['comp_logo'];

								$i++;

					?>
													
					<tr>
						<td><?php echo $i;   ?></td>
						<td><?php echo $comp_address; ?></td>
						<td><?php echo $phone_number; ?></td>
						<td><?php echo $email; ?></td>
						<td>
							<img  width="160" height="90" src="comp_details_images/<?php echo $logo; ?>" alt="Company logo">
						 </td>
						 <td>
					   <a href="#update<?php echo $comp_id; ?>" data-target="#update<?php echo $comp_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: blue" class="fa fa-edit"></i></a>

              <a href="#delete<?php echo $comp_id; ?>" data-target="#delete<?php echo $comp_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: red" class="fa fa-trash"></i></a>
                         
					    </td>
					</tr>

		<!-- Update Modal -->
		<div id="update<?php echo $comp_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="comp_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label col-lg-3">Address</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" required>  
                <input type="text" class="form-control" name="address" value="<?php echo $comp_address; ?>" required>  
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">Phone Number</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" required>  
                <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">Email</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" required>  
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>  
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-lg-3"> Logo </label>
               <div class="col-lg-9">
               	<input type="hidden" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" required>
             
                <input type="file" class="form-control" name="uploadfile"> <br><br>
                <img width="180" height="80" src="comp_details_images/<?php echo $logo; ?>" alt="Company Logo">  
              </div>
            </div>  


            </div><br>
            
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
       <div id="delete<?php echo $comp_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
         <div class="modal-header">
             <h4 class="modal-title">Delete Details</h4>
         </div>

         <div class="modal-body">
          <form class="form-horizontal" method="post" action="comp-del.php">
             
            <input type="hidden" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" required> 
                      
            <p>Are you sure you want to <b>Delete</b> this Details?</p>
              
         </div>
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

