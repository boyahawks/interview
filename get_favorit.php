<?php

include 'setting_server.php';
 
 $con = mysqli_connect($server,$user,$pass,$db);
 
 
 $favorit = $_POST['favorit'];

 $Sql_Query = "insert into favorit (favorit) values ('$favorit')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>