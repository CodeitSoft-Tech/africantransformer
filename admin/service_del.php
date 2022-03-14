<?php

include("includes/db_conn.php");

    if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($db, $_POST['service_id']);

		$sql = "DELETE FROM comp_services WHERE service_id = '$id'";
		$query = mysqli_query($db, $sql);

		if($query)
		{
			echo "<script>alert('Deleted successfully!')</script>";
			echo "<script>document.location='view-service.php'</script>";
		}
	}


?>