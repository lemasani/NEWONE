

<?php


$severname = "localhost";
$username = "root";
$password = "";
$db_name = "newone";


$con = new mysqli( $severname, $username, $password, $db_name );


if($con)
{ 
   


    
 if(isset($_POST['submit'])){
 
    $company_name = $_POST['company_name'];
    $project_id_fk = $_POST['project_id'];
    
    $sql = "select * from projectofficer_tb where company_name = '$company_name'
    and project_id_fk ='$project_id_fk' ";
    
    $result  = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count==1)
    {
        header("Location: ..\contractor\dashboard.php");}
    
    else{
       
        $msg = '<div class="alert alert-danger mt-2 text-center">Invalid ID or Password</div>';
    }
    
    }
}

?>


