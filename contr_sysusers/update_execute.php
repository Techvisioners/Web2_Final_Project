<?php
//START SESSION TO ACCESS SESSION VARIABLES
session_start();

//RETRIEVE 'id' FROM SESSION
$id = $_SESSION['id'];

//INCLUDES
include '../conn.php';
include '../audit_trail.php';

//CHECK IF FORM HAS BEEN SUBMITTED
if (isset($_POST['submit'])) {
    try {
        //RETRIEVE FORM DATA
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        //PREPARE UPDATE STATEMENT
        $stmt = mysqli_prepare($conn, "UPDATE users 
            SET 
            Username = ?,
            Email = ?,
            Password = ?
            WHERE Id = ?");
        
        //BIND PARAMETERS TO THE PREPARED STATEMENT
        mysqli_stmt_bind_param($stmt, "sssi", $Username, $Email, $Password, $id);

        //EXECUTE THE STATEMENT
        $res = mysqli_stmt_execute($stmt);

        //CHECK
        if ($res) {
            //RECORD ACTIVITY LOG
            logActivity("Admin Account #$id updated!");

            //DISPLAY TOAST
            $_SESSION['success_toast'] = "Admin Account updated successfully!";

            //REDIRECT TO LIST AFTER LOGGING AND UPDATING
            header("location: list_view.php");
            exit();

        } else {
            //CHECK IF DUPLICATE ENTRY (MySQL Unique ERROR 1062)
            if (mysqli_errno($conn) === 1062) {
                $_SESSION['error_toast'] = "Admin Account already exists!";
                header('Location: list_view.php');
                exit;

            } else {
                //DISPLAY ERROR IF UPDATE FAILED
                throw new Exception("Error updating record: " . mysqli_error($conn));
            }
        }

    } catch (Exception $e) {
        $_SESSION['error_toast'] = "Error updating admin account: " . $e->getMessage();
        header('Location: list_view.php');
        exit;

    } finally {
        //CLOSE STATEMENT AND DATABASE CONNECTION
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>
