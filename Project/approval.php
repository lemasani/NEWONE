<?php 
include "connect.php";
$sql = "select * from workforce_tb";
$run = mysqli_query($con, $sql);
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
    .table{
      position: relative;
        top:-570px;
        margin-left: 400px;
        z-index: 1;
        width: 70%;
    }
  </style>
  <body>
    <?php include "..\includes\header.php" ?>
 <div class="table my-4 table-striped">
                <table style="width:100%">
                    <thead>
                        <th  width="10px">#</th>
                        <th  width="90px">NIDA</th>
                        <th width="90px">FirstName</th>
                        <th width="100px">LastName</th>
                        <th  width="100px">Phone.No</th>
                        <th  width="100px">Status</th>
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
                            <td><?= $row['national_id']; ?></td>
                            <td><?= $row['w_first_name']; ?></td>
                            <td><?= $row['w_last_name'] ?></td>
                            <td><?= $row['Phone']; ?></td>
                            <td></td>
                            <td>
                            </tr>
                        <?php
                         $i++;  }

                        ?>
                    </tbody>
                       
                    
                    
                </table>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>