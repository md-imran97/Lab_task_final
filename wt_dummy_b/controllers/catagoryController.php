<?php
	require_once '../models/db_connect.php';
	
	function getAllCatagory()
	{
		$query="select * from catagories";
		$result=get($query);
		return $result;
	}
?>