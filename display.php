<?php
	include("connection.php");
	error_reporting(0);
	$query ="select * from student";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	echo $total;
	if($total != 0)
	{
		?>
		<table border="2">
			<tr>
			<td>roll no</td>
			<td>name</td>
			<td>class</td>
			</tr>	
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
				echo "<tr>
			<td>".$result['rollno'] ."</td>
			<td>".$result['name']."</td>
			<td>".$result['class']."</td>
			</tr>";
		}
	}
	else
	{
		echo "no record";
	}
?>
</table>