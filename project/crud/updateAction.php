<?php
    include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    $image = $_FILES['img']; 
    $imageLocation = $_FILES['img']['tmp_name'];
    $imageName = $_FILES['img']['name'];
    $img_des = "image/".$imageName;
    move_uploaded_file($imageLocation, $img_des);

    $updateQuery = "UPDATE `product` SET `name`='$name',`price`='$price',`image`='$img_des' WHERE id = '$id'";

    if(mysqli_query($conn, $updateQuery))
    {
        echo "<script>alert('Updated....!!!')</script>";
        echo "<script>location.href='../admin.php'</script>";
    }
