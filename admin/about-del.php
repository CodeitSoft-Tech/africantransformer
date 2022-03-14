<?php

include("includes/db_conn.php");

if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['about_id']);

		$sql = "DELETE FROM about_comp WHERE about_id = '$id'";
		$query = mysqli_query($db, $sql);

		if($query)
		{
			echo "<script>alert('Information deleted successfully!')</script>";
			echo "<script>document.location='view-about.php'</script>";
		}
	}


?>