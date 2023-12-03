<?php
function checkLoggedStatus() {
    if (isset($_SESSION['email']) && isset($_SESSION['login_otp']) && isset($_SESSION['pass'])) {
        // User is logged in
        $currentPage = basename($_SERVER['PHP_SELF']);

        // Block access to index.php or otp.php if already logged in
        if ($currentPage === 'index.php' || $currentPage === 'otp.php') {
            header("Location: ./contr_main/dashboard.php");
            exit();
        }
        
    } else {
        // User is not logged in
        $allowedPages = array('index.php', 'otp.php');
        if (!in_array(basename($_SERVER['PHP_SELF']), $allowedPages)) {
            // Redirect to index.php from other pages
            header("Location: ../index.php");
            exit();
        }
    }
}
?>
