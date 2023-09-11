<?php
include 'config.php';
$id = $_GET['id'];
// echo $id;
$deleteQuery = "DELETE FROM `product` WHERE id = '$id'";
mysqli_query($conn, $deleteQuery);
if (isset($_COOKIE['amind'])) {
    setcookie("admin", time() - (86400 * 30), "/");
} else {
    setcookie("customer", time() - (86400 * 30), "/");
}

header("Location:../admin.php");
