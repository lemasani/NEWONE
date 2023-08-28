<?php


 $con = new mysqli("localhost", "root","","newone");


 if($con)

{
   echo"";
}

if (isset($_POST['region_id'])) {
   get_district($_POST['region_id']);
 }
 if(isset($_POST['district_id'])){
   get_ward($_POST['district_id']);
 }

function get_region(){
   global $con;
   if($con){
      $sql =  "SELECT * FROM `region`";
      $result  = mysqli_query($con, $sql);
      while ( $rows = $result->fetch_assoc() ) {
         echo "<option value = '{$rows['id']}'>{$rows['name']}</option>";
     }
   }
}

function get_district($region_id){
   global $con;
   if($con){
      $sql =  "SELECT * FROM `district` WHERE `region_id` = $region_id";
      $result  = mysqli_query($con, $sql);
      while ( $rows = $result->fetch_assoc() ) {
         echo "<option value = '{$rows['id']}'>{$rows['name']}</option>";
     }
   }
}

function get_ward($district_id){
   global $con;
   if($con){
      $sql =  "SELECT * FROM `ward` WHERE `district_id`  = $district_id";
      $result  = mysqli_query($con, $sql);
      while ( $rows = $result->fetch_assoc() ) {
         echo "<option value = '{$rows['id']}'>{$rows['name']}</option>";
     }
   }
}
