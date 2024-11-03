<?php

require 'config.php';

$delete=$_POST["delet"];

$sql="DELETE FROM reserve WHERE RID='$delete'";

if($con->query($sql))
{
    echo "<script>alert('Data deleted successfully');
    window.location.href = 'Bread.php';</script>";
}
else{
    echo "Not Success";
}


?>