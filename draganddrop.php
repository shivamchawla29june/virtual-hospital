<?php

require 'core1.inc.php';
require 'connect.inc.php';

   if(isset($_FILES['image'])){
      $username=''; 
      $username=$_SESSION['user_id'];
      $errors= array();
       
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
       
      
       
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 4097152){
         $errors[]='File size must be excately 4 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"record_patients/".$file_name);
//         $sql = "INSERT INTO patiendata (username,recordname) VALUES ('$username','$file_name')";
          echo "Success";
      }else{
         print_r($errors);
      }
   }
    

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">

        <title>Dropzone simple example</title>


        <!--
  DO NOT SIMPLY COPY THOSE LINES. Download the JS and CSS files from the
  latest release (https://github.com/enyo/dropzone/releases/latest), and
  host them yourself!
-->
        <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
        <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    </head>

    <body>
        <p>
            This is the most minimal example of Dropzone. The upload in this example doesn't work, because there is no actual server to handle the file upload.
        </p>

        <!-- Change /upload-target to your upload address -->
        <form action="" class="dropzone">
        </form>


    </body>

    </html>

    <script>
        /*        (function() {
                                                                                            var dropzone = document.getElementById('dropzone');

                                                                                            var upload = function(files) {
                                                                                                var formData = new FormData(),
                                                                                                    xhr = new XMLHttpRequest(),
                                                                                                    x;
                                                                                                for (x = 0; x < files.length; x++) {
                                                                                                    formData.append('file[]', files[x]);
                                                                                                }

                                                                                                xhr.onload = function() {
                                                                                                    var data = this.responseText;
                                                                                                    console.log(data);
                                                                                                }

                                                                                                xhr.open('post', upload.php);
                                                                                                xhr.send(formData);
                                                                                            }

                                                                                            dropzone.ondrop = function(e) {
                                                                                                e.preventDefault();
                                                                                                this.className = 'dropzone';
                                                                                                upload(e.dataTransfer.files);
                                                                                            }

                                                                                            dropzone.ondragover = function(e) {
                                                                                                e.preventDefault();
                                                                                                this.className = 'dropzone dragover';
                                                                                                return false;
                                                                                            }

                                                                                            dropzone.ondragleave = function() {
                                                                                                this.className = 'dropzone';
                                                                                                return false;
                                                                                            }
                                                                                        }());
                                                                                */

    </script>
