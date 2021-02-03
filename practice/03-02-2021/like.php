<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
    */

    // Video - 130 - LIKE With a Search Engine Example Part 1
    // Video - 131 - LIKE With a Search Engine Example Part 2
    // Video - 132 - LIKE With a Search Engine Example Part 3
    // Video - 133 - LIKE With a Search Engine Example Part 4

    require 'dbconnect.php';
    if (isset($_POST['search_name'])) {
        $search_name = $_POST['search_name'];
        if (!empty($search_name)) {
           $sql = "select `name` from `people` where name like '%".mysqli_real_escape_string($conn, $search_name)."%'";
           $query = mysqli_query($conn, $sql);
           if (mysqli_num_rows($query) > 0) {
               while ($row = mysqli_fetch_assoc($query)) {
                   echo $row['name'];
               }
           } else {
               echo 'No record found!';
           }
           
        } else {
            echo 'Search name is required';
        }
    }
   
?>
<form action="like.php" method="post">
<input type="text" name="search_name" id="search_name"><br><br>
<input type="submit" value="submit">
</form>