<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAP</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon//site.webmanifest">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/custom.css">

    <!-- JS -->
    <script src="js/script.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-body">
                <h1 class="display-3 card-title mx-5 text-center text-font-2" style="color: #016a70;">Zoo Map</h1>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5" height="300px">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.523/build/spline-viewer.js"></script>
        <spline-viewer hint loading-anim-type="spinner-small-light"
            url="https://prod.spline.design/508wRdZTDkQZjQNi/scene.splinecode"></spline-viewer>
    </div>
</body>

</html>