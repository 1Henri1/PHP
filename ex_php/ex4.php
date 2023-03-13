<?php 
	$val1 = 110;
	$val2 = 10;
	$val3 = 33;

	if ($val1 > $val2 && $val1 > $val3) {
		echo $val1;
		if ($val2 > $val3) {
			echo $val2;
			echo $val3;
		}
		else{
			echo $val3;
			echo $val2;
		}
	}

	elseif ($val2 > $val1 && $val2 > $val3) {
		echo $val2;
	}
	
	else {
		echo $val3;
	}
 ?>
