<?php
include 'dbconfig.php';
$companyName = $_POST['companyName'];
$jobTitle = $_POST['jobTitle'];
$jobLocation = $_POST['jobLocation'];
$jobCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
$jobVacancy = $_POST['vacancy'];
$jobContext = nl2br($_POST['jobContext']);
$jobResponsibility = nl2br($_POST['jobRes']);
$jobEduReq = nl2br($_POST['eduReq']);
$jobExpReq = nl2br($_POST['expReq']);
$jobAddReq = nl2br($_POST['addReq']);
$jobSalary = $_POST['salary'];
$jobOtherInfo = $_POST['otherInfo'];
$jobDeadline = $_POST['appDeadline'];

$jobID = rand(00000, 99999);
if ($query = mysqli_query($connection, "INSERT INTO `jobs`(`ID`, `Status`, `Category`, `companyName`, `jobTitle`, `JobLocation`, `jobVacancy`, `jobContext`, `jobResp`, `jobEduReq`, `jobExpReq`, `jobAddReq`, `jobSalary`, `jobOtherInfo`, `jobDeadline`) VALUES ('$jobID','approved','$jobCategory','$companyName','$jobTitle','$jobLocation','$jobVacancy','$jobContext','$jobResponsibility','$jobEduReq','$jobExpReq','$jobAddReq','$jobSalary','$jobOtherInfo','$jobDeadline')")) {
    header("location:careerHome.php");
} else
    echo mysqli_connect_error();
