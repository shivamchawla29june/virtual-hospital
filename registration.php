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
    <link href="cssfiles/register_form.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/doctors.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">

</head>

<body>
    <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>


        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 ">
                        <img src="images/doctorregistration.png" style="height: 300px;align-content: center;">
                        <p style='padding:7px;margin-left:15%;'><strong>Are You a Doctor</strong></p>
                        <button type='button' class='btn btn-info item2' id='doctorregistration' style='align-content:center;padding:7px;margin-left:20%;'>Click Here</button>
                    </div>
                    <div class="col-md-6">
                        <img src="images/patientregistration.jpg" style="height: 300px;align-content: center;">
                        <p style='padding:7px;margin-left:30%;'><strong>Are You a Patient</strong></p>
                        <button type='button' class='btn btn-info item2' id='patientregistration' style='padding:7px;margin-left:33%;'>Click Here</button>
                    </div>
                    <script>
                        document.getElementById("patientregistration").onclick = function() {
                            location.href = "register.inc.php";
                        };

                    </script>
                    <script>
                        document.getElementById("doctorregistration").onclick = function() {
                            location.href = "registerdoctor.inc.php";
                        };

                    </script>



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
