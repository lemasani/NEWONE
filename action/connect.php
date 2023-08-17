<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

   $title = $_POST['title'];
   $incident = $_POST['incident'];
   $description = $_POST['description'];
   $region = $_POST['region'];
   $district= $_POST['district'];
   $street = $_POST['street'];


 $con = new mysqli("localhost", "root","","newone");

 


 if($con)
{

$sql = "insert into `incident_db`(title,incident,description,region,district,street)
values('$title','$incident',' $description','$region','$district','$street')";



$result = mysqli_query($con,$sql);

if($result)
{

if(!empty($_POST['title']) && !empty($_POST['incident'])
 && !empty($_POST['description']) && !empty($_POST['region']) &&
  !empty($_POST['district']) && !empty($_POST['street']))
{
   $title = $_POST['title'];
   $incident = $_POST['incident'];
   $description = $_POST['description'];
   $region = $_POST['region'];
   $district= $_POST['district'];
   $street = $_POST['street'];

   header("Location: incident.php");
   
}
else
{
   echo"please fill the required field first";
}


  
}



}

}