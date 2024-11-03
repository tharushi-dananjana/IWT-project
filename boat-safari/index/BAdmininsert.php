<?php

require 'config.php';

$id=$_POST["Aid"];
$Password=$_POST["Apass"];




$sql="INSERT INTO admin values('$id' , '$Password')";

if($con->query($sql)){
    echo "insert Successful";

}
    else{
        echo "Error".$con->error;
    }


    $con->close();
?>