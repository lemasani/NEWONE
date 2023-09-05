

<?php

session_start();
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "newone";


$con = new mysqli( $severname, $username, $password, $db_name );



if($con)
{ 
    $error = 0;
    if(isset($_POST['submit'])){

        if(empty($company_name)){
            $namemsg = "Enter company name";
            $error =1;
        }
        if(empty($project_id)){
            $passmsg = "Enter Password";
            $error =1;
        }


        $company_name = $_POST['company_name'];
        $project_id = $_POST['project_id'];
       
            
      
            $sql = "select * from projectofficer_tb where company_name = '$company_name'
            and project_id ='$project_id' ";
            
            $result  = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            
            
        
            if(is_array($row)){
                $_SESSION['company_name'] = $row['company_name'];
                $_SESSION['project_id'] = $row['project_id'];
            }else{
                echo '<script type="text/Javascript">"
                    window.location.href = "contractorLogin.php"
                    alert("invalid details")
                    </script>
                ';
            }
            if(isset($_SESSION['company_name'])){
                header("location: ..\contractor\dashboard.php");
            }
        
    }   
}
?>


