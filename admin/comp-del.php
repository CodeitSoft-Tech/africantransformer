<?php

include("includes/db_conn.php");

if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['comp_id']);

		$sql = "DELETE FROM comp_details WHERE comp_id = '$id'";
		$query = mysqli_query($db, $sql);

		if($query)
		{
			echo "<script>alert('Deleted successfully!')</script>";
			echo "<script>document.location='view-details.php'</script>";
		}
	}


?>