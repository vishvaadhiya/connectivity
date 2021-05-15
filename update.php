<style>
td{
	padding : 10px;
}
</style>
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
			<td colspan="2">oprations</td>
			</tr>	
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
				echo "<tr>
			<td>".$result['rollno']."</td>
			<td>".$result['name']."</td>	
			<td>".$result['class']."</td>
			<td><a href='update1.php ?ron=$result[rollno] &?nom=$result[name] &?col=$result[class]'>edit</a></td>
			<td><a href=#>delete</a></td>
			</tr>";
		}
	}
	else
	{
		echo "no record";
	}
?>
</table>