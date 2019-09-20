<?php 
	include("connection.php");
	$query = "INSERT INTO hellousers VALUES ('3','name3')";
	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "Data inserted into Database";
	}
?>