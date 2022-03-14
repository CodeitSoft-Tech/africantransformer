<?php

	include("includes/db_conn.php");

	$service_id     = mysqli_real_escape_string($db, $_POST['service_id']);
    $service_title  = mysqli_real_escape_string($db, $_POST['service_title']);
    $service_desc   = mysqli_real_escape_string($db, $_POST['service_desc']);
        
    // $filename = $_FILES["uploadfile"]["name"]; 
    // $tempname = $_FILES["uploadfile"]["tmp_name"];     
    // $folder   = "our_services_images/".$filename; 

    // move_uploaded_file($tempname, $folder);

    $update_service  = "UPDATE comp_services SET service_name = '$service_title', service_desc = '$service_desc' WHERE service_id = '$service_id'";
    $run_update      = mysqli_query($db, $update_service);


    if($run_update)
    {
    	echo "<script>alert('Updated Successfully!') </script>";
    	echo "<script>document.location='view-service.php'</script>";
    }


?>