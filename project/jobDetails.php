<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Details</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="homeStyle.css">
</head>

<body>
   <?php include 'navigation.php'; ?>
   <div class="container">;
      <div class="row justify-content-center">;
         <?php
         include 'dbconfig.php';
         $jobID = $_GET['jobID'];
         $query = mysqli_query($connection, "SELECT * FROM `jobs` WHERE ID=$jobID");
         $resArray = mysqli_fetch_assoc($query);

         echo  '<div class="card p-3 shadow-sm" style="width:850px; margin-top:50px; margin-bottom:300px">';
         echo  '<div class="card-body">';
         echo  '<h3 class="card-title" style="color:green">' . $resArray['jobTitle'] . '</h3>';
         echo  '<h5 class="card-subtitle my-2 text-muted" id="jobEmployer">' . $resArray['companyName'] . '</h5>';
         echo  '<h6 class="card-subtitle my-1"><b>Location: </b>' . $resArray['jobLocation'] . '</h6>';
         echo '<p class="card-text pt-5"><b>Vacancy:  </b>' . $resArray['jobVacancy'] . '</p>';
         echo '<p class="card-text pt-2"><b>Job Context:</b><br>' . $resArray['jobContext'] . '</p>';
         echo '<p class="card-text pt-2"><b>Job Responsibilities:</b><br>';
         echo '<ul>';
         $jobResp = explode("<br />", $resArray['jobResp']);
         foreach ($jobResp as $elements) {
            echo "<li>$elements</li>";
         }
         echo '</ul>';
         echo '</p>';
         echo '<p class="card-text pt-2"><b>Educational Requirements:</b><br>';
         echo '<ul>';
         $jobEduReq = explode("<br />", $resArray['jobEduReq']);
         foreach ($jobEduReq as $elements) {
            echo "<li>$elements</li>";
         }
         echo '</ul>';
         echo '</p>';
         echo '<p class="card-text pt-2"><b>Experience Requirements:</b><br>';
         echo '<ul>';
         $jobExpReq = explode("<br />", $resArray['jobExpReq']);
         foreach ($jobExpReq as $elements) {
            echo "<li>$elements</li>";
         }
         echo '</ul>';
         echo '</p>';
         echo '<p class="card-text pt-2"><b>Additional Requirements:</b><br>';
         echo '<ul>';
         $jobAddReq = explode("<br />", $resArray['jobAddReq']);
         foreach ($jobAddReq as $elements) {
            echo "<li>$elements</li>";
         }
         echo '</ul>';
         echo '</p>';
         echo '<p class="card-text pt-2"><b>Salary(monthly in BDT):  </b> ' . $resArray['jobSalary'] . '/-</p>';
         echo '<p class="card-text pt-2"><b>Other Information:</b><br>';
         $jobOtherInfo = explode("<br />", $resArray['jobOtherInfo']);
         foreach ($jobOtherInfo as $elements) {
            echo "<li>$elements</li>";
         }
         echo '</p>';
         echo '<div class="py-5" style="text-align:center">';
         echo '<h5><u>Application Procedure:</u></h5>';
         echo '<p>Send your CV to: </p>';
         echo '<p class="card-text pt-1"><b>Application Deadline:  </b>' . $resArray['jobDeadline'] . '</p>';
         echo '</div>';
         echo '</div>';
         echo '</div>';
         ?>
         <div>;
         </div>;
</body>

</html>