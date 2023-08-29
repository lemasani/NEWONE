

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
    <div class="container">
    <div class="card-section">
        <div class="card shadow-sm" style="">
        <div class="card-body">

            <?php

while($row = mysqli_fetch_assoc($result)){


    ?>
       
            <h5 class="card-title">Title:<?php echo $row ['title']; ?></h5>
            
            <p class="card-text my-2">Description:<?php echo $row ['description']; ?> </p>
            <div class="row d-flex my-5 ">
                <div class="col-md-4">
                    <p class="card-text">Region:<?php echo $row ['region']; ?> </p>
                </div>
                <div class="col-md-4">
                    <p class="card-text">District:<?php echo $row ['district']; ?> </p>
                </div>
                <div class="col-md-4">
                    <p class="card-text">Ward: <?php echo $row ['ward']; ?></p>
                </div>                
            </div>
            <?php
}
?>

        </div>
        </div>
    </div>
    </div>
  

    

  <body>
    
  </body>