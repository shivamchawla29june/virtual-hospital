<?php
    require 'core.inc.php';
    require_once 'connect.inc.php';

    if(!loggedin())
    {
        if((isset($_POST['username']))&&(isset($_POST['password']))&&(isset($_POST['password_re']))&&(isset($_POST['firstname']))&&(isset($_POST['lastname']))&&)
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $password_re=$_POST['password_re'];
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            if(!empty($username)&&!empty($password)&&!empty($password_re)&&!empty($firstname)&&!empty($lastname))
            {
                if($password!=$password_re)
                {
                    echo "Password don't match";
                }
                else
                {
                    $password_hash=md5($password)
                    $query= SELECT username FROM users WHERE username='$username';
                    $query_run=mysql_query($query)
                    if(mysql_num_rows($query_run))
                    {
                        echo "Username already exists";
                    }
                    else
                    {
                        $insertion=INSERT INTO user VALUES('','mysql_real_escape_string($username)','mysql_real_escape_string($password_hash)','mysql_real_escape_string($firstnam)','mysql_real_escape_string($lastname)'); 
                        if($insertion_run=mysql_query($insertion))
                        {
                            echo "Successfully registered";
                            header("Location:".index.php);
                        }
                        else
                        {
                            echo "There was a problem during registeration., Please try again";
                        }
                        
                    }
                }
            }
            else
            {
                echo "Enter all the details";
            }
        }
?>

    <?php
    }
    else if (loggedin())
    {
        echo "Already registered";
        header('Location:'.chat.php);
    }
?>
