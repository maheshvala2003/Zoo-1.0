<?php

include "database/connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $child = $_POST['child'];
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $date = $_POST['date'];
    $total = $_POST['total'];

    $insert = "INSERT INTO `ticket`(`name`, `email`, `child`, `adult`, `senior`, `date`, `total`) VALUES ('$name','$email','$child','$adult','$senior','$date','$total')";

    $result = $cn->query($insert);

    if ($result) {
        
        $_SESSION['child'] = $child;
        $_SESSION['adult'] = $adult;
        $_SESSION['senior'] = $senior;
        $_SESSION['date'] = $date;
        $_SESSION['total'] = $total;
        header("location:card.php");
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICKET</title>

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
                    <form method="POST">
                            <button type="submit" name="logout" class="nav-link text-font">Logout</button>
                    </form>
                </ul>
                <a class="nav-link" href="ticket.php"><button
                        class="btn btn-warning text-primary fw-bold">Ticket</button></a>
            </div>
        </nav>
    </div>


    <!-- -------------------------------------------------------------------------------------------- -->

    <div class="container mt-4">
        <h1 class="text-center text-font-2 color-1">Zoo Ticket Pricing</h1>
        <div class="row pt-3">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-font fw-bold fs-1" style="color: #9eb23b;"><i
                                class="fas fa-baby"></i> Child</h5>
                        <p class="card-text">
                            <i class="fas fa-indian-rupee-sign"></i> 150 per person
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-font fw-bold fs-1" style="color: #9eb23b;"><i
                                class="fas fa-child-reaching"></i> Adult</h5>
                        <p class="card-text">
                            <i class="fas fa-indian-rupee-sign"></i> 250 per person
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-font fw-bold fs-1" style="color: #9eb23b;"><i
                                class="fas fa-male"></i> Senior</h5>
                        <p class="card-text">
                            <i class="fas fa-indian-rupee-sign"></i> 200 per person
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center" style="background-color: #016a70;">
                <h1 class="text-font-2 color-4">ZOO TICKET</h1>
            </div>
            <div class="card-body bg-color-1 pt-5">
                <div class="mx-5">
                    <form method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Name</span>
                                    <input type="text" class="form-control text-font" name="name" id="name"
                                        value="<?php echo $_SESSION['name'] ?>" required>
                                </div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Email:</span>
                                    <input type="text" class="form-control text-font"name="email" id="email"
                                        value="<?php echo $_SESSION['email'] ?>" required
                                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                                </div>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>

                        <!-- Child, Adult, Senior -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Child</span>
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="decrement('child')">-</button>
                                    <input type="text" class="form-control text-font" name="child" id="child" value="0">
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="increment('child')">+</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Adult:</span>
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="decrement('adult')">-</button>
                                    <input type="text" class="form-control text-font" name="adult" id="adult" value="0">
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="increment('adult')">+</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Senior:</span>
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="decrement('senior')">-</button>
                                    <input type="text" class="form-control text-font" name="senior" id="senior"
                                        value="0">
                                    <button type="button" class="btn btn-secondary text-font"
                                        onclick="increment('senior')">+</button>
                                </div>
                            </div>
                        </div>

                        <!-- Date and Total -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Date:</span>
                                    <input type="date" class="form-control text-font" name="date" id="date" required>
                                </div>
                                <div class="invalid-feedback">Please select a date.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-warning">Total:</span>
                                    <input type="text" class="form-control text-font" name="total" id="total"
                                        name="total" value="0">
                                    <span class="input-group-text bg-warning">&#x20B9;</span>
                                </div>
                                <div class="invalid-feedback invalid-feedback-total">Select at least one person.</div>
                            </div>
                        </div>

                        <!-- Buy and Clear Buttons -->
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-warning text-primary fw-bold btn-lg" id="buy"
                                    onclick="validateForm()" name="add">Buy</button>
                                <button class="btn btn-outline-secondary fw-bold btn-lg" id="clear"
                                    onclick="clearForm()">Clear</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <br><br><br>


    <!-- -------------------------------------------------------------------------------------------- -->

    <script>
        var childCount = 0;
        var adultCount = 0;
        var seniorCount = 0;

        // Update the total based on counts
        function updateTotal() {
            var childPrice = 150;
            var adultPrice = 250;
            var seniorPrice = 200;

            var total = (childCount * childPrice) + (adultCount * adultPrice) + (seniorCount * seniorPrice);

            $('#total').val(total);
        }

        // Increment and Decrement functions
        function increment(category) {
            if (category === 'child') {
                childCount++;
                $('#child').val(childCount);
            } else if (category === 'adult') {
                adultCount++;
                $('#adult').val(adultCount);
            } else if (category === 'senior') {
                seniorCount++;
                $('#senior').val(seniorCount);
            }

            updateTotal();
        }

        function decrement(category) {
            if (category === 'child' && childCount > 0) {
                childCount--;
                $('#child').val(childCount);
            } else if (category === 'adult' && adultCount > 0) {
                adultCount--;
                $('#adult').val(adultCount);
            } else if (category === 'senior' && seniorCount > 0) {
                seniorCount--;
                $('#senior').val(seniorCount);
            }

            updateTotal();
        }



        $('#clear').click(function () {
            // Clear the form and counts
            childCount = 0;
            adultCount = 0;
            seniorCount = 0;
            $('#child').val('0');
            $('#adult').val('0');
            $('#senior').val('0');
            $('#date').val('');
            $('#total').text('0');
        });

        $(document).ready(function () {
            // Function to validate an input field
            function validateInput(input, pattern, errorSelector, errorMessage) {
                var value = input.val();
                if (value === "" || !pattern.test(value)) {
                    input.addClass("is-invalid");
                    errorSelector.text(errorMessage).show();
                    return false;
                } else {
                    input.removeClass("is-invalid");
                    errorSelector.text("").hide();
                    return true;
                }
            }

            // Email validation pattern
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            // Add blur event listeners to input fields
            $("#name").blur(function () {
                validateInput($(this), /^.+$/, $(".invalid-feedback-name"), "Please enter your name.");
            });

            $("#email").blur(function () {
                validateInput($(this), emailPattern, $(".invalid-feedback-email"), "Please enter a valid email address.");
            });

            $("#date").blur(function () {
                if ($(this).val() === "") {
                    $(this).addClass("is-invalid");
                    $(".invalid-feedback-date").text("Please select a date.").show();
                } else {
                    $(this).removeClass("is-invalid");
                    $(".invalid-feedback-date").text("").hide();
                }
            });

            // Function to calculate the total and check if it's greater than 0
            function calculateTotal() {
                var child = parseInt($("#child").val());
                var adult = parseInt($("#adult").val());
                var senior = parseInt($("#senior").val());
                var total = child + adult + senior;

                if (total <= 0) {
                    $("#total").addClass("is-invalid");
                    $(".invalid-feedback-total").text("Select at least one person.").show();
                    return false;
                } else {
                    $("#total").removeClass("is-invalid");
                    $(".invalid-feedback-total").text("").hide();
                    return true;
                }
            }

            // Add input event listeners to quantity fields (Child, Adult, Senior) for immediate validation
            $("#child, #adult, #senior").on("input", function () {
                calculateTotal();
            });

            // Validate the form on Buy button click
            $("#buy").click(function (e) {
                // Trigger blur for all input fields to perform validation
                $("#name, #email, #date").blur();

                // Calculate the total and check if it's greater than 0
                if (calculateTotal()) {
                    var totalValue = $("#total").val();
                } else {

                }
            });
        });


    </script>

</body>

</html>