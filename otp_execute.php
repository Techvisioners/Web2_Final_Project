<?php
session_start();
include 'conn.php';
include 'audit_trail.php';

if (isset($_POST['submit'])) {
    $email = $_SESSION['email']; // Assuming you have stored email in the session

    $otp_entered = $_POST['otp']; // Get the entered OTP from the form

    $email = mysqli_real_escape_string($conn, $email);
    $otp_entered = mysqli_real_escape_string($conn, $otp_entered);

    // Retrieve the saved OTP from the database for the provided email
    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $saved_otp = $row['otp'] ?? '';

        if ($otp_entered === $saved_otp) {
            // OTP verification successful, proceed with your logic
            // For example, redirect the user to a success page or perform any desired actions
            logActivity("Logged-in");
            header("location: ./contr_main/dashboard.php");
            exit();
        } else {
            // Invalid OTP, redirect back to the OTP verification page with an error
            header("Location: otp.php?error=invalid otp");
            exit();
        }
    } else {
        // Handle database error or user not found
        header("Location: otp.php?error=database_error");
        exit();
    }
} else {
    // Redirect back if the form was not submitted
    header("Location: otp.php");
    exit();
}
?>
