<?php
	$deptArr = array("Select Department","CSE","BBA");

	
	for($i=0;$i<count($deptArr);$i++)
	{
		if($i == 0)
			{

				echo "<option value='0' disabled selected>$deptArr[$i]</option>";
			}
			else
			{
				echo "<option value='$i'>$deptArr[$i]</option>";
			}
	}
?>