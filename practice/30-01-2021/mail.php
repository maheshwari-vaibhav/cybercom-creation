<?php
    /*
        author  : vaibhav maheshwari
        date    : 30-01-2021
    */

    // Video - 98 - Sending an Email Part 1
    // Video - 99 - Sending an Email Part 2


   $to  = 'v.s.maheshwari1998@gmail.com';
   $subject = 'Test mail';
   $body = 'Test mail';

   $headers = "From: societylogy@gmail.com";
   if (mail($to, $subject, $body, $headers)) {
       echo 'Mail sent to :'.$to;
   } else {
       echo 'error';
   }

    
?>