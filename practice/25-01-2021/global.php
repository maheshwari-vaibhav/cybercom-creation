<?php 
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    // Video - 34 - Global Variables and Functions
    $user_ip = $_SERVER['REMOTE_ADDR'];

    function echo_ip() {
    	global $user_ip; //to access global variable

    	$str = 'Your Ip is : '.$user_ip;
    	echo $str;
    }

    echo_ip();

    
?>

