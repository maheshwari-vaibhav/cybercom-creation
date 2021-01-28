<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 67 - Detecting a Visitors Browser Part 1
    // Video - 68 - Detecting a Visitors Browser Part 2


    $browser = get_browser(null, true);

    // print_r($browser);

    $browser = strtolower($browser['browser']);

    if ($browser != 'chrome') {
        echo 'You are not using chrome!';
    }

?>
