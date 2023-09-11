<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/src/Exception.php';
require 'phpMailer/src/PHPMailer.php';
require 'phpMailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'techwebteam2023@gmail.com';
    $mail->Password = 'cdfvxvrymdvgkabs';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('techwebteam2023@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $otp = rand(000000, 999999);
    $mail->Subject = 'Verify using OTP';
    $mail->Body = '<p style="font-size:20px">Greetings from the Tech Web team. You are just one step away from creating your account.<br>Please verify using this 6-digit OTP:<br><b style="font-size:24px">' . "$otp" . '</b>';

    $mail->send();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login or Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="align-items-center" style="display:flex; height:100vh">
        <div class="container shadow rounded color-red" style="height:350px; width:750px; flex-direction:column;">
            <h2 class="mt-5" style="padding-left: 65px;">Verify your email address:</h2>
            <form>
                <div class="row mt-3 justify-content-center gap-2">
                    <p class="col-10 pt-1">An OTP has been sent to your email address. Please enter the code above to complete your registration</p>
                    <div class="form-floating col-10">
                        <input type="number" class="form-control" id="otp" name="otp" placeholder="otp" min="6" max="6" required>
                        <label for="otp" class="ms-2" id="otpLabel">Enter the 6 digit code</label>
                    </div>
                    <p class="col-10" style="font-weight:bold" id="errMsg" style="color:red"> </p>
                    <div class="d-flex justify-content-end" style="margin-right: 125px;">
                        <button type="submit" onclick="otpChecker(<?php echo $otp ?>)" class="btn btn-primary col-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const otpChecker = (param) => {
            console.log(param);
            let otp = document.getElementById("otp").value;
            if (otp == param) {
                alert("Account created succesfully");
                // header("Location:registrationaction.php");
                location.href = "mainpage.php";
            } else
                document.getElementById("errMsg").innerHTML = "Incorrect code. Try again";
            document.getElementById("errMsg").style.color = "red";
        }
    </script>
</body>

</html>