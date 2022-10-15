<html>

<head>
    <title>Home-Virtual Hospital</title>
    <meta charset="utf-8">


    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="jsfiles/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="cssfiles/header.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/footer.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/loginform.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/sliding.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/news.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/register_form.css" type="text/css" rel="stylesheet">
    <link href="cssfiles/table.css" type="text/css" rel="stylesheet">

</head>

<body>
    <div class="cont">
        <?php
    require_once 'connect.inc.php';
    require 'core.inc.php';
    include 'header.php';
    ?>




            <?php
    $session=$_SESSION['user_id'];
$query = "SELECT * FROM patientdata where username='$session'"; 
$result = mysqli_query($establish_connection,$query);
        $query_num_rows=mysqli_num_rows($result);
        if($query_num_rows!=0){
echo "<table id='myTable'>"; 
            echo '<tr><th>Username</th><th>Record Name</th><th></th></tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
echo "<tr><td>" . $row['username'] . "</td><td>" . $row['recordname'] . "</td><td><a href='record_download.php?file=".$row[ 'recordname']."'>Download</a> &emsp;</td> </td></tr>";  
}

echo "</table>";
        }
        else
        {
            echo "<p style='padding:10px;margin:10px;font-size:15px;font-family:sans-serif;color:white'><strong>No data found for this Username</strong></p>";
        }
?>
    </div>




    <?php
        include 'footer.php';
    ?>
        <style>
            <?php include 'cssfiles/footer.css';
            ?>

        </style>

</body>

</html>
