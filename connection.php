<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "connectivity";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
	{
		echo "connec ok";
	}
	else
	{
		die("connction failed  because".mysqli_connect_error());
	}




?>