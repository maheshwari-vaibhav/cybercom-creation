<?php 
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    // Video - 31 - Basic Functions

    function myName() {
    	echo 'Vaibhav<br>';
    }


    echo 'My name is ';
    myName();


    // Video - 32 - Functions with Arguments

    $number1 = 10;
    $number2 = 25;
    function add($number1, $number2) {
        echo $number1 + $number2;
    }

    add($number1,$number2);

    echo "<br>";

    function displayDate($day, $month, $year) {
    	echo $month. ', ' .$day. ' ' .$year;
    }

    displayDate(25, 'January', 2021);


    echo "<br>";


    // Video - 33 - Functions with a Return Value

    function sum ($number1, $number2) {
        return $number1 + $number2;
    }


    function divide	($number1, $number2) {
        return $number1 / $number2;
    }

    $result = divide(sum(10,10),sum(5,5));

    echo $result;

?>