<?php


include("connect.php");
 // get the password input from the form

 // define variables and set to empty values
 $idErr = $passErr  = "";
 $id = $pass = "";
 $msg = '';
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["id"])) {
     $idErr = '<div class="alert alert-danger text-center">Enter ID</div>';
   } else {
     $id = test_input($_POST["id"]);
   }
   
   if (empty($_POST["pass"])) {
     $passErr = '<div class="alert alert-danger  text-center">Enter Password</div>';
   } else {
     $pass = test_input($_POST["pass"]);
   }
 
 }
 
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 
 ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWONE</title>
    <!-- custom css -->

    <style><?php include "..\Assets\css\main.css"; ?></style>
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


    <div class="container mt-10 pt-10">
    <div class="row">
      <div class="col-12 col-sm-20 col-md-15 m-auto">
        <div class="card border-0 shadow-2">
           <div class="card-body">
           <div class="mx-auto text-center">
              <img src="..\Assets\images\logo.png" alt="logo" width="70px">            
           </div>
            <div class="row">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="" name="form">
                <input type="text" name="ids" id="" class="form-control my-4 py-2" placeholder="Username" value="<?php echo $id ?>">
                <span class="error"><?php echo $idErr;?></span>  
                <input type="password" name="pass" id="staff_password" class="form-control my-4 py-2" placeholder="Password">
               
                <div class="text-center mt-3">
                  <button class="btn primary" name ="submit">Login</button>
                  <a href="#" class="forget-password">Forgot password</a>
                </div>
              </form>
           </div>
        </div>
      </div>
    </div>
    </div>
    
 <!-- <div class="text-center">
  </div>
    <div class="text-center justify-content-center custom-margin">
         <div class="col-sm3 col-md-4">
          <form name="form" class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="">
              
              <img src="..\Assets\images\logo.png" alt="logo" width="100px">
                  <div class="row">
                      
                          <input type="text" placeholder="Employee ID" name="id" value="<?php echo $id ?>"> 
                          <span class="error"><?php echo $idErr;?></span>                                
                     
                  </div>
                  <div class="row">
                      
                        <input type="password" name="pass" id="staff_password" placeholder="Password">
                        <span class="error"><?php echo $passErr;?></span>
                    
                  </div>
                  <div class="row">
                   
                      <input type="submit" name="submit" value="login" class="btn-login" >
                  
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        
                      <?php echo $msg; ?>
                      </div>
                    <a href="#" class="forget-password">forgot password</a>
              </div>
          </form>
        </div>  
       </div>
    </div> -->
    <!-- MDB -->
    
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
   
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  </body>
</html>






