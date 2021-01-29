<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 72 - Using htmlentities for Security

    if (isset($_GET['date']) && isset($_GET['month']) && isset($_GET['year'])) {
        $date = htmlentities($_GET['date']);
        $month = htmlentities($_GET['month']);
        $year = htmlentities($_GET['year']);

        if (!empty($date) && !empty($month) && !empty($year)) {
            echo $date .' '. $month .' '. $year;
        } else {
            echo 'All fields are required!';
        }
    }
    

?>

<hr>
<form action="htmlentities.php" method="get">
    Date : <br>
    <input type="text" name="date" id="date"><br><br>
    Month : <br>
    <input type="text" name="month" id="month"><br><br>
    year : <br>
    <input type="text" name="year" id="year"><br><br>
    <input type="submit" value="submit">
</form>
