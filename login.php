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
                                        elseif ($_GET['error'] == 'invalidcred'){
                                            echo '<div class="alert alert-warning alert-dismissable fade show">
                                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
                                                    <strong>Error! </strong>Invalid credentials.
                                                </div>';
                                        }
                                    }
                                ?>
                                    <form action="includes/login.inc.php" method="post">
                                        <label for="email" class="form-label fw-bold">Email address: </label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                        <label for="password" class="form-label fw-bold">Password: </label>
                                        <input type="password" class="form-control" name="pwd" placeholder="Enter an 8-digit password">
                                        <p class="mt-3 text-white"><a href="#">Forgot Password?</a></p>
                                        <button type="submit" name="login" class="btn btn-outline-success mt-4 reg-btn">Login</button>
                                    </form>
                                    <p class="mt-3 text-white">Not yet signed up? Click here to <span><a href="index.php" class="text-info">Register</a></span></p>
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