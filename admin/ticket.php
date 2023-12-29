<?php

include "../database/connect.php";

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
    <title>TICKET</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../images/admin/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/admin/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/admin/favicon/site.webmanifest">

    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/adminbootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@500;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap.min.js"></script>

</head>

<body>
    <div class="m-lg-4">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link  fw-bold" href="index.php">User Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-warning fw-bold" href="ticket.php">Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="payment.php">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="animal.php">Animal Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="admin.php">Admin Data</a>
            </li>
            <form method="POST">
                <button type="submit" name="logout" class="nav-link mx-2 text-font bg-white">Logout</button>
            </form>
        </ul>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <i class="fas fa-baby fa-3x mt-3"></i>
                    <h2 class="card-title mt-3 fw-bold text-warning">
                        <?php
                        $select = "SELECT SUM(child) AS total_child FROM ticket;";
                        $result = $cn->query($select);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $totalChild = $row['total_child'];

                            echo $totalChild;
                        } else {
                            echo "Error in query: ";
                        }
                        ?>
                    </h2>
                    <p class="card-text mb-3">Total Child</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <i class="fas fa-child-reaching fa-3x mt-3"></i>
                    <h2 class="card-title mt-3 fw-bold text-warning">
                        <?php

                        $select = "SELECT SUM(adult) AS total_adult FROM ticket;";
                        $result = $cn->query($select);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $totalAdult = $row['total_adult'];

                            echo $totalAdult;
                        }
                        ?>
                    </h2>
                    <p class="card-text mb-3">Total Adult</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <i class="fas fa-child fa-3x mt-3 "></i>
                    <h2 class="card-title mt-3 fw-bold text-warning">
                        <?php

                        $select = "SELECT SUM(senior) AS total_senior FROM ticket;";
                        $result = $cn->query($select);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $totalSenior = $row['total_senior'];

                            echo $totalSenior;
                        }
                        ?>
                    </h2>
                    <p class="card-text mb-3">Total Senior</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <i class="fas fa-inr fa-3x mt-3"></i>
                    <h2 class="card-title mt-3 fw-bold text-warning">&#8377; 
                    <?php

                        $select = "SELECT SUM(total) AS total_total FROM ticket;";
                        $result = $cn->query($select);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $totalTotal = $row['total_total'];

                            echo $totalTotal;
                        }
                        ?>
                    </h2>
                    <p class="card-text mb-3">Total Revenue</p>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="container mx-5">

        <div>
            <h1 class="display-4 text-center fw-bolder text-warning">TICKET DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Child</th>
                    <th>Adult</th>
                    <th>Senior</th>
                    <th>Date</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `ticket`";
                $result = $cn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['child']; ?>
                        </td>
                        <td>
                            <?php echo $row['adult']; ?>
                        </td>
                        <td>
                            <?php echo $row['senior']; ?>
                        </td>
                        <td>
                            <?php echo $row['date']; ?>
                        </td>
                        <td>
                            <?php echo $row['total']; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <script>
        $(document).ready(function () {
            $("#myTable").dataTable();
        });
    </script>

</body>

</html>