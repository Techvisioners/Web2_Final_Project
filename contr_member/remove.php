<?php

//INCLUDEs
include '../conn.php';

//RETRIEVE ID FROM GET REQUEST from delete action
$id = $_GET['Id'];

//VALIDATE ID INPUT FOR SECURITY
function validateID($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//VALIDATE
if (isset($id)) {
    $id = validateID($id);

    //DISPLAY CONFIRMATION
    echo '<script>
        var confirmed = confirm("Are you sure you want to delete this member #' . $id . '?");
        if (confirmed) {
            window.location.href = "remove_execute.php?Id=' . $id . '";
        } else {
            window.location.href = "list_view.php";
        }
    </script>';
    exit();
}

//IF CANCELED, OR NOT VALIDATED BACK TO LIST
header('Location: list_view.php');
exit();
?>
