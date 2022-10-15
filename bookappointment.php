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

</head>

<body style="background-color:#f5f5f5;">
    <nav class="header-main">
        <div class="header-upper">
            <ul class="list1">
                <li class="item1"><a href="index.php">Home</a></li>
                <li class="item1">MyChart</li>
                <li class="item1">Careers</li>
                <li class="item1">Pay a Bill</li>
                <li class="item1">Financial Assistance</li>
                <li class="item1-special">For Physicians</li>
            </ul>
        </div>
        <div class="header-lower">
            <div class="header-lower-data">
                <img class="logo" alt="Virtual Hospital" src="images/logo.jpg">
                <div class="login">
                    <ul class="log">
                        <?php
    require 'connect.inc.php';
    require 'core.inc.php';
    
    if(loggedin())
    {
        echo "<button type='button' class='btn btn-info item2' id='logoutbutton' style='padding:7px;margin:10px;'>Logout</button>";
                echo "<button type='button' class='btn btn-info item2' id='editprofile' style='padding:7px;margin:10px;'>Edit Profile</button>";
        echo "<button type='button' class='btn btn-info item2' id='UploadRecords' style='padding:7px;margin:10px;'>Upload Records</button>";

    }
                        else{
                        echo "<button type='button' class='btn btn-info item2' id='loginbutton' style='padding:7px;margin:10px;'>Login</button>
                        <button type='button' class='btn btn-info item2' id='signupbutton' style='padding:7px;margin:10px;'>SignUp</button>
                    ";}
?>
                            <?php
if (isset($_POST['submit'])) {  

if(empty($_POST['appointmentdate']))  
$msg_dt = "You must supply a date";  
if(!empty($_POST['appointmentdate']))  
{  
    $dt = $_POST['appointmentdate'];  
    $array = explode("-",$dt);  
  
    $day = $array[1];  
    $month = $array[0];  
    $year = $array[2];  
  
    if(!checkdate($month, $day, $year))  
    {  
    $msg2_dt = "Must be in m/d/y format";  
    }  
    else  
    {  
    $today = strtotime("now");  
    if(strtotime($dt)<$today)  
    $msg3_dt = "Date supplied is before present day";  
    }  
}  
}  

?>
                                <div class="container">
                                    <div class="modal fade" id="myModal-appointment" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style=" background-color:#5B5291;padding:35px 50px;">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 style="background-color:#5B5291;">Book an Appointment</h4>
                                                </div>
                                                <div class="modal-body" style="padding:40px 50px;">
                                                    <form action="<?php echo $current_file;?>" method="POST" form="role">
                                                        <div class="form-group">
                                                            <label for="username" style="color:black;"><span class="glyphicon glyphicon-user"></span> Username</label>
                                                            <input type="text" class="form-control" id="username" name='username' value="<?php $u_name=$_SESSION['user_id'];echo $u_name?>" disabled="disabled">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="doctor" style="color:black;">Doctor</label>
                                                            <select id="doctor" class="form-control" name="doctor">
                                                              <option value="docA">Doc A</option>
                                                              <option value="docB">Doc B</option>
                                                              <option value="docC">Doc C</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date" style="color:black;">Appointment Date</label>
                                                            <input type="date" class="form-control" name='appointmentdate' id="appointmentdate" autocomplete="off" placeholder="">
                                                        </div>
                                                        <?php echo "<p class='note'>".$msg_dt."</p>";?>
                                                        <?php echo "<p class='note'>".$msg2_dt."</p>";?>
                                                        <?php echo "<p class='note'>".$msg3_dt."</p>";?>
                                                        <div class="form-group">
                                                            <label for="time" style="color:black;">Appointment Time</label>
                                                            <input type="Time" class="form-control" name='time' id="time" autocomplete="off" placeholder="">
                                                        </div>
                                                        <button type="submit" class="btn btn-success btn-block" style="background-color:#5B5291;"><span class="glyphicon glyphicon-off"></span> Login</button>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                    <p>Not a member? <a href="register.inc.php">Sign Up</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $("#bookappointment").click(function() {
                                            $("#myModal-appointment").modal();
                                        });
                                    });

                                    document.getElementById("logoutbutton").onclick = function() {
                                        location.href = "logout.php";
                                    };

                                </script>
                                <script>
                                    document.getElementById("signupbutton").onclick = function() {
                                        location.href = "register.inc.php";
                                    };

                                </script>
                                <script>
                                    document.getElementById("editprofile").onclick = function() {
                                        location.href = "edit_profile.php";
                                    };

                                </script>

                                <script>
                                    document.getElementById("UploadRecords").onclick = function() {
                                        location.href = "progressbar.php";
                                    };

                                </script>


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

    <button type='button' class='btn btn-info item2' id='bookappointment' style='padding:7px;margin:10px;'>Book Appointment</button>
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
