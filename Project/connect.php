<?php
 $con = new mysqli("localhost", "root","","newone");
 

 $sql =  "SELECT COUNT(*) FROM `project_tb`";

 
 $result = mysqli_query($con, $sql);
 $number = mysqli_fetch_assoc($result)['COUNT(*)'];

 $numberofProject = (string) $number;
?>