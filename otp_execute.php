<?php
//INCLUDES
session_start();
include 'conn.php';
include 'audit_trail.php';

//SUBMIT ACTION
if (isset($_POST['submit'])) {
    $email = $_SESSION['email'];
    $otp_entered = $_POST['otp'];

    $email = mysqli_real_escape_string($conn, $email);
    $otp_entered = mysqli_real_escape_string($conn, $otp_entered);

    //GET SAVED OTP FROM DATABASE
    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    //GET DATA FROM MYSQL RESULT SET
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        //GET SAVED OTP FROM OTP COLUMN ON DV
        $saved_otp = $row['otp'] ?? '';

        //IF ENTERED OTP AND SAVED OTP IS SAME = SUCCESS
        if ($otp_entered === $saved_otp) {
            //OTP SUCCESS
            logActivity("Logged-in");
            header("location: ./contr_main/dashboard.php");
            exit();

        } else {
            //INVALID OTP, DISPLAY ERROR
            header("Location: otp.php?error=invalid otp");
            exit();
        }

    } else {
        //DATABASE ERROR
        header("Location: otp.php?error=database_error");
        exit();
    }

} else {
    //ERROR CATCHIBG
    header("Location: otp.php");
    exit();
}

?>
