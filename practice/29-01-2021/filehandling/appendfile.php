<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 79 - File Handling- Appending a File

    if (isset($_POST['name'])) {
        if (!empty($_POST['name'])) {
            $handle = fopen('name.txt', 'a'); //open file in append mode
            fwrite($handle, $_POST['name']."\n"); //write data in file
            fclose($handle); //close the file connection
        } else {
            echo 'Please fill name!!';
        }
        
    }
    
?>

<form action="appendfile.php" method="post">
Name : <br>
<input type="text" name="name" id="name"><br><br>
<input type="submit" value="Submit">
</form>