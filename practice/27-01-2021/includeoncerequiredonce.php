<?php
    /*
        author  : vaibhav maheshwari
        date    : 27-01-2021
    */

    // Video - 44 - include_once and require_once

    /*
        include_once and require_once is both use for include anothor page in page
        but main difference between require and require_once is require_once
        check that file is alreeady inclued or not if included it will not include it again.
        
    */
    include_once 'header.inc.php';
    require_once 'header.inc.php';
    

    echo $a;
?>