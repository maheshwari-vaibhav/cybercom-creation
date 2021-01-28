<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 54 - Creating a Find and Replace Application Part 1
    // Video - 55 - Creating a Find and Replace Application Part 2
    // Video - 56 - Creating a Find and Replace Application Part 3
    // Video - 57 - Creating a Find and Replace Application Part 4


    $offset = 0;
    if (isset($_POST['user_input']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) {

        $text = $_POST['user_input'];
        $search = $_POST['searchfor'];
        $replace = $_POST['replacewith'];
        $search_length = strlen($search);

        if (!empty($text) && !empty($search) && !empty($replace)) {

            $strpos = strpos($text, $search, $offset);
            while ($strpos !== false) {
                $text = substr_replace($text, $replace, $strpos, $search_length);
                $offset = $strpos + $search_length;
                $strpos = strpos($text, $search, $offset);
            }
            echo $text;
        } else {
            echo 'All Fields are required!';
        }
        
    }



?>
<html>
    <head>
        <title>
            Find and Replace
        </title>
    </head>
    <body>
        <hr>
        <form action="findreplace.php" method="post">
            <textarea name="user_input" id="user_input" cols="30" rows="6"></textarea>
            <br><br>
            Search for :
            <br><br>
            <input type="text" name="searchfor" id="searchfor">
            <br><br>
            Replace with:
            <br><br>
            <input type="text" name="replacewith" id="replacewith">
            <br><br>
            <input type="submit" value="Search and Replace">
        </form>
    </body>
</html>