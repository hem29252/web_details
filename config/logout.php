<?php
  session_start();
  $status = 0;
  if(isset($_SESSION['iduserdetails'])){
    unset($_SESSION['iduserdetails']);
    $status = 1;
  }

  if($status == 1){
    header("location: ../Login.php");
  }
  
  
?>