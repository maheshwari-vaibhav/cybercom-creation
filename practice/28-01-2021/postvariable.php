<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 70 - Working with $_POST Variables

    $match = 'vaibhav456';
    if (isset($_POST['password'])) {
        $password = $_POST['password'];

        if (!empty($password)) {
            if ($password == $match) {
                echo 'Correct';
            } else {
                echo 'Incorrect';
            }
            
        } else {
            echo 'All fields are required!';
        }
    }
    

?>

<hr>
<form action="postvariable.php" method="post">
    password : <br>
    <input type="password" name="password" id="password"><br><br>
    
    <input type="submit" value="submit">
</form>
