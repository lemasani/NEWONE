<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <style>
      .dashboard-cards{
       
        position: relative;
        top:-570px;
        margin-left: 400px;
        z-index: 1;
        width: 70%;
      }
     

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php include "..\includes\header1.php" ?>
  
    <div class="dashboard-cards">
    <div class="container">
    <div class="row d-flex justify-content-around ">
      <div class="col-sm-3 mb-2 mb-sm-0 text-center">
        <div class="card shadow-lg p-3 mb-5 bg-warning">
          <div class="card-body">
            <h5 class="card-title">Workforce</h5>
            <p class="card-text fs-2">60</p>
            <a href="#" class="btn btn-success">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 text-center">
        <div class="card shadow-lg p-3 mb-5 bg-warning">
          <div class="card-body">
            <h5 class="card-title">Approved workforce</h5>
            <p class="card-text fs-2">20</p>
            <a href="#" class="btn btn-success">view</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 text-center">
        <div class="card shadow-lg p-3 mb-5 bg-warning">
          <div class="card-body">
            <h5 class="card-title">Denied workforce</h5>
            <p class="card-text fs-2">40</p>
            <a href="#" class="btn btn-success">view</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row d-flex">
      <div class="col-md-8">
        <h5>Project info.</h5>
        <div class="row d-flex my-5">
            <div class="col-md-4">
              <label for="">Project name</label>
              <input type="text" disabled>
            </div>
    
            <div class="col-md-4">
              <label for="">jurisdiction</label>
              <input type="text" disabled>
            </div>
        </div>
        <div class="row d-flex justify-content-between ">
            <div class="col-md-3">
              <label for="">Region</label>
              <input type="text" disabled>
            </div>
    
            <div class="col-md-3">
              <label for="">District</label>
              <input type="text" disabled>
            </div>
            <div class="col-md-3">
              <label for="">Street</label>
              <input type="text" disabled>
            </div>
        </div>
      </div>
    </div>
    </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>