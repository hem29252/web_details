<?php
   session_start();
   if(empty($_SESSION['iduserdetails'])){
       die("ยังไม่ได้ล็อกอิน!!");
   }

?>