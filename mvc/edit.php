<?php 
	
	require_once 'controller/controllerStudent.php';
	$stdId=$_GET["id"];
	
	$student=getAStudent((int)$stdId);
	//echo $stdId;

?>
<html>
	<title></title>
	<head></head>
	<body>
		<h1>Update</h1>
		<br>
		<h3> <a href="dashboard.php">Go to Dashboard</a></h3>
		<h3> <a href="student.php">All Student</a></h3>
		<form method="post" onsubmit="return validate()" action="">
			<table border="1">
				<thead>
					<th> # ID</th>
					<th> Name </th>
					<th> Department </th>
					<th> Date of birth </th>
					<th> Credit </th>
					<th> CGPA </th>
					
				</thead>
				<tbody>
					<?php 
						foreach($student as $s)
						{
							$sid=$s["id"];
							$d=$s["day"];
							$m=$s["month"];
							$y=$s["year"];
							$merge= "$d"." - "."$m"." - "."$y";
							echo "<tr>";
								echo "<td> ".$s["id"]." </td>";
								echo "<td> ".$s["name"]." </td>";
								echo "<td> ".$s["dname"]." </td>";
								echo "<td> $merge </td>";
								echo "<td> ".$s["credit"]." </td>";
								echo "<td> ".$s["cgpa"]." </td>";
							
							echo "</tr>";
						}
					?>
					<tr>
						<td></td>
						<td><input type="text" id="name" name="name"></td>
						<td><select name="department" id="department"><?php include_once "php/department.php"; ?></select></td>
						<td>
							<select name="month" id="month" ><?php include_once "php/month.php"; ?></select>
							<select name="date" id="date" ><?php include_once "php/date.php"; ?></select>
							<select name="year" id="year" ><?php include_once "php/year.php"; ?></select>
						</td>
						<td><input type="text" id="credit" name="credit"></td>
						<td><input type="text" id="cgpa" name="cgpa"></td>
						
					</tr>
					<tr>
						<td></td>
						<td><span id="err_name"></span></td>
						<td><span id="err_department"></span></td>
						<td>
							<span id="err_dob"></span>
							
						</td>
						<td><span id="err_credit"></span></td>
						<td><span id="err_cgpa"></span></td>
					</tr>
					<tr>
					<td></td>
					<td><br><input type="submit" id="update" name="update" value="Update"></td>
					
					</tr>
				
			</table>
		</form>
		<script src="js/validation.js"></script>
	</body>
</html>