<?php

require 'sconfig.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $newPassword = $_POST['upassword'];

    if (empty($username) || empty($newPassword)) {
        echo "All fields are required.";
    } else {
        
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $stmt = $con->prepare("UPDATE user SET Newpassword=? WHERE User_Name=?");
        $stmt->bind_param("ss", $hashedPassword, $username);

        if ($stmt->execute()) {
            echo "Password updated successfully.";
        } else {
            echo "Not updated: " . $stmt->error;
        }

        $stmt->close();
    }
}


$con->close();
?>