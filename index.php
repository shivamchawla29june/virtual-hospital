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
    <link href="cssfiles/news.css" type="text/css" rel="stylesheet">
</head>

<body style="background-color:#f5f5f5;">
    <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>

        <div class="slideshow-container1">
            <div class="mySlides1 fade1">
                <!--            <div class="numbertext1">1 / 3</div>-->
                <img src="images/first.jpg" style="width:100%; height: 500px;">
                <!--            <div class="text">Caption One</div>-->
            </div>

            <div class="mySlides1 fade1">
                <!--            <div class="numbertext1">2 / 3</div>-->
                <img src="images/2.jpg" style="width:100%; height: 500px;">
                <!--            <div class="text">Caption Two</div>-->
            </div>

            <div class="mySlides1 fade1">
                <!--            <div class="numbertext1">3 / 3</div>-->
                <img src="images/6.jpg" style="width:100%; height: 500px;">
                <!--            <div class="text">Caption Three</div>-->
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot1" onclick="currentSlide(1)"></span>
            <span class="dot1" onclick="currentSlide(2)"></span>
            <span class="dot1" onclick="currentSlide(3)"></span>
        </div>
        <script type="text/javascript" src="jsfiles/imageslider.js"></script>


        <div class="container-fluid feature-sliding">
            <div class="row">
                <div class="col-md-12 sliding">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class=sliding1>
                                    <div class="hovermain">
                                        <p id="parainmain">Don't have the time<br>No problem<br><br>Get doctor <br>at your Home or Workplace</p>
                                    </div>
                                    <div class=hoveritem>
                                        <p id="parain">Get <br>an Appointment <br>Sitting at home</p>
                                        <button type="button" class="btn btn-success" style="margin-top: 12px;"><a href="doctors.php">Book an Appointment</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class=sliding1>
                                    <div class="hovermain">
                                        <p id="parainmain">Don't have the time<br>No problem<br><br>Get Medicine <br></p>
                                    </div>
                                    <div class=hoveritem>
                                        <p id="parain">Click <br>to get <br>Medicine</p>
                                        <button type="button" class="btn btn-success" style="margin-top: 12px;"><a href="progressbar.php">Get Medicine</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class=sliding1 style="border: none !important;">
                                    <div class="hovermain">
                                        <p id="parainmain">Know<br>Your<br>Nearby <br>Hospitals</p>
                                    </div>
                                    <div class=hoveritem>
                                        <p id="parain">Click <br>to get in <br>Touch</p>
                                        <button type="button" class="btn btn-success" style="margin-top: 12px;"><a href="location.php">Get Help</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="sellingpt">
            <img src="images/3.jpg" style="width:100%; height: 600px;">
        </div>

        <div class="container-fluid feature-sliding">
            <div class="row">
                <div class="col-md-12 sliding">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class=sliding1>
                                    <div class="hovermain">
                                        <p id="parainmain">Stay in<br>touch<br>with the <br>Latest News</p>
                                    </div>
                                    <div class=hoveritem>
                                        <p id="parain">Stay <br>Updated <br></p>
                                        <button type="button" class="btn btn-success" style="margin-top: 12px;"><a href="news.php">News Section</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class=sliding1 style="border: none !important;">
                                    <div class="hovermain">
                                        <p id="parainmain">Get the Best <br>knowledge<br>you can get <br>in India</p>
                                    </div>
                                    <div class=hoveritem>
                                        <p id="parain">AIIMS <br>New Delhi <br></p>
                                        <button type="button" class="btn btn-success" style="margin-top: 15px;"><a href="https://www.aiims.edu/en.html">Click Here</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="sellingpt">
            <img src="images/4.jpg" style="width:100%; height: 600px;">
        </div>
        <br>
        <br>
        <div class="container-fluid newsfeed">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 news1">
                        <img src="images/news1.jpg" style="width: 100px;height: 100px;">
                        <h3>Exercise alone does not achieve weight loss</h3>
                        <p>"If you think that a couple of sessions at the gym will help to work off those Thanksgiving pounds, think again. A new study shows that when it comes to losing weight, exercise alone is unlikely to do the trick — for women, at least."
                            <a href="https://www.medicalnewstoday.com/articles/320174.php" style="color:blue;">Read more</a>
                        </p>
                    </div>

                    <div class="col-md-4 news2">
                        <img src="images/news2.jpg" style="width: 100px;height: 100px;align-content: center;">
                        <h3>Five ways to boost concentration</h3>
                        <p>In the information overload age, being able to focus and keep your attention on the task at hand can be a struggle. We have compiled some concentration-boosting and distraction-fighting techniques to fire up your capacity to concentrate.
                            <a href="https://www.medicalnewstoday.com/articles/320165.php" style="color:blue;">Read more</a>
                        </p>
                    </div>
                    <div class="col-md-4 news3">
                        <img src="images/news3.jpg" style="width: 100px;height: 100px;align-content: center;">
                        <h3>Five common causes of early morning headache</h3>
                        <p>Early morning headache is an everyday reality for many people upon awakening. There are several different types of headache, each associated with its own risk factors and causes.
                            <a href="https://www.medicalnewstoday.com/articles/320133.php" style="color:blue;">Read more</a>
                        </p>
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
