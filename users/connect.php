<?php

session_start();

 $severname = "localhost";
 $username = "root";
 $password = "";
$db_name = "newone";


 $con = new mysqli( $severname, $username, $password, $db_name );

 
 if($con)
 {  
    
if(isset($_POST['submit'])){

   $staff_id = $_POST['ids'];
   $password = $_POST['pass'];
   
   $sql = "select * from login_db where staff_id = '$staff_id'
   and password ='$password' ";
   
   $result  = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   if(is_array($row)){
$_SESSION['staff_id'] = $_POST['ids'];
$_SESSION['password'] = $_POST['pass'];


   }
   if(isset($_SESSION['staff_id']))
   {
       header("Location: ..\action\incident.php");}
   
   else{
      
       $msg = '<div class="alert alert-danger mt-2 text-center">Invalid ID or Password</div>';
   }
   
   }
 }

?>