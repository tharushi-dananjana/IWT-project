<?php
   
   $con=new mysqli("localhost", "root", "", "userlogin");

   if($con->connect_error)
   {
      die("Connection failed".$con->connect_error);
   }
   
?>