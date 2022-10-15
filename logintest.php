<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/register_form.css" type="text/css" rel="stylesheet">
</head>

<body>
    <nav class="header-main">
        <div class="header-upper">
            <ul class="list1">
                <li class="item1">Home</li>
                <li class="item1">MyChart</li>
                <li class="item1">Careers</li>
                <li class="item1">Pay a Bill</li>
                <li class="item1">Financial Assistance</li>
                <li class="item1">For Physicians</li>
                <li class="item1-special">Northwestern Medicine Newsroom</li>
            </ul>
        </div>
        <div class="header-lower">
            <div class="header-lower-data">
                <img class="logo" alt="Virtual Hospital" src="images/logo.jpg">
                <div class="login">
                    <ul class="log">
                        <li class="item2"></li>
                        <li class="item2"></li>
                    </ul>
                </div>
            </div>
            <div class="header-lower-main">
                <div class="navigation-last">
                    <ul class="main-navigation">
                        <li class="item3">Doctors</li>
                        <li class="item3">Locations</li>
                        <li class="item3">Conditions and Care Areas</li>
                        <li class="item3">Patients and Visitors</li>
                        <li class="item3">Academics</li>
                        <li class="item3">Contact US</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
    require 'core1.inc.php';
    require_once 'connect.inc.php';
        $session_name=$_SESSION['user_id'];
        $firstname = $lastname = $gender =$mail = $Error="";
        $firstnameErr=$lastnameErr = $emailErr = $genderErr = "";
            
//checking first and last name           
   if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input_data($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
       if(empty($firstnameErr)){echo '2';
           $sql = "UPDATE userdata SET firstname='$firstname' WHERE username='$session_name'";
       }
       else{
           echo '1';
       }
  }
            
  if (empty($_POST["lastname"])) {
      $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input_data($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
       if(empty($lastnameErr)){echo '2';
           $sql = "UPDATE userdata SET lastname='$lastname' WHERE username='$session_name'";
            if ($establish_connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $establish_connection->error;
}                   
       }
      
       else{
           echo '1';
       }
  }
//checking of first and last name ends
            
////checking of email begins 
if (empty($_POST["email"]))
{   
 $emailErr = "Email is required";
} 
    else { 
        $mail = $_POST["email"];  
     if (!(filter_var($mail, FILTER_VALIDATE_EMAIL)))  { $emailErr = "Invalid email format"; }
    } //checking of email ends
    
    
       if(empty($emailErr)){
           $sql = "UPDATE userdata SET email='$mail' WHERE username='$session_name'";
           echo '2';
       }
    
       else{
           echo '1';
       }
            
//checking gender          
//            if (empty($_POST["gender"])) {
//                echo "9";
//    $genderErr = "Gender is required";
//  } else {
//                echo "10";
//    $gender = test_input($_POST["gender"]);
//  }
//checking of gender ends
   
    
            
        function test_input_data($input_data) {
  $input_data = trim($input_data);
  $input_data = stripslashes($input_data);
  $input_data = htmlspecialchars($input_data);
  return $input_data;
}
            
        
?>



        <div class="container">
            <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="POST">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstname" class="form-control" autofocus value="<?php $fname=$_SESSION['user_id']; $sql = " SELECT firstname FROM userdata WHERE username='$fname' ";  $result = $establish_connection->query($sql); if($result->num_rows){$row= $result->fetch_assoc();echo $row[firstname];} ?>">
                        <span class="error" style="color:red;"><?php echo isset($_POST['firstname']) ? $firstnameErr : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus value="<?php $fname=$_SESSION['user_id']; $sql = " SELECT lastname FROM userdata WHERE username='$fname' ";  $result = $establish_connection->query($sql); if($result->num_rows){$row= $result->fetch_assoc();echo $row[lastname];} ?>">
                        <span class="error" style="color:red;"><?php echo isset($_POST['lastname']) ? $lastnameErr : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email" class="form-control" value="<?php $fname=$_SESSION['user_id']; $sql = " SELECT email FROM userdata WHERE username='$fname' ";  $result = $establish_connection->query($sql); if($result->num_rows){$row= $result->fetch_assoc();echo $row[email];} ?>">
                        <span class="error" style="color:red;"><?php echo isset($_POST['email']) ? $emailErr : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                </div>
                <!--
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select name="country" class="form-control">
                            <option>India</option>
                            <option>Afghanistan</option>
                            <option>United States</option>
                            <option>UK</option>
                            <option>Spain</option>
                            <option>Pakistan</option>
                            <option>Nepal</option>
                            <option>Bhutan</option>
                            <option>Canada</option>
                        </select>
                    </div>
                </div>
                 
-->
                <div class="form-group">
                    <div class="col-sm-3 submit-button col-sm-offset-6">
                        <button type="submit" class="btn btn-primary btn-block">Change My Profile</button>
                    </div>
                </div>
            </form>
            <!-- /form -->
        </div>
        <!-- ./container -->

        <footer>
            <div class="footer">
                <div class="footerdata">
                    <table class="footertable">
                        <tbody>
                            <tr>
                                <th>General</th>
                                <th>Contact Us</th>
                                <th>Social Media</th>
                                <th>Video Channels</th>
                                <th>Editions</th>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Jobs</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Advertise</a></li>
                                        <li><a href="#">News Data Feeds</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Google+</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">DailyMotion</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="source">Source-Differnet Websites have been taken as an inspiration for the design</div>
                <div id="add">VirtualHospital.com is the website made by students of Thapar University for the Software Project</div>
            </div>
        </footer>
</body>

</html>
