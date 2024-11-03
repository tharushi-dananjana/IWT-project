<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat list</title>
    <link rel="stylesheet" href="css/Iboat.css">
</head>
<body>
    <div class="container">
        <h1>Boat details </h1>

<?php


require 'iconfig.php';

$sql = "SELECT * FROM boat1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Code</th>
            <th>Owner</th>
            <th>Type</th>
            <th>Rent</th>
            <th>Action</th>
           

          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["code"] . "</td>";
        echo "<td>" . $row["owner"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["rent"] . "</td>";
       
        echo "<td>
                <a href='Iupdateboat.php?ID=" . $row["ID"] . "'>Update</a> |
                <a href='Ideleteboat.php?ID=" . $row["ID"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$con->close();
?>

</div>
</body>
</html>