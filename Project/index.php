<?php
 include "connect.php";
 session_start();
 if(empty($_SESSION['staff_id'])){
  header('location: ..\users\staffLogin.php');
 }

 $staff = $_SESSION['staff_id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWONE:Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <style>
    .main-container{
      
      position: relative;
        top:-570px;
        margin-left: 400px;
        z-index: 1;
        width: 70%;
    }
  </style>
  <body>
    <?php include "..\includes\header.php"; ?>

    <div class="main-container">
      <div class="row">
        <div class="col-md-4">
          <a href="approval.php" class="btn btn-success">Approval</a>
          <a href="incidence.php" class="btn btn-success">Incident</a>
        </div>
      </div>
    <!-- session display -->
    <div class="session my-3">
      <h2>Welcome <?php echo $staff; ?></h2>
    </div>

      <!-- cards displaying number of Project -->
      <div class="row my-4">
      <div class="col-sm-3 mb-2 mb-sm-0 text-center">
        <div class="card shadow-lg p-3 mb-5 bg-warning">
          <div class="card-body">
            <h5 class="card-title">Ongoing Project</h5>
            <p class="card-text fs-2"><?php echo  $numberofProject ?></p>
            <a href="view.php"name="view" class="btn btn-success">View</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 mb-2 mb-sm-0 text-center">
        <div class="card shadow-lg p-3 mb-5 bg-warning">
          <div class="card-body">
            <h5 class="card-title">New Project</h5>
            <p class="card-text fs-2"><?php  ?></p>
            <a href="#" class="btn btn-success">View</a>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>