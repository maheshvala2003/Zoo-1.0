<?php

include "../database/connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $insert = "INSERT INTO `admin`(`id`, `pass`) VALUES ('$id','$pass')";

    $result = $cn->query($insert);

    if ($result) {
        header("location:admin.php");
    } else {
        echo "error";
    }
}

if (isset($_POST['btnupdate'])) {

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $update = "UPDATE `admin` SET `id`='$id',`pass`='$pass' WHERE id=$_GET[edit]";

    $result = $cn->query($update);

    if ($result) {
        header("location:admin.php");
    }
}

if (isset($_GET['edit'])) {
    $sel = "select * from admin where id=$_GET[edit]";
    $result = $cn->query($sel);
    $row = mysqli_fetch_array($result);
}

if (isset($_GET['del'])) {
    $del = "DELETE FROM `admin` WHERE id=$_GET[del]";
    $result = $cn->query($del);
    header("location:admin.php");
}

if (isset($_POST['clear'])) {
    header("location:admin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

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
                <a class="nav-link fw-bold" href="payment.php">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="animal.php">Animal Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-info fw-bold" href="admin.php">Admin Data</a>
            </li>
            <form method="POST">
                <button type="submit" name="logout" class="nav-link mx-2 text-font bg-white">Logout</button>
            </form>
        </ul>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width: 800px;">
            <div class="card-header bg-info text-white text-center rounded-top">
                <h1 class="text-font fw-bolder m-3">ADD ADMIN</h1>
            </div>
            <div class="card-body">
                <form id="addAdminForm" method="POST">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-info text-white"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="adminId" name="id" value="<?php if(isset($_GET['edit'])) echo $row['id'] ?>"
                                placeholder="Enter Admin ID" required>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-info text-white"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="pass" value="<?php if(isset($_GET['edit'])) echo $row['pass'] ?>"
                                placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="text-center">
                    <?PHP if (isset($_GET['edit'])) { ?>
                        <button type="submit" class="btn btn-outline-warning" name="btnupdate">UPDATE</button>
                        <button type="submit" name="clear" class="btn btn-outline-secondary">CANCEL</button>
                    <?PHP } else { ?>
                        <button type="submit" class="btn btn-outline-info" name="add">Add</button>
                        <button type="reset" class="btn btn-outline-secondary ml-2">Clear</button>
                    <?PHP } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>

    <div class="container mx-5">
        <div>
            <h1 class="display-4 text-center fw-bolder text-info">ADMIN DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `admin`";
                $result = $cn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['pass']; ?>
                        </td>
                        <td>
                            <a href="admin.php?edit=<?PHP echo $row['id']; ?>" class="btn btn-outline-warning btn-sm"><span
                                    class="fa fa-edit"></span></a>
                            <a href="admin.php?del=<?PHP echo $row['id']; ?>"
                                onclick="return confirm('ARE YOU SURE TO DELETE?');"
                                class="btn btn-outline-danger btn-sm"><span class="fa fa-trash"></span></a>
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