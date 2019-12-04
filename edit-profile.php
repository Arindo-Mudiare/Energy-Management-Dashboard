<?php
$page_title = "User Authentication - Profile";

include_once "partials/header.php";
include_once "partials/parseProfile.php";

?>

<!-- Page Content -->
<div class="container">
    <section class="col col-lg-7 mt-5">
        <h2>Edit Profile</h2>
        <hr>
        <div>
            <?php if (isset($result)) echo $result; ?>
            <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>


        <?php if (!isset($_SESSION['username'])) : ?>
            <?php redirectTo("index") ?>
        <?php else : ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="emailField">Email</label>
                    <input type="text" name="email" class="form-control" id="emailField" value="<?php if (isset($email)) echo $email; ?>">
                </div>

                <div class="form-group">
                    <label for="usernameField">Username</label>
                    <input type="text" name="username" class="form-control" id="usernameField" value="<?php if (isset($username)) echo $username; ?>">
                </div>
                <input type="hidden" name="hidden_id" value="<?php if (isset($id)) echo $id; ?>">
                <button type="submit" name="updateProfileBtn" class="btn btn-danger pull-right">Update Profile</button>
            </form>
        <?php endif ?>
        <p class="mt-5"><a href="dashboard.php">Back</a></p>
    </section>

</div>

<?php include_once "partials/footer.php"; ?>
</body>

</html>