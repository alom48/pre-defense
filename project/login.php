<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="form">
        <h1>Log In</h1>
        <form method="post" action="loginaction.php">
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" id="iemail" required>
                <span id="eemail"></span>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="pass" required>
                <span id="epass"></span>
            </div>

            <div class="remember-forget ">

                <label> <input type="checkbox"> Remember me </label>
                <a href="#">Forget Password</a>
            </div>



            <input type="submit" value="Login" id="submit-btn" name="submit-btn">

            <div class="reg">
                Don't have an account? <a href="registration.html">Register Here</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>