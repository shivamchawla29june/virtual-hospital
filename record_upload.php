<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">

    <!--
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>
-->



    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/upload.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/progress.css" type="text/css" rel="stylesheet">

    <script>
        /* Script written by Adam Khoury @ DevelopPHP.com */
        /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
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
            ajax.open("POST", "file_upload_parser.php");
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
</head>

<body>
    <nav class="header-main">
        <div class="header-upper">
            <ul class="list1">
                <li class="item1"><a href="index.php">Home</a></li>
                <li class="item1">MyChart</li>
                <li class="item1">Careers</li>
                <li class="item1">Pay a Bill</li>
                <li class="item1">Financial Assistance</li>
                <li class="item1-special">For Physicians</li>
            </ul>
        </div>
        <div class="header-lower">
            <div class="header-lower-data">
                <img class="logo" alt="Virtual Hospital" src="images/logo.jpg">
                <div class="login">
                    <ul class="log">

                        <button type='button' class='btn btn-info item2' id='logoutbutton' style='padding:7px;margin:10px;'>Logout</button>
                        <button type='button' class='btn btn-info item2' id='editprofile' style='padding:7px;margin:10px;'>Edit Profile</button>

                    </ul>
                    <script>
                        document.getElementById("logoutbutton").onclick = function() {
                            location.href = "logout.php";
                        };

                    </script>
                    <script>
                        document.getElementById("editprofile").onclick = function() {
                            location.href = "edit_profile.php";
                        };

                    </script>
                </div>
            </div>
            <div class="header-lower-main">
                <div class="navigation-last">
                    <ul class="main-navigation">
                        <li class="item3">Doctors</li>
                        <li class="item3">Locations</li>
                        <li class="item3">Conditions and Care Areas</li>
                        <li class="item3">Patients and Visitors</li>
                        <li class="item3">Academics</li>
                        <li class="item3">Contact US</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container"> <br />
            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                        <div class="panel-body">
                            <div class="input-group image-preview">
                                <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                                <span class="input-group-btn"> 
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png,image/jpg, image/jpeg, image/gif" name="file1" id="file1" />
                                </div>
                                <button type="submit" name="submit" id="submit" class="btn btn-labeled btn-primary" value="Upload File" onclick="uploadFile()"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                </span>

                            </div>

                            <progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
                            <h3 id="status"></h3>
                            <!--
<div class="progress">
    <div id="progressBar" class="myProgress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    </div>
    <h3 id="status"></h3>
</div>
-->


                        </div>

                    </div>
                </div>
            </div>
        </div>


    </form>
    <footer>
        <div class="footer">
            <div class="footerdata">
                <table class="footertable">
                    <tbody>
                        <tr>
                            <th>General</th>
                            <th>Contact Us</th>
                            <th>Social Media</th>
                            <th>Video Channels</th>
                            <th>Editions</th>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Jobs</a></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">News Data Feeds</a></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">Google+</a></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><a href="#">Youtube</a></li>
                                    <li><a href="#">DailyMotion</a></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Hindi</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="source">Source-Differnet Websites have been taken as an inspiration for the design</div>
            <div id="add">VirtualHospital.com is the website made by students of Thapar University for the Software Project</div>
        </div>
    </footer>
</body>

</html>
