<?php 


    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['mstatus'])) {
       echo 'Name : '.$_POST['name'].'<br>';
       echo 'Password : '.$_POST['password'].'<br>';
       echo 'Address : '.$_POST['address'].'<br>';
       echo 'game : <br>';
       foreach ($_POST['game'] as $game ) {
           echo '-->'.$game.'<br>';
       }
       echo 'Gender : '.$_POST['gender'].'<br>';
       echo 'Marital Status : '.$_POST['mstatus'].'<br>';
       echo 'D.O.B : '.$_POST['date'].'/'.$_POST['month'].'/'.$_POST['year'];


       
    }
?>

<html>
    <head>
        <title>Form 2</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <form name="form2" action="form2.php" onsubmit="return validateForm2();" method="post">
            <fieldset class="green">
                <legend align="center">User Form</legend>
                <table align="center">
                    
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="name" id="name"><span class="error" id="nameerror"></span></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"><span class="error" id="passworderror"></span></td>
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
                        <td>Address</td>
                        <td><textarea name="address" id="address" cols="30" rows="6"></textarea><span class="error" id="addresserror"></span></td>
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
                        <td>Select Game</td>
                        <td>
                            <input type="checkbox" name="game[]" value="hockey" id="hockey">Hockey 
                            <input type="checkbox" name="game[]" value="football" id="football">Football 
                            <input type="checkbox" name="game[]" value="cricket" id="cricket">Cricket 
                            <input type="checkbox" name="game[]" value="volleyball" id="volleyball">Volleyball <br>
                            <span class="error" id="gameerror"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Marital Status</td>
                        <td>
                            <input type="radio" name="mstatus" id="married" value="married"> married
                            <input type="radio" name="mstatus" id="unmarried" value="unmarried"> unmarried 
                            <span class="error" id="mstatuserror"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="condition" value="condition" id="condition">I accept this agreement 
                            <span class="error" id="conditionerror"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>


                </table>
            </fieldset>
            
        </form>
        <script src="script.js"></script>

    </body>
</html>