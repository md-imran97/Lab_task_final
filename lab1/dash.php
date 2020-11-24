<?php 
	
	$serverName="localhost";
	$userName="root";
	$sPassword="";
	$dbName="lab1";
	
	$conn=mysqli_connect($serverName,$userName,$sPassword,$dbName);
	$q = "select * from users";
	$result =mysqli_query($conn, $q);
	
	if(mysqli_num_rows($result)>0)
	{
		echo "<table border='1'>";
		echo "<tr>
		<th>ID</th>
		<th>User name</th>
		<th>Type</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["userName"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "<td>". "<a href=''>edit</a> "."</td>";
			echo "<td>". "<a href=''>del</a> "."</td>";
			
			
			echo "</tr>";
		}
	
		echo "</table>";
	}
	
?>