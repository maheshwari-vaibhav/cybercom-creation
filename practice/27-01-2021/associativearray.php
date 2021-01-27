<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 40 - Associative Arrays

    $users = array('vaibhav' => 23, 'renil' => 23, 'rajan' => 22,'shraddha' => 22,'ravi' => 22);

    echo $users['vaibhav']; //access single value from array
    echo '<br>';

    print_r($users);

    $users['vaibhav'] = 22; //mute value of array

    echo '<br>';
    echo $users['vaibhav']; //access single value from array
    echo '<br>';
    


?>