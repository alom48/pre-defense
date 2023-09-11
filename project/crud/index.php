<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud</title>

    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-sm-12">
                <form action="insert.php" method="post" enctype='multipart/form-data'>
                    <h5>Product Insert Form</h5>
                    <div class="mb-3">
                        Product Name :
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        Product Price :
                        <input type="text" class="form-control" name="price">
                    </div>

                    <div class="mb-3">
                        Category :
                        <select class="form-select" id="category" name="category">
                            <option value="mouse">Mouse</option>
                            <option value="computer">Computer</option>
                            <option value="keyboard">Keyboard</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        Product Image :
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="Register" class="btn btn-primary col-12">Insert</button>

                </form>
            </div>
        </div>




    </div>


    <!-- Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>