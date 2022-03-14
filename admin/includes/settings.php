<?php

	include("includes/db_conn.php");

	if(isset($_POST['form1']))
	{
		$settings_id = mysqli_real_escape_string($db, $_POST['settings_id']);
		$text1 		 = mysqli_real_escape_string($db, $_POST['text1']);
		$text2 		 = mysqli_real_escape_string($db, $_POST['text2']);
		$text3 		 = mysqli_real_escape_string($db, $_POST['text3']);
		$text4 		 = mysqli_real_escape_string($db, $_POST['text4']);
		$text5 		 = mysqli_real_escape_string($db, $_POST['text5']);
		$text7 		 = mysqli_real_escape_string($db, $_POST['text7']);
		$text8 		 = mysqli_real_escape_string($db, $_POST['text8']);
		$text9 		 = mysqli_real_escape_string($db, $_POST['text9']);
		$text10 	 = mysqli_real_escape_string($db, $_POST['text10']);
		$text11		 = mysqli_real_escape_string($db, $_POST['text11']);


		// image processing
		$text6 = $_FILES['text6_uploadfile']['name'];
		$tempname = $_FILES['text6_uploadfile']['tmp_name'];

		$folder = "images/".$text6; 

        move_uploaded_file($tempname, $folder);
	

		$update_settings = "UPDATE system_settings SET home_slider_text_one = '$text1' , home_slider_btn_text_one = '$text2', home_slider_btn_text_two = '$text3', home_wwa_title = '$text4' , home_wwa_content = '$text5', home_wwa_img = '$text6', home_wwa_btn = '$text7', home_wwd_title = '$text8', home_wwd_mini_text = '$text9', home_wwd_info = '$text10', home_wwd_btn = '$text11' WHERE settings_id = '$settings_id'";
		$run_update  = mysqli_query($db, $update_settings);

		if($run_update)
		{
			echo "<script>alert('Settings updated successfully!')</script>";
			echo "<script>document.location='home-settings.php'</script>";
		}

	}


	if(isset($_POST['form2']))
	{
		$settings_id = mysqli_real_escape_string($db, $_POST['settings_id']);
		$text13		 = mysqli_real_escape_string($db, $_POST['text13']);
		$text14		 = mysqli_real_escape_string($db, $_POST['text14']);
		$text15		 = mysqli_real_escape_string($db, $_POST['text15']);
		$text16 	 = mysqli_real_escape_string($db, $_POST['text16']);
		$text17 	 = mysqli_real_escape_string($db, $_POST['text17']);
		$text18 	 = mysqli_real_escape_string($db, $_POST['text18']);
		$text19 	 = mysqli_real_escape_string($db, $_POST['text19']);
		$text20 	 = mysqli_real_escape_string($db, $_POST['text20']);
		$text21 	 = mysqli_real_escape_string($db, $_POST['text21']);
		$text22 	 = mysqli_real_escape_string($db, $_POST['text22']);


		// image processing
		$text12 = $_FILES['text12_uploadfile']['name'];
		$tempname = $_FILES['text12_uploadfile']['tmp_name'];

		$folder = "images/".$text12; 

        move_uploaded_file($tempname, $folder);
		
 	 	 	 	 	 	 	 	 	 	
		$update_settings = "UPDATE system_settings SET footer_img = '$text12', footer_wwd_one = '$text13', footer_wwd_two = '$text14', footer_wwd_three = '$text15', footer_wwd_four = '$text16', footer_address_one = '$text17', footer_address_two = '$text18', footer_contact_number = '$text19', footer_email = '$text20', footer_website = '$text21',	footer_copyright = '$text22' WHERE settings_id = '$settings_id'";
		$run_update  = mysqli_query($db, $update_settings);

		if($run_update)
		{
			echo "<script>alert('Settings updated successfully!')</script>";
			echo "<script>document.location='home-settings.php'</script>";
		}
	
	}


	


?>