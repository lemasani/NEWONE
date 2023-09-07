<?php 
 include("connect.php");
 session_start();
 if(empty($_SESSION['company_name'])){
  header('location: ..\users\contractorLogin.php');
 }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workforce</title>

    <style>
      .worforce-details{
       
        position: relative;
        top:-570px;
        margin-left: 400px;
        z-index: 1;
        width: 70%;
      }
     input[type=button], input[type=submit]{
        color: #fff;
     }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php include "..\includes\header1.php" ?>
  <?php
 $msg = '';
 $national_id = '';
$w_first_name = '';
$w_last_name = ''; 
$Phone = '';


if($_SERVER['REQUEST_METHOD']=='POST') {


$national_id = $_POST['national_id'];
$w_first_name = $_POST['w_first_name'];
$w_last_name = $_POST['w_last_name'];
$Phone= $_POST['Phone'];


if(empty($national_id) )
{
global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Give NIDA</div>';
}

elseif(empty($w_first_name))
{
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Provide First name</div>';
}
elseif(empty($w_last_name))
{
global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Provide last name</div>';
}
elseif(empty($Phone))
{
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Enter Phone number</div>';
}

else
{
  
$sql = "insert into `workforce_tb`(national_id,w_first_name,w_last_name,Phone)
values('$national_id','$w_first_name',' $w_last_name','$Phone')";



$result = mysqli_query($con,$sql);

if($result)
{

   $national_id = $_POST['national_id'];
   $w_first_name = $_POST['w_first_name'];
   $w_last_name = $_POST['w_last_name'];
   $Phone = $_POST['Phone'];

   
   
$msg = '<div class="alert alert-success mt-2 text-center">Data sent successfully</div>';

}
}
}
?>
  
    <div class="worforce-details">
        

        <div class="row">
            <h4 class="title my-3">Worforce Details</h4>
           
           
                <form action="" method="post"  class="bg-light">

                <div class="upload my-4 d-flex flex-column">
                    <label for="workforce_file" class="my-1">Import</label>
                    <input type="file" name="workforce_file" id="workforce_file">
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex flex-column my-4">
                        <label for="NIDA">NIDA</label>
                        <input type="text" name="national_id" id="NIDA">
                    </div>
                    <div class="col-md-4 d-flex flex-column">
                        <label for="fname">First Name</label>
                        <input type="text" name="w_first_name" id="fname">
                    </div>
                    <div class="col-md-4 d-flex flex-column">
                        <label for="lname">last Name</label>
                        <input type="text" name="w_last_name" id="lname">
                    </div>
                    <div class="col-md-4 d-flex flex-column">
                        <label for="phone">Phone No</label>
                        <input type="text" name="Phone" id="phone">
                    </div>
                    <div class="col-md-4 d-flex flex-column my-4 justify-content-center">
                        <input type="submit" value="Submit" id="submit" class="btn btn-success">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                        <?php echo $msg; ?>
                        </div>
                    </div>
                </div>
                
                
                
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>