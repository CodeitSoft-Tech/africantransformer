<?php

	include("includes/db_conn.php");

    $comp_id    = mysqli_real_escape_string($db, $_POST['comp_id']);
	$address    = mysqli_real_escape_string($db, $_POST['address']);
    $phone      = mysqli_real_escape_string($db, $_POST['phone_number']);
    $email      = mysqli_real_escape_string($db, $_POST['email']);
        
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
    $folder = "wwd_images/".$filename; 

    move_uploaded_file($tempname, $folder);

    if($filename == "")
    {
        $update_comp = "UPDATE comp_details SET comp_address = '$address', phone_number = '$phone', email = '$email' WHERE comp_id = '$comp_id'";
        $run_update = mysqli_query($db, $update_comp);
    }
    else
    {
        $update_comp = "UPDATE comp_details SET comp_address = '$address', phone_number = '$phone', email = '$email', comp_logo = '$filename' WHERE comp_id = '$comp_id'";
        $run_update = mysqli_query($db, $update_comp);
    }
    

    if($run_update)
    {
    	echo "<script>alert('Information updated successfully!') </script>";
    	echo "<script>document.location='view-details.php'</script>";
    }


?>