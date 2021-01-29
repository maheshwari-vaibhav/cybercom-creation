<?php
    /*
        author  : vaibhav maheshwari
        date    : 29-01-2021
    */

    // form task

    $nameError = $emailError = $subjectError = $genderError = '';
    $name = $email = $gender = $class = $time = $subject = $agree = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }


        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format"; 
            }
        }
         
        if (empty($_POST["time"])) {
            $time = "";
        } else {
            $time = test_input($_POST["time"]);
        }

        if (empty($_POST["subjects"])) {
            $subjectError = "You must select one subject!";
        } else {
            $subject = $_POST["subjects"];
        }

        if (empty($_POST["classes"])) {
            $class = "";
        } else {
            $class = test_input($_POST["classes"]);
        }

        if (empty($_POST["gender"])) {
            $genderError = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["checked"])) {
            $agree = "";
        } else {
            $agree = test_input($_POST["checked"]);
        }
    }

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form task (29-01-2021)</title>
    <style>
    .error{
        color:red;
    }
    </style>
</head>
<body>
	<h2>Absolute Class Registration</h2>
    <span class="error">* Are required fields.</span>
    <form action="index.php" method="post">
        <table>
        	<tr>
        		<td>
        			Name:
        		</td>
        		<td>
        			<input type="text" name="name" id="name">
                    <span class="error">* <?php echo $nameError; ?></span>
        		</td>
        	</tr>
            <tr>
        		<td>
        			Email:
        		</td>
        		<td>
        			<input type="text" name="email" id="email">
                    <span class="error">* <?php echo $emailError; ?></span>

        		</td>
        	</tr>
            <tr>
        		<td>
        			Time:
        		</td>
        		<td>
        			<input type="text" name="time" id="time">
        		</td>
        	</tr>
            <tr>
        		<td>
        			Classes:
        		</td>
        		<td>
        			<textarea name="classes" id="classes" cols="30" rows="6"></textarea>
        		</td>
        	</tr>
            <tr>
        		<td>
        			Gender:
        		</td>
        		<td>
        			<input type="radio" name="gender" id="gender" value="male">Male
        			<input type="radio" name="gender" id="gender" value="female">Female
                    <span class="error">* <?php echo $genderError; ?></span>

        		</td>
        	</tr>
            <tr>
        		<td>
        			Subjects:
        		</td>
        		<td>
        			<select name="subjects[]" size="4" multiple>
                     <option value="Android">Android</option>
                     <option value="Java">Java</option>
                     <option value="C#">C#</option>
                     <option value="Data Base">Data Base</option>
                     <option value="Hadoop">Hadoop</option>
                     <option value="VB script">VB script</option>
                  </select>
                  <span class="error">* <?php echo $subjectError; ?></span>
        		</td>
        	</tr>
            <tr>
                <td>
                    Agree
                </td>
                <td>
            		<input type="checkbox" name="checked" value="1">
                    <?php if(!isset($_POST['checked'])){ ?>
	                <span class = "error">* <?php echo "You must agree to terms";?></span>
	                <?php } ?> 
                </td>
               		
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
        </table>
    </form>

    <?php
        if (!empty($name) && !empty($email) && !empty($gender) && !empty($time) && !empty($class) && !empty($subject) && !empty($agree)) {
			echo '<h2>Your given values are as :</h2>';
	        echo '<p>Your name is '.$name.'</p>';
	        echo '<p> your email address is '.$email.'</p>';
	        echo '<p>Your class time at '.$time.'</p>';
	        echo '<p>your class info '.$class.' </p>';
	        echo '<p>your gender is '.$gender.'</p>';
            echo '<p>your subjects are :<br><ol>';
            foreach ($subject as $sub) {
                echo '<li>'.$sub.'</li>';
            }
            echo '</ol>';
         } 
    ?>
</body>
</html>
