<?php 
	require_once 'model/db_connect.php';
	
		$query="select * from users";
		$result=get($query);
		//echo $result[0]["name"];
?>


<html>
	<title></title>
	<head></head>
	<body>
		<h1>Dashboard</h1>
		<h3> <a href="student.php">All Students</a></h3>
		<h3> <a href="addstudent.php">Add Students</a></h3>
		<h3> <a href="department.php">All Department</a></h3>
		<h3> <a href="department.php">Add Department</a></h3>
		
	</body>
</html>