<?php
require 'core1.inc.php';
require_once 'connect.inc.php';
if(!empty($_GET['username'])) {
  $username= $_GET['username'];
  $query = mysqli_query($establish_connection,"delete from userdata where username= '$username'");
  $query = mysqli_query($establish_connection,"delete from logindata where username= '$username'");
  $query_num_rows=mysqli_num_rows($query);
    if($query) {
      header("location:delete_user.php");
  }
}
?>
