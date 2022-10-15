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
    <div class="cont">
        <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>
            <br>
            <br>
            <div class="container-fluid newsfeed" style="overflow:auto">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 news1">
                            <div class="row">
                                <div class="col-md-2 news1">
                                    <img src="images/news1.jpg" style="width: 100px;height: 100px;">
                                </div>
                                <div class="col-md-10 news1">
                                    <h3>Exercise alone does not achieve weight loss</h3>
                                    <p>"If you think that a couple of sessions at the gym will help to work off those Thanksgiving pounds, think again. A new study shows that when it comes to losing weight, exercise alone is unlikely to do the trick — for women, at least."
                                        <a href="https://www.medicalnewstoday.com/articles/320174.php" style="color:blue;">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 news1">
                            <div class="row">
                                <div class="col-md-2 news1">
                                    <img src="images/news2.jpg" style="width: 100px;height: 100px;">
                                </div>
                                <div class="col-md-10 news1">
                                    <h3>Five ways to boost concentration</h3>
                                    <p>In the information overload age, being able to focus and keep your attention on the task at hand can be a struggle. We have compiled some concentration-boosting and distraction-fighting techniques to fire up your capacity to concentrate.
                                        <a href="https://www.medicalnewstoday.com/articles/320165.php" style="color:blue;">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 news1">
                            <div class="row">
                                <div class="col-md-2 news1">
                                    <img src="images/news3.jpg" style="width: 100px;height: 100px;">
                                </div>
                                <div class="col-md-10 news1">
                                    <h3>Five common causes of early morning headache</h3>
                                    <p>Early morning headache is an everyday reality for many people upon awakening. There are several different types of headache, each associated with its own risk factors and causes.
                                        <a href="https://www.medicalnewstoday.com/articles/320133.php" style="color:blue;">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 news1">
                            <div class="row">
                                <div class="col-md-2 news1">
                                    <img src="images/news4.jpg" style="width: 100px;height: 100px;">
                                </div>
                                <div class="col-md-10 news1">
                                    <h3>How 20 minutes of intense exercise can boost memory</h3>
                                    <p>A new study published in the Journal of Cognitive Neuroscience shows that vigorous exercise for a short period of time can boost the so-called interference memory. The research also points to a potential mechanism that may explain the findings.
                                        <a href="https://www.medicalnewstoday.com/articles/320157.php" style="color:blue;">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 news1">
                            <div class="row">
                                <div class="col-md-2 news1">
                                    <img src="images/news5.jpg" style="width: 100px;height: 100px;">
                                </div>
                                <div class="col-md-10 news1">
                                    <h3>How to cope with a picky eater over the holidays</h3>
                                    <p>Whether it's your own child or you are experiencing the joys of a picky eater as a mere bystander during the holiday season, you are likely not alone. Up to half of 2-year-olds may be rejecting the lovingly prepared dinner that you are feasting on.
                                        <a href="https://www.medicalnewstoday.com/articles/320169.php" style="color:blue;">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php
        include 'footer.php';
    ?>
        <style>
            <?php include 'cssfiles/footer_progressbar.css';
            ?>

        </style>

</body>

</html>
