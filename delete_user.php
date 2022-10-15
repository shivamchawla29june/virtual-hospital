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
    <link href="cssfiles/footer_progressbar.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/table.css" type="text/css" rel="stylesheet">

</head>

<body style="background-color:#f5f5f5;">
    <nav class="header-main">
        <div class="header-upper">
            <ul class="list1">
                <li class="item1"><a href="doctorindex.php">Home</a></li>
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
                        else{
                        echo "<button type='button' class='btn btn-info item2' id='loginbutton' style='padding:7px;margin:10px;'>Login</button>
                        <button type='button' class='btn btn-info item2' id='signupbutton' style='padding:7px;margin:10px;'>Sign Up</button>
                    ";}
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
                                document.getElementById("signupbutton").onclick = function() {
                                    location.href = "registration.php";
                                };

                            </script>
                            <script>
                                document.getElementById("editprofile").onclick = function() {
                                    location.href = "edit_profile_doctor.php";
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
                        <li class="item3"><a href="doctor.php">Doctors</a></li>
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

    <?php
$query = "SELECT * FROM userdata"; 
$result = mysqli_query($establish_connection,$query);
echo "<table id='myTable'>"; 
            echo '<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Email</th><th></th> </tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td><a href='delete.php?username=".$row[ 'username']."'>Delete</a> &emsp;</td> </td></tr>";  
}

echo "</table>";
?>

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
