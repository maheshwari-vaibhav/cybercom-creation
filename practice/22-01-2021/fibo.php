<?php 
	
	$first = 0;
	$second = 1;
	$sum = 0;

	$counter = 15;

	echo '<h3>Fist 15 Fibonacci Numbers :</h3>';
	for ($i=0; $i < 15; $i++) { 
		if ($i<=1) 
		{
			echo $i.' ';
		}else
		{
			$sum = $first + $second;
			$first = $second;
			$second = $sum;
			echo $sum.' ';
		}
	}
?>