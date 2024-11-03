<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>Update Password</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/slogin.css">
</head>
<body>
<?php
require 'sconfig.php';

// Get the username from the POST request
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    echo "No user selected.";
    exit;
}
?>

<div class="loggin">
    <div class="wrapper">
        <form method="post" action="supdate.php">
            <h1>Update Password for <?php echo htmlspecialchars($username); ?></h1>

            <div class="input-box">
                <input type="text" name="uname" value="<?php echo htmlspecialchars($username); ?>" readonly required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="upassword" placeholder="New Password" required>
                <i class='bx bxs-lock'></i>
            </div>
            
            <button type="submit" class="btn1">Update Password</button>
        </form>
    </div>
</div>

<?php include 'sfooter.php'; ?>
</body>
</html>