<?php 


    require 'dbconnect.php';

    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $sql = 'INSERT INTO `form4` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, \''.$name.'\', \''.$email.'\', \''.$subject.'\', \''.$message.'\')';
                if ($query = mysqli_query($conn, $sql)) {
                    echo 'Record inserted suceessfully';
                } else {
                    echo 'Somthing Went wrong!!!';
                }
            } else {
                echo 'All Fields are required!!!!';
            }           
        } else {
            echo 'All Fields are required!!!!';
        }
    }
     
?>

<html>
    <head>
        <title>Form 4</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <form name="form4" action="form4.php" onsubmit="return validateForm4();" method="post">
            <div>
                <div class="cheader"><h1>Contact Us</h1></div>
                <div class="cbody">
                    <input type="text" name="name" id="name" placeholder="Name.."><span class="error" id="nameerror"></span>
                    <input type="text" name="email" id="email" placeholder="Email.."><span class="error" id="emailerror"></span>
                    <input type="text" name="subject" id="subject" placeholder="Subject.."><span class="error" id="subjecterror"></span>
                    <textarea name="message" id="message" cols="30" rows="6" placeholder="Message.."></textarea><span class="error" id="messageerror"></span><br>
                </div>
                <div class="cfooter">
                    <input type="submit" value="SEND MESSAGE" name="submit">
                </div>
            </div>
        </form>
        <script src="script.js"></script>

    </body>
</html>