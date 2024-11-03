<!-- read -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="css/read.css">
</head>
<body>
    <div class="container">
        <h1>Contact List</h1>

<?php

require 'config.php';



$sql = "SELECT * FROM contact";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>name</th>
            <th>email</th>
            <th>contact</th>
            <th>massage</th>
            
            
          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contacts"] . "</td>";
        echo "<td>" . $row["massage"] . "</td>";
        
       
        echo "<td>
                <a href='conupdate.php?conntacts=" . $row["contacts"] . "'>Update</a> 
                <a href='Condelete.php?ID=" . $row["contacts"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
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