<?php
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - PIMS</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="shortcut icon" href="assets/images/MarSU-PMIS.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/MarSU-PMIS.png" height="100" class='mb-4'>
                                <h3>Sign In</h3>
                                <h4>Patient Information System</h4>
                            </div>

                            <div class="form-group position-relative has-icon-left">
                                <label for="username">Username</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="username">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">Password</label>
                                    <a href="auth-forgot-password.html" class='float-right'>
                                        <small>Forgot password?</small>
                                    </a>
                                </div>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password">
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class='form-check clearfix my-4'>
                                <div class="checkbox float-left">
                                    <input type="checkbox" id="checkbox1" class='form-check-input'>
                                    <label for="checkbox1">Remember me</label>
                                </div>
                                <div class="float-right">
                                    <a href="auth-register.html">Don't have an account?</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <a class="btn btn-primary float-right" onclick="Auth()">Submit</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>

    <!-- JavaScript files-->
    <?php include("scripts.php") ?>

    <script>
        function Auth() {
            var uname = $('#username').val();
            var pword = $('#password').val();

            $.post("functions/auth-verify.php", { uname: uname, pword: pword })
                .done(function (data) {
                    if (data == 'Failed') {
                        SwalAlert(3, "Oops", "Login Failed!");
                    } else {
                        // Log user login action
                        $.post("functions/functions.php", {
                            log_action: true,
                            user_id: data, // Assuming `data` contains the user ID
                            action_made: "User logged in",
                            status: "Success"
                        }).done(function () {
                            window.open('dashboard_main.php', '_self');
                        }).fail(function () {
                            SwalAlert(3, "Error", "Failed to log user action.");
                        });
                    }
                });
        };
    </script>
</body>

</html>