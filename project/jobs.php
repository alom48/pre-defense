<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="homeStyle.css">
</head>

<body style="background-color:#f3f3f3">
  <?php include 'navigation.php'; ?>
  <div class="container bg-white shadow rounded" style="width:950px; position:relative; top:100px">
    <div class="row p-3 justify-content-center">
      <?php
      include 'dbconfig.php';
      $jobCategory = $_GET['jobCategory'];
      echo '<div class="pb-4">';
      echo '<h2>Search Results:</h2>';
      echo '</div>';
      $query = mysqli_query($connection, "SELECT `ID`, `Category`, `companyName`, `jobTitle`, `jobLocation`, `jobEduReq`, `jobExpReq`, `jobDeadline` FROM `jobs` WHERE Status='approved' AND Category=$jobCategory;");
      while ($res = mysqli_fetch_assoc($query)) {
        $jobEduReq = explode("<br />", $res['jobEduReq']);
        $jobExpReq = explode("<br />", $res['jobExpReq']);
        echo '<div class="card mb-4 ps-3 p-2 shadow-sm" style="width:900px; background-color:#fafafa">';
        echo '<div class="card-body">';
        echo  '<h3 class="card-title" style="color:green">' . $res['jobTitle'] . '</h3>';
        echo  '<h5 class="card-subtitle py-2">' . $res['companyName'] . '</h5>';
        echo  '<h6 class="card-subtitle py-1 text-muted"><i class="bi bi-geo-alt-fill"></i>  ' . $res['jobLocation'] . '</h6>';
        echo  '<h6 class="card-subtitle py-1 text-muted"><i class="bi bi-mortarboard-fill"></i>  ' . $res['jobEduReq'] . '</h6>';
        echo  '<h6 class="card-subtitle py-1 text-muted"><i class="bi bi-briefcase-fill"></i>  ' . $jobExpReq[0] . '</h6>';
        echo  '<a href=jobDetails.php?jobID=' . $res['ID'] . ' class="stretched-link"></a>';
        echo '</div>';
        echo '</div>';
      }
      ?>

    </div>
  </div>
</body>

</html>