<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 42 - for each Statement

    $users = array('vaibhav' => array('vaibhav', 23), 'renil' => array('renil', 22));

    foreach ($users as $user => $userDetailsArray) {
        echo '<b>'.$user.'</b><br>';
        foreach ($userDetailsArray as $userDetail) {
            echo ' -'.$userDetail.'<br>';
        }
    }


?>



