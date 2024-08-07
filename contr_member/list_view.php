<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Management | CH-MGMT</title>
    <link rel="icon" type="image/png" href="../assets/logos/main_icon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">

        <!-- INCLUDEs -->
        <?php
        include "../contr_main/sidebar.php";
        include '../system/toast.php';

        //CHECK IF ALREADY LOGGED-IN OR NOT
        include '../system/checkLogged.php';
        checkLoggedStatus();        
        ?>


        <!-- TOASTs POPUPS -->
        <?php
        //SUCCESS Toast
        if (isset($_SESSION['success_toast'])) {
            $toast = toast::success($_SESSION['success_toast']);
            echo $toast;
            unset($_SESSION['success_toast']);
        }
        //WARNJ Toast
        if (isset($_SESSION['warn_toast'])) {
            $warn_toast = Toast::warning($_SESSION['warn_toast']);
            echo $warn_toast;
            unset($_SESSION['warn_toast']);
        }        
        //ERROR Toast
        if (isset($_SESSION['error_toast'])) {
            $error_toast = Toast::error($_SESSION['error_toast']);
            echo $error_toast;
            unset($_SESSION['error_toast']);
        }
        ?>    


        <!-- CONTENT PAGE -->
        <div class="container-fluid background_main_white px-4">
            <?php include "../contr_main/header.php"; ?>

            <!-- CONTENT PAGE HEADER (title, border, button) -->
            <div class="member-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Manage Church Members</div>

                <!-- BUTTONS -->
                <div class="btn-add d-flex gap-3 align-items-center">
                    <!-- GENERATE REPORT BUTTON -->
                    <a href="../contr_reports/gen_member_report.php" class="btn btn-primary" target="_blank">
                        <i class="far fa-file-pdf me-2 text-white"></i>REPORT
                    </a>
                    <!-- ADD BUTTON -->
                    <?php include 'add.php'; ?>
                </div>
                
            </div>


            <!-- TABLE VIEW -->
            <div class="table-responsive">

                <!-- TABLE CONTENT -->
                <table class="table member_list table-borderless">

                    <!-- TABLE COLUMN NAMES -->
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">vide</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Organization</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>

                    <!-- TABLE COLUMN DATA -->
                    <tbody>
                        <?php
                        include '../conn.php';
                        $query = "SELECT * FROM member_list";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <!-- PASTE DATA FROM SELECT * -->
                                <tr class="bg-white align-middle">
                                    
                                    <!-- IMAGE -->
                                    <td>
                                        <img src="../assets/img/<?php echo $row['img']; ?>" alt="img" class="rounded-circle" height="50" width="50">
                                    </td>

                                    <!-- DATAs -->
                                    <td>
                                        <span class="text-muted"><?php echo $row['Id']; ?></span>
                                    </td>                                    

                                    <td>
                                        <?php echo $row['Name']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['Email']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['Phone']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['Age']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['Organization']; ?>
                                    </td>

                                    <!-- ACTIONS -->
                                    <td class="d-md-flex gap-3 mt-3">
                                        <a href="update.php?Id=<?php echo $row['Id']; ?>" title="Edit"><i class="far fa-pen"></i></a>
                                        <a href="remove.php?Id=<?php echo $row['Id']; ?>" title="Delete" class="delete-member" data-id="<?php echo $row['Id']; ?>"><i class="far fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }

                        } else {
                            echo "No records found";
                        }

                        //FREE RESULT SET
                        mysqli_free_result($result);

                        //CLOSE CONNECTION
                        mysqli_close($conn);
                        ?>

                    </tbody> <!-- END OF TABLE COLUMN DATA -->

                </table> <!-- END OF TABLE CONTENT -->

            </div> <!-- END OF TABLE VIEW -->

        </div> <!-- END OF CONTENT PAGE -->

    </main>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

</body>
</html>