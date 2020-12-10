<?php
	
	for ($i = 0; $i < 32; $i++) {
		if($i == 0)
		{

			echo "<option value='' disabled selected>Date</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
	}
?>