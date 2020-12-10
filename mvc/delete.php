<?php 
	require_once 'controller/controllerStudent.php';
	$stdId=(int)$_GET["id"];
	deleteStudent($stdId);
	header("Location: student.php");

?>