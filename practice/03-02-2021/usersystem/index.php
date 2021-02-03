<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */
    require 'core.inc.php';
    require 'db.inc.php';

    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
       $firstname = getUserField('firstname');
       $lastname = getUserField('surname');
        echo 'You are logged In. Welcome '.$firstname.' '.$lastname.' <a href=\'logout.php\'>Logout</a>';
    } else {
        include 'login.inc.php';
    }
?>
