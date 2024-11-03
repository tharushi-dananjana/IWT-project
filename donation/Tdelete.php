<?php
require 'Tconfig.php';

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    $sql = "DELETE FROM donerinformation WHERE ID='$ID'";

    if ($con->query($sql) === TRUE) {
        echo("deleted!");
        header("Location: Tdonation.php");
        exit();
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    echo "No ID received to delete!";
}

$con->close();
?>
