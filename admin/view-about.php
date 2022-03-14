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
								<h2 class="text-white pb-2 fw-bold">View About Us Information</h2>
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
		 <div class="table-responsive">
	      <table id="multi-filter-select" class="display table table-striped table-hover" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Main Text </th>
					<th>Image</th>
					<th>Content</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No.</th>
					<th>Main Text </th>
					<th>Image</th>
					<th>Content</th>
					<th>Action</th>
				</tr>
			</tfoot>
			<tbody>
					<?php

						$i = 0;

						$select_about ="SELECT * FROM about_comp";
						$run_about    = mysqli_query($db, $select_about);

						if(mysqli_num_rows($run_about))
                    	{
							while($row_about = mysqli_fetch_array($run_about))
							{

								$about_id      = $row_about['about_id'];
								$main_text     = $row_about['about_header'];
								$about_img     = $row_about['about_img'];
								$about_desc    = $row_about['about_desc'];

								$i++;

					?>
													
					<tr>
						<td><?php echo $i;              ?></td>
						<td><?php echo $main_text;  ?></td>
					    <td><img  width="160" height="90" src="about_us_images/<?php echo $about_img; ?>" alt="<?php echo $about_us_img;?>">
						</td>
					    <td><?php echo $about_desc;   ?></td>
					    <td>
					   
					     <a href="#update<?php echo $about_id; ?>" data-target="#update<?php echo $about_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: blue" class="fa fa-edit"></i></a>

               <a href="#delete<?php echo $about_id; ?>" data-target="#delete<?php echo $about_id; ?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i style="color: red" class="fa fa-trash"></i></a>

					    </td>
					</tr>

		<!-- Update Service Modal -->
		<div id="update<?php echo $about_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Update Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="about-update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label col-lg-3">Main Title</label>
              <div class="col-lg-9">
              	<input type="hidden" class="form-control" name="about_id" value="<?php echo $about_id; ?>" required>           
                <input type="text" class="form-control" name="main_text" value="<?php echo $main_text; ?>" required>  
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-lg-3">About Us Content</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="about_id" value="<?php echo $about_id; ?>" required>  
              
               <textarea rows="10" class="form-control" name="about_content">
               	<?php echo $about_desc; ?>
               </textarea>  
              </div>
            </div>      

            <div class="form-group">
              <label class="control-label col-lg-3">About Us Image </label>
              <div class="col-lg-9">
              	<input type="hidden" class="form-control" name="about_id" value="<?php echo $about_id; ?>" required>  
              
                 <input type="file" class="form-control" name="uploadfile"> <br>
                <img width="500" height="400" src="about_us_images/<?php echo $about_img; ?>" alt="<?php echo $main_text; ?>">  
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

         <!-- Delete Service Modal -->         
       <div id="delete<?php echo $about_id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content" style="height:auto">
         <div class="modal-header">
             <h4 class="modal-title">Delete Details</h4>
         </div>

         <div class="modal-body">
          <form class="form-horizontal" method="post" action="about-del.php"> 
           <input type="hidden" class="form-control" name="about_id" value="<?php echo $row_about['about_id']; ?>" required> 
                      
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
			<?php } } ?>
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

