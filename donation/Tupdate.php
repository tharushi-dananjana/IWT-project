<?php
require 'Tconfig.php';

$ID = $_POST['sid'];
$salutation = $_POST['ssalutation'];
$firstname = $_POST['sfname'];
$lastname = $_POST['slname'];
$phone = $_POST['sphone'];
$email = $_POST['semail'];
$country = $_POST['scountry'];
$card_num = $_POST['scard_num'];
$card_name = $_POST['scard_name'];
$amount = $_POST['samount'];
$date = $_POST['sdate'];
$cvv = $_POST['scvv'];

$sql = "UPDATE donerinformation SET 
        salutation='$salutation', firstname='$firstname', lastname='$lastname', 
        uphone='$phone', email='$email', country='$country', 
        D_card='$card_num', D_name_card='$card_name', `MM/YY`='$date', CVV='$cvv'
        WHERE ID='$ID'";

if ($con->query($sql)) {
    echo "Record updated successfully!";
    header("Location: Tdonation.php");
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
