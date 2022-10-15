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
    require 'core1.inc.php';
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
                                        <img class="lib-img" src="Virendra-bhatnagar---plastic-surgery---patiala.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="lib-row lib-header">
                                            Dr. (Brig) Virendra Bhatnagar
                                            <div class="lib-header-seperator"></div>
                                        </div>

                                        <div class="lib-row lib-desc">
                                            MBBS,MS(Surgery)
                                            <br>
                                            <br>
                                            <br>
                                            <?php 
                                            if(loggedin())
                                            {
                                                    echo '<button type="button" class="btn btn-labeled btn-primary" id="bookappointment"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>';
                                            }
                                            else
                                            {
                                                echo "<strong>Login to Book an appointment</strong>";
                                            }
                                        ?>
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
                                        <img class="lib-img" src="images/anurag.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="lib-row lib-header">
                                            Dr. Anurag Jindal
                                            <div class="lib-header-seperator"></div>
                                        </div>

                                        <div class="lib-row lib-desc">
                                            MBBS, MS (General Surgery), M.Ch (Urology), Fellowship (Kidney Transplant and Vascular Surgery)
                                            <br>
                                            <br>
                                            <br>
                                            <?php 
                                            if(loggedin())
                                            {
                                                    echo '<button type="button" class="btn btn-labeled btn-primary" id="bookappointment2"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>';
                                            }
                                            else
                                            {
                                                echo "<strong>Login to Book an appointment</strong>";
                                            }
                                        ?>
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
                                        <img class="lib-img" src="images/Amandeep.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="lib-row lib-header">
                                            Dr.Amandeep Garg
                                            <div class="lib-header-seperator"></div>
                                        </div>

                                        <div class="lib-row lib-desc">
                                            MBBS, DNB (Ophthalmology)
                                            <br>
                                            <br>
                                            <br>
                                            <?php 
                                            if(loggedin())
                                            {
                                                    echo '<button type="button" class="btn btn-labeled btn-primary" id="bookappointment3"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>';
                                            }
                                            else
                                            {
                                                echo "<strong>Login to Book an appointment</strong>";
                                            }
                                        ?>
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
                                        <img class="lib-img" src="images/Goldy.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="lib-row lib-header">
                                            Dr. Goldy
                                            <div class="lib-header-seperator"></div>
                                        </div>

                                        <div class="lib-row lib-desc">
                                            MBBS, MD(OBG)
                                            <br>
                                            <br>
                                            <br>
                                            <?php 
                                            if(loggedin())
                                            {
                                                    echo '<button type="button" class="btn btn-labeled btn-primary" id="bookappointment4"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>';
                                            }
                                            else
                                            {
                                                echo "<strong>Login to Book an appointment</strong>";
                                            }
                                        ?>
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
    <?php

    if(isset($_POST[doctor])&&isset($_POST[appointmentdate])&&isset($_POST[appointmenttime]))
    {
        $user=$_SESSION['user_id'];
        $doctor=$_POST[doctor];
        $appointmentdate=$_POST[appointmentdate];
        $appointmenttime=$_POST[appointmenttime];
        
        $sql = "SELECT address FROM doctordata where username='$doctor'";
        $result = $establish_connection->query($sql);
        $row = $result->fetch_assoc();
        $address=$row[address];

        if(!empty($appointmentdate))
        {
            $appointmentdate = $_POST['appointmentdate'];  
            $array = explode("-",$appointmentdate);  
  
            $day = $array[0];  
            $month = $array[1];  
            $year = $array[2];  
            $today = strtotime("now");  
            if(strtotime($appointmentdate)>$today)  
            {
                $appointmentdate=date("Y-m-d",strtotime($appointmentdate));
            }
            else
            {
                echo '<script>alert("Date entered is wrong")</script>';
                die();
            }
            
        }
        else
        {
                echo '<script>alert("Date entered is wrong")</script>';
            die();
        }
        
            if(!empty($doctor)&&!empty($appointmenttime)&&!empty($appointmentdate))
            {
                $sql_finding="SELECT username FROM appointment WHERE a_date='$appointmentdate'&& a_time='$appointmenttime'&& d_name='$doctor'";
                $query_run=mysqli_query($establish_connection,$sql_finding);
                if($query_run)
            {
                $query_num_rows=mysqli_num_rows($query_run);
                if($query_num_rows==0)
                {
                $sql_query="INSERT INTO appointment (username,d_name,a_date,a_time) VALUES ('$user','$doctor','$appointmentdate','$appointmenttime')";
                    if(mysqli_query($establish_connection,$sql_query))
                    {
//                      echo '<script>alert("Your appointment has been set. Reach  "'.$address.'"    "'.$appointmenttime.')</script>';
                $final=" Reach ".$address." at ".$appointmenttime." on ".$appointmentdate;
                        echo '<script type=\'text/javascript\'>';  
                echo 'alert("'.$final.'");';  
                echo '</script>';  
                   }
                }
                else
                {
                    echo '<script>alert("This date and time is unavailable")</script>';
                }
            }
            }
    }
    ?>



        <div class="container">
            <div class="modal fade" id="myModal-appointment" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style=" background-color:#5B5291;padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="background-color:#5B5291;">Book an Appointment</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form action="" method="POST" form="role">
                                <div class="form-group">
                                    <label for="username" style="color:black;"><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="text" class="form-control" id="username" name='username' value="<?php $u_name=$_SESSION['user_id'];echo $u_name?>" disabled="disabled">
                                </div>
                                <div class="form-group">
                                    <label for="doctor" style="color:black;">Doctor</label>
                                    <select id="doctor" class="form-control" name="doctor" id="doctor">
                                                              <option value="virendra">Dr. (Brig) Virendra Bhatnagar</option>
                                                              <option value="anurag">Dr. Anurag Jindal</option>
                                                              <option value="amandeep">Dr.Amandeep Garg</option>
                                                              <option value="goldy">Dr. Goldy</option>
                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="date" style="color:black;">Appointment Date</label>
                                    <input type="date" class="form-control" name="appointmentdate" id=" appointmentdate " autocomplete="off " placeholder=" ">
                                </div>
                                <div class="form-group">
                                    <label for="time" style="color:black;">Appointment Time</label>
                                    <input type="Time" class="form-control" name='appointmenttime' id="appointmenttime" autocomplete="off" placeholder="" min="09:00" max="17:00" step="3600">
                                </div>
                                <button type="submit" class="btn btn-success btn-block" style="background-color:#5B5291;"><span class="glyphicon glyphicon-off"></span> Book</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#bookappointment").click(function() {
                    $("#myModal-appointment").modal();
                });
            });

        </script>
        <script>
            $(document).ready(function() {
                $("#bookappointment2").click(function() {
                    $("#myModal-appointment").modal();
                });
            });

        </script>
        <script>
            $(document).ready(function() {
                $("#bookappointment3").click(function() {
                    $("#myModal-appointment").modal();
                });
            });

        </script>
        <script>
            $(document).ready(function() {
                $("#bookappointment4").click(function() {
                    $("#myModal-appointment").modal();
                });
            });

        </script>



        <!--
    <div class="container">
        <div class="row">
            <h4>Our Doctors</h4>
        </div>
        <hr>
        <div class="row row-margin-bottom">
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img" src="Virendra-bhatnagar---plastic-surgery---patiala.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Dr. (Brig) Virendra Bhatnagar
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                MBBS,MS(Surgery)
                                <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <hr>
        <div class="row row-margin-bottom">

            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img" src="ankur.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Dr.Ankur Bansal
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                MBBS, MS (General Surgery), M.Ch (Urology), Fellowship (Kidney Transplant and Vascular Surgery)
                                <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row row-margin-bottom">

            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img" src="Amandeep-Garg---Ophthal---Patiala.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Dr.Amandeep Garg
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                MBBS, DNB (Ophthalmology)
                                <button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

-->

        <?php
        include 'footer.php';
    ?>
            <style>
                <?php include 'cssfiles/footer.css';
                ?>

            </style>
</body>

</html>
