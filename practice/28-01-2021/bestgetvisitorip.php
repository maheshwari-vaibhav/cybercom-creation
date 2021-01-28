<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 66 - Better Way to Get Visitors IP Address

   $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
   $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
   $remote_address = $_SERVER['REMOTE_ADDR'];
   
   if (!empty($http_client_ip)) {
        $ip_address = $http_client_ip;
   } elseif (!empty($http_x_forwarded_for)) {
        $ip_address = $http_x_forwarded_for;
   } else {
        $ip_address = $remote_address;
   }
   
   echo $remote_address;
    

?>
