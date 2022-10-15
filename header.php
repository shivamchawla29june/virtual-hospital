<nav class="header-main">
    <div class="header-upper">
        <ul class="list1">
            <li class="item1"><a href="index.php">Home</a></li>
            <?php      
                 if(loggedin()){
echo '<li class="item1"><a href="download.php">MyChart<a></li>'  ;              
                }?>
            <li class="item1"><a href='payabill.php'>Pay a Bill</a></li>
            <li class="item1"><a href='aboutus.php'>About Us</a></li>
            <li class="item1-special"><a href='registerdoctor.inc.php'>For Physicians</a></li>
        </ul>
    </div>
    <div class="header-lower">
        <div class="header-lower-data">
            <img class="logo" alt="Virtual Hospital" src="images/logo.jpg" style='height:75px;width:175px; margin-left: 40px;'>
            <div class="login">
                <ul class="log">
                    <?php
 
    if(loggedin())
    {
        echo "<button type='button' class='btn btn-info item2' id='logoutbutton' style='padding:7px;margin:10px;'>Logout</button>";
        echo "<button type='button' class='btn btn-info item2' id='editprofile' style='padding:7px;margin:10px;'>Edit Profile</button>";
        echo "<button type='button' class='btn btn-info item2' id='UploadRecords' style='padding:7px;margin:10px;'>Upload Records</button>";

    }
                        
                    else
                        {
                        echo "<button type='button' class='btn btn-info item2' id='loginbutton' data-target='#myModal'style='padding:7px;margin:10px;'>Login</button>
                        <button type='button' class='btn btn-info item2' id='signupbutton' style='padding:7px;margin:10px;'>Sign Up</button>
                    ";}
?>
                        <?php

if(isset($_POST['username'])&&isset($_POST['password']))
{
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $value=$_POST['doctor'];
    if(!empty($Username))
    {
        if(!empty($Password))
        {
            if($value=='Patient')
            {
            $query="SELECT username FROM logindata WHERE Username='$Username' AND Password='$Password'";
            $query_run=mysqli_query($establish_connection,$query);
            $query_num_rows=mysqli_num_rows($query_run);
            }
            if($value=='Doctor')
            {
            echo '1';
            $query="SELECT username FROM logindatadoctor WHERE Username='$Username' AND Password='$Password'";
            $query_run=mysqli_query($establish_connection,$query);
            $query_num_rows=mysqli_num_rows($query_run);
            }
            if($value=='admin')
            {
             $query="SELECT username FROM admindata WHERE Username='$Username' AND Password='$Password'";
            $query_run=mysqli_query($establish_connection,$query);
            $query_num_rows=mysqli_num_rows($query_run);
            
            }
            if($query_run)
            {
                
                if($query_num_rows==1)
                {
                   $row = mysqli_fetch_row($query_run);
                    $user_id=$row[0];
                    $_SESSION['user_id']=$user_id; 
                     session_write_close();
                    if($value=='admin')
                    {
                        header('Location:admin.php');
                    }
                    if($value=='Patient'){
                        header('Location:index.php');
                    }
                    if($value=='Doctor')
                    {
                        header('Location:doctorindex.php');            
                    }
                }
//                if($query_num_rows==1) // { // // $row1 = mysqli_fetch_row($query_rundoc); // $doc_id=$row1[0]; // $_SESSION['doc_id']=$doc_id; // session_write_close(); // header('Location:index.php'); // }
                else
                {
                    echo "<script>alert('Please enter the correct details')</script>";
                }
            }
            else
            {
                echo '<script>alert("There was a problem,Please contact the admin")</script>';
            }
        }
        else
        {
            echo '<script>alert("Please enter the Password")</script>';
        }
    }
    else
    {
        echo '<script>alert("Please enter the Username")</script>';
    }
    
}

?>
                            <div class="container">
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                                            </div>
                                            <div class="modal-body" style="padding:40px 50px;">
                                                <form action="" method="POST" form="role">
                                                    <div class="form-group">
                                                        <label for="doctor" style="color:black;">Type</label>
                                                        <select id="doctor" class="form-control" name="doctor" id="doctor">
                                                              <option value="Doctor">Doctor</option>
                                                              <option value="Patient">Patient</option>
                                                            <option value="admin">ADMIN</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" style="color:black;"><span class="glyphicon glyphicon-user"></span> Username</label>
                                                        <input type="text" class="form-control" id="username" name='username' placeholder="Enter Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" style="color:black;"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                        <input type="password" class="form-control" name='password' id="password" autocomplete="off" placeholder="">
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                <p>Not a member? <a href="register.inc.php">Sign Up</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $("#loginbutton").click(function() {
                                        $("#myModal").modal();
                                    });
                                });

                                document.getElementById("logoutbutton").onclick = function() {
                                    location.href = "logout.php";
                                };

                            </script>
                            <script>
                                document.getElementById("signupbutton").onclick = function() {
                                    location.href = "registration.php";
                                };

                            </script>
                            <script>
                                document.getElementById("editprofile").onclick = function() {
                                    location.href = "edit_profile.php";
                                };

                            </script>

                            <script>
                                document.getElementById("UploadRecords").onclick = function() {
                                    location.href = "progressbar.php";
                                };

                            </script>


                </ul>
            </div>
        </div>
        <div class="header-lower-main">
            <div class="navigation-last">
                <ul class="main-navigation">
                    <li class="item3"><a href='doctors.php'>Doctors</a></li>
                    <li class="item3"><a href="location.php">Locations</a></li>
                    <li class="item3"><a href="progressbar.php">Get Medicine</a></li>
                    <li class="item3"><a href="news.php">News and Health Tips</a></li>
                    <li class="item3"><a href="https://www.aiims.edu/en.html">Academics</a></li>
                    <li class="item3"><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
