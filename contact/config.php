<?php

$con=new mysqli("localhost","root","","packagems");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}



?>