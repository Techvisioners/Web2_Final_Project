<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="icon" type="image/png" href="../assets/logos/main_icon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="update_body background_main_white">
    <?php
    session_start();
    include '../conn.php';

    //RETRIEVE ID FROM GET PARAMETER ID from list
    $_SESSION["id"] = $_GET['Id'];
    $id = $_SESSION["id"];

    //SELECT DATA BASED ON ID
    $stmt = mysqli_prepare($conn, "SELECT * FROM organizations WHERE Id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $table = mysqli_fetch_assoc($result);
    ?>

    <!-- UPDATE LAYOUT -->
    <div class="container update_container">

        <!-- MODAL HEADER -->
        <div class="modal-header">
            <h5 class="modal-title" id="modalPopupTitleLabel"><b>EDIT ORGANIZATION #<?php echo htmlspecialchars($table['Id']); ?></b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="location.href='list_view.php'"></button>
        </div>

        <!-- UPDATE FORM -->
        <form method="POST" action="update_execute.php" enctype="multipart/form-data">

            <!-- SCROLLABLE -->
            <div class="form-scrollable">

                <div class="">
                    <label for="recipient-name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="recipient-name" name="Name"
                        value="<?php echo htmlspecialchars($table['Name']); ?>" required>
                </div>
                
            </div> <!-- END OF SCROLLABLE -->

            <!-- MODAL FOOTER BUTTON TO UPDATE -->
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
            </div>

        </form> <!-- END OF UPDATE FORM -->

    </div> <!-- END OF UPDATE LAYOUT -->

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>