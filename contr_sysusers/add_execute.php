<?php
//START SESSION TO ACCESS SESSION VARIABLES
session_start();

//INCLUDEs
include '../conn.php';
include '../audit_trail.php';

//CHECK IF FORM HAS BEEN SUBMITTED
if (isset($_POST['submit'])) {

    //GET OTHER DATA FROM MODAL FORM
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //SAVE DATA TO DB
    try {
        $stmt = mysqli_prepare($conn, "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'sss', $Username, $Email, $Password);

        if (mysqli_stmt_execute($stmt)) {
            //RECORD ACTIVITY LOG
            logActivity("Admin Account '$Username' created successfully!");

            //DISPLAY SUCCESS TOAST
            $_SESSION['success_toast'] = "Admin Account created successfully!";

            //REDIRECT TO LIST AFTER LOGGING AND SAVING
            header('Location: list_view.php');
            exit;

        } else {
            $_SESSION['error_toast'] = "Error creating account.";
            header('Location: list_view.php');
            exit;
        }

    } catch (mysqli_sql_exception $exception) {
        //CHECK IF DUPLICATE ENTRY (MySQL Unique ERROR 1062)
        //ALTER TABLE member_list ADD UNIQUE INDEX unique_name (Name);
        if ($exception->getCode() == 1062) {
            $_SESSION['error_toast'] = "Account already exists!";
            header('Location: list_view.php');
            exit;

        //GENERAL ERROR
        } else {
            $_SESSION['error_toast'] = "Error creating account: " . $exception->getMessage();
            header('Location: list_view.php');
            exit;
        }

    } finally {
        //CLOSE STATEMENT
        mysqli_stmt_close($stmt);
    }
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);
?>
