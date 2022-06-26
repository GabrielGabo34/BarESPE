<?php
    /*$servername = 'localhost';
    $username = 'root';
    $password = 'Jose3898';
    $dbname = 'barespe';*/
    $servername = 'b54bptnsb4k4clstxpmi-mysql.services.clever-cloud.com';
    $username = 'ubxbizb5j5juf5wq';
    $password = 'vtPyxU7jgbJmTGC4RPKy';
    $dbname = 'b54bptnsb4k4clstxpmi';
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
?>
