<?php
//START SESSION TO ACCESS SESSION VARIABLES
session_start();

//INCLUDEs
include '../conn.php';
include '../audit_trail.php';

//CHECK IF FORM HAS BEEN SUBMITTED
if (isset($_POST['submit'])) {

    //GET DATA FROM MODAL FORM
    $Name = $_POST['Name'];

    //SAVE DATA TO DB
    try {
        $stmt = mysqli_prepare($conn, "INSERT INTO organizations (Name) VALUES (?)");
        mysqli_stmt_bind_param($stmt, 's', $Name);

        if (mysqli_stmt_execute($stmt)) {
            //RECORD ACTIVITY LOG
            logActivity("Organization $Name added successfully!");

            //DISPLAY SUCCESS TOAST
            $_SESSION['success_toast'] = "Data added successfully!";

            //REDIRECT TO LIST AFTER LOGGING AND SAVING
            header('Location: list_view.php');
            exit;

        } else {
            $_SESSION['error_toast'] = "Error adding data.";
            header('Location: list_view.php');
            exit;
        }

    } catch (mysqli_sql_exception $exception) {
        //CHECK IF DUPLICATE ENTRY (MySQL Unique ERROR 1062)
        //ALTER TABLE member_list ADD UNIQUE INDEX unique_name (Name);
        if ($exception->getCode() == 1062) {
            $_SESSION['error_toast'] = "Organization with that name already exists!";
            header('Location: list_view.php');
            exit;

        //GENERAL ERROR
        } else {
            $_SESSION['error_toast'] = "Error adding data: " . $exception->getMessage();
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
