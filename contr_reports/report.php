<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | CH-MGMT</title>
    <link rel="icon" type="image/png" href="../assets/logos/main_icon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->

        <?php
        include "../contr_main/sidebar.php";
        include '../conn.php';
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid background_main_white px">
            <?php
            include "../contr_main/header.php";
            ?>

            <!-- top -->
            <div class="member-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Reports</div>
            </div>

            <!-- cards -->
            <div class="cards-container d-flex justify-content-center align-items-center mt-5">

                <div class="cards row gap-3 justify-content-center mt-5">

                    <!-- 1-->
                    <div class="card__items card__items--blue col-md-3 position-relative clickable"
                        onclick="location.href='list_view.php'">
                        <div class="card__members d-flex flex-column gap-2 mt-3">
                            <i class="far fa-file-pdf h3"></i>
                            <span><b>Church Members</b><br>
                                <p>Click to generate report</p>
                            </span>
                        </div>
                    </div>

                    <!-- 2-->
                    <div class="card__items card__items--rose col-md-3 position-relative clickable"
                        onclick="location.href='list_view.php'">
                        <div class="card__auditTrail d-flex flex-column gap-2 mt-3">
                            <i class="far fa-flag h3"></i>
                            <span><b>Audit Trail</b><br>
                                <p>Click to generate report</p>
                            </span>
                        </div>
                    </div>                    


                </div>

            </div>
        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>