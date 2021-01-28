<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 65 - Getting Visitors IP Address

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $bloked_ip = array('::1', "127.0.0.1","123.145.65.121");

    foreach ($bloked_ip as $ip) {
        if ($ip == $ip_address) {
            die('Your ip '.$ip_address.' is bloked!');
        }
    }

?>
<h1>Welocome</h1>