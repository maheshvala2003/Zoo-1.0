<?php

include "database/connect.php";

session_start();

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $insert = "INSERT INTO `register`(`name`, `email`, `password`, `gender`, `age`, `city`) VALUES ('$name','$email','$pass','$gender','$age','$city')";

    $result = $cn->query($insert);

    if ($result) {
        header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon//site.webmanifest">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- JS -->
    <script src="js/script.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.min.js"></script>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@500;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- ICON PACK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="body">
    <div class="container">
        <br>
        <nav class="navbar navbar-expand-lg navbar-success bg-custom">
            <div id="nav-container" class="container">
                <a class="navbar-brand" id="logo" href="#">SAFARI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="animal.php">Animals</a>
                    </li>
                </ul>
                <a class="nav-link" href="ticket.php"><button
                        class="btn btn-warning text-primary fw-bold">Ticket</button></a>
            </div>
        </nav>
    </div>
    <br>
    <!-- ----------------------------------------------------------------------------------------- -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-12">
                <div class="card mx-auto mb-4" style="background-color: #ffffdd;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="login-container p-xxl-3">
                                    <h1 class="display-3 mb-4 pt-2 text-font-2 color-3">REGISTER</h1>
                                    <form id="registrationForm" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-font" name="name"
                                                        id="name" placeholder=" " required>
                                                    <label for="name" class="form-label">Name</label>
                                                    <div class="invalid-feedback invalid-feedback-name"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control text-font" name="email"
                                                        id="email" aria-describedby="emailHelp" placeholder=" "
                                                        required>
                                                    <label for="email" class="form-label">Email</label>
                                                    <div class="invalid-feedback invalid-feedback-email"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control text-font" name="pass"
                                                        id="password" placeholder=" " required>
                                                    <label for="password" class="form-label">Password</label>
                                                    <div class="invalid-feedback invalid-feedback-password"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control text-font"
                                                        id="confirmPassword" placeholder=" " required>
                                                    <label for="confirmPassword" class="form-label">Confirm
                                                        Password</label>
                                                    <div class="invalid-feedback invalid-feedback-confirmPassword">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                                        value="male">
                                                    <label class="form-check-label" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female" value="female">
                                                    <label class="form-check-label" for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control text-font" id="age"
                                                        name="age" placeholder=" " required>
                                                    <label for="age" class="form-label">Age</label>
                                                    <div class="invalid-feedback invalid-feedback-age"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control text-font" id="city"
                                                        name="city" placeholder=" " required>
                                                    <label for="city" class="form-label">City</label>
                                                    <div class="invalid-feedback invalid-feedback-city"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-block fw-bold text-primary"
                                            name="add">Register</button>
                                        <button type="reset"
                                            class="btn btn-outline-secondary fw-bold btn-block">Clear</button>
                                    </form>
                                    <p class="mt-3 pt-2">Already registered? <a href="login.php"
                                            class="color-3">Login</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 login-image pt-4">
                                <img src="images/register/register-bg.gif" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------- -->

</body>

</html>