<?php 

include "../database/connect.php";

session_start();

if(isset($_POST['add']))
{
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $select = "SELECT * FROM `admin` WHERE id='$id' AND pass='$pass'";

    $result = $cn->query($select);

    $count = mysqli_num_rows($result);

    if($count > 0)
    {
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../images/admin/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/admin/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/admin/favicon/site.webmanifest">

    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/adminbootstrap.min.css">

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

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-header bg-primary text-white text-center rounded-top">
                <h1 class="text-font fw-bolder m-3">Admin Login</h1>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="adminId" name="id" placeholder="Enter Admin ID">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control " id="passId" name="pass" placeholder="Enter Password">
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-outline-primary">Login</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>