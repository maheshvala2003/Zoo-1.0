<?php

include "../database/connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $habitat = $_POST['habitat'];
    $diet = $_POST['diet'];
    $range = $_POST['range'];
    $desc = $_POST['desc'];

    $filename = $_FILES["animalImage"]["name"];
    $tmp_name = $_FILES["animalImage"]["tmp_name"];

    $folder = "../images/animals/" . $filename;

    $insert = "INSERT INTO `animal`(`name`, `weight`, `height`, `habitat`, `diet`, `range`, `desc`, `img`) VALUES ('$name','$weight','$height','$habitat','$diet','$range','$desc','$filename')";

    $result = $cn->query($insert);

}

if (isset($_POST['btnupdate'])) {

    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $habitat = $_POST['habitat'];
    $diet = $_POST['diet'];
    $range = $_POST['range'];
    $desc = $_POST['desc'];

    $filename = $_FILES["animalImage"]["name"];
    $tmp_name = $_FILES["animalImage"]["tmp_name"];

    $folder = "../images/animals/" . $filename;

    $update = "UPDATE `animal` SET `name`='$name',`weight`='$weight',`height`='$height',`habitat`='$habitat',`diet`='$diet',`range`='$range',`desc`='$desc',`img`='$filename' WHERE id=$_GET[edit]";

    $result = $cn->query($update);

    if ($result) {
        header("location:animal.php");
    }
}

if (isset($_GET['edit'])) {
    $sel = "select * from animal where id=$_GET[edit]";
    $result = $cn->query($sel);
    $row = mysqli_fetch_array($result);
}

if (isset($_GET['del'])) {
    $del = "DELETE FROM `animal` WHERE id=$_GET[del]";
    $result = $cn->query($del);
    header("location:animal.php");
}

if (isset($_POST['clear'])) {
    header("location:animal.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAL</title>

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
                <a class="nav-link active bg-success fw-bold" href="animal.php">Animal Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="admin.php">Admin Data</a>
            </li>
            <form method="POST">
                <button type="submit" name="logout" class="nav-link mx-2 text-font bg-white">Logout</button>
            </form>
        </ul>
    </div>



    <div class="card mt-4 mx-auto" style="max-width: 1300px;">
        <div class="card-header bg-success text-white text-center rounded-top">
            <h1 class="text-font display-5 fw-bolder m-3">ADD ANIMAL</h1>
        </div>
        <div class="card-body">
            <form id="animalForm" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i
                                        class="fa fa-signature"></i></span>
                                <input type="text" class="form-control" id="animalName" name="name"
                                    placeholder="Animal Name" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['name']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i class="fa fa-weight"></i></span>
                                <input type="text" class="form-control" id="animalWeight" name="weight"
                                    placeholder="Weight" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['weight']; ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i
                                        class="fa fa-arrows-v"></i></span>
                                <input type="text" class="form-control" id="animalHeight" name="height"
                                    placeholder="Height" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['height']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i class="fa fa-tree"></i></span>
                                <input type="text" class="form-control" id="animalHabitat" name="habitat"
                                    placeholder="Habitat" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['habitat']; ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i
                                        class="fa fa-utensils"></i></span>
                                <input type="text" class="form-control" id="animalDiet" name="diet"
                                    placeholder="Main Diet" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['diet']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i
                                        class="fa fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control" id="animalRange" name="range"
                                    placeholder="Range" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['range']; ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i
                                        class="fa fa-file-alt"></i></span>
                                <input type="text" class="form-control" id="animalDescription" name="desc"
                                    placeholder="Description" value="<?PHP if (isset($_GET['edit']))
                                        echo $row['desc']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i class="fa fa-image"></i></span>
                                <input type="file" class="form-control" id="animalImage" name="animalImage" 
                                    accept="image/*" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <?PHP if (isset($_GET['edit'])) { ?>
                        <button type="submit" class="btn btn-outline-warning" name="btnupdate">UPDATE</button>
                        <button type="submit" name="clear" class="btn btn-outline-secondary">CANCEL</button>
                    <?PHP } else { ?>
                        <button type="submit" class="btn btn-outline-success" name="add">Add</button>
                        <button type="reset" class="btn btn-outline-secondary ml-2">Clear</button>
                    <?PHP } ?>
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="container mx-5">

        <div>
            <h1 class="display-4 text-center fw-bolder text-success">ANIMAL DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Habitat</th>
                    <th>Main Diet</th>
                    <th>Range</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `animal`";
                $result = $cn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['weight']; ?>
                        </td>
                        <td>
                            <?php echo $row['height']; ?>
                        </td>
                        <td>
                            <?php echo $row['habitat']; ?>
                        </td>
                        <td>
                            <?php echo $row['diet']; ?>
                        </td>
                        <td>
                            <?php echo $row['range']; ?>
                        </td>
                        <td>
                            <?php echo $row['desc']; ?>
                        </td>
                        <td>
                            <img src="../images/animals/<?php echo $row['img']; ?>" alt="" height="100px">        
                        </td>
                        <td>
                            <a href="animal.php?edit=<?PHP echo $row['id']; ?>" class="btn btn-outline-warning btn-sm"><span
                                    class="fa fa-edit"></span></a>
                            <a href="animal.php?del=<?PHP echo $row['id']; ?>"
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