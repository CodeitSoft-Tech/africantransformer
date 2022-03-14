<?php

include("includes/db_conn.php");

if(isset($_POST['delete']))
	{
		$id = $_POST['settings_id'];

		$sql = "DELETE FROM system_settings WHERE settings_id = '$id'";
		$query = mysqli_query($db, $sql);

		if($query)
		{
			echo "<script>alert('Deleted successfully!')</script>";
			echo "<script>document.location='view-home.php'</script>";
		}
	}


?>