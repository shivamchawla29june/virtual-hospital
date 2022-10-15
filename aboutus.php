<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/news.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="cssfiles/privacy.css">

    <!--   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="cssfiles/round-about.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>
        <!-- Page Content -->
        <div class="container">

            <!-- Introduction Row -->
            <h1 class="my-4">About Us
                <small>It's Nice to Meet You!</small>
            </h1>
            <q>It is not the shortage of time that should worry us, but the tendency for the majority of time to be spent in low-quality ways.</q>
            <p style="text-align:right"><cite>Richard Koch</cite></p>
            <p>We are living in a fast moving world. To sustain oneself in this world, effective time management is important. Whenever, we visit a doctor, unknowingly, we waste our precious time. We have to adjust our plans according to the given appointment. Even if we reach on time, we are many a times made to wait. Virtual Hospital is an innovative solution to this problem. With this project, we aim to save this lost time by bringing the hospital to the doorstep of the common man. With this, people won’t need to go to a hospital. Because this project will bring to them the <b>doctors they can trust on-demand 24×7</b>.<br>In our country, unlike some developed nations, medical records of citizens are not maintained. This is a problem as it can lead to serious complications, including death if the previous diseases, allergies or medications of a patient are ignored. Int this project we will also maintain a database to store the medical records of our patients which can be updated by the user whenever he desires.</p>

            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="my-4">Our Team</h2>
                </div>
                <div class="col-lg-6 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="images/shivam.jpg" style="height:200px;width:200px;" alt="">
                    <h3>Shivam Chawla</h3>
                    <p>Back End Developer with Craft,Creativity and character</p>
                </div>
                <div class="col-lg-6 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="images/vatsal.jpg" style="height:200px;width:200px;" alt="">
                    <h3>Vatsal</h3>
                    <p>A cyber security enthusiast, front-end developer, who also knows Photoshop.</p>
                </div>
                <div class="col-lg-6 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="images/viplove.jpg" style="height:200px;width:200px;" alt="">
                    <h3>Viplove Verma</h3>
                    <p>A creative front end developer with an insight for HTML and CSS</p>
                </div>
                <div class="col-lg-6 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="images/vaibhav.jpg" style="height:200px;width:200px;" alt="">
                    <h3>Vaibhav Bishnoi</h3>
                    <p>A great mind working with JavaScript and JQuery</p>
                </div>

            </div>

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php
        include 'footer.php';
    ?>
            <style>
                <?php include 'cssfiles/footer.css';
                ?>

            </style>

            <!-- Bootstrap core JavaScript -->
            <!--
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

</body>

</html>
