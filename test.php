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
                        <li class="item2">Login</li>
                        <li class="item2">Sign Up</li>
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
    require 'core.inc.php';
    require_once 'connect.inc.php';

        $firstname = $lastname = $username = $password = $password_re = $gender =$mail = $Error="";
        $firstnameErr=$lastnameErr = $emailErr = $genderErr = $passwordErr=$usernameErr = "";
        echo "1";
        echo "2";
            $password=$_POST['password'];
            $password_re=$_POST['password_re'];
            
//checking first and last name           
   if (empty($_POST["firstname"])) {
       echo "3";
    $firstnameErr = "First Name is required";
  } else {
       echo "4";
    $firstname = test_input_data($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }
            
  if (empty($_POST["lastname"])) {
    echo "5";
      $lastnameErr = "Last Name is required";
  } else {
      echo "6";
    $lastname = test_input_data($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }
//checking of first and last name ends
            
////checking of email begins 
if (empty($_POST["email"]))
{  echo "7";  
 $emailErr = "Email is required";
} 
    else { 
        echo "8";
        $mail = $_POST["email"];  
     if (!(filter_var($mail, FILTER_VALIDATE_EMAIL)))  { $emailErr = "Invalid email format"; }
    } //checking of email ends
            
//checking gender          
//            if (empty($_POST["gender"])) {
//                echo "9";
//    $genderErr = "Gender is required";
//  } else {
//                echo "10";
//    $gender = test_input($_POST["gender"]);
//  }
//checking of gender ends
   
//checking password            
if(empty($password)||empty($password_re)||$password!=$password_re){
    echo "11";
    $passwordErr = "Password don't match";
}else{
    echo "12";
    $password=md5($password_re);
            }

//checking of password ends
    
//checking username
            if (empty($_POST["username"])) {
    echo "13";
                $usernameErr = "user Name is required";
  } else {
                echo "14";
    $username = test_input_data($_POST["username"]);
    $query="SELECT username FROM userdata WHERE username='$username'";
            $query_run=mysqli_query($establish_connection,$query);
            if($query_run)
            {
                echo "15";
                $query_num_rows=mysqli_num_rows($query_run);
                if($query_num_rows==1)
                {
                    echo "16";
                    $usernameErr="Username Taken,Choose another";
                }
            }
                else{
                    echo "17";
                    $usernameErr="Choose Another Username, If problem persists contact Admin";
                }
    }
                    
//checking of username ends
            
if(empty($firstnameErr)&&empty($lastnameErr)&&empty($usernameErr)&&empty($passwordErr)&&empty($genderErr)&&empty($emailErr))
{
    echo "18";
    if (mysqli_query($establish_connection,"INSERT INTO userdata (username,firstname,lastname,password,email) VALUES ('$username','$firstname','$lastname','$password','$mail')")) {
						$_SESSION['user']=$username;
						header('Location: register.inc.php');
        echo "19";
					} else {
						$Error='some error occured while registration';
	echo "20";				
    }
    
}
            else{
                echo "21";
                $Error='some error occured while registration';
            }
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
                <p><span class="error">* required field.</span></p>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus value="<?php echo $firstname;?>">
                        <span class="error">* <?php echo $firstnameErr;?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus value="<?php echo $lastname;?>">
                        <span class="error">* <?php echo $lastnameErr;?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $email;?>">
                        <span class="error">* <?php echo $emailErr;?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" placeholder="User Name" class="form-control" autofocus value="<?php echo $username;?>">
                        <span class="error">* <?php echo $usernameErr;?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password;?>">
                        <span class="error">* <?php echo $passwordErr;?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_re" class="col-sm-3 control-label">Type the Password Again</label>
                    <div class="col-sm-9">
                        <input type="password" name="password_re" placeholder="Type the Password Again" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                </div>
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
                <!-- /.form-group -->
                <!--
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female");?> value="female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male");?> value="male">Male
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                -->
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="terms">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-3 submit-button col-sm-offset-6">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
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
