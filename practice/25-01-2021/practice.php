<?php
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    function printPrime($count)
    {
    	$num = 2;
    	$flag = true;
    	$counter = 0;
    	while ($counter != $count) {
    		$flag = true;
    		for ($i=2; $i < $num; $i++) { 
	    		if ($num % $i == 0) {
	    			$flag = false;
	    			break;
	    		}
	    	}
	    	if ($flag) {
	    		$counter++;
	    		echo $num." ";
	    	}
	    	$num++;
    	}
    }

    function checkPallindrome($num)
    {
    	$number = $num;
    	$reminder = 0;
    	$ans = 0;
    	while ($num > 0) {
    		$reminder = $num % 10;
    		$ans = $ans * 10 + $reminder;
    		$num = floor($num / 10);
    	}

    	if ($number == $ans) {
    		echo $number." is pallindrome.<br>";
    	} else {
    		echo $number." is Not pallindrome.<br>";
    	}
    }

    echo 'First 50 Prime Numbers : <br>';
    printPrime(50);

    echo "<br>";

    checkPallindrome(121);

?>