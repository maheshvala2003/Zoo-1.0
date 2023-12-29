<?php

    include "database/connect.php";

    session_start();

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/Exception.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("location:login.php");
    }

    if (isset($_POST['add'])) {

        $email = $_POST['email'];
        $number = $_POST['number'];
        $name = $_POST['name'];
        $expiry = $_POST['expiry'];
        $cvc = $_POST['cvc'];

        $insert = "INSERT INTO `card`(`email`, `number`, `name`, `expiry`, `cvc`) VALUES ('$email','$number','$name','$expiry','$cvc')";

        $result = $cn->query($insert);


        if ($result) {


            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication

                $mail->Username = 'fid395010@gmail.com'; //SMTP username
                $mail->Password = 'bqtuehgllvziickt'; //SMTP password

                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
                $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('fid395010@gmail.com', 'SAFARI');

                $mail->addAddress($_SESSION['email']); //Name is optional

                $name = $_SESSION['name'];
                $child = $_SESSION['child'];
                $adult = $_SESSION['adult'];
                $senior = $_SESSION['senior'];
                $total = $_SESSION['total'];
                $date = $_SESSION['date'];
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = "$name Your SAFARI Adventure Is Confirmed!";
                $mail->Body = '<h1 style="color:#aac83e;">Your ticket is confirmed with the following details:</h1><h3 style="color:#016A70;"><br><hr>Child: ' . $child . ' <hr> Adult: ' . $adult . '<hr> Senior: ' . $senior . '<hr> Date: ' . $date . '<hr> Rupees: &#8377;' . $total . '<hr></h3><br>';

                if($mail->send()){
                    header("location:index.php");
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARD</title>

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

    <!-- CARD -->
    <link rel="stylesheet" href="lib/card-master/dist/card.css">


</head>

<body class="body">
    <div class="container">
        <br>
        <nav class="navbar navbar-expand-lg navbar-success bg-custom">
            <div id="nav-container" class="container">
                <a class="navbar-brand" id="logo" href="">SAFARI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
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
                        <li class="nav-item">
                            <a class="nav-link" href="animal.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link" href="ticket.php"><button
                        class="btn btn-warning text-primary fw-bold">Ticket</button></a>
            </div>
        </nav>
    </div>

    <!-- ------------------------------------------------------------------------------------------------ -->

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center" style="background-color: #016a70;">
                <h1 class="text-font-2 color-4">Payment Details</h1>
            </div>
            <div class="card-body bg-color-1 pt-5">
                <div class="mx-5">
                    <div class="row">
                        <div class="col-md-6 pt-xxl-5">
                            <div class="card-wrapper"></div>
                        </div>
                        <div class="col-md-6">
                            <form class="needs-validation" method="POST" id="payment-form" novalidate>
                                <div class="form-group input-group">
                                    <span class="input-group-text bg-warning">Email</span>
                                    <input type="email" class="form-control text-font" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                                </div>
                                <div class="form-group input-group mt-3">
                                    <span class="input-group-text bg-warning">Card Number</span>
                                    <input type="text" class="form-control text-font" id="number" name="number"
                                        required>
                                    <div class="invalid-feedback invalid-feedback-number">Please enter a valid 16-digit
                                        card number.</div>
                                </div>
                                <div class="form-group input-group mt-3">
                                    <span class="input-group-text bg-warning">Cardholder Name</span>
                                    <input type="text" class="form-control text-font" id="name" name="name" required>
                                    <div class="invalid-feedback invalid-feedback-name">Please enter the cardholder's
                                        name.</div>
                                </div>
                                <div class="form-group input-group mt-3">
                                    <span class="input-group-text bg-warning">Expiry Date</span>
                                    <input type="text" class="form-control text-font" id="expiry" name="expiry"
                                        required>
                                    <div class="invalid-feedback invalid-feedback-expiry">Please enter a valid expiry
                                        date.</div>
                                </div>
                                <div class="form-group input-group mt-3">
                                    <span class="input-group-text bg-warning">CVV CODE</span>
                                    <input type="text" class="form-control text-font" id="cvc" name="cvc" required>
                                    <div class="invalid-feedback invalid-feedback-cvc">Please enter a valid 3-digit CVV
                                        code.</div>
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-warning text-primary fw-bold" name="add" type="submit">Pay</button>
                                        <button class="btn btn-outline-secondary fw-bold" type="reset">Clear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <!-- ------------------------------------------------------------------------------------------------ -->

    <script src="lib/card-master/dist/card.js"></script>
    <script src="lib/card-master/dist/jquery.card.js"></script>
    <script>
        // jQuery
        $('form').card({
            container: '.card-wrapper'
        });

        // Vanilla JavaScript
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
        $('form').card({

            // number formatting
            formatting: true,

            // selectors
            formSelectors: {
                numberInput: 'input[name="number"]',
                expiryInput: 'input[name="expiry"]',
                cvcInput: 'input[name="cvc"]',
                nameInput: 'input[name="name"]'
            },
            cardSelectors: {
                cardContainer: '.jp-card-container',
                card: '.jp-card',
                numberDisplay: '.jp-card-number',
                expiryDisplay: '.jp-card-expiry',
                cvcDisplay: '.jp-card-cvc',
                nameDisplay: '.jp-card-name'
            },

            // custom messages
            messages: {
                validDate: 'valid\nthru',
                monthYear: 'month/year'
            },

            // custom placeholders
            placeholders: {
                number: '&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;',
                cvc: '&bull;&bull;&bull;',
                expiry: '&bull;&bull;/&bull;&bull;',
                name: 'Full Name'
            },

            masks: {
                cardNumber: true
            },

            classes: {
                valid: 'jp-card-valid',
                invalid: 'jp-card-invalid'
            },

            // debug mode
            debug: true

        });
    </script>
</body>
</html>