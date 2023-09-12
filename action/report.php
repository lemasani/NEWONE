<?php 
 $con = new mysqli("localhost", "root","","newone");
 $sql = "select * from incident_db";
 $run = mysqli_query($con, $sql);
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
            <form action="report.php" method="post" name="" class="import-report w-75">

                <div class="row search w-50">
                    <div class="col-md-4">
                        <label for="from-data">From:</label>
                        <input type="date" required name="from_date" id="from-date">
                    </div>
                    <div class="col-md-4">
                        <label for="date">To:</label>
                        <input type="date" required name="To_date" id="end-date">
                    </div>
                    <input type="submit" value="Search" id="search" name="search" class="btn btn-success w-25">
                </div>
            </form>
            <?php
                if(isset($_POST['search'])){
                    $from_date = $_POST['from_date'];
                    $To_date = $_POST['To_date'];
                    $query = mysqli_query($con, "select * from 
                    incident_db where DATE(inc_date) between '$from_date' 
                    and '$To_date'");
                    
                    if(mysqli_num_rows($query) > 0){?>
                        
                        <div class="table my-4 table-striped">
                            <table style="width:100%">
                                <thead>
                                    <th  width="90px">Title</th>
                                    <th width="90px">Incident</th>
                                    <th width="100px">Region</th>
                                    <th  width="100px">District</th>
                                    <th  width="100px">Ward</th>
                                    <th  width="150px">Action</th>
                                </thead>
                                <tbody>
                                <?php foreach($query as $value){?>
                                    <tr>
                                        <td><?=$value['title'] ?></td>
                                        <td><?=$value['incident'] ?></td>
                                        <td><?=$value['region'] ?></td>
                                        <td><?=$value['district'] ?></td>
                                        <td><?=$value['ward'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    }else{
                        echo "no data found";
                    }
                    }else{
                       
                    
                

            ?>
            <div class="table my-4 table-striped">
                <table style="width:100%">
                    <thead>
                        <th  width="10px">#</th>
                        <th  width="90px">Title</th>
                        <th width="90px">Incident</th>
                        <th width="100px">Region</th>
                        <th  width="100px">District</th>
                        <th  width="100px">Ward</th>
                        <th  width="150px">Action</th>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;

                        while($row = mysqli_fetch_assoc($run))
                        {
                            ?>
                            <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['title']; ?></td>
                            <td><?= $row['incident']; ?></td>
                            <td><?= $row['region']; ?></td>
                            <td><?= $row['district']; ?></td>
                            <td><?= $row['ward']; ?></td>
                            <td></td>
                            </tr>
                        <?php
                         $i++;  }

                        ?>
                    </tbody>
                       
                    
                    
                </table>
            </div>
            <?php } ?>
        </div>
    </div>
  

    

<body>
    
</body> 