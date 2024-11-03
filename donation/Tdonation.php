<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation List</title>
    <link rel="stylesheet" href="css/Tdonation.css">
</head>
<body>
    <div class="container">
        <h1>Donations List</h1>

        <!-- Donate Button -->
        <div class="button-container">
            <button onclick="window.location.href='Tindex.php'">Donate</button>
        </div>

        <!-- Donation Table -->
        <?php

        require 'Tconfig.php';

        $sql = "SELECT * FROM donerinformation";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1' width='100%' cellpadding='10' cellspacing='0'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Salutation</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Card Number</th>
                    <th>Name on Card</th>
                    <th>Expiration Date</th>
                    <th>CVV</th>
                    <th>Actions</th>
                  </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["salutation"] . "</td>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["uphone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["country"] . "</td>";
                echo "<td>" . $row["D_card"] . "</td>";
                echo "<td>" . $row["D_name_card"] . "</td>";
                echo "<td>" . $row["MM/YY"] . "</td>";
                echo "<td>" . $row["CVV"] . "</td>";
            
                echo "<td>
                        <a href='Tupdatedonation.php?ID=" . $row["ID"] . "'>Update</a> |
                        <a href='Tdelete.php?ID=". $row["ID"]."'>Delete</a>
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
