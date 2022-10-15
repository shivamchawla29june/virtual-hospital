<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
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
                        <?php
    require 'connect.inc.php';
    require 'core.inc.php';
    
    if(loggedin())
    {
        echo "You are already logged in<a href='logout.php'>logout</a>";
    }
                        else{
                        echo "   <li class='item2'>Login</li>
                        <li class='item2'>Sign Up</li>
                    ";
                            include 'loginform.inc.php';
                        }
                        ?>
                    </ul>

                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
