<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php

if(isset($_POST['username'])&&isset($_POST['password']))
{
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    if(!empty($Username))
    {
        if(!empty($Password))
        {
           $query="SELECT id FROM logindata WHERE Username='$Username' AND Password='$Password'";
            $query_run=mysqli_query($establish_connection,$query);
            if($query_run)
            {
                $query_num_rows=mysqli_num_rows($query_run);
                if($query_num_rows==1)
                {
                   $row = mysqli_fetch_row($query_run);
                    $user_id=$row[0];
                    echo $user_id;
                    $_SESSION['user_id']=$user_id; 
                    header('Location:index.php'); 
                }
                else
                {
                    echo "Please enter the correct details";
                }
            }
            else
            {
                echo 'There was a problem,Please contact the admin';
            }
        }
        else
        {
            echo 'Please enter the Password';
        }
    }
    else
    {
        echo 'Please enter the Username';
    }
    
}

?>
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form action="<?php echo $current_file;?>" method="POST" form="role">
                                <div class="form-group">
                                    <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="text" class="form-control" id="username" name='username' placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="text" class="form-control" name='password' id="password" placeholder="Enter password">
                                </div>
                                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p>Not a member? <a href="#">Sign Up</a></p>
                            <p>Forgot <a href="#">Password?</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--
    <form action="" method="POST">
        Username:<br><input type="text" name="username" value=""><br><br> Password:
        <br><input type="password" name="password" value="">

        <input type="submit" name="login">
    </form>
-->
</body>

</html>
