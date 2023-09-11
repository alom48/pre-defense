<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Do not access from URL')</script>";
    echo "<script>location.href='login.php'</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="homeStyle.css">
    <title>ProductSite</title>
</head>

<body style="background-color:#f5f7fa">
    <?php
    echo '<nav class="navbar navbar-expand-md shadow-sm mt-2 justify-content-center" style="height:50px">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-item nav-link px-3" href="mainpage.php">Home</a>
                <a class="nav-item nav-link px-3" href="#">Learning</a>
                <a class="nav-item nav-link px-3" href="homeProduct.php">Product</a>
                <a class="nav-item nav-link px-3" href="careerHome.php">Career</a>
                <a class="nav-item nav-link px-3 justify-content-end" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>'; ?>

    <div class="container">
        <h2 class=" mt-5 text-dark">laptop</h2>
        <div class="row g-5">
            <?php
            include 'crud/config.php';

            $allData = mysqli_query($conn, "SELECT * FROM `product` WHERE `category`='computer'");

            while ($row = mysqli_fetch_array($allData)) {
                echo "
                <div class='col-md-3'>
                    <div class='card h-100'>
                        <img src='$row[image]' class='img-fluid h-75' alt='$row[name]'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text fs-4' style='font-weight:bold'>৳ $row[price]</p>
                             <a href='laptop.html' class='btn btn-primary mb-3 d-block' style='background-color: #333; border-color: #333;'>Details</a>
                            
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>

        <h2 class=" mt-5 text-dark">Mouses</h2>
        <div class="row g-5">
            <?php
            include 'crud/config.php';

            $allData = mysqli_query($conn, "SELECT * FROM `product` WHERE `category`='mouse'");

            while ($row = mysqli_fetch_array($allData)) {
                echo "
                <div class='col-md-3'>
                    <div class='card h-100'>
                        <img src='$row[image]' class='img-fluid h-75' alt='$row[name]'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text fs-4' style='font-weight:bold'>৳ $row[price]</p>
                            <a href='mouse.html' class='btn btn-primary mb-3 d-block' style='background-color: #333; border-color: #333;'>Details</a>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>

        <h2 class=" mt-5 text-dark">Keyboards</h2>
        <div class="row g-5">
            <?php
            include 'crud/config.php';

            $allData = mysqli_query($conn, "SELECT * FROM `product` WHERE `category`='keyboard'");

            while ($row = mysqli_fetch_array($allData)) {
                echo "
                <div class='col-md-3'>
                    <div class='card h-100'>
                        <img src='$row[image]' class='img-fluid h-75' alt='$row[name]'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text fs-4' style='font-weight:bold'>৳ $row[price]</p>
                            <a href='keyboard.html' class='btn btn-primary mb-3 d-block' style='background-color: #333; border-color: #333;'>Details</a>

                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>