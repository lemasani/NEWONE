<?php
 $severname = "localhost";
 $username = "root";
 $password = "";
$db_name = "newone";


 $con = new mysqli( $severname, $username, $password, $db_name );

 $company = $_SESSION['company_name'];
 
 $sql = "SELECT COUNT(*) FROM `workforce_tb` WHERE company = '$company'";

 $result = mysqli_query($con, $sql);
 $number = mysqli_fetch_assoc($result)['COUNT(*)'];

 $numberOfEmployees = (string) $number;

 $query = "SELECT *
 FROM projectofficer_tb
 INNER JOIN project_tb ON project_tb.project_id  = projectofficer_tb.project_id 
 WHERE projectofficer_tb.company_name = '$company' ";
 $projectResult = mysqli_query($con, $query);

 $row = mysqli_fetch_assoc($projectResult);

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