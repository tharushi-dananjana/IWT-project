<?php

require 'config.php';

$Resid=$_POST["RID"];
$Resname=$_POST["Rname"];
$Resphone=$_POST["Rphone"];
$Resemail=$_POST["Remail"];
$Resdate=$_POST["Rdate"];
$Restime=$_POST["Rtime"];
$Resmember=$_POST["Rmember"];
$ResCno=$_POST["Cno"];
$ResCname=$_POST["Cname"];
$ResCdate=$_POST["Cdate"];
$Rescontry=$_POST["Ccountry"];
$Rescvv=$_POST["Ccvv"];
$Resprice=$_POST["Cprice"];



$sql="INSERT INTO reserve values('$Resid','$Resname','$Resphone', '$Resemail','$Resdate','$Restime','$Resmember','$ResCno','$ResCname','$Rescontry','$ResCdate','$Rescvv','$Resprice')";

if($con->query($sql)){
    echo "<script>alert('Data inserted successfully');
      window.location.href = 'BReservationn.php';
    </script>";
  
    

}
    else{
        echo "<script>alert('Unsuccessful');
        window.location.href = 'BReservation.php';
        </script>";
    }


    $con->close();
?>