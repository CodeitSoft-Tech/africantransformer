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
								<h2 class="text-white pb-2 fw-bold">Contact Messages</h2>
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
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
					<?php
						$i = 0;
						$select_contact = "SELECT * FROM comp_contact";
						$run_contact    = mysqli_query($db, $select_contact);

					    while($row_contact = mysqli_fetch_array($run_contact))
						{

								$contact_id    = $row_contact['contact_id'];
								$fullname      = $row_contact['fullname'];
								$email         = $row_contact['email'];
								$subject       = $row_contact['subject'];
								$message       = $row_contact['message'];
								
								$i++;

					?>
													
					<tr>
						<td><?php echo $i;   ?></td>
						<td><?php echo $fullname; ?></td>
						<td><?php echo $email; ?></td>
					  <td><?php echo $subject; ?></td>
					  <td><?php echo $message; ?></td>
					  <td>
					    
					   <a href="#update<?php echo $contact_id; ?>" data-target="#update<?php echo $contact_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: blue" class="fa fa-edit"></i></a>

             <a href="#delete<?php echo $contact_id; ?>" data-target="#delete<?php echo $contact_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: red" class="fa fa-trash"></i></a>
                         
					 </td>
					</tr>

		<!-- Update Modal -->
		<div id="update<?php echo $contact_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="contact_update.php" enctype='multipart/form-data'>
                    
             <div class="form-group">
              <label class="control-label col-lg-3">Full Name</label>
              <div class="col-lg-9">
              	<input type="hidden" class="form-control" name="contact_id" value="<?php echo $contact_id; ?>" required>  
                <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" required>  
              </div>
            </div> 

             <div class="form-group">
              <label class="control-label col-lg-3">Email</label>
               	 <div class="col-lg-9">
               	 <input type="hidden" class="form-control" name="contact_id" value="<?php echo $contact_id; ?>" required> 
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" required>  
              </div>
           </div>

             <div class="form-group">
              <label class="control-label col-lg-3">Subject</label>
               	 <div class="col-lg-9"><input type="hidden" class="form-control" name="contact_id" value="<?php echo $contact_id; ?>" required>     
                <input type="text" class="form-control" name="subject" value="<?php echo $subject; ?>" required>
              </div>
           </div>


             <div class="form-group">
              <label class="control-label col-lg-3">Message</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="contact_id" value="<?php echo $contact_id; ?>" required>  
               <textarea rows="10" name="message" class="form-control">
               	   <?php echo $message; ?>
               </textarea> 
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
       <div id="delete<?php echo $contact_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
         <div class="modal-header">
          <h4 class="modal-title">Delete Details</h4>
         </div>
         <div class="modal-body">
          <form class="form-horizontal" method="post" action="contact-del.php">
             
            <input type="hidden" class="form-control" name="contact_id" value="<?php echo $contact_id; ?>" required> 
                      
            <p>Are you sure you want to <b>Delete</b> this Details?</p>
              
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

