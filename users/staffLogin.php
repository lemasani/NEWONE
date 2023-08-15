<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWOONE</title>
    <!-- custom css -->

    <style><?php include "..\Assets\css\main.css"; ?></style>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
  </head>
  <body>
    <div class="form-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          <form class="login-form" action="staffLogin.php" method="post">
              <div class="container">
              
              <img src="..\Assets\images\logo.png" alt="logo" width="100px">
                  <div class="row">
                      
                          <input type="text" placeholder="Employee ID" name="staff_id">  
                  <div class="row">
                      
                        <input type="password" name="staff_password" id="spassword" placeholder="Password">
                    
                  </div>
                  <div class="row">
                   
                      <input type="submit" name="login" value="login" class="btn-login" >
                  
                  </div>
                    <a href="#" class="forget-password">forgot password</a>
              </div>
          </form>
          </div>
        </div>
         
          
      </div>
    </div>
  
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST["login"]))
{

 

  if(!empty($_POST["staff"]) && !empty($_POST["password"]))
  
  {
    $_SESSION["staff"]= $_POST["staff"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: ..\includes\header.php" );

  }

else{
  echo'
  <div class="w-50 ml-0 mr-0 mx-auto d-flex align-items-center justify-content-center">
  <div class="container">
  <div class="alert alert-danger text-center" role="alert">
     fill the fields before login.
  </div>

      
  </div>
</div>
 ';
}


}

?>