<?php
require 'config.php';

$name = $_POST['sname'];
$email = $_POST['semail'];
$contact = $_POST['scontact'];
$massage = $_POST['smassage'];

if(empty($name)||empty($contact)||empty($Email) ||empty($Email))
{
    echo"All Required";
}
else{
    $sql="UPDATE contact set name='$name',email='$email',contacts='$contact',massage='$massage'";

    if($con->query(sql))
    {
        echo"updated";
    }
    else{
        echo "Not Updated";
    }
   
}

?>