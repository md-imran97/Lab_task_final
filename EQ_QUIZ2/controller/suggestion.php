<?php 
	require_once 'bookController.php';
	
	$text = $_GET["name"];
	$result = searchBook($text);
	if(count($result)>0)
	{
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]["name"]."<br>";
			$id=$result[$i]["id"];
			$name=$result[$i]["name"];
			//$link='<a href="book.php?id="'.$id;
			//echo $link;
			//echo  '<a href="book.php?id="'.$id.'>'.$result[$i]["name"].'<br>'.'</a>';
			//echo '<a'.' href="book.php?id=$id">'.$result[$i]["name"].'<br></a>';
			echo "<a href='book.php?id=$id'>$name</a>"."<br>";
		}
	}
	else 
	{
		//echo "ssssssssssssssssssss";
	}
	echo "<br>";
	echo
	"
		<table border='1'>
			<th> ID </th>
			<th> Name </th>
			<th> Author </th>
			<th> Edition </th>
			<th> Image </th>
			
		
	";
	if(count($result)>0)
	{
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]["name"]."<br>";
			$id=$result[$i]["id"];
			$name=$result[$i]["name"];
			$author=$result[$i]["author"];
			$edition=$result[$i]["edition"];
			echo 
			"<tr>
				<td>$id</td>
				<td>$name</td>
				<td>$author</td>
				<td>$edition</td>
				<td>abc</td>
			</tr>
			";
		}
	}
	//else{echo "";}
	echo "</table>";
	
?>