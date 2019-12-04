<?php include_once 'resource/session.php'
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
    <?php echo guard(); ?>
    <!-- Navigation -->