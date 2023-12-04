<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CH-MGMT</title>
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
        include "sidebar.php";
        include '../conn.php';
        include '../system/checkLogged.php';
        checkLoggedStatus();

        //Count members
        $count_members_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM member_list");
        $count_members_data = mysqli_fetch_assoc($count_members_query);
        $count_members = $count_members_data['count'];

        //Count users
        $count_users_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM users");
        $count_users_data = mysqli_fetch_assoc($count_users_query);
        $count_users = $count_users_data['count'];

        //count org
        $count_org_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM organizations");
        $count_org_data = mysqli_fetch_assoc($count_org_query);
        $count_org = $count_org_data['count'];
        ?>

        <!-- start content page -->
        <div class="container-fluid background_main_white px">
            <?php
            include "header.php";
            ?>

            <div class="cards row gap-3 justify-content-center mt-5">


                <div class=" card__items card__items--blue col-md-3 position-relative clickable" onclick="location.href='../contr_member/list_view.php'">
                    <div class="card__members d-flex flex-column gap-2 mt-3">
                        <i class="far fa-user-check h3"></i>
                        <span>Church Members</span>
                    </div>
                    <div class="card__count_members">
                        <span class="h2 fw-bold nbr">
                            <?php echo $count_members; ?>
                        </span>
                    </div>
                </div>

                <div class=" card__items card__items--rose col-md-3 position-relative clickable" onclick="location.href='../contr_orgs/list_view.php'">
                    <div class="card__orgs d-flex flex-column gap-2 mt-3">
                        <i class="far fa-user-check h3"></i>
                        <span>Organizations</span>
                    </div>
                    <div class="card__count_orgs">
                        <span class="h2 fw-bold nbr">
                            <?php echo $count_org; ?>
                        </span>
                    </div>
                </div>                

                <div class="card__items card__items--gradient col-md-3 position-relative clickable" onclick="location.href='../contr_sysusers/list_view.php'">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>System Admin Accounts</span>
                    </div>
                    <div class="card__count_users">
                        <span class="h2 fw-bold nbr">
                            <?php echo $count_users; ?>
                        </span>
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