<?php

session_start();
include 'crud/config.php';
$email = $_POST['email'];
$l_pass = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$l_pass'");

if (mysqli_num_rows($result)) {
    $_SESSION['email'] = $email;

    if ($email == "cse_2012020348@lus.ac.bd") {
        setcookie("admin", $email, time() + (86400 * 30), "/");
        echo "<script>location.href='admin.php'</script>";
    } else {
        setcookie("customer", $email, time() + (86400 * 30), "/");
        echo "<script>location.href='homeProduct.php'</script>";
    }
} else {
    echo "<script>alert('email and Password is not matching !!')</script>";
    echo "<script>location.href='login.php'</script>";
}
