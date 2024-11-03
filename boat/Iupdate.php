<?php
require 'iconfig.php';

$boatID = $_POST["sid"];
$boatcode = $_POST["bcode"];
$boatowner = $_POST["bowner"];
$boatype = $_POST["brent"];
$boartrent = $_POST["ctype"];

;

$sql = "UPDATE boat1 SET 
        code='$boatcode', owner='$boatowner', type='$boatype', 
        rent='$boartrent' 
        WHERE ID='$boatID'";

if ($con->query($sql)) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
