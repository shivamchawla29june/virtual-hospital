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
            <div class="container-fluid newsfeed">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 news1">
                            <div class="row">
                                <h3 style="text-align:center">Easy payment through Paytm<br>
                                    <br>
                                    <br></h3>
                            </div>
                        </div>

                        <div class="col-md-12 news1">
                            <div class="row">
                                <img src="images/payment.jpg" style="height:100%; width:300px;">
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
            <?php include 'cssfiles/footer.css';
            ?>

        </style>

</body>

</html>
