<?php 

    require 'dbconnect.php';
    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['file'])) {
            if (!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['game']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['file'])) {
                 $name = $_POST['name'];
                 $password = $_POST['password'];
                 $address = $_POST['address'];
                 $game = json_encode($_POST['game']);
                 $age = $_POST['age'];
                 $file = $_POST['file'];
                 $gender = $_POST['gender'];
     
                 $sql = 'INSERT INTO `form1` (`id`, `name`, `password`, `address`, `games`, `gender`, `age`, `file`) VALUES (NULL, \''.$name.'\', \''.$password.'\', \''.$address.'\', \''.$game.'\', \''.$gender.'\', \''.$age.'\', \''.$file.'\')';
                 if ($query = mysqli_query($conn, $sql)) {
                     echo 'Record inserted suceessfully';
                 } else {
                     echo 'Somthing Went wrong!!!';
                 }
      
            } else {
                echo 'All Fields are required!!!!';
            }
            
         }
         else {
             echo 'All Fields are required!!!!';
         }
    }
?>

<html>
    <head>
        <title>Form 1</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <form name="form1" action="form1.php" onsubmit="return validateForm1();" method="post">
            <table border="2"  class="blue">
                <tr class="yellow">
                    <th colspan="2"><h3>User Form</h3></th>
                </tr>
                <tr>
                    <td>Enter Name</td>
                    <td><input type="text" name="name" id="name"><span class="error" id="nameerror"></span></td>
                </tr>
                <tr>
                    <td>Enter Password</td>
                    <td><input type="password" name="password" id="password"><span class="error" id="passworderror"></span></td>
                </tr>
                <tr>
                    <td>Enter Address</td>
                    <td><textarea name="address" id="address" cols="30" rows="6"></textarea><span class="error" id="addresserror"></span></td>
                </tr>
                <tr>
                    <td>Select Game</td>
                    <td>
                        <input type="checkbox" name="game[]" value="hockey" id="hockey">Hockey <br>
                        <input type="checkbox" name="game[]" value="football" id="football">Football <br>
                        <input type="checkbox" name="game[]" value="badminton" id="badminton">Badminton <br>
                        <input type="checkbox" name="game[]" value="cricket" id="cricket">Cricket <br>
                        <input type="checkbox" name="game[]" value="volleyball" id="volleyball">Volleyball <br>
                        <span class="error" id="gameerror"></span>
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
                    <td>Select ur age</td>
                    <td>
                        <select name="age" id="age">
                            <option selected disabled value="">Select age</option>
                            <?php for ($i=18; $i < 65 ; $i++) { ?>
                               <option value="<?=$i;?>"><?=$i;?></option>
                            <?php } ?>
                        </select>
                        <span class="error" id="ageerror"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="file" name="file" id="file">
                        <span class="error" id="fileerror"></span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="reset" value="Reset">
                        <input type="submit" name="submit" value="Submit Form">
                    </td>
                </tr>


            </table>
        </form>
        <script src="script.js"></script>

    </body>
</html>