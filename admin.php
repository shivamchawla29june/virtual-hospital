<html>

<head>
    <title>Admin Page</title>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer_progressbar.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">

</head>

<body style="background-color:#f5f5f5;">
    <nav class="header-main">
        <div class="header-upper">
            <ul class="list1">
                <li class="item1"><a href="admin.php">Home</a></li>
                <!--
                <li class="item1">MyChart</li>
                <li class="item1">Careers</li>
                <li class="item1">Pay a Bill</li>
                <li class="item1">Financial Assistance</li>
                <li class="item1-special">For Physicians</li>
-->
            </ul>
        </div>
        <div class="header-lower">
            <div class="header-lower-data">
                <img class="logo" alt="Virtual Hospital" src="images/logo.jpg" style="width:200px; height:75px;">
                <div class="login">
                    <ul class="log">
                        <?php
    require 'connect.inc.php';
    require 'core.inc.php';
    
    if(loggedin())
    {
        echo "<button type='button' class='btn btn-info item2' id='logoutbutton' style='padding:7px;margin:10px;'>Logout</button>";
    }
?>
                            <script>
                                $(document).ready(function() {
                                    $("#loginbutton").click(function() {
                                        $("#myModal").modal();
                                    });
                                });

                                document.getElementById("logoutbutton").onclick = function() {
                                    location.href = "logout.php";
                                };

                            </script>
                            <script>
                                document.getElementById("editprofile").onclick = function() {
                                    location.href = "edit_profile.php";
                                };

                            </script>




                    </ul>
                </div>
            </div>
            <div class="header-lower-main">
                <div class="navigation-last">
                    <ul class="main-navigation">
                        <li class="item3"><a href="doctors.php">Doctors</a></li>
                        <li class="item3"><a href="view_user.php">View Users</a></li>
                        <li class="item3"><a href="view_doctor.php">View Doctors</a></li>
                        <li class="item3"><a href="delete_user.php">Delete Users</a></li>
                        <li class="item3"><a href="delete_doctor.php">Delete Doctors</a></li>
                        <li class="item3"><a href="viewappointmentsadmin.php">View All Appointments</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>

    <br>
    <br>



    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" style="padding:10px;">
                    <img src="images/mu.png" style="width: 100px;height: 100px;align-content: center;">
                    <button type='button' class='btn btn-info item2' id='viewuser' style='padding:7px;margin:10px;'>View User Records</button>
                </div>

                <div class="col-md-6 news2" style="padding:10px;">
                    <img src="images/user.png" style="width: 100px;height: 100px;align-content: center;">
                    <button type='button' class='btn btn-info item2' id='viewdoctor' style='padding:7px;margin:10px;'>View Doctor Records</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 news1" style="padding:10px;">
                    <img src="images/admin.png" style="width: 100px;height: 100px;align-content: center;">
                    <button type='button' class='btn btn-info item2' id='deleteuser' style='padding:7px;margin:10px;'>Delete User Records</button>
                </div>

                <div class="col-md-6 news2" style="padding:10px;">
                    <img src="images/admin.png" style="width: 100px;height: 100px;align-content: center;">
                    <button type='button' class='btn btn-info item2' id='deletedoctor' style='padding:7px;margin:10px;'>Delete Doctor Records</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("viewuser").onclick = function() {
            location.href = "view_user.php";
        };

    </script>

    <script>
        document.getElementById("viewdoctor").onclick = function() {
            location.href = "view_doctor.php";
        };

    </script>

    <script>
        document.getElementById("deleteuser").onclick = function() {
            location.href = "delete_user.php";
        };

    </script>

    <script>
        document.getElementById("deletedoctor").onclick = function() {
            location.href = "delete_doctor.php";
        };

    </script>



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
                            <!--                            <th>Editions</th>-->
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="privacy.php">Privacy Policy</a></li>
                                    <!--                                    <li><a href="#">Jobs</a></li>-->
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><a href="contactus.php">Contact Us</a></li>
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
