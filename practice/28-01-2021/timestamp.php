<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 58 - timestamps


    $time = time();

    echo 'The date is '. date('d-m-y',$time).'<br>';
    echo 'The date is '. date('D-m-y',$time).'<br>';
    echo 'The date is '. date('d-M-y',$time).'<br>';
    echo 'The date is '. date('d-m-Y',$time).'<br>';

    echo 'The time is '. date('H:i:s',$time).'<br>';
    
    // Video - 59 - Modifying timestamps
    
    echo 'The date is '. date('d-m-y',$time - (7*24*3600)).'<br>';

    echo 'The date is '. date('d-m-y',strtotime('+1 week')).'<br>';
    echo 'The date is '. date('d-m-y',strtotime('-1 week')).'<br>';



    
?>