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


if(empty($Resid) || empty($Resname) || empty($Resphone) || empty($Resemail)  || empty($Resdate) || empty($Restime) || empty($Resmember) || empty($ResCno) || empty($ResCname) || empty($ResCdate)  || empty($Rescontry) || empty($Rescvv) || empty($Resprice) ) {
 
    echo "<script>alert('Update successfully');
      window.location.href = 'Bupdateres.php';
    </script>";
    
}
else{
    $sql="UPDATE reserve set Name='$Resname' , Phone='$Resphone', Email='$$Resemail' , Arrival_Date='$Resdate' , Time='$Restime' , No_Members='$$Resmember', CardNo='$ResCno' , CardName='$ResCname' , Country='$Rescontry' , ExpDate='$Resdate' , cvv='$Rescvv' , Currency='$Resprice' WHERE Rid='$Resid'";

    if($con->query($sql)){
        echo "<script>alert('Update successfully');
      window.location.href = 'BAdminLogin.php';
    </script>";
        
        



}
else{
    echo "Not updated";
}

}

$con->close();
?>