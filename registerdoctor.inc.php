<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/register_form.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
    require_once 'connect.inc.php';
    require 'core1.inc.php';

    include 'header.php';
    ?>
        <?php
     $firstname = $lastname = $username = $password = $password_re = $gender =$mail = $Error=$addressErr="";
        $firstnameErr=$lastnameErr = $emailErr = $genderErr = $passwordErr=$usernameErr =$address= "";
            $password=$_POST['password'];
            $password_re=$_POST['password_re'];
            
//checking first and last name           
   if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input_data($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }
            
  if (empty($_POST["lastname"])) {
      $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input_data($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
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
    $passwordErr = "Password don't match";
}else{
    $password=md5($password_re);
            }

//checking of password ends
    
//checking username
            if (empty($_POST["username"])) {
                $usernameErr = "User Name is required";
  } else {
    $username = test_input_data($_POST["username"]);
    $query="SELECT username FROM userdata WHERE username='$username'";
                
            $query_run=mysqli_query($establish_connection,$query);
            if($query_run)
            {
                $query_num_rows=mysqli_num_rows($query_run);
                if($query_num_rows==1)
                {
                    $usernameErr="Username Taken,Choose another";
                }
            }
                else{
                    $usernameErr="Choose Another Username, If problem persists contact Admin";
                }
    }
                    
//checking of username ends
    
           $dob=$_POST[dob];
        
        if(!empty($dob))
        {
            $array = explode("-",$appointmentdate);  
  
            $day = $array[0];  
            $month = $array[1];  
            $year = $array[2];  
            $today = strtotime("now");  
                $dob=date("Y-m-d",strtotime($dob));
        }
  if(empty($_POST['address'])){
      $addressErr="Address is required";
  }
    else{
        $address=$_POST['address'];
    }
            
if(empty($firstnameErr)&&empty($lastnameErr)&&empty($usernameErr)&&empty($passwordErr)&&empty($genderErr)&&empty($emailErr)&&empty($addressErr))
{
    $query1="INSERT INTO logindatadoctor (username,password) VALUES ('$username','$password_re')";
    if(mysqli_query($establish_connection,$query1)){}
    if (mysqli_query($establish_connection,"INSERT INTO doctordata (username,firstname,lastname,password,email,dob,address) VALUES ('$username','$firstname','$lastname','$password','$mail','$dob','$address')")) {
						$_SESSION['user_id']=$username;
						header('Location: index.php');
					} else {
						$Error='some error occured while registration';
    }
    
}
            else{
                $Error='some error occured while registration';
            }
        function test_input_data($input_data) {
  $input_data = trim($input_data);
  $input_data = stripslashes($input_data);
  $input_data = htmlspecialchars($input_data);
  return $input_data;
}
            
        
?>

            <div class="container-fluid newsfeed" style="overflow:auto">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 news1">
                            <div class="row">
                                <img src="images/doctorregistration.png" style="width: 300px;height: 300px; margin-top:30%; margin-left:10%">
                            </div>
                        </div>
                        <div class="col-md-10 news1">
                            <div class="row">
                                <div class="container">
                                    <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="POST">
                                        <h2>Registration Form</h2>
                                        <div class="form-group">
                                            <label for="firstname" class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['firstname']) ? $firstnameErr : '' ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['lastname']) ? $lastnameErr : '' ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['email']) ? $emailErr : '' ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-3 control-label">User Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="username" placeholder="User Name" class="form-control" autofocus value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['username']) ? $usernameErr : '' ?></span>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_re" class="col-sm-3 control-label">Type the Password Again</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password_re" placeholder="Type the Password Again" class="form-control">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['password']) ? $passwordErr : '' ?></span>


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="dob" id="dob" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname" class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="address" placeholder="Address" class="form-control" autofocus value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
                                                <span class="error" style="color:red;"><?php echo isset($_POST['address']) ? $addressErr : '' ?></span>
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
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">

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
                            </div>
                            <!-- ./container -->

                        </div>
                    </div>
                </div>
            </div>






            <?php
        include 'footer.php';
    ?>
                <style>
                    <?php include 'cssfiles/footer.css';
                    ?>

                </style>
</body>

</html>
