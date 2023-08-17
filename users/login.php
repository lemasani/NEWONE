


<?php
include("connect.php");


if(isset($_POST['submit'])){

$staff_id = $_POST['id'];
$password = $_POST['pass'];

$sql = "select * from login_db where staff_id = '$staff_id'
and password ='$password' ";

$result  = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1)
{
    header("Location: ..\action\incident.php");}

else{
    
    echo'<script>
    window.location.href = "staffLogin.php";
    alert("login failed, invalid id or password");
    
    </script>';
}

}



?>z