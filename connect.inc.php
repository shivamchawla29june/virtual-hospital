<?php
$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';
$mysql_db='hospital';

 error_reporting(0);
    $establish_connection = @new mysqli($mysql_host, $mysql_username, $mysql_password,$mysql_db);
            if($establish_connection->connect_error)
        {
           die('Connect Error: ' . $mysqli->connect_error);
        }

?>
