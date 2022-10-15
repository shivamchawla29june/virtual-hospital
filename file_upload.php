<?php

 require 'core1.inc.php';
require 'connect.inc.php';

   if(isset($_FILES['file1'])){
      $username=''; 
       $comments=$_FILES['comments'];
      $username=$_SESSION['user_id'];
      $errors= array();
       
      $file_name = $_FILES['file1']['name'];
      $file_size =$_FILES['file1']['size'];
      $file_type=$_FILES['file1']['type'];
       
      
       
      $file_tmp =$_FILES['file1']['tmp_name'];
      $file_ext=strtolower(end(explode('.',$_FILES['file1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 4097152){
         $errors[]='File size must be excately 4 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"record_patients/".$file_name);
         $query = "INSERT INTO patientdata (username,recordname) VALUES ('$username','$file_name')";
          $query_run=mysqli_query($establish_connection,$query);
          $query_num_rows=mysqli_num_rows($query_run);
          echo "Record Successfully Uploaded";
      }else{
         print_r($errors);
      }
   }
    

?>
