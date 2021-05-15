<html>
<head>
</head>
<body>
<form action="" method="post">
roll no <input type="text" name="rollno" value=""/>
<br><br>
name <input type="text" name="name" value=""/><br><br>
class <input type="text" name="class" value=""/><br><br>
<input type="submit" name="submit"/>
</form>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "connectivity";
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	error_reporting(0);
	if($_POST['submit'])
	{
		$rn = $_POST['rollno'];
		$nm = $_POST['name'];
		$cl = $_POST['class'];
		if($rn!=""  && $nm!=""  && $cl!="" )
		{
			$query = "insert into student values('$rn','$nm','$cl')";
	
			$data=mysqli_query($conn,$query);
	
			if($data)
			{
				echo "data insert into databse";
			}
		}
		else
		{
			echo "empty";
		}
	}
?>
</body>
</html>