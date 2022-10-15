<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="cssfiles/faq.css">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">

    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->
    <link rel="stylesheet" href="cssfiles/faq.css">


</head>


<body>
    <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>



        <div class="container" style="color:black; a,h{color:black !important;}">
            <br />
            <br />
            <div class="panel-group" id="accordion">
                <div class="faqHeader">General questions</div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Account registration is required This ensures a valid communication channel for all parties involved in any transactions.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Are all the consultants available 24 hours?</a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            All the consultants are full-time employees of the hospital; hence, outpatient services are available on all working days. We have doctors in the positions of medical and surgical registrars, junior and senior registrars, and junior and senior residents, thus offering 24 hours coverage in areas such as Casualty, Wards, Intensive Care Units and Post Op recovery areas. Any complaints in the odd hours are first attended to by the resident doctors and, depending upon the case, the respective consultants are called in to attend to the patients.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What are the facilities available in the hospital?</a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            CARE Hospitals are multispecialty hospitals and offer the complete range of medical and surgical specialties under one roof, with highly experienced doctors, state-of-the-art infrastructure and diagnostic services.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What is the mode of admission?</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            You are required to contact the admission counter, where our executives will give you details about the various packages, bed categories and other charges. After finalization of the package and bed category, you will be given an IP (inpatient) number. On completion of all the admission formalities, you will be guided to the respective ward/room.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How are the charges for day care determined?</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Charges applicable for day care (less than 8 hours) are calculated on the basis of half-day bed charges.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Do we need to pay any advance at the time of admission?</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Yes, patients are required to pay a deposit as per the category of the bed at the time of admission. In case of a surgery or a procedure, the total estimated amount has to be deposited with the hospital before the surgery.
                            <br />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Is my Mediclaim policy accepted at your hospital?</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Yes, if your TPA is on the panel of our hospital.&nbsp;
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Do you have an ambulance service?</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Yes, we have an ambulance service round-the-clock.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">How many attendant passes are issued?</a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            To minimize crowding and noise in the patient care area, only one attendant pass is issued per patient. The pass has to be surrendered at the admission counter at the time of the discharge.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What is the procedure for discharge?</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Your consultant will make an entry for discharge on your case sheet. After this, the resident doctors prepare the discharge card. Then the file is sent to the IP reception for clearance, after which the final bill is prepared, taking into account all the deposits. When the final bill is ready, payment has to be made at the admission counter. This procedure may take 2-3 hours.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">What is the system of billing?</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Billing is done on a 24-hour basis.
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
