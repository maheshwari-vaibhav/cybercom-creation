<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // Video - 89 - Uploading Files- Restricting File Size

    
    $location = 'uploads/';
    $max_size = 2097152;
    if (isset($_FILES['image']['name'])) {
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        if (!empty($name)) {
            if ($size <= $max_size) {
                if (move_uploaded_file($tmp_name,$location.$name)) {
                    echo 'File Uploaded!';
                } else {
                    echo 'File Not Uploaded!';
                }
            } else {
                echo 'File Should be less than 2MB!!!';
            }
            
            
        } else {
            echo 'Please choose file!';
        }
        
    }
        
?>

<form action="restrictsize.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <br><br>
    <input type="submit" value="Upload">
</form>
