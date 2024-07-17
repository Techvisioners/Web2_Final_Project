<?php
function checkLoggedStatus() {
    if (isset($_SESSION['email']) && isset($_SESSION['login_otp']) && isset($_SESSION['pass'])) {
        //USER IS LOGGED-IN
        $currentPage = basename($_SERVER['PHP_SELF']);

        //BLOCK ACCESS ON INDEX.PHP AND OTP PHP IF LOGGED-IN
        if ($currentPage === 'index.php' || $currentPage === 'otp.php') {
            //BACK TO DASHBOARD.PHP ALWAYS
            //header("Location: ./contr_main/dashboard.php");
            //exit();
        }
        
    } else {
        //USER NOT LOGGED-IN
        $allowed = array('index.php', 'otp.php');
        if (!in_array(basename($_SERVER['PHP_SELF']), $allowed)) {
            //REDIRECT TO INDEX.PHP ALWAYS
            header("Location: ../index.php");
            exit();
        }
    }
}
?>
