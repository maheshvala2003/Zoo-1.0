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
    <title>PAYMENT</title>

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
                <a class="nav-link fw-bold" href="index.php">User Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="ticket.php">Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-danger active fw-bold" href="payment.php">Payment</a>
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

    <div class="container mx-5">

        <div>
            <h1 class="display-4 text-center fw-bolder text-danger">PAYMENT DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Card Number</th>
                    <th>Cardholder Name</th>
                    <th>Expiry Date</th>
                    <th>CVV CODE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `card`";
                $result = $cn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['expiry']; ?></td>
                        <td><?php echo $row['cvc']; ?></td>
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