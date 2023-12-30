<?php //hello

include "database/connect.php"; //Mahesh

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAFARI</title>
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

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


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
                        <form method="POST">
                            <button type="submit" name="logout" class="nav-link text-font">Logout</button>
                        </form>
                    </ul>
                </div>
                <a class="nav-link" href="ticket.php"><button
                        class="btn btn-warning text-primary fw-bold">Ticket</button></a>
            </div>
        </nav>
    </div>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <section class="py-lg-5 py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div>
                        <h3 class="text-font fw-bold color-1"><span class="fa fa-person-hiking">&nbsp;</span>Welcome
                            <?php

                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            } else {
                                echo "Visitor";
                            }

                            ?> to
                        </h3>
                        <h1 class="display-1 mb-3 text-font-2 color-3"><span class="auto-type text-font-2"></span></h1>
                        <p class="pe-lg-4 mb-4 color-1">Explore the world of exotic animals, thrilling adventures, and
                            unforgettable memories. Get ready for an exciting journey into the wild and witness the
                            beauty of nature like never before!</p>
                        <a href="#species" class="btn btn-warning fw-bold fs-5 text-primary">Explore &nbsp;<span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="images/hero/hero.gif" alt="" class="img-fluid" style="padding-left: 25px;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -------------------------------------------------------------------------------------------------------- -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 my-auto p-5">
                <div class="lc-block">
                    <img class="img-fluid" alt="" src="images/hero/hero-2.gif">
                </div>
            </div>
            <div class="col-md-7" style="padding: 6vw;">
                <div class="lc-block mb-3 me-lg-5">
                    <div editable="rich">
                        <h1 class="text-font-2 color-1">Wild Wonders</h1>
                        <p class="fw-bold">Embark on an extraordinary journey through Safari, where you can marvel at
                            Earth's remarkable biodiversity. Delve into the heart of the majestic African Savannah,
                            where powerful lions reign as kings of the wilderness, their regal presence testament to
                            nature's grandeur.</p>
                    </div>
                </div>
                <div class="lc-block">
                    <a class="btn btn-warning fw-bold text-primary mt-2" href="animal.php"
                        role="button">Animals&nbsp;<span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------------------------- -->

    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-paw fa-4x mb-3 text-danger"></i>
                        <h1 class="card-title fw-bolder text-font text-primary-emphasis"><span class="count">450</span>+
                        </h1>
                        <p class="card-text color-1">Species</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-area-chart fa-4x mb-3 text-danger"></i>
                        <h1 class="card-title fw-bold text-font text-primary-emphasis"><span
                                class="count">509</span><span class="fs-5"> ac</span></h1>
                        <p class="card-text color-1">Zoo Area</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-person-hiking fa-4x mb-3 text-danger"></i>
                        <h1 class="card-title fw-bold text-font text-primary-emphasis"><span
                                class="count">264</span><span class="fs-5"> k</span></h1>
                        <p class="card-text color-1">Visitor</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-dog fa-4x mb-3 text-danger"></i>
                        <h1 class="card-title fw-bold text-font text-primary-emphasis"><span class="count">137</span>+
                        </h1>
                        <p class="card-text color-1">Wild Life Saved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------ -->

    <br>
    <h1 id="species" class="display-4 text-center text-font-2 color-3">Species</h1>
    <div class="owl-carousel owl-theme" id="testimonial">
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_1.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_2.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_3.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_4.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_5.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_6.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_7.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_8.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_9.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_10.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_11.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
        <div class="box">
            <div class="col-sm-12">
                <img src="images/slider/animal_12.jpg" class="img-thumbnail bg-warning" alt="">
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------ -->
    <br>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0 text-font color-3">
                        Special Services For
                        <span class="color-1 text-font-2">SAFARI</span> Visitors
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-primary">
                        <div class="h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                            <i class="fa fa-3x fa-mobile-alt color-3"></i>
                            <div class="ms-4">
                                <p class="text-white mb-0">Call for more info</p>
                                <h2 class="color-3 mb-0 text-font">+91 98765 43210</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <i class="fa fa-3x fa-car p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Car Parking</h5>
                    <span>Convenient and secure car parking facilities available for our safari visitors.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-3x fa-camera p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Animal Photos</h5>
                    <span>Capture memorable moments with our amazing animals through photography.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <i class="fa fa-3x fa-map-location-dot p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Guide Services</h5>
                    <span>Knowledgeable guides to enhance your safari experience with insights and information.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-3x fa-cutlery p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Food & Beverages</h5>
                    <span>Enjoy a variety of dining options, including delicious meals and refreshments.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <i class="fa fa-3x fa-shopping-cart p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Zoo Shopping</h5>
                    <span>Explore our unique gift shops for souvenirs and wildlife-themed items.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-3x fa-wifi p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Free Hi-Speed Wi-Fi</h5>
                    <span>Stay connected with fast, complimentary Wi-Fi during your visit.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <i class="fa fa-3x fa-campground p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Playground</h5>
                    <span>Experience the delight of fun, safe play areas for children during your zoo visit.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-3x fa-restroom p-md-3 color-3"></i>
                    <h5 class="mb-3 color-1 text-font fw-bolder">Rest House</h5>
                    <span>Rest in our comfortable rest houses during your exciting safari adventure.</span>
                </div>
            </div>
        </div>
    </div>


    <!-- -------------------------------------------------------------------------------------------------- -->

    <div class="container mt-5">
        <div class="card bg-warning">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body ps-5">
                        <br>
                        <h1 class="text-font-2 display-4 color-1">MAP OF SAFARI ANIMALS</h1>
                        <br>
                        <a href="map.php" class="btn btn-danger fw-bold">Explore Map</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="images/index/map-bg.svg" alt="Image" class="img-fluid" style="padding-left: 150px;">
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------- -->
    <br>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-warning">
                <h1 class="card-title text-center text-font-2" style="color: #016a70;">Zoo Schedule</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><strong class="color-3 fs-5 fw-bold text-font">Day</strong></th>
                            <th><strong class="color-3 fs-5 fw-bold text-font">Opening Hours</strong></th>
                            <th><strong class="color-3 fs-5 fw-bold text-font">Closing Hours</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Monday</strong></td>
                            <td>9:00 AM</td>
                            <td>6:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Tuesday</strong></td>
                            <td>9:00 AM</td>
                            <td>6:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Wednesday</strong></td>
                            <td>9:00 AM</td>
                            <td>6:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Thursday</strong></td>
                            <td>9:00 AM</td>
                            <td>6:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Friday</strong></td>
                            <td>9:00 AM</td>
                            <td>6:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Saturday</strong></td>
                            <td>10:00 AM></td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td><strong class="color-1 fs-5 fw-bold text-font">Sunday</strong></td>
                            <td>10:00 AM></td>
                            <td>7:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br>
    <!-- -------------------------------------------------------------------------------------------- -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 mb-4 p-3">
                <img src="images/animals/1.jpg" class="img-thumbnail" alt="Tour 1">
                <center>
                    <div class="text-font-2" style="color: #016a70;">
                        <h2 class="text-font-2">Find an <br /> <span class="color-1">Cool Safari</span></h2>
                    </div>
                    <h6 class="text-font color-1">$125.99 USD</h6>
                    <h6 class="text-font">Limited Edition</h6>
                    <a class="btn btn-warning text-primary" href="#">Read more</a>
                </center>
            </div>


            <div class="col-md-6 col-xl-4 mb-4">
                <div class="card">
                    <img src="images/animals/2.jpg" class="card-img-top img-thumbnail" alt="Tour 2">
                    <div class="card-body">
                        <h4 class="card-title text-font-2">Meet Rare <br /> <span>Animals</span></h4>
                        <div class="text-font tours-item__price">$225.99 USD</div>
                        <div class="text-font tours-item__edition">Standard Edition</div>
                        <a class="btn btn-primary" href="#">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <div class="card">
                    <img src="images/animals/3.jpg" class="card-img-top img-thumbnail" alt="Tour 3">
                    <div class="card-body">
                        <h4 class="card-title text-font-2">Get Memories <br /> <span>for Life</span></h4>
                        <div class="text-font tours-item__price">$555.99 USD</div>
                        <div class="text-font tours-item__edition">Premium Edition</div>
                        <a class="btn btn-primary" href="#">Read more</a>
                    </div>
                </div>
            </div>

            <!-- Repeat the above structure for the remaining tours -->

        </div>
    </div>


    <!-- -------------------------------------------------------------------------------------------- -->
    <br><br>
    <footer class="text-center py-3 text-white" style="background-color: #016a70;">
        Made with <span class="fa fa-heart text-warning"></span> by <span class="color-2" href="">SAFARI</span>
    </footer>

    <!-- -------------------------------------------------------------------------------------------- -->

    <!-- SCRIPT TYPED.JS -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: ["Thrill", "Journey", "SAFARI", "JUNGLE"],
            typeSpeed: 150,
            backSpeed: 50,
            loop: true
        });
    </script>

    <!-- SCRIPT COUNTER UP -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.count').counterUp({
            delay: 10,
            time: 1500
        });
    </script>

    <!-- OWL CAROUSEL -->
    <script src="js/jquery-3.6.2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#slider").owlCarousel({
                items: 1,
                nav: true,
                loop: true,
                animateIn: 'animate__fadeInDown',
                animateOut: 'animate__fadeOutLeft',
            });
            $("#testimonial").owlCarousel({
                items: 5,
                nav: false,
                loop: true,
                center: true,
                margin: 25,
            });
        })
    </script>

</body>

</html>