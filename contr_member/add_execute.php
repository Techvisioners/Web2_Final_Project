<?php
//START SESSION TO ACCESS SESSION VARIABLES
session_start();

//INCLUDEs
include '../conn.php';
include '../audit_trail.php';

//CHECK IF FORM HAS BEEN SUBMITTED
if (isset($_POST['submit'])) {
    //GET IMAGE DATA FROM FORM
    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../assets/img/" . $image;

    //MOVE UPLOADED IMAGE TO DESTINATION FOLDER
    if (move_uploaded_file($tempname, $folder)) {
        echo 'Image uploaded to server'; //DISPLAY A MESSAGE IF IMAGE UPLOAD WAS SUCCESSFUL
    }

    //GET OTHER DATA FROM MODAL FORM
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Age = $_POST['Age'];
    $Organization = $_POST['Organization'];

    //SAVE DATA TO DB
    try {
        $stmt = mysqli_prepare($conn, "INSERT INTO member_list (img, Name, Email, Phone, Age, Organization) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'ssssss', $image, $Name, $Email, $Phone, $Age, $Organization);

        if (mysqli_stmt_execute($stmt)) {
            //RECORD ACTIVITY LOG
            logActivity("Member $Name added successfully!");

            //DISPLAY SUCCESS TOAST
            $_SESSION['success_toast'] = "Data added successfully!";

            //REDIRECT TO LIST AFTER LOGGING AND SAVING
            header('Location: list_view.php');
            exit;

        } else {
            $_SESSION['error_toast'] = "Error adding member.";
            header('Location: list_view.php');
            exit;
        }

    } catch (mysqli_sql_exception $exception) {
        //CHECK IF DUPLICATE ENTRY (MySQL Unique ERROR 1062)
        //ALTER TABLE member_list ADD UNIQUE INDEX unique_name (Name);
        if ($exception->getCode() == 1062) {
            $_SESSION['error_toast'] = "Member with that name already exists!";
            header('Location: list_view.php');
            exit;

        //GENERAL ERROR
        } else {
            $_SESSION['error_toast'] = "Error adding member: " . $exception->getMessage();
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
