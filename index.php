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
  <nav class="navbar navbar-expand-sm bg-success pl-5 shadow-sm fixed-top flex-md-nowrap p-0">
    <!--<div class="container-fluid m-2">-->
      <a class="navbar-brand fs-3 font-monospace d-flex" href="index.php">
        <img src="Assets\images\logo.png" alt="Logo" width="70" height="35" class="d-inline-block align-text-top">
      </a>
      <span class="navbar-text"><i>Tunaangaza maisha yako</i></span>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
      </button>
      <!--<h1>Tanesco</h1>-->
      <div class="collapse navbar-collapse" id="myMenu">
          <ul class="navbar-nav pl-5 custom-nav">
              <li class="nav-item"><a href="index.php" class="nav-link"><b>Home</b></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><b>Register</b></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><b>Login</b></a></li>
              <li class="nav-item"><a href="#" class="nav-link"><b>Contact</b></a></li>
          </ul>
        </div>
      
   <!-- </div> -->
  </nav>
  <header>
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
  </header>
  <section>
  <div class="container" id="Register">
 <div class="col-md-6 offset-md-3">
        <div class="welcome">
          <h2>Welcome to Newone</h2>
          <div class="login-info">
            <a href="users\staffLogin.php" class="btn-login">Staff</a>
            <a href="users\contractorLogin.php" class="btn-login">Contractor</a>
          </div>
        </div>
 </div>
    </div>
  </section>
      <footer class="footer container-fluid mt-5 text-white fixed-bottom">
            <div class="">
            <div class="row py-2 d-flex justify-content-around text-center">
                <div class="col-md-4 text-right">
                    <small>&copy; Copyright 2023, Tanesco</small>
                    <small class="ml-2"><a href="Admin/login.php">ONLINE</a></small>
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
<!--  -->