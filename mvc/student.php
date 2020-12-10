<?php 
	
	require_once 'controller/controllerStudent.php';
	$allStudent=getAllStudent();
	//echo $allStudent[0]["id"];

?>
<html>
	<title></title>
	<head></head>
	<body>
		<h1>Student INFO</h1>
		<br>
		<h3> <a href="dashboard.php">Go to Dashboard</a></h3>
		<table border="1">
			<thead>
				<th> # ID</th>
				<th> Name </th>
				<th> Department </th>
				<th> Credit </th>
				<th> CGPA </th>
				<th></th>
				<th></th>
				
			</thead>
			<tbody>
				<?php 
					foreach($allStudent as $s)
					{
						$sid=$s["id"];
						echo "<tr>";
							echo "<td> ".$s["id"]." </td>";
							echo "<td> ".$s["name"]." </td>";
							echo "<td> ".$s["dname"]." </td>";
							echo "<td> ".$s["credit"]." </td>";
							echo "<td> ".$s["cgpa"]." </td>";
							echo "<td> <a href='edit.php?id=$sid' > Edit </a></td>";
							echo "<td> <a href='delete.php?id=$sid' > Delete </a></td>";
						echo "</tr>";
					}
				?>
			
			</tbody>
		</table>
	</body>
</html>