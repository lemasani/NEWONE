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

function get_region_name($region_id){
   global $con;
   if($con){
      $sql =  "SELECT `name` FROM `region` WHERE `id` = $region_id";
      $result  = mysqli_query($con, $sql);
      $region_name = mysqli_fetch_assoc($result)['name'];
      return $region_name;
   }
}

function get_district_name($district_id){
   global $con;
   if($con){
      $sql =  "SELECT `name` FROM `district` WHERE `id` = $district_id";
      $result  = mysqli_query($con, $sql);
      $district_name = mysqli_fetch_assoc($result)['name'];
      return $district_name;
   }
}

function get_ward_name($ward_id){
   global $con;
   if($con){
      $sql =  "SELECT `name` FROM `ward` WHERE `id` = $ward_id";
      $result  = mysqli_query($con, $sql);
      $ward_name = mysqli_fetch_assoc($result)['name'];
      return $ward_name;
   }
}