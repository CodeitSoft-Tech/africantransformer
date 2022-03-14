<?php

include("includes/db_conn.php");

if(isset($_POST['delete']))
	{
		$id = $_POST['about_id'];

		$sql = "DELETE FROM about_us WHERE about_us_id = '$id'";
		$query = mysqli_query($db, $sql);

		if($query)
		{
			echo "<script>alert('Deleted successfully!')</script>";
			echo "<script>document.location='view-about-us.php'</script>";
		}
	}


?>