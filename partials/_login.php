<?php
// add our database connection script
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

// process the form
if (isset($_POST['loginBtn'])) {
    //array to hold errors
    $form_errors = array();

    //validate
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if (empty($form_errors)) {

        //collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];

        //check if user exists in the database
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

        while ($row = $statement->fetch()) {
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;

                echo $welcome = "<script type=\"text/javascript\">
                swal({
                    title: \"Welcome $username!!\",
                    text: \"You're being logged in!!\",
                    type: \"success\",
                    timer: 3000,
                    showConfirmationButton: false});

                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 2000);
                    </script>";
                redirectTo("dashboard2");
            } else {
                $result = "<script type='text/javascript'>
                swal({
                    title: 'OOPS!!',
                    text: 'Invalid username or password!!',
                    type: 'error',
                    timer: 5000,
                    confirmationButtonText: 'Try Again!!'});
                    </script>";
            }
        }
    } else {
        if (count($form_errors) == 1) {
            $result = flashMessage("Oops!! There was one error in the form");
        } else {
            $result = flashMessage("Oops!! There were " . count($form_errors) . " errors in the form");
        }
    }
}
