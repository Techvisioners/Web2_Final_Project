<?php
include 'conn.php';
use PHPMailer\PHPMailer\PHPMailer;

//PHP MAILER
require './system/PHPMailer/src/Exception.php';
require './system/PHPMailer/src/PHPMailer.php';
require './system/PHPMailer/src/SMTP.php';

//IF SUBMITTED
if (isset($_POST['submit'])) {

    //GET EMAIL AND PASSWORD
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //VALIDATE
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    //SELECT FROM DB
    $request = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $request);

    //RESULT SET
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        //IF PASSWORD IS VALID
        if ($row && $row['Password'] === $password) {
            session_start();
            $_SESSION['name'] = $row['Username'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['pass'] = $row['Password'];

            //GENERATE OTP FROM generateOTP FUNCTION
            $otp = generateOTP(6);

            //STORE OTP ON DB OTP COLUMN
            $updateOTPQuery = "UPDATE users SET otp = '$otp' WHERE Email = '$email'";
            $updateResult = mysqli_query($conn, $updateOTPQuery);

            //SEND THE OTP CONFIGURATION
            if ($updateResult) {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ericksonmartinez08@gmail.com';
                $mail->Password = 'rwhv udhr prjx sxob';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('ericksonmartinez08@gmail.com', 'Erickson Martinez');
                $mail->addAddress($email);
                $mail->isHTML(true);

                //SET CURRENT TIME SA EMAIL
                date_default_timezone_set('Asia/Manila');
                $current_time = date("F j, Y, g:i a");
                $mail->Subject = 'CH-MGMT Login OTP Verification';

                //HTML EMAIL BODY
                $mail->Body = '
                    <html>
                    <head>
                        <title>CH-MGMT Login OTP Verification</title>
                    </head>
                    <body style="background: linear-gradient(rgba(248, 250, 252, 0.95) 19.39%, rgba(255, 255, 255, 1) 96.69%);">
                        <div style="font-family: Arial, sans-serif; padding: 20px;">
                            <h2 style="color: #333;">CH-MGMT Login OTP Verification</h2>
                            <p>Your OTP is: <h1><strong>' . $otp . '</strong></h1></p>
                            <hr style="border: 1px solid #ccc;">
                            <p style="font-size: 0.8em; color: #666;">This is an automated message. <b>Please do not reply.</b><br>as of ' . $current_time . ' (Asia/Manila Time)</p>
                        </div>
                    </body>
                    </html>
                ';
                $mail->isHTML(true);

                //IF EMAIL SENT, GO TO OTP FORM
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
        //IF ERROR
        header("Location: index.php?error=database error");
        exit();
    }
}

//GENERATE RANDOM 6 NUMBERS
function generateOTP($length) {
    return rand(pow(10, $length - 1), pow(10, $length) - 1);
}

?>