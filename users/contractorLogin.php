
<?php
include("connect.php");


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
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="form-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          <form name="form" class="login-form" action="login.php" onsubmit="return isvalid()" method="post">
              <div class="container">
              
              <img src="..\Assets\images\logo.png" alt="logo" width="100px">
                  <div class="row">
                      
                          <input type="text" placeholder="contractor ID" name="id">   <br>                                           
                     
                  </div>
                  <div class="row">
                      
                        <input type="password" name="pass" id="staff_password" placeholder="Password">
                    
                  </div>
                  <div class="row">
                   
                      <input type="submit" name="submit" value="login" class="btn-login" >
                  
                  </div>
                    <a href="#" class="forget-password">forgot password</a>
              </div>
          </form>



          </div>
        </div>
         
          
      </div>
    </div>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
   
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
 <script>

function isvalid(){


var id = document.form.id.value;
var pass = document.form.pass.value;
if(id.length =="" && pass.length=="")
{
  alert("id or password field is empty");
  return false;
}
else
{
  if(id.length =="")
{
  alert("id field is empty");
  return false;
}

if(pass.length=="")
{
  alert(" password field is empty");
  return false;
}
}


}




 </script>
 
  </body>
</html>



