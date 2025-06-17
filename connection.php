<?php
error_reporting(0);

error_reporting(E_ALL);
ini_set('display_errors', 1);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="crud_form";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
        echo"connection OK";
    }
    else
    {
        echo "connection fail".mysqli_connect_error();
    }


?>