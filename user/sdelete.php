<?php

require 'sconfig.php';

$usname=$_POST["uname"];

$sql ="DELETE FROM user WHERE User_Name ='$usname'";

if($con->query($sql))
{
    echo "Deleted";
}
else{
    echo "Not Sucess";
}

?>