<?php 
	if(isset($_POST["addStudent"]))
	{
		
		
		echo "Register successfully";
	}

?>
<html>
	<title></title>
	<head></head>
	<body>
		<h1>Add Student</h1>
		<form method="post" onsubmit="return validate()" action="">
			<table>
				<tr>
					<td>Name </td>
					<td><input type="text" id="name" name="name"><span id="err_name"></span></td>
				</tr>
				
				<tr>
						<td align="right">Date of Birth </td>
						<td>
							<select name="month" id="month" ><?php include_once "php/month.php"; ?></select>
							<select name="date" id="date" ><?php include_once "php/date.php"; ?></select>
							<select name="year" id="year" ><?php include_once "php/year.php"; ?></select>
							<span id="err_dob"></span></
						</td>
					</tr>
				
				<tr>
					<td>Credit </td>
					<td><input type="text" id="credit" name="credit"><span id="err_credit"></span></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" id="cgpa" name="cgpa"><span id="err_cgpa"></span></td>
				</tr>
				<tr>
						<td align="right">Department</td>
						<td>
							<select name="department" id="department"><?php include_once "php/department.php"; ?></select>
							<span id="err_department"></span>
						</td>
					</tr>
				<tr>
					<td></td>
					<td><br><input type="submit" id="addStudent" name="addStudent" value="Add"></td>
					
				</tr>
			</table>
		</form>
		<script src="js/validation.js"></script>
		
	</body>
</html>