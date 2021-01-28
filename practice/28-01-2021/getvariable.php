<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 69 - Working with $_GET Variables

    if (isset($_GET['date']) && isset($_GET['month']) && isset($_GET['year'])) {
        $date = $_GET['date'];
        $month = $_GET['month'];
        $year = $_GET['year'];

        if (!empty($date) && !empty($month) && !empty($year)) {
            echo $date .' '. $month .' '. $year;
        } else {
            echo 'All fields are required!';
        }
    }
    

?>

<hr>
<form action="getvariable.php" method="get">
    Date : <br>
    <input type="text" name="date" id="date"><br><br>
    Month : <br>
    <input type="text" name="month" id="month"><br><br>
    year : <br>
    <input type="text" name="year" id="year"><br><br>
    <input type="submit" value="submit">
</form>
