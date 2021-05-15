<html>
<head>
</head>
<body>
<form action="" method="GET">
roll no <input type="text" name="rollno" value="<?php echo $_GET['ron']; ?>"/>
<br><br>
name <input type="text" name="name" value="<?php echo $_GET['nom']; ?>"/>
<br><br>
class <input type="text" name="class" value="<?php echo $_GET['col']; ?>"/><br><br>

<input type="submit" name="submit" value="update"/>
</form>
<?php
	include("connection.php");
	error_reporting(0);
	if($_GET['submit'])
	{
		
		$rollno = $_GET['rollno'];
		$name = $_GET['name'];
		$query = "update student set  name='$name' where rollno ='$rollno'";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "record success";
		}
		else
		{
			echo "record not success";
		}
	}
	else
	{
		echo "button not pressed";
	}
	
?>
</body>
</html>