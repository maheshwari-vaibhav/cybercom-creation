<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 60 - Random Number Generation

    // $random = rand();
    // $max = getrandmax();

    // echo $random.'/'.$max;
    if (isset($_POST['roll'])) {
        $random = rand(1,6);
        echo 'You rolled : '.$random;
    }
    
?>


<html>
    <head>
        <title>
           Random Number
        </title>
    </head>
    <body>
        <hr>
        <form action="randomnumber.php" method="post">
            
            <input name="roll" type="submit" value="Roll">
        </form>
    </body>
</html>