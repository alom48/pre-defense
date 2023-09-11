<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="homeStyle.css">

</head>

<body>
    <?php include 'navigation.php' ?>

    <section style="height:500px;">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 id="header" style="margin-top:150px">Find job that suites you</h1>
                    <p>Search jobs from different category, view details, contact employer and get hired </p>
                    <a href="careerHome.php" type="button" class="btn btn-outline-primary">Find Jobs</a>
                </div>
                <div class="col-7">
                    <img src="image/job.jpeg" height="100%" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section style="height:500px;">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 id="header" style="margin-top:150px">Discover the item you desire.</h1>
                    <p>Here you see many kinds of products like laptop, mouse, keyboard, and their details </p>
                    <a href="homeProduct.php" type="button" class="btn btn-outline-primary">See more</a>

                </div>
                <div class="col-7">
                    <img src="image/product.jfif" height="90%" width="90%">

                </div>
            </div>
        </div>
    </section>

    <footer class="footer">

        &copy; copyright @ 2023 by <span>Tech Web</span>

    </footer>


</body>

</html>