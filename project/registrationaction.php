<?php
include '<crud/config.php';

// Retrieve form data
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$password  = $_POST['pass'];
$confirm_pass = $_POST['cpass'];


$firstname_pattern = "/[A-Za-z .]{3,20}/";
$lastname_pattern = "/[A-Za-z .]{3,20}/";
$phone_pattern = "/^(\+88)?-?01[3-9]\d{8}$/";
$email_pattern = "/^[a-z_.0-9]+@[a-z]{2,}\.[a-z]{2,}(\.[a-z]{2,})?$/";
$password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[a-zA-Z\d!@#$%^&*()]{8,}$/";




if (!preg_match($firstname_pattern, $first_name)) {
    echo "<script> alert('Username length 3-20') </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} elseif (!preg_match($lastname_pattern, $last_name)) {
    echo "<script> alert('Username length 3-20') </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} elseif (!preg_match($email_pattern, $email)) {
    echo "<script> alert('Please enter a valid email address') </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} elseif (!preg_match($phone_pattern, $phone)) {
    echo "<script> alert('Please enter a valid mobile number') </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} elseif (!preg_match($password_pattern, $password)) {
    echo "<script> alert('Please enter Please enter a valid passwordat least 8 characters including at least 1 special character, 1 uppercase letter, 1 lowercase letter, and 1 digit) </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} elseif ($password !== $confirm_pass) {
    echo "<script> alert('password not match') </script>";
    echo "<script> locatio.href='registration.html' </scritp>";
} else {

    $insert_query = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `phone`, `password`)
     VALUES ('$first_name','$last_name','$email','$phone','$password')";
    if (!mysqli_query($conn, $insert_query)) {
        echo "<script> alert('Not Inserted!') </script>";
    } else {
        echo "<script> alert('successfully inserted!!') </script>";
        echo "<script> location.href='login.php' </script>";
        //header("Location:mailer.php");
    }
}
