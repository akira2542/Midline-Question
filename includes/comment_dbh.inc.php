<?php 
 date_default_timezone_set('Asia/Bangkok');
   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "commentsystem";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) 
    or die(mysqli_error($conn));