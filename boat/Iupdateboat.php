<!-- update -->

<?php
require 'iconfig.php';

if (isset($_GET['ID'])) {
    $boatID = $_GET['ID']; 

    $sql = "SELECT * FROM boat1 WHERE ID='$boatID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Update boat</title>
            <link rel="stylesheet" href="css/Iupdateboat.css">
        </head>
        <body>
        <h2>Update boat</h2>

        <form method="post" action="Iupdate.php">
            <input type="hidden" name="sid" value="<?php echo $row['ID']; ?>">
            <label>Boat ID:</label>
            <input type="text" name="bcode" value="<?php echo $row['code']; ?>" required><br>
            <label>Boat Code:</label>
            <input type="text" name="bowner" value="<?php echo $row['owner']; ?>" required><br>
            <label>Rent :</label>
            <input type="text" name="brent" value="<?php echo $row['rent']; ?>" required><br>
            <label>Boat Type:</label>
            <input type="text" name="ctype" value="<?php echo $row['type']; ?>" required><br>

            <input type="submit" value="Update Boat">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Record not found!";
    }
}

$con->close();
?>
