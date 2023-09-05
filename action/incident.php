<?php 
 include("connect.php");
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

  <body>

  <?php include "..\includes\header.php"; ?> 
  <?php
 $msg = '';
 $title = '';
$incident = '';
$description = ''; 
$region = '';
$district = '';
$ward  = '';

if($_SERVER['REQUEST_METHOD']=='POST') {


$title = $_POST['title'];
$incident = $_POST['incident'];
$description = $_POST['description'];
$region = $_POST['region'];
$district= $_POST['district'];
$ward = $_POST['ward'];


if(empty($title) )
{
global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">fill the title first</div>';
}

elseif(empty($incident))
{
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Enter the incident type</div>';
}
elseif(empty($description))
{
global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">fill in the description</div>';
}
elseif(empty($region))
{
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Enter region</div>';
}
elseif(empty($district))
 {
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Enter district</div>';
}
elseif(empty($ward))
{
  global $msg;
$msg = '<div class="alert alert-danger mt-2 text-center">Enter street or ward</div>';
}




else
{
  
$sql = "insert into `incident_db`(title,incident,description,region,district,ward)
values('$title','$incident',' $description','$region','$district','$ward')";



$result = mysqli_query($con,$sql);

if($result)
{

   $title = $_POST['title'];
   $incident = $_POST['incident'];
   $description = $_POST['description'];
   $region = $_POST['region'];
   $district= $_POST['district'];
   $ward = $_POST['ward'];
 
   
   
$msg = '<div class="alert alert-success mt-2 text-center">Data sent successfully</div>';

}
}
}
?>
  
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" class="incident-form">
    <div class="container">
            <div class="row  d-flex justify-content-center">
              <div class="col-md-4 col-lg-6 text-center">
                        <span class="date" name="inc_date">Date: <?= date('Y-m-d')?></span>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-3 col-lg-3 d-flex flex-column">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value=" <?php echo $title ?>">
              </div>
              <div class="col-md-3 col-lg-3 d-flex flex-column">
                  <label for="type">Type</label>
                  <select name="incident" id="type" value=" <?php echo  $incident ?>"> 
                    <option value=""></option>           
                    <option value="damages">Damages</option>
                    <option value="theft">Theft</option>
                    <option value="intrusion">Intrusion</option>                    
                  </select>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-6 d-flex flex-column">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="w-100" placeholder="Enter description" value=" <?php echo $description ?>"></textarea>
              </div>
            </div>

            <div class="row d-flex justify-content-center">
              <div class="col-md-2 d-flex flex-column">
                <label for="region">Region:</label>
                <select name="region" id = "region" onchange="getDistrict()">
                  <option value="">choose region</option>
                  <?php get_region();?>
                </select>
              </div>
              <div class="col-md-2 d-flex flex-column"> 
                <label for="district">District</label>
                <select name="district" id="district" onchange="getWard()">
                <option value="">Choose District</option>
                </select>
              </div>
              <div class="col-md-2 d-flex flex-column">
                <label for="ward">Ward</label>
                <select name="ward" id="street">
                  <option value="">Choose ward</option>
                </select>
              </div>
            </div>
            <fieldset class="offender-details p-2">
                <div class="row d-flex justify-content-center">
                
                <div class="col-md-2 d-flex flex-column">
                    <label for="national_id">NIDA NUMBER:</label>
                    <input type="text" name="national_id" id="national_id">
                </div>
            
                <div class="col-md-1 d-flex flex-column">
                    <label for="type">Action</label>
                    <select name="incident_type" id="type">            
                        <option value="damages">Don't Hire</option>
                        <option value="theft">Arrest</option>
                        <option value="intrusion">Terminate</option>                    
                    </select>
                </div>

                <div class="col-md-3 d-flex flex-column">
                    <label for="recommendation">Recommendation</label>
                    <textarea name="c_recommendation" id="recommendation" class="w-100" placeholder="Give recommendation"></textarea>
                </div>

                </div>
            </fieldset>
           
            <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                <input type="submit" value="submit" name="submit" class="btn-submit w-100">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                
              <?php echo $msg; ?>
              </div>
            </div>
    </div>
            

          


  </form>
  
  <script language="JavaScript" type="text/javascript">
    
    function getDistrict(){
      var region = document.getElementById('region');
      $.ajax({
        url: 'connect.php',
        type: 'post',
        data: { "region_id": region.value},
        success: function(response) {
          $('#district').html(response);
        }
      });
    }
    function getWard(){
      var district = document.getElementById('district');
      $.ajax({
        url: 'connect.php',
        type: 'post',
        data: { "district_id": district.value},
        success: function(response) {
          $('#street').html(response);
        }
      });
    } 
  </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
