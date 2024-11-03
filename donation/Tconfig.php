<?php

$con=new mysqli("localhost","root","","donation");

if($con->connect_error)
{
    die("Connection failed " .$con->connect_error);
}

?>