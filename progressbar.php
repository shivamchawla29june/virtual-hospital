<!DOCTYPE html>
<html>

<head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>


    <script>
        function _(el) {
            return document.getElementById(el);
        }

        function uploadFile() {
            var file = _("file1").files[0];
            // alert(file.name+" | "+file.size+" | "+file.type);
            var formdata = new FormData();
            formdata.append("file1", file);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "file_upload.php");
            ajax.send(formdata);
        }

        function progressHandler(event) {
            _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
        }

        function completeHandler(event) {
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 100;
        }

        function errorHandler(event) {
            _("status").innerHTML = "Upload Failed";
        }

        function abortHandler(event) {
            _("status").innerHTML = "Upload Aborted";
        }

    </script>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/location.css" type="text/css" rel="stylesheet">

    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/progress.css" type="text/css" rel="stylesheet">

</head>

<body style='height:100%'>
    <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
        
    ?>
        <?php if(loggedin()){
    echo '
            <div class="upload_files">
                <form id="upload_form" enctype="multipart/form-data" method="post">
                    <input type="file" name="file1" id="file1"><br>
                    <input type="button" value="Upload File" onclick="uploadFile()">
                    <progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
                    <h3 id="status"></h3>
                </form>
            </div>
    </div>';
    }
    else{
        echo "<p style='padding:10px;margin:10px;font-size:25px;'><strong>Login to upload the records and Get Medicine</strong></p>";
    }
        ?>
        <?php
        include 'footer.php';
    ?>
            <style>
                <?php include 'cssfiles/footer_progressbar.css';
                ?>

            </style>

</body>

</html>
