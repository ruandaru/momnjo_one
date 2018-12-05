<?php
	if(isset($_POST['prodGroupName']))
	{
		// include Database connection file 
		include ("db_config.php");

		// get values 
		$pgname = $_POST['prodGroupName'];
		$pginfo = $_POST['prodGroupInfo'];
		$pgsatus	= "enable";

		$query = "INSERT INTO mproduct_group (productgroup_name, productgroup_info, productgroup_status, inputdate) VALUES('$pgname', '$pginfo','$pgsatus','$datetime_set')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
		echo "1 Record Added!";
		?>
		
		<script type="text/javascript">
		$('#datatable-responsivee').DataTable().ajax.reload();
		</script>

		<?php
	}
	
?>