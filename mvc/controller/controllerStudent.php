<?php 
	require_once 'model/db_connect.php';

	$name="";
	$date="";
	$month="";
	$year="";
	$credit="";
	$cgpa="";
	$department="";
	$sid="";
	
	if(isset($_POST["addStudent"]))
	{
		$name=$_POST["name"];
		$date=(int)$_POST["date"];
		$month=$_POST["month"];
		$year=(int)$_POST["year"];
		$credit=(int)$_POST["credit"];
		$cgpa=(float)$_POST["cgpa"];
		$department=(int)$_POST["department"];
		studentAdd($name,$date,$month,$year,$cgpa,$department,$credit);
		
		echo "Student added successfully";
	}
	else if(isset($_POST["update"]))
	{
		$name=$_POST["name"];
		$date=(int)$_POST["date"];
		$month=$_POST["month"];
		$year=(int)$_POST["year"];
		$credit=(int)$_POST["credit"];
		$cgpa=(float)$_POST["cgpa"];
		$department=(int)$_POST["department"];
		$sid=(int)$_GET["id"];
		updateStudent($name,$date,$month,$year,$cgpa,$department,$credit,$sid);
		//echo "$sid";
	}
	
	
	function studentAdd($name,$date,$month,$year,$cgpa,$department,$credit)
	{
		$query="insert into students values ('$name','','$date','$month','$year','$cgpa','$department','$credit')";
		execute($query);
	}
	function getAllStudent()
	{
		$query="SELECT students.*, department.name as dname FROM students
		INNER JOIN department ON students.dept_id=department.id";
		//$query="select * from students";
		$result=get($query);
		//echo "works";
		return $result;
	}
	function getAStudent($sid)
	{
		//global $studentId;
		//$studentId=$sid;
		$query="SELECT students.*, department.name as dname FROM students
		INNER JOIN department ON students.dept_id=department.id where students.id='$sid'";
		//$query="select * from students";
		$result=get($query);
		//echo "$sid";
		return $result;
	}
	
	function updateStudent($name,$date,$month,$year,$cgpa,$department,$credit,$sid)
	{	
		//global $studentId;
		$query = "UPDATE `students` SET `name`='$name', `day`='$date', `month`='$month', `year`='$year', `cgpa`='$cgpa', `credit`='$credit',
		`dept_id`='$department' 
		WHERE `id`='$sid'";
		execute($query);
		echo "Updated successfully";
	}
	
	function deleteStudent($sid)
	{
		$query="DELETE FROM students WHERE id='$sid'";
		execute($query);
	}

?>