<?php 

    include "database/connect.php";

    session_start();

    if(isset($_POST['add']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $select = "SELECT * FROM `register` WHERE email='$email' AND password='$pass'";

        $result = $cn->query($select);

        $count = mysqli_num_rows($result);

        if($count > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
            }

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            header("location:index.php");
        }
        else{
            echo '<script>alert("Email or Password is Incorrect");</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

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
            <div class="col-md-15">
                <div class="card mx-auto mb-4" style="background-color: #ffffdd;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 login-image">
                                <img src="images/login/login-bg.gif" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="login-container p-xxl-5">
                                    <h1 class="display-4 mb-4 pt-2 text-font-2 color-3">Login</h1>
                                    <form method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control text-font" name="email" id="login-email"
                                                aria-describedby="emailHelp" placeholder=" ">
                                            <label for="login-email text-font" class="form-label">Email</label>
                                            <div class="invalid-feedback">Please enter a valid email address.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="pass" id="login-password"
                                                placeholder=" ">
                                            <label for="login-password" class="form-label">Password</label>
                                            <div class="invalid-feedback">Password must be at least 6 characters long.
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-block fw-bold text-primary"
                                            id="login-button" name="add">Login</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary fw-bold btn-block">Clear</button>
                                    </form>
                                    <p class="mt-3 pt-2">New user? <a href="#" class="color-3">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Function to validate an input field
            function validateInput(input, pattern, errorSelector, errorMessage) {
                var value = input.val();
                if (value === "" || !pattern.test(value)) {
                    input.addClass("is-invalid");
                    errorSelector.text(errorMessage);
                    return false;
                } else {
                    input.removeClass("is-invalid");
                    errorSelector.text("");
                    return true;
                }
            }

            // Email validation pattern
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            // Password validation pattern (at least 6 characters)
            var passwordPattern = /^.{6,}$/;

            // Add blur event listeners to input fields
            $("#login-email").blur(function () {
                validateInput($(this), emailPattern, $(".invalid-feedback-email"), "Please enter a valid email address.");
            });

            $("#login-password").blur(function () {
                validateInput($(this), passwordPattern, $(".invalid-feedback-password"), "Password must be at least 6 characters long.");
            });

            // Add a submit event listener to the form
            $("form").submit(function (e) {
                // Trigger blur for all input fields to perform validation
                $("#login-email, #login-password").trigger("blur");

                // Check if any field is still invalid
                if ($(".is-invalid").length > 0) {
                    e.preventDefault(); // Prevent the form from submitting if there are validation errors
                }
            });
        });
    </script>

</body>

</html>