<?php
include 'config.php';

if(isset($_POST['login'])){
    $r_userEmail = $_POST['email'];
    $r_pass = $_POST['password'];
    $query1 = "SELECT * 
    FROM `dbtable` WHERE email = '$r_userEmail' And password = '$r_pass'";
    $res = mysqli_query($conn , $query1);

    if(mysqli_num_rows($res)){
        session_start();
        $_SESSION['email'] = $r_userEmail;
       echo "<script> location.href='home.php?email=". $r_userEmail."' </script>";

    }
    else{
        echo "<script> alert('Email & Password is incorrect!')</script>";
        echo "<script> location.href='login.html'</script>";
    }
}
?>