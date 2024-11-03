<?php

$con=new mysqli("localhost","root","","boat");

if($con->connect_error)
{
    die("Connection failed " .$con->connect_error);
}

?>