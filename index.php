<?php
$page_title = "User Authentication - Homepage";

include_once "partials/header.php";

?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="display-4 mt-5 emufont">Energy Management Reporting Dashboard</h3>
            <div class="mt-4">
                <p class="lead big-lead">Check Energy performance across all feeders</p>
                <?php if (!isset($_SESSION['username'])) : ?>
                    <P class="lead">You are currently not Signed In Please <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a> Not yet a Registered User? Kindly <a href="signup.php">Signup</a> </P>
                <?php else : ?>
                    <p class="lead">You are logged in as <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
                    <a href="dashboard.php"><button class="btn btn-danger">Click to Log into Dashboard</button></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<?php include_once "partials/footer.php"; ?>
</body>

</html>