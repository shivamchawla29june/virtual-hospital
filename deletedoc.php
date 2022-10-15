<?php
require 'core1.inc.php';
require_once 'connect.inc.php';
if(!empty($_GET['username'])) {
  $username= $_GET['username'];
  $query = mysqli_query($establish_connection,"delete from doctordata where username= '$username'");
  $query = mysqli_query($establish_connection,"delete from logindatadoctor where username= '$username'");

    if($query) {
      header("location:delete_doctor.php");
  }
}
?>
