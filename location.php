<html>

<head>
    <title>Locations-Virtual Hospital</title>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/location.css" type="text/css" rel="stylesheet">

</head>

<body style="background-color:#f5f5f5;">
    <div class="cont">
        <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>

            <div class="container-fluid ">
                <div class="col-md-12 doctorslist">
                    <div class="row">
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/gmc.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Govt. Medical College
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='gmcpatiala' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/columbiaasia1.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Columbia Asia
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='columbiaasia' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/sadbhavna.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Sadbhavna Hospital
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='sadbhavna' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/amar.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Amar Hospital
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='amar' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/sant.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Sant Nursing Home
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='sant' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 news1">
                            <div class="row row-margin-bottom">
                                <div class="col-md-1"></div>
                                <div class="col-md-8 no-padding lib-item" data-category="ui">
                                    <div class="lib-panel">
                                        <div class="row box-shadow">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <img class="lib-img" src="/images/patialaheart.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="lib-row lib-header">
                                                    Patiala Heart
                                                    <div class="lib-header-seperator"></div>
                                                </div>

                                                <div class="lib-row lib-desc">
                                                    Patiala
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <button type='button' class='btn btn-info item2' id='patialaheart' style='padding:7px;margin:10px;'>Visit this Place</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                document.getElementById("gmcpatiala").onclick = function() {
                    location.href = "http://www.gmcpatiala.com";
                };

            </script>
            <script>
                document.getElementById("columbiaasia").onclick = function() {
                    location.href = "http://india.columbiaasia.com/hospitals/patiala";
                };

            </script>
            <script>
                document.getElementById("amar").onclick = function() {
                    location.href = "http://www.amarhospital.com/";
                };

            </script>
            <script>
                document.getElementById("sadbhavna").onclick = function() {
                    location.href = "http://www.sadbhavna.org/";
                };

            </script>
            <script>
                document.getElementById("sant").onclick = function() {
                    location.href = "http://www.apnapatiala.com/yellow-pages/doctors/gynae/sant-clinic-maternity-home/";
                };

            </script>
            <script>
                document.getElementById("patialaheart").onclick = function() {
                    location.href = "http://patialaheart.com/";
                };

            </script>
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
