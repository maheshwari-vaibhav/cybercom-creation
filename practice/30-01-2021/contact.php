<?php
    /*
        author  : vaibhav maheshwari
        date    : 30-01-2021
    */

    // Video - 100 - Creating a Simple Contact Form Part 1
    // Video - 101 - Creating a Simple Contact Form Part 2
    // Video - 102 - Creating a Simple Contact Form Part 3
    // Video - 103 - Creating a Simple Contact Form Part 4


   

   

   if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       if (!empty($name) && !empty($email) && !empty($message)) {

            $to  = 'v.s.maheshwari1998@gmail.com';
            $subject = 'Contact Form Submitted!';
            $body = 'Name : '.$name."\n".'Email : '.$email."\n".'Message : '.$message;
            $headers = 'From: '.$email;
            if (mail($to, $subject, $body, $headers)) {
                echo 'Thank yor for contact us. we will reach you soon.';
            } else {
                echo 'Sorry, some error occure please try after sometime.';
            }
       } else {
           echo 'All fields are required.';
       }
       
   }

    
?>

<form action="contact.php" method="post">
Name: <br>
<input type="text" name="name" id="name"><br><br>
Email: <br>
<input type="text" name="email" id="email"><br><br>
Message: <br>
<textarea name="message" id="message" cols="30" rows="6"></textarea><br><br>
<input type="submit" value="Submit">

</form>