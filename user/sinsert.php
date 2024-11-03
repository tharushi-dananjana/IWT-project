<?php
   require 'sconfig.php';

   $funame=$_POST["fname"];
   $usname=$_POST["uname"];
   $birth=$_POST["DOB"];
   $addree=$_POST["addr"];
   $num=$_POST["phone"];
   $mail=$_POST["email"];
   $nep=$_POST["npw"];

   $sql="INSERT INTO user VALUES ('$funame', '$usname' , '$birth' ,'$addree' , '$num' ,'$mail'  , '$nep')";

   if($con->query($sql))
   {
    echo "Insert successful";
   }
   else{
    echo "Error".$con->error;
   }

   $con-> close();

?>