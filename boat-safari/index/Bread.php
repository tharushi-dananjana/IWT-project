<!-- read -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation list</title>
    <link rel="stylesheet" href="../css/Bread.css">
</head>
<body>
    <div class="container">
        <h1>Reservation list</h1>

<?php


require 'config.php';

$sql = "SELECT * FROM reserve";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Rid</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Arrival date</th>
            <th>Time</th>
            <th>Name of members</th>
            <th>Card no</th>
            <th>Card Name</th>
            <th>Country</th>
            <th>Exp Date</th>
            <th>cvv</th>
            <th>Currency</th>
            <th>Options</td>

          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Rid"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Phone"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Arrival_Date"] . "</td>";
        echo "<td>" . $row["Time"] . "</td>";
        echo "<td>" . $row["No_Members"] . "</td>";
        echo "<td>" . $row["CardNo"] . "</td>";
        echo "<td>" . $row["CardName"] . "</td>";
        echo "<td>" . $row["Country"] . "</td>";
        echo "<td>" . $row["ExpDate"] . "</td>";
        echo "<td>" . $row["cvv"] . "</td>";
        echo "<td>" . $row["Currency"] . "</td>";
       
        echo "<td>
                <a href='Bupdateres.php?ID=" . $row["Rid"] . "'>Update</a> |
                <a href='Bresdelete.php?ID=" . $row["Rid"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
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
