	<?php

		
		include("includes/db_conn.php");

		$ErrorLogin = array();

		// Change Password Script
		if(isset($_POST['btn_pass']))
		{
			 	 	 			
			$old_pass   = mysqli_real_escape_string($db, $_POST['old_pass']);
			$new_pass   = mysqli_real_escape_string($db, $_POST['new_pass']);

			if(empty($old_pass) || empty($new_pass))
			{
				if($old_pass == "")
			    {
			      $ErrorLogin[] = "Your old password is required";
			    }

			    if($new_pass == "")
			    {
			      $ErrorLogin[] = "New password is required";
			    }
			}

			else
			{

				// Comparing passwords

				$select_pass = "SELECT * FROM admin";
				$run_pass = mysqli_query($db, $select_pass);
				$row_pass = mysqli_fetch_array($run_pass);
				$admin_id = $row_pass['admin_id'];
				$existing_pass = $row_pass['password'];

				if($old_pass != $existing_pass)
				{
					 $ErrorLogin[] = "Incorrect old password";
	    
				}
				else
				{
					$password_hash = password_hash($new_pass, PASSWORD_DEFAULT);
					 $update_admin = "UPDATE admin SET password = '$password_hash' WHERE admin_id = '$admin_id'";
					 $run_admin = mysqli_query($db, $update_admin);


					 $sel_ad = "SELECT * FROM "

					if($run_admin)
					{
						echo "<script>alert('Password changed successfully')</script>";
						echo "<script>document.location='edit-profile.php'</script>";
					}
				}

			}




		 
		}


		// Change Username

		if(isset($_POST['btn_user']))
		{
			 	 	 	 		
			$admin_id   = mysqli_real_escape_string($db, $_POST['admin_id']);
			$username   = mysqli_real_escape_string($db, $_POST['username']);
			
			
		  $update_admin = "UPDATE admin SET username = '$username' WHERE admin_id = '$admin_id'";

		  $run_admin = mysqli_query($db, $update_admin);

			if($run_admin)
			{
				echo "<script>alert('Username updated successfully')</script>";
				echo "<script>document.location='edit-profile.php'</script>";
			}
		}


	

	?>