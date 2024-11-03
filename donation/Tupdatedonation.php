<!-- update -->

<?php
require 'Tconfig.php';

if (isset($_GET['ID'])) {
    $ID = $_GET['ID']; 

    $sql = "SELECT * FROM donerinformation WHERE ID='$ID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Update Donation</title>
            <link rel="stylesheet" href="css/TupdateDonation.css">
        </head>
        <body>
        <h2>Update Donation</h2>

        <form method="post" action="Tupdate.php">
            <input type="hidden" name="sid" value="<?php echo $row['ID']; ?>">
            <label>Salutation:</label>
            <input type="text" name="ssalutation" value="<?php echo $row['salutation']; ?>" required><br>
            <label>First Name:</label>
            <input type="text" name="sfname" value="<?php echo $row['firstname']; ?>" required><br>
            <label>Last Name:</label>
            <input type="text" name="slname" value="<?php echo $row['lastname']; ?>" required><br>
            <label>Phone:</label>
            <input type="text" name="sphone" value="<?php echo $row['uphone']; ?>" required><br>
            <label>Email:</label>
            <input type="email" name="semail" value="<?php echo $row['email']; ?>" required><br>
            <label>Country:</label>
            <input type="text" name="scountry" value="<?php echo $row['country']; ?>" required><br>
            <label>Card Number:</label>
            <input type="text" name="scard_num" value="<?php echo $row['D_card']; ?>" required><br>
            <label>Name on Card:</label>
            <input type="text" name="scard_name" value="<?php echo $row['D_name_card']; ?>" required><br>
            <label>Amount:</label>
            <input type="text" name="samount" value="<?php echo $row['amount']; ?>" required><br>

            <label>Expiration Date (MM/YY):</label>
            <input type="text" name="sdate" value="<?php echo $row['MM/YY']; ?>" required><br>
            <label>CVV:</label>
            <input type="text" name="scvv" value="<?php echo $row['CVV']; ?>" required><br>

            <input type="submit" value="Update Donation">
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
