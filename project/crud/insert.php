<?php

include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_FILES['image'];

//print_r($image);

$imageLocation = $_FILES['image']['tmp_name'];

$imageName = $_FILES['image']['name'];

$img_des = "image/" . $imageName;

//echo "<br><br>".$img_des;

move_uploaded_file($imageLocation, $img_des);

$insert_query = "INSERT INTO `product`(`name`, `price`, `image`,`category`) VALUES ('$name','$price','$img_des','$category')";

if (mysqli_query($conn, $insert_query)) {
  echo "<script>alert('Inserted')</script>";
  echo "<script>location.href='../admin.php'</script>";
}
    //echo "<br><br>".$imageLocation;
