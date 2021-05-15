<?php

	include("connection.php");
	
	$query = "insert into student values('5','shh','CA')";
	
	$data=mysqli_query($conn,$query);
	
	if($data)
	{
		echo "data insert into databse";
	}




?>