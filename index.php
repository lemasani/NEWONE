<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWONE</title>
    <!-- custom css -->
 
    <style><?php include "Assets\css\main.css"; ?></style>
    <style>
      body{
        background: url("Assets/images/background-1.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: initial;
        height: 100vh;
        width: 100%;
      }
    </style>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <nav class="navbar bg-info shadow-sm">
    <div class="container-fluid m-2">
      <a class="navbar-brand fs-3 font-monospace d-flex" href="#">
        <img src="Assets\images\logo.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-top">
      </a>
      <h1>Tanesco</h1>
      
    </div>
  </nav>
      <div class="container">
        <div class="welcome">
          <h2>Welcome to Newone</h2>
          <div class="login-info">
            <a href="users\staffLogin.php" class="btn-login">Staff</a>
            <a href="users\contractorLogin.php" class="btn-login">Contractor</a>
          </div>
        </div>
      </div>
    <footer class="footer fixed-bottom">
      <div class="container">
        <div class="wrapper d-flex justify-content-around text-center">
          <h2>NEWONE</h2>
          <small>&copy; Copyright 2023, Tanesc0_field</small>
          <div class="admin">
            <a href="">Admin</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
   
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- <div class="form-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form class="login-form" action="index.php" method="post">
                <img src="Assets\images\logo.png" alt="logo" width="100px">
                <div class="row">
                    <a href="users\staffLogin.php" class="btn-login">login as staff</a> 
                    <a href="users\contractorLogin.php" class="btn-login">login as contractor</a> 
                </div>
                
            </form>
          
          </div>
        </div>
         
          
      </div>
    </div> -->