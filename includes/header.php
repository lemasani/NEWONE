
<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanesco-Security</title>

    <!-- custom css -->
    <style>
      body{
        overflow: hidden;
      }
        .sidebar{
            height: 90vh;
            position: relative;
            top: 100px;
        }

        .nav-link{
          font-size: 50px;
        }
       
    </style>
    <style><?php include "..\Assets\css\header.css"; ?></style>
    
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <header class="header">
        <nav class="navbar bg-body-tertiary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                <img src="../Assets/images/logo.png" alt="Logo" width="90" height="80">
                </a>
              
              
                <a href="../index.php" class="brand-name">Newone</a>

            </div>
        </nav>
        
       
   </header>
   
            <div class="row">

                <nav class="col-sm-2 bg-light sidebar py-5 px-3"><!-- start side bar -->
                     <div class="sidebar-sticky align-center">
                     <ul class="nav flex-column">
                     <li class="nav-item"><a class="nav-link text-success p-2 mt-4 fs-4" href="#"><i class="bi bi-card-text me-2"></i>Dashboard</a>
                     </li>
                     <li class="nav-item"><a class="nav-link text-success p-2 mt-4 fs-4" href="#"><i class="bi bi-building-exclamation"></i>Incident</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-success p-2 mt-4 fs-4" href="#"><i class="bi bi-app-indicator me-2"></i>Status</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-success p-2 mt-4 fs-4" href="#"><i class="bi bi-kanban"></i>Project</a>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link text-success p-2 mt-4 fs-4" href="#"><i class="bi bi-box-arrow-left me-2"></i>Log out</a>
                    </li>
                    </ul>
                    </div>
                </nav>
            </div>
   
    <!-- bootstrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


