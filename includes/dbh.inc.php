<?php
   date_default_timezone_set('Asia/Bangkok');
   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "loginsystem";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);