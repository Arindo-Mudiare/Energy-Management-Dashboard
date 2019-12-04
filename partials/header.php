<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
?>

<!DOCTYPE html>
<html>

<head lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Montserrat|Nosifer|Righteous&display=swap" rel="stylesheet" />

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title><?php if (isset($page_title)) echo $page_title; ?></title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark emucolor static-top">
        <div class="container">
            <a class="navbar-brand logofont" href="index.php"><img src="images/aedc_logobfade.png" alt="..." class=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                            <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>
                    <?php if ((isset($_SESSION["username"]) || isCookieValid($db))) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                    <?php else : ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign up</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>