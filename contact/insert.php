<?php

require 'config.php';

$sname = $_POST["sname"];
$semail = $_POST["semail"];
$scontact = $_POST["scontact"];
$smassage = $_POST["smassage"];

$sql = "INSERT INTO contact VALUES ('$sname','$semail','$scontact','$smassage')";

if($con->query($sql))
{
    echo "Insert sucessful";
}
else
{
    echo "Error".$con->error;
}

$con->close();


?>