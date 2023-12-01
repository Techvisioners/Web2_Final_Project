<?php
//START SESSION TO ACCESS SESSION VARIABLES
session_start();

//INCLUDEs
include '../conn.php';
include '../audit_trail.php';

//RETRIEVE ID FROM GET REQUEST from delete.php
$id = $_GET['Id'];

//CHECK IF ID EXISTS
if (isset($id)) {
    //PREPARE AND EXECUTE TO DELETE DATA, BASED ON ID
    $stmt = mysqli_prepare($conn, "DELETE FROM member_list WHERE Id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    //RECORD ACTIVITY LOG
    logActivity("Member Data #$id deleted successfully!");

    //DISPLAY TOAST
    $_SESSION['success_toast'] = "Data deleted successfully!";

    //CLOSE STATEMENT AND CONNECTION
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    //REDIRECT TO LIST AFTER LOGGING AND DELETION
    header('Location: list_view.php');
    exit();
} else {
    // IF ID NOT VALID, REDIRECT BACK TO MEMBER LIST
    header('Location: list_view.php');
    exit();
}
?>
