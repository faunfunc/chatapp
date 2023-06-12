<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Convo</title>
</head>
<body>

    <div class="container d-flex justify-content-center mt-5" style="min-height: 600px;">
        <div class="col-md-8">
            <div class="card shadow border-0 h-100">
                <div class="card-body signup-body">
                    <div class="row">
                        <div class="col col-left">
                            <div class="card border-0">
                                <div class="card-top-img">
                                    <figure>
                                        <img src="./assets/images/forms/signup-bg.jpg" alt="sign up bg" class="w-100 ">
                                        <figcaption>
                                            <h5 class="text-center slogan">Share, Connect, Empower</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col col-right">
                            <h1 class="text-center welcome-text">welcome to Convo</h1>
                            <h4 class="mt-2 text-center welcome-text ">register to start a conversation </h4>
                            <div class="reg-details">
                                <?php
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == 'emptyinput') {
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Please enter the required fields.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'invalidemail'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Invalid email format.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'emailexists'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Email already exists.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'Invalidpasswordlength'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Enter an 8-digit password or more.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'Invalidpasswordlength'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Enter an 8-digit password or more.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'stmterror'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Something went wrong.
                                                </div>';
                                        }
                                        elseif ($_GET['error'] == 'success'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Signed up successfully.</strong>
                                                </div>';
                                        }
                                    }
                                ?>

                                <form action="includes/signup.inc.php" method="post">
                                    <label for="firstname" class="form-label fw-bold">firstname: </label>
                                    <input type="text" class="form-control" placeholder="Enter your first name" name="fname">
                                    <label for="Lastname" class="form-label fw-bold">Lastname: </label>
                                    <input type="text" class="form-control" placeholder="Enter your Last name" name="lname">
                                    <label for="email" class="form-label fw-bold">Email address: </label>
                                    <input type="email" class="form-control" placeholder="Enter your email" name="email">
                                    <label for="password" class="form-label fw-bold">Password: </label>
                                    <input type="password" class="form-control" placeholder="Enter an 8-digit password" name="pwd">
                                    <button type="submit" class="btn btn-outline-success mt-4 reg-btn" name="register">Register</button>
                                </form>
                                <p class="mt-3 text-white">Already have an account? Click here to <span><a href="login.php" class="text-info">login</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>