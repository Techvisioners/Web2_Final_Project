<?php

    $servername = "sql309.infinityfree.com";
    $username = "if0_35491861";
    $password = "kuqrNScEZTxNzaj";
    $dbname = "if0_35491861_membermgmt";

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "if0_35491861_membermgmt";
*/

//CONNECTION
$conn = mysqli_connect($servername, $username, $password, $dbname);

//CHECK CONNECTION
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>