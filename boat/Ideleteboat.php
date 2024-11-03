<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>User Delete Account</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/Idelete.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <?php include 'header.php'; ?>

    <div class="loggin">
    <div class="wrapper">
        <form method="post" action="Idelete.php">
            <h1>User Your boat</h1>
            <div class="input-box">
                <input type="text" name="bsid" placeholder="Boat id" required>
                <i class='bx bxs-user'></i>
            </div>     

            <button type="submit" class="btn">Delete</button>
           
        </form>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    
</body>
</html>