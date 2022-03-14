<?php

	include("includes/db_conn.php");

    $contact_id    = mysqli_real_escape_string($db, $_POST['contact_id']);
	$address_one   = mysqli_real_escape_string($db, $_POST['address_one']);
    $address_two   = mysqli_real_escape_string($db, $_POST['address_two']);
    $phone         = mysqli_real_escape_string($db, $_POST['phone']);
    $email         = mysqli_real_escape_string($db, $_POST['email']);
    $website       = mysqli_real_escape_string($db, $_POST['website']);
    $mini_text     = mysqli_real_escape_string($db, $_POST['mini_text']);
    $content_one   = mysqli_real_escape_string($db, $_POST['content_one']);
    $content_two   = mysqli_real_escape_string($db, $_POST['content_two']);
        

    $update_contact  = "UPDATE contact_page SET address_one = '$address_one', address_two = '$address_two', phone_number = '$phone', email = '$email', website = '$website', mini_text = '$mini_text', content_one = '$content_one', content_two = '$content_two' WHERE contact_id = '$contact_id'";
    $run_update = mysqli_query($db, $update_contact);


    if($run_update)
    {
    	echo "<script>alert('Updated Successfully!') </script>";
    	echo "<script>document.location='view-contact.php'</script>";
    }


?>