<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <div class="row p-5">
                <?php
                $price=$_GET['pr'];
                echo '<div class="col-7">';
                echo  '<div class="card p-3" style=" height:700px">';
                echo  '<div class="card-body">';
                echo  '<h2 class="card-title">'.$price.'</h2>';
                echo  '<h5 class="card-subtitle my-2 text-muted">Abcd Developers</h5>';
                echo  '<h6 class="card-subtitle my-1">Dhaka</h6>';
                echo '<p class="card-text pt-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
?>
</div>
</div>
</body>
</html>