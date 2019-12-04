<?php
$page_title = "User Profile Page";
include_once 'resource/utilities.php';
include_once "partials/_navbar.php";
include_once 'partials/parseProfile.php';


?>
<?php if ((isset($_SESSION["username"]) || isCookieValid($db))) : ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-collapse-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
                            <img src="images/aedc_logobfade.png" alt="..." class=""></a>
                        <div class="bottom-border pb-3">
                            <img src="images/usericon.jpg" width="50" class="rounded-circle mr-3">
                            <a href="#" class="text-white">Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?></a>
                        </div>
                        <ul class="navbar-nav flex-column">
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="profile2.php" class="nav-link text-white p-3 mb-2 current small-text"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>User Profile</a>
                            </li>
                            <!-- end sidebar menu item -->
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Energy Trends Dashboard</a>
                            </li>
                            <!-- sidebar menu item -->
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="dashboard2.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-tachometer-alt text-light fa-lg mr-3"></i>Feeder performance Dashboard</a>
                            </li>
                            <!-- sidebar menu item -->
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="dashboard3.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Weekly trends Dashboard</a>
                            </li>
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="dashboard4.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Daily performance Dashboard</a>
                            </li>
                            <!-- sidebar menu item -->
                            <!-- sidebar menu item -->
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-power-off text-light fa-lg mr-3"></i>Sign out</a>
                            </li>
                            <!-- sidebar menu item -->
                        </ul>
                    </div>
                    <!-- end of sidebar -->
                    <!-- top nav -->
                    <div class="col-lg-9 col-md-8 ml-auto emucolor fixed-top py-2">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0"></h4>
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-light text-uppercase mb-0">Energy Management Dashboard</h4>
                            </div>
                        </div>

                    </div>
                    <!-- end of top nav -->
                </div>

            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- power bi charts -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 ml-auto pt-5 mt-3 mb-5 pl-5 ml-5">
                    <section class="col col-lg-7 ml-5 pl-5">
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <th style="...">Username:</th>
                                <td><?php if (isset($username)) echo $username; ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php if (isset($email)) echo $email; ?></td>
                            </tr>
                            <tr>
                                <th>Date Joined:</th>
                                <td><?php if (isset($date_joined)) echo $date_joined; ?></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><a class="pull-right" href="edit-profile.php?user_identity=<?php if (isset($encode_id)) echo $encode_id; ?>">
                                        <span class="glyphicon-edit"></span>Edit Profile</a></td>
                            </tr>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <?php redirectTo("index") ?>
<?php endif ?>
<?php include_once "partials/footer.php"; ?>
</body>

</html>