<?php

$page_title = "User Authentication - Password Reset Page";
include_once "partials/header.php";
include_once "partials/_forgot_password.php";

?>


<!-- contact form -->
<section class="contact-reset p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 pb-4">
                <h3 class="display-4 mb-5 text-white">Password Reset Form</h3>
                <div>
                    <?php if (isset($result)) echo $result; ?>
                    <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
                </div>

                <div class="clearfix"></div>
                <form class="contact-form" method="post" action="">
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Email" value="" name="email" id="emailField" />
                        <label for="emailField" class="label">Email</label>
                    </div>
                    <div class="form-group py-4 mb-4">
                        <input type="password" class="form-control my-2 p-2 input" placeholder="New Password" value="" name="new_password" id="newpasswordField" />
                        <label for="newpasswordField" class="label">New Password:</label>
                    </div>
                    <div class="form-group py-4 mb-4">
                        <input type="password" class="form-control my-2 p-2 input" placeholder="Confirm Password" value="" name="confirm_password" id="confirmpasswordField" />
                        <label for="confirmpasswordField" class="label">Confirm Password</label>
                    </div>
                    <div class="extrapad">.</div>
                    <button type="submit" name="passwordResetBtn" class="btn btn-block mt-4 p-2 font-weight-bold text-uppercase submit-button xtra-m" value="Reset Password">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end of contact form -->

<?php include_once "partials/footer.php"; ?>
</body>

</html>