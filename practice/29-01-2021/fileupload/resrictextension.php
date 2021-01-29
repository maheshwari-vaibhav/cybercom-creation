<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 90 - Uploading Files- Restricting File Extensions Part 1
    // Video - 91 - Uploading Files- Restricting File Extensions Part 2


    
    $location = 'uploads/';

    if (isset($_FILES['image']['name'])) {
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $type = $_FILES['image']['type'];
        $extension = pathinfo($name, PATHINFO_EXTENSION);

        if (!empty($name)) {
            if ($extension == 'png' && $type == 'image/png') {
                if (move_uploaded_file($tmp_name,$location.$name)) {
                    echo 'File Uploaded!';
                } else {
                    echo 'File Not Uploaded!';
                }
            } else {
                echo 'File Should be PNG Format Only!!!';
            }
            
        } else {
            echo 'Please choose file!';
        }
        
    }
        
?>

<form action="resrictextension.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <br><br>
    <input type="submit" value="Upload">
</form>
