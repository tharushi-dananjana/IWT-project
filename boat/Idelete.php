<?php
require 'iconfig.php';

if (isset($_POST['bsid'])) {
    $boatID = $_POST['bsid'];

    $sql = "DELETE FROM boat1 WHERE ID='$boatID'";

    if ($con->query($sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: ";
    }
}

$con->close();
?>
