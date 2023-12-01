<?php session_start(); ?>

<div class="bg-sidebar vh-100 w-50 position-fixed">

    <!--- TOP SYSTEM NAME --->
    <div class="log d-flex justify-content-between">
        <h1 class="member-management text-start ms-2 ps-1 mt-3 h6 fw-bold">Church Member Management</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>

    <!--- ICONS, USERNAME and POSITION --->
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <img class="rounded-circle" src="../assets/logos/user_icon.png" alt="user_icon" height="120" width="120">
        <h2 class="h6 current_user fw-bold">
            <?php echo $_SESSION['name']; ?>
        </h2>
        <span class="sb_click_text admin-color">admin</span>
    </div>

    <!--- GAP ON LOGOUT BTN --->
    <div class="bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4">

        <!--- SIDEBAR BUTTONS --->
        <ul class="d-flex flex-column list-unstyled">

            <li class="sb_click_text"><a class="nav-link text-dark" href="../contr_main/dashboard.php"><i
                        class="fal fa-home-lg-alt me-2"></i>
                    <span>Home</span></a>
            </li>

            <li class="sb_click_text"><a class=" nav-link text-dark" href="../contr_member/list_view.php"><i
                        class="far fa-user-check me-2"></i>
                    <span>Manage Members</span></a>
            </li>

            <li class="sb_click_text"><a class=" nav-link text-dark" href="../contr_reports/report.php"><i
                        class="fal fa-file-chart-line me-2"></i>
                    <span>Reports</span></a>
            </li>

            <li class="sb_click_text"><a class=" nav-link text-dark" href="../contr_settings/settings.php"><i
                        class="fal fa-sliders-v-square me-2"></i>
                    <span>Settings</span></a>
            </li>

        </ul>

        <!--- LOGOUT BUTTON --->
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class="sb_click_text"><a class="nav-link text-dark" href="../contr_main/logout.php"><span>Logout</span><i class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>

    </div>

</div>