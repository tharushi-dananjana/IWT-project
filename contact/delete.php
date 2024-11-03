<?php
require 'config.php';

if (isset($_POST['scontact'])) {
    $contact = $_POST['scontact'];

    $sql = "DELETE FROM contact WHERE contacts='$contact'";

    if ($con->query($sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

$con->close();
?>