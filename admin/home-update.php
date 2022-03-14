<?php

	include("includes/db_conn.php");

            $settings_id   = mysqli_real_escape_string($db, $_POST['settings_id']);
	        $slider_text   = mysqli_real_escape_string($db, $_POST['slider_text']);
            $wwa_content   = mysqli_real_escape_string($db, $_POST['wwa_content']);
            $wwd_mini_text = mysqli_real_escape_string($db, $_POST['wwd_mini_text']);
            $wwd_info      = mysqli_real_escape_string($db, $_POST['wwd_info']);
            $wwd_one       = mysqli_real_escape_string($db, $_POST['wwd_one']);
            $wwd_two       = mysqli_real_escape_string($db, $_POST['wwd_two']);
            $wwd_three     = mysqli_real_escape_string($db, $_POST['wwd_three']);
            $wwd_four      = mysqli_real_escape_string($db, $_POST['wwd_four']);
            $copyright     = mysqli_real_escape_string($db, $_POST['copyright']);
            
            $wwd_img  = $_FILES["wwa_img"]["name"]; 
            $tempname = $_FILES["wwa_img"]["tmp_name"];     
            $folder   = "home_images/".$wwd_img; 

            move_uploaded_file($tempname, $folder);


            $comp_logo = $_FILES["comp_logo"]["name"]; 
            $tempname  = $_FILES["comp_logo"]["tmp_name"];     
            $folder    = "home_images/".$comp_logo; 

            move_uploaded_file($tempname, $folder);
                                                    
            
    $update_home  = "UPDATE system_settings SET slider_text = '$slider_text', home_wwa_content = '$wwa_content', home_wwa_img = '$wwd_img', home_wwd_mini_text = '$wwd_mini_text', home_wwd_info = '$wwd_info', footer_img = '$comp_logo', footer_wwd_one = '$wwd_one', footer_wwd_two = '$wwd_two', footer_wwd_three = '$wwd_three', footer_wwd_four = '$wwd_four', footer_copyright = '$copyright' WHERE settings_id = '$settings_id'";
    $run_home     = mysqli_query($db, $update_service);


    if($run_update)
    {
    	echo "<script>alert('Updated Successfully!') </script>";
    	echo "<script>document.location='view-home.php'</script>";
    }


?>