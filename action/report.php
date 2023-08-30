

<?php 
 include("connect.php");

 $sql = "select * from incident_db ";
$result = mysqli_query($con,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incident</title>

    <style><?php include "..\Assets\css\incident.css"; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

    <?php include "..\includes\header.php"; ?> 
    
    <div class="report-result">
        <div class="container">
            <form action="" name="" class="import-report w-75">

                <div class="row search w-50">
                    <div class="col-md-4">
                        <label for="from-data">From:</label>
                        <input type="date" name="date" id="from-date">
                    </div>
                    <div class="col-md-4">
                        <label for="date">To:</label>
                        <input type="date" name="date" id="end-date">
                    </div>
                    <input type="submit" value="Search" id="search" class="btn btn-success w-25">
                </div>
            </form>
          
        </div>
    </div>
  

    

  <body>
    
  </body> 