<?php
if(!empty($_GET['file']))
{
    $fileName = basename($_GET['file']);
    $filePath = 'record_patients/'.$fileName;
    if(!empty($fileName) && file_exists($filePath))
    {

        
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        

        readfile($filePath);
        exit;
        header('location:download.php');
    }
    else
    {
        echo"This file doesn't exist";
        header('location:download.php');
        echo '<script>alert("Please enter the Password")</script>';
    }
           
}
