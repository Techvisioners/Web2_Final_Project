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
            <div>

                <div class="cards row gap-3 justify-content-center mt-5">

                    <!-- 1-->
                    <div class="card__items card__items--rose col-md-1 position-relative clickable">
                        <div class="card__members d-flex flex-column gap-2 mt-2">
                            <i class="far fa-file-pdf h3"></i>
                            <span>
                                <b>Audit Trail</b><br>
                                <p class="small text-muted mb-0">View or generate report</p>
                            </span>
                            <!-- BUTTONS -->
                            <div class="d-flex justify-content-end align-items-end">
                                <!-- DOWNLOAD BUTTON -->
                                <button class="btn me-0" onclick="location.href='../contr_reports/gen_trail_report.php'"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">
                                    <i class="fas fa-download"></i>
                                </button>
                                <!-- LIST VIEW BUTTON -->
                                <button class="btn" onclick="window.open('../contr_trailview/list_view.php', '_blank')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="List View"><i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- 2-->
                    <div class="card__items card__items--blue col-md-1 position-relative clickable">
                        <div class="card__members d-flex flex-column gap-2 mt-2">
                            <i class="far fa-file-pdf h3"></i>
                            <span>
                                <b>List of Church Members</b><br>
                                <p class="small text-muted mb-0">View or generate report</p>
                            </span>
                            <!-- BUTTONS -->
                            <div class="d-flex justify-content-end align-items-end">
                                <!-- DOWNLOAD BUTTON -->
                                <button class="btn me-0" onclick="location.href='../contr_reports/gen_member_report.php'"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">
                                    <i class="fas fa-download"></i>
                                </button>
                                <!-- LIST VIEW BUTTON -->
                                <button class="btn" onclick="window.open('../contr_member/list_view.php', '_blank')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="List View"><i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- 3-->
                    <div class="card__items card__items--yellow col-md-1 position-relative clickable">
                        <div class="card__members d-flex flex-column gap-2 mt-2">
                            <i class="far fa-file-pdf h3"></i>
                            <span>
                                <b>List of Organizations</b><br>
                                <p class="small text-muted mb-0">View or generate report</p>
                            </span>
                            <!-- BUTTONS -->
                            <div class="d-flex justify-content-end align-items-end">
                                <!-- DOWNLOAD BUTTON -->
                                <button class="btn me-0" onclick="location.href='../contr_reports/gen_orgs_report.php'"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">
                                    <i class="fas fa-download"></i>
                                </button>
                                <!-- LIST VIEW BUTTON -->
                                <button class="btn" onclick="window.open('../contr_orgs/list_view.php', '_blank')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="List View"><i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- 4-->
                    <div class="card__items card__items--blue col-md-1 position-relative clickable">
                        <div class="card__members d-flex flex-column gap-2 mt-2">
                            <i class="far fa-file-pdf h3"></i>
                            <span>
                                <b>List of Admin Accounts</b><br>
                                <p class="small text-muted mb-0">View or generate report</p>
                            </span>
                            <!-- BUTTONS -->
                            <div class="d-flex justify-content-end align-items-end">
                                <!-- DOWNLOAD BUTTON -->
                                <button class="btn me-0" onclick="location.href='../contr_reports/gen_sysusers_report.php'"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download Report">
                                    <i class="fas fa-download"></i>
                                </button>
                                <!-- LIST VIEW BUTTON -->
                                <button class="btn" onclick="window.open('../contr_sysusers/list_view.php', '_blank')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="List View"><i class="fas fa-list"></i>
                                </button>
                            </div>
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