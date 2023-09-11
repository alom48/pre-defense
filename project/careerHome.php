<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find a job</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="homeStyle.css">
</head>

<body>
  <?php include 'navigation.php' ?>
  <div class="container d-flex align-items-center" style="height:100vh">
    <div class="row">
      <h1 class="col-8 pb-4">Browse Category</h1>
      <div class="col-4 d-flex justify-content-end">
        <a href="jobPoster.html" class="btn btn-outline-primary mt-2" style="height:40px">Post a job</a>
      </div>
      <div class="col-4">
        <div class="card shadow-sm" style="height:250px">
          <img class="card-img-top" src="image/engineers_card.jpg" height="250px">
          <div class="card-body d-flex align-items-end">
            <h1 class="card-img-overlay" style="display:flex; align-items:end; color:white">Engineer/Architects</h1>
            <a href="jobs.php?jobCategory=1" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card shadow-sm" style="height:250px">
          <img class="card-img-top" src="image/it&tel.jpg" height="250px">
          <div class="card-body d-flex align-items-end">
            <h1 class="card-img-overlay" style="display:flex; align-items:end; color:white">IT & Telecommunications</h1>
            <a href="jobs.php?jobCategory=2" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card shadow-sm" style="height:250px">
          <img class="card-img-top" src="image/marketing.jpg" height="250px">
          <div class="card-body d-flex align-items-end">
            <h1 class="card-img-overlay" style="display:flex; align-items:end; color:white">Marketing</h1>
            <a href="jobs.php?jobCategory=3" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>