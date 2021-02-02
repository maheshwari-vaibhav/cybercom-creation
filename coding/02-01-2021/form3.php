<?php 

    require 'dbconnect.php';

    if (isset($_POST['submit'])) {
        if (isset($_POST['fname']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone'])) {
       
            if (!empty($_POST['fname']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['date']) && !empty($_POST['month']) && !empty($_POST['year']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $password = $_POST['password'];
                $country = $_POST['country'];
                $bdate = $_POST['date'].'/'.$_POST['month'].'/'.$_POST['year'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];

                $sql = 'INSERT INTO `form3` (`id`, `fname`, `lname`, `gender`, `bdate`, `country`, `email`, `phone`, `password`) VALUES (NULL, \''.$fname.'\', \''.$lname.'\', \''.$gender.'\', \''.$bdate.'\', \''.$country.'\', \''.$email.'\', \''.$phone.'\', \''.$password.'\')';
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
        <title>Form 3</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <form name="form3" action="form3.php" onsubmit="return validateForm3();" method="post">
            <table class="black">
                <tr class="orange">
                    <th colspan="2"><h3>Sign Up</h3></th>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" id="fname" placeholder="Enter First Name"><span class="error" id="nameerror"></span></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id="lname" placeholder="Enter Last Name"><span class="error" id="lnameerror"></span></td>
                </tr>
                <tr>
                        <td>D.O.B</td>
                        <td>
                            <select name="month" id="month">
                                <option selected disabled value="">Month</option>
                                <?php for ($i=1; $i < 13 ; $i++) { ?>
                                    <option value="<?=$i;?>"><?=$i;?></option>
                                <?php } ?>
                            </select>
                            <select name="date" id="date">
                                <option selected disabled value="">Date</option>
                                <?php for ($i=1; $i < 31 ; $i++) { ?>
                                    <option value="<?=$i;?>"><?=$i;?></option>
                                <?php } ?>
                            </select>
                            <select name="year" id="year">
                                <option selected disabled value="">Year</option>
                                <?php for ($i=1965; $i < 2003 ; $i++) { ?>
                                    <option value="<?=$i;?>"><?=$i;?></option>
                                <?php } ?>
                            </select>
                            <span class="error" id="doberror"></span>

                        </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" id="male" value="male"> male
                        <input type="radio" name="gender" id="female" value="female"> female 
                        <span class="error" id="gendererror"></span>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="country" id="country">
                            <option selected disabled value="">Country</option>
                            <option value="india">india</option>
                            <option value="usa">usa</option>
                            <option value="japan">japan</option>
                            <option value="nepal">nepal</option>
                        </select> 
                        <span class="error" id="countryerror"></span>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" placeholder="Enter Email"><span class="error" id="emailerror"></span></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" id="phone" placeholder="Enter Phone"><span class="error" id="phoneerror"></span></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"><span class="error" id="passworderror"></span></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="cpassword" id="cpassword"><span class="error" id="cpassworderror"></span></td>
                </tr>
                <tr>
                        <td colspan="2">
                            <input type="checkbox" name="condition" value="condition" id="condition">I agree to terms of use
                            <span class="error" id="conditionerror"></span>
                        </td>
                    </tr>
                <tr class="orange">
                    <td colspan="2">
                        <input type="submit" value="Submit" name="submit">
                        <input type="reset" value="Cancle">
                    </td>
                </tr>


            </table>
        </form>
        <script src="script.js"></script>

    </body>
</html>