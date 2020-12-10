<?php
	$monthArr = array("Month","january","february","march","april",
	"may","june","july","august","september","october","november","december");

	
	for($i=0;$i<count($monthArr);$i++)
	{
		if($i == 0)
			{

				echo "<option value='0' disabled selected>$monthArr[$i]</option>";
			}
			else
			{
				echo "<option value='$monthArr[$i]'>$monthArr[$i]</option>";
			}
	}
?>