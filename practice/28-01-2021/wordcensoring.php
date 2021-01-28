<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 52 - Word Censoring Part 1
    // Video - 53 - Word Censoring Part 2


    /*
        str_replace is case sensative
        str_ireplace is not case sensative
    */

    $find = array('vaibhav', 'renil', 'rajan', 'shraddha');
    $replace = array('v*****v', 'r***l', 'r***n', 's******a');
    if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        $user_input_new = str_ireplace($find, $replace, $user_input);
        echo $user_input_new;
    }



?>
<html>
    <head>
        <title>
            Word Censoring
        </title>
    </head>
    <body>
        <hr>
        <form action="wordcensoring.php" method="post">
            <textarea name="user_input" id="user_input" cols="30" rows="6"></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>