<?php
session_start();
//echo "admin Page";
if (isset($_SESSION['email']) && isset($_COOKIE['admin'])) {
    // echo "<a href='logout.php'><input type = 'button' value='logout' name='logout'></a>";
    //echo "Welcome to admin";
} else {
    echo "<script>alert('Do not access from URL')</script>";
    echo "<script>location.href='admin.php'</script>";
    // echo "<script>location.href='login.html'</script>";
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
</head>

<body style="background-color: #009C8D;">

    <div class="container" style="background-color: #009C8D;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 my-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h3 class="bold text-dark">Available Products</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mb-2 ms-2">
                            <a class="btn btn-warning" href="mainpage.php">
                                <i class="fas fa-sign-out-alt"></i> Home
                            </a>
                        </li>
                        <li class="nav-item mb-2 ms-2">
                            <a class="btn btn-warning" href="crud/index.php">
                                <i class="fas fa-sign-out-alt"></i> Insert
                            </a>
                        </li>
                        <li class="nav-item mb-2 ms-2">
                            <a class="btn btn-warning" href="registration.html">
                                <i class="fas fa-sign-out-alt"></i> Registration
                            </a>
                        </li>
                        <li class="nav-item mb-2 ms-2">
                            <a class="btn btn-warning" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include 'crud/config.php';

                $allData = mysqli_query($conn, "SELECT * FROM `product`");

                while ($row = mysqli_fetch_array($allData)) {
                    echo "
                            <tr>                               
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[price]</td>
                                <td> <img width='100px' src='$row[image]' alt=''></td>
                                <td><a class='btn btn-warning' href='crud/update.php? id=$row[id]'>Update</a></td>
                                <td><a class='btn btn-danger del' href='crud/delete.php? id=$row[id]'>Delete</a></td>
                            </tr>
                        ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>