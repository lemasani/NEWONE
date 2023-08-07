<?php
 include('../dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo TITLE ?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/custom.css">
        
        </head>
            <body>
            <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top flex-md-nowrap p-0 shadow">
      <a href="dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OVMS</a>
      <div class="collapse navbar-collapse" id="myMenu">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>
                  <span class="glyphicon glyphicon-bell" style="font-size:28px;"></span></a>
              <ul class="dropdown-menu"></ul>
              </li>
            </ul>
          </div>
      </nav>
                <div class="container-fluid" style="margin-top:5px;">
                <div class="row">
                    <!-- start row -->
                    <nav class="col-sm-2 bg-light sidebar py-5 d-print-none" ><!-- start side bar -->
                        <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link " href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                             <li class="nav-item"><a class="nav-link" href="work.php"><i class="fab fa-accessible-icon"></i>Work Order</a>
                            </li>
                             <li class="nav-item"><a class="nav-link" href="request.php"><i class="fas fa-align-center"></i>Request Received</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="responded.php"><i class="fas fa-question-circle"></i>Request Status</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="workreport.php"><i class="fas fa-table"></i>Work report</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="mechanic.php"><i class="fas fa-users"></i>Mechanics</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="user.php"><i class="fas fa-users"></i>Users</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="feedback.php"><i class="fas fa-envelope"></i>Feedback</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="changepass.php"><i class="fas fa-key"></i>Change password</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="payment.php"><i class="fas fa-dollar-sign"></i>Payment Report</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                            </li>
                            </ul>
                        </div>
                    </nav>