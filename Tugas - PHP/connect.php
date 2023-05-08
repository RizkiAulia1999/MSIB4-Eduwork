<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName   = "perpus";

    //creare connection
    $conn = new mysqli($hostName, $userName, $password, $dbName);

    // if ($conn) {
    //     echo "connected";
    // } else {
    //     echo "not connected";
    // }
?>