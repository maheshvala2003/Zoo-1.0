<?php

include "database/connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>

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

    <!-- ------------------------------------------------------------------------------------------------ -->
    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="display-3 card-title mx-5 text-font-2" style="color: #016a70;">Animals</h1>
                    <div class="input-group mx-5" style="width: 300px;">
                        <form method="POST">
                            <input type="text" name="find" class="form-control text-font"
                                style="float: left; width: 80%;" aria-label="Search animals">
                            <button class="btn btn-secondary" name="search" style="float: right; width: 20%;"><span
                                    class="fa fa-magnifying-glass"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------ -->

    <?php

    if (isset($_POST['search'])) {
        $find = $_POST['find'];
        $select = "SELECT * FROM `animal` WHERE name LIKE '%$find%'";
        $result = $cn->query($select);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="container mt-3">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/animals/<?php echo $row['img'] ?>" class="img-thumbnail m-3" alt="Animal Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body m-3">
                                    <h1 class="color-1 text-font-2">
                                        <?php echo $row['name']; ?>
                                    </h1>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mt-4">
                                                <li><strong class="color-1 text-font fw-bold">Weight:</strong>
                                                    <?php echo $row['weight']; ?>
                                                </li>
                                                <li><strong class="color-1 text-font fw-bold">Height:</strong>
                                                    <?php echo $row['height']; ?>
                                                </li>
                                                <li><strong class="color-1 text-font fw-bold">Habitat:</strong>
                                                    <?php echo $row['habitat']; ?>
                                                </li>
                                                <li><strong class="color-1 text-font fw-bold">Main Diet:</strong>
                                                    <?php echo $row['diet']; ?>
                                                </li>
                                                <li><strong class="color-1 text-font fw-bold">Range:</strong>
                                                    <?php echo $row['range']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="card-text mt-3">
                                                <?php echo $row['desc']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<div class="container mt-4">
            <div class="card text-center bg-warning">
                <div class="card-body">
                    <h1 class="card-title text-font-2 text-danger">No Animal Found</h1>
                </div>
            </div>
        </div>
        ';
        }
    } else {
        $select = "SELECT * FROM `animal` ORDER BY id desc";
        $result = $cn->query($select);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="container mt-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="images/animals/<?php echo $row['img'] ?>" class="img-thumbnail m-3" alt="Animal Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body m-3">
                                <h1 class="color-1 text-font-2">
                                    <?php echo $row['name']; ?>
                                </h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mt-4">
                                            <li><strong class="color-1 text-font fw-bold">Weight:</strong>
                                                <?php echo $row['weight']; ?>
                                            </li>
                                            <li><strong class="color-1 text-font fw-bold">Height:</strong>
                                                <?php echo $row['height']; ?>
                                            </li>
                                            <li><strong class="color-1 text-font fw-bold">Habitat:</strong>
                                                <?php echo $row['habitat']; ?>
                                            </li>
                                            <li><strong class="color-1 text-font fw-bold">Main Diet:</strong>
                                                <?php echo $row['diet']; ?>
                                            </li>
                                            <li><strong class="color-1 text-font fw-bold">Range:</strong>
                                                <?php echo $row['range']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="card-text mt-3">
                                            <?php echo $row['desc']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

    <br>
    <br>

</body>

</html>