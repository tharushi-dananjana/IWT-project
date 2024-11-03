<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="css/sread.css">
</head>
<body>
<?php
require 'sconfig.php';

$sql = "SELECT User_Name, Newpassword FROM user";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Password</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["User_Name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Newpassword"]) . "</td>";
        echo "<td>";
        
        // Update form
        echo "<form action='updatepassword.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='username' value='" . htmlspecialchars($row["User_Name"]) . "'>";
        echo "<input type='submit' value='Update' class='action-button'>";
        echo "</form>";
        
        // Delete form
        echo "<form action='sdeleteaccount.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='username' value='" . htmlspecialchars($row["User_Name"]) . "'>";
        echo "<input type='submit' value='Delete' class='action-button' onclick='return confirm(\"Are you sure you want to delete?\");'>";
        echo "</form>";
        
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Result";
}

$con->close();
?>
</body>
</html>