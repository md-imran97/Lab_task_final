<?php 
	require_once '../model/db_connect.php';
	
	function searchBook($text)
	{
		$query="select * from books where name like '%$text%'";
		$result = get($query);
		//echo "yo";
		return $result;
	}

	function bookInfo($id)
	{
		$query="select * from books where id='$id'";
		$result = get($query);
		return $result;
	}
?>