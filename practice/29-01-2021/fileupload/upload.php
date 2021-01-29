<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 87 - Uploading Files- The Basics
    // Video - 88 - Uploading Files- The Basics Part 2

    
    $location = 'uploads/';

    if (isset($_FILES['image']['name'])) {
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        if (!empty($name)) {
            if (move_uploaded_file($tmp_name,$location.$name)) {
                echo 'File Uploaded!';
            } else {
                echo 'File Not Uploaded!';
            }
        } else {
            echo 'Please choose file!';
        }
        
    }
        
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <br><br>
    <input type="submit" value="Upload">
</form>
