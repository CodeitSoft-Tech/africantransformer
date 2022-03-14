<?php

	include("includes/db_conn.php");

	$about_id        = mysqli_real_escape_string($db, $_POST['about_id']);
	$main_text       = mysqli_real_escape_string($db, $_POST['main_text']);
	$about_content   = mysqli_real_escape_string($db, $_POST['about_content']);

    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
    $folder   = "about_us_images/".$filename; 

    move_uploaded_file($tempname, $folder);


    if($filename == "")
    {
        
            $update_about = "UPDATE about_comp SET about_header = '$main_text', about_desc = '$about_content' WHERE about_id = '$about_id'";
            $run_update = mysqli_query($db, $update_about);

    }
    else
    {
             $update_about = "UPDATE about_comp SET about_header = '$main_text', about_img = '$filename', about_desc = '$about_content' WHERE about_id = '$about_id'";
             $run_update = mysqli_query($db, $update_about);
    }


    if($run_update)
    {
    	echo "<script>alert('Information updated successfully!') </script>";
    	echo "<script>document.location='view-about.php'</script>";
    }


?>