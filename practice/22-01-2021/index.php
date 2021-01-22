<?php 

	/*
		author 	: vaibhav maheshwari
		date 	: 22-01-2021

	*/
	
	//diplay text and html to webpage
	echo "Hello World<br>";

	print 'hello';

	$text = "Hello World!";
?>


<!-- embed php in html -->
<input type="text" name="name" value="<?php echo $text; ?>"> 

<br>
<!-- variables in php -->

<?php 
	$name = 'Vaibhav'; //string
	$age = 23; //number
	$isFullAge = true; //boolean

	// concatination in php
	echo 'hello i am '.$name.'. i am '.$age.' years old<br>';
	echo "hello i am $name i am $age years old";

 ?>
<br>
<br>
 <!-- video - 18. if_if else statement  -->


<?php

	/*
		1 = true
		0 = false
	*/

	if (1) {
		echo "true<br>";
	} else {
		echo "false<br>";
	}


	$text = 'vaibhav'; 


	if ($text=='vaibhav') {
		echo "true<br>";
	} else {
		echo "false<br>";
	}
	
	
 ?>

 <!-- video - 19. if_else if statement  -->

<?php 
	$number = 23;

	if ($number == 23) {
		echo "Number Equal to 23.";
	} elseif ($number == 22) {
		echo "Number Equal to 22.";
	} else {
		echo "Number not Equal.";
	}
	
 ?>

<br><br>
 <!-- video - 20. Assignment operator  -->


<?php 
	
	$number = 10;
	echo 'Number 1 = '.$number.'<br>';
	$number += 2;
	echo 'Number 1 = '.$number.'<br>';
	$number -= 2;
	echo 'Number 1 = '.$number.'<br>';
	$number *= 2;
	echo 'Number 1 = '.$number.'<br>';
	$number /= 2;
	echo 'Number 1 = '.$number.'<br>';
	$number %= 2;
	echo 'Number 1 = '.$number.'<br>';

 ?>



 <br><br>

 <!-- video - 21. Comparison operator  -->

 <?php 
 	/*

		== 			- equal to
		!= or <>	- not equal
		>  			- grater then
		>=  		- grater then equal to
		<  			- less then
		<=  		- less then equal to

 	*/

	$number1 = 20;
	$number2 = 15;

	if ($number1 > $number2) {
		echo "true";
	} else {
		echo "false";
	}
	
  ?>

<br><br>

  <!-- video - 22. Arithmetic operator  -->
  <?php 
		
	$number1 = 20;
	$number2 = 3;

	echo $number1 .' + '. $number2 .' = '.($number1+$number2).'<br>';  	
	echo $number1 .' - '. $number2 .' = '.($number1-$number2).'<br>';  	
	echo $number1 .' * '. $number2 .' = '.($number1*$number2).'<br>';  	
	echo $number1 .' / '. $number2 .' = '.($number1/$number2).'<br>';  	
	echo $number1 .' % '. $number2 .' = '.($number1%$number2).'<br>'; 
	echo $number1 .'++ = '.(++$number1).'<br>';  	
	echo $number1 .'-- = '.(--$number1).'<br>';  	 	
  ?>

  <br><br>

  <!-- video - 23. Logical operator  -->

  <?php 

  	$number = 20;

  	if ($number >= 10 && $number <= 100) {
  		echo 'ok';
  	} else {
  		echo 'not ok';
  	}
  	
  ?>


  <br><br>

  <!-- video - 24. Triple Equal  -->

  <?php 

// triple equal compare value and data type both
  	$number1 = 1;
  	$number2 = '1';

  	if ($number1 == $number2) {
  		echo "true<br>";
  	} else {
  		echo "false<br>";
  	}

  	if ($number1 === $number2) {
  		echo "true<br>";
  	} else {
  		echo "false<br>";
  	}
  	  	
  ?>

<br><br>
   <!-- video - 25. While loop  -->

  <?php 

  	echo "While loop<br>";

  	$counter = 1;

  	while ($counter <= 10) {
  		echo $counter."Hello<br>";
  		$counter++;
  	}
  ?>
  


  <br><br>
   <!-- video - 26. do While loop  -->

  <?php 

  	echo "do While loop<br>";

  	$counter = 1;

  	do {
  		echo $counter."Hello<br>";
  		$counter++;
  	}while ($counter <= 10) ;
  ?>


  <br><br>
   <!-- video - 27. For loop  -->

  <?php 

  	echo "For loop<br>";

  	for ($i=1; $i <= 10; $i++) { 
  		echo $i."Hello<br>";
  	}
  	
  ?>	  		  	


   <br><br>
   <!-- video - 28. Switch statement  -->

  <?php 

  	echo "Switch statement<br>";

  	$color = 'red';

  	switch ($color) {
  		case 'red':
  			echo 'This is red';
  			break;

  		case 'green':
  			echo 'This is greeen';
  			break;
  		case 'blue':
  			echo 'This is blue';
  			break;

  		case 'pink':
  			echo 'This is pink';
  			break;
  		default:
  			echo 'Choose valid color';
  			break;
  	}
  	
  ?>	  		