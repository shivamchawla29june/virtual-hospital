<?php

require 'core1.inc.php';
require_once'connect.inc.php';
    if(isset($_POST[doctor])&&isset($_POST[appointmentdate])&&isset($_POST[appointmenttime]))
    {
         $user=$_SESSION['user_id'];
         $doctor=$_POST[doctor];
        $appointmentdate=$_POST[appointmentdate];
        $appointmenttime=$_POST[appointmenttime];
        
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
                echo '<script>alert("Date entered is wrong You idiot")</script>';
                die();
            }
            
        }
        else
        {
                echo '<script>alert("Date entered is wrong")</script>';
            die();
        }
        
        if(!empty($appointmenttime))
        {
            $appointmenttime=$_POST[appointmenttime];
        }
        else
        {
                echo '<script>alert("Time entered is wrong")</script>';
            die();
        }
            if(!empty($doctor)&&!empty($appointmenttime)&&!empty($appointmentdate))
            {
                $sql_finding="SELECT username FROM appointment WHERE a_date='$appointmentdate'&& a_time='$appointmenttime'";
                $query_run=mysqli_query($establish_connection,$sql_finding);
                if($query_run)
            {
                $query_num_rows=mysqli_num_rows($query_run);
                if($query_num_rows==0)
                {
                $sql_query="INSERT INTO appointment (username,d_name,a_date,a_time) VALUES ('$user','$doctor','$appointmentdate','$appointmenttime')";
                    if(mysqli_query($establish_connection,$sql_query))
                    {
                        echo '<script>alert("Your appointment has been set")</script>';
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





    <form action="" method="POST" form="role">
        <div class="form-group">
            <label for="username" style="color:black;"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="username" name='username' value="<?php $u_name=$_SESSION['user_id'];echo $u_name?>" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="doctor" style="color:black;">Doctor</label>
            <select id="doctor" class="form-control" name="doctor" id="doctor">
                                                              <option value="docA">Doc A</option>
                                                              <option value="docB">Doc B</option>
                                                              <option value="docC">Doc C</option>
                                                            </select>
        </div>
        <div class="form-group">
            <label for="date" style="color:black;">Appointment Date</label>
            <input type="date" class="form-control" name="appointmentdate" id="appointmentdate" autocomplete="off " placeholder=" ">
        </div>
        <div class="form-group">
            <label for="time" style="color:black;">Appointment Time</label>
            <input type="Time" class="form-control" name='appointmenttime' id="appointmenttime" autocomplete="off" placeholder="">
        </div>
        <button type="submit" class="btn btn-success btn-block" style="background-color:#5B5291;"><span class="glyphicon glyphicon-off"></span> Book</button>
    </form>
