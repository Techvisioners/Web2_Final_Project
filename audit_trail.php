<?php

//FUNCTION TO INSERT
function logActivity($activityDescription) {
    include 'conn.php';

    //GET CURRENT USER
    $loggedUsername = $_SESSION['name'];

    //INSERT DATA
    $stmt = $conn->prepare("INSERT INTO activity_logs (user, activity_description) VALUES (?, ?)");
    $stmt->bind_param("ss", $loggedUsername, $activityDescription);

    if ($stmt->execute()) {
        echo "Activity logged successfully";
    } else {
        echo "Error";
    }

    $stmt->close();
    $conn->close();
}

?>
