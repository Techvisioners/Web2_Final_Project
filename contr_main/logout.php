<?php
session_start();

//LOG BEFORE LOGOUT
include '../audit_trail.php';
logActivity("Logged-out");

//REMOVE ALL SESSION VARIABLES
$_SESSION = array();

//DESTROY THE SESSION
session_destroy();

//BACK TO LOGIN AFTER LOGUT
header("Location:../index.php");
exit();

?>