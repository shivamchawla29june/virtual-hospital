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
       if(empty($firstnameErr)){
           $sql = "UPDATE userdata SET firstname='$firstname' WHERE username='$session_name'";
           $query=mysqli_query($establish_connection,$sql);
          
       }
  }
            
  if (empty($_POST["lastname"])) {
      $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input_data($_POST["lastname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
       if(empty($lastnameErr)){
           $sql = "UPDATE userdata SET lastname='$lastname' WHERE username='$session_name'";
$query=mysqli_query($establish_connection,$sql)   ;    }
  }
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
           $query=mysqli_query($establish_connection,$sql);
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
/*   
            if ($establish_connection->query($sql) === TRUE) {
            echo '
                <div class="alert alert-success">
  <strong>Success!</strong> Records Updates successfully
</div>';
}   
    else
    {
         if(isset($_POST['firstname'])||isset($_POST['lastname']) || isset($_POST['email']))
         {
            echo ""; 
         } 
        else
        { 
        echo '
        <div class="alert alert-danger">
  <strong>Sorry!</strong> There was a problem,Please try again
</div>';
        }
    }
    
  */          
        function test_input_data($input_data) {
  $input_data = trim($input_data);
  $input_data = stripslashes($input_data);
  $input_data = htmlspecialchars($input_data);
  return $input_data;
}
            
        
?>



            <div class="container">
                <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="POST">
                    <h2>Edit Your Profile</h2>
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

                    <!--
<div class="form-group">
    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-9">
        <input type="date" name="birthdate" class="form-control">
    </div>
</div>                    
-->

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


            <?php
        include 'footer.php';
    ?>
                <style>
                    <?php include 'cssfiles/footer_progressbar.css ';
                    ?>

                </style>

</body>

</html>
