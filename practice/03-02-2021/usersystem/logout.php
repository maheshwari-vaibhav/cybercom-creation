<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */
    require 'core.inc.php';
    session_destroy();
    header('Location: '.$http_referer);

?>