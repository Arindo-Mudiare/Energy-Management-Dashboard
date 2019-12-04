<?php
$page_title = "User Authentication - Profile";

include_once "partials/header.php";
include_once "partials/parseProfile.php";

?>

<!-- Page Content -->
<div class="container">
    <div>
        <h1>Profile</h1>
        <?php if (!isset($_SESSION['username'])) : ?>
            <?php redirectTo("index") ?>
        <?php else : ?>
            <section class="col col-lg-7">
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
        <?php endif ?>
    </div>
</div>

<?php include_once "partials/footer.php"; ?>
</body>

</html>