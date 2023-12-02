<?php
include 'conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './system/PHPMailer/src/Exception.php';
require './system/PHPMailer/src/PHPMailer.php';
require './system/PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $email = mysqli_real_escape_string($conn, $email); // Sanitize input
    $password = mysqli_real_escape_string($conn, $password); // Sanitize input

    $requete = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $requete);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && $row['Password'] === $password) {
            session_start();
            $_SESSION['name'] = $row['Username'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['pass'] = $row['Password'];

            // Generate OTP and send it via email
            $otp = generateOTP(6);

            // Store OTP in the database for verification (Change 'otp_column' to your actual column name)
            $updateOTPQuery = "UPDATE users SET otp = '$otp' WHERE Email = '$email'";
            $updateResult = mysqli_query($conn, $updateOTPQuery);

            if ($updateResult) {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ericksonmartinez08@gmail.com'; // Your Gmail email
                $mail->Password = 'rwhv udhr prjx sxob'; // Use the App Password you generated
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('ericksonmartinez08@gmail.com', 'Erickson Martinez');
                $mail->addAddress($email);
                $mail->isHTML(true);

                //set current time
                date_default_timezone_set('Asia/Manila');
                $current_time = date("F j, Y, g:i a");
                $mail->Subject = 'CH-MGMT Login OTP Verification';

                // HTML formatted email body with linear gradient background
                $mail->Body = '
                    <html>
                    <head>
                        <title>CH-MGMT Login OTP Verification</title>
                    </head>
                    <body style="background: linear-gradient(rgba(248, 250, 252, 0.95) 19.39%, rgba(255, 255, 255, 1) 96.69%);">
                        <div style="font-family: Arial, sans-serif; padding: 20px;">
                            <h2 style="color: #333;">CH-MGMT Login OTP Verification</h2>
                            <p>Your OTP is: <strong>' . $otp . '</strong></p>
                            <hr style="border: 1px solid #ccc;">
                            <p style="font-size: 0.8em; color: #666;">This is an automated message. <b>Please do not reply.</b><br>as of ' . $current_time . ' (Asia/Manila Time)</p>
                        </div>
                    </body>
                    </html>
                ';
                $mail->isHTML(true); // Set email format to HTML


                if ($mail->send()) {
                    $_SESSION['login_otp'] = $otp;
                    header("Location: otp.php");
                    exit();
                } else {
                    echo 'Email could not be sent. Please try again later.';
                }
            } else {
                echo "Error updating OTP in the database: " . mysqli_error($conn);
            }
        } else {
            header("Location: index.php?error=email or password not found");
            exit();
        }
    } else {
        // Handle query error
        header("Location: index.php?error=database error");
        exit();
    }
}

function generateOTP($length) {
    return rand(pow(10, $length - 1), pow(10, $length) - 1);
}

?>