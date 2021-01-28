<?php
    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // header.php
    $script_name = $_SERVER['SCRIPT_NAME'];
?>

<form action="<?php echo $script_name; ?>" method="post">
    <input type="submit" name="submit" value="submit">
</form>