<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | CH-MGMT</title>
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

        //count users
        $count_users_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM users");
        $count_users_data = mysqli_fetch_assoc($count_users_query);
        $count_users = $count_users_data['count'];

        //count org
        $count_org_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM organizations");
        $count_org_data = mysqli_fetch_assoc($count_org_query);
        $count_org = $count_org_data['count'];

        //count trail
        $count_trail_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM activity_logs");
        $count_trail_data = mysqli_fetch_assoc($count_trail_query);
        $count_trail = $count_trail_data['count'];        
        
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid background_main_white px">
            <?php
            include "../contr_main/header.php";
            ?>

            <!-- top -->
            <div class="member-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Settings</div>
            </div>

            <!-- cards -->
            <div class="cards-container d-flex justify-content-center align-items-center mt-5">

                <div class="cards row gap-3 justify-content-center mt-5">

                    <!-- 1-->
                    <div class="card__items card__items--blue col-md-3 position-relative clickable"
                        onclick="location.href='../contr_orgs/list_view.php'">
                        <div class="card__org d-flex flex-column gap-2 mt-3">
                            <i class="far fa-bookmark h3"></i>
                            <span><b>Organizations</b><br>
                                <p class="small text-muted">Click to manage organizations</p>
                            </span>
                        </div>
                        <div class="card__count">
                            <span class="h5 fw-bold nbr">
                                <?php echo $count_org; ?>
                            </span>
                        </div>
                    </div>

                    <!-- 2-->
                    <div class="card__items card__items--rose col-md-3 position-relative clickable"
                        onclick="location.href='../contr_sysusers/list_view.php'">
                        <div class="card__account d-flex flex-column gap-2 mt-3">
                            <i class="far fa-lock h3"></i>
                            <span><b>Admin Accounts</b><br>
                                <p class="small text-muted">Click to manage admin system accounts</p>
                            </span>
                        </div>
                        <div class="card__count">
                            <span class="h5 fw-bold nbr">
                                <?php echo $count_users; ?>
                            </span>
                        </div>
                    </div>

                    <!-- 3-->
                    <div class="card__items card__items--yellow col-md-3 position-relative clickable"
                        onclick="location.href='../contr_trailview/list_view.php'">
                        <div class="card__trail d-flex flex-column gap-2 mt-3">
                            <i class="far fa-flag h3"></i>
                            <span><b>Audit Trail</b><br>
                                <p class="small text-muted">Click to view audit trail</p>
                            </span>
                        </div>
                        <div class="card__count">
                            <span class="h5 fw-bold nbr">
                                <?php echo $count_trail; ?>
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