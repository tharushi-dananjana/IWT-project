<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $workId = $_POST['Aid'];
    $password = $_POST['Apass'];

    // Query to check user credentials
    $sql = "SELECT * FROM admin WHERE AID = '$workId'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Password check
        if ($password === $user['Apassword']) {
            $_SESSION['AID'] = $user['Aid'];
            header("Location: Sadmin.php");
            exit();
        } else {
            $error = "Invalid credentials, please try again.";
        }
    } else {
        $error = "Invalid credentials, please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/Blogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <script>
        
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const passwordIcon = document.getElementById("password-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("bxs-lock-alt");
                passwordIcon.classList.add("bxs-lock-open-alt");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("bxs-lock-open-alt");
                passwordIcon.classList.add("bxs-lock-alt");
            }
        }

        
        function validateForm() {
            const id = document.forms["loginForm"]["Aid"].value;
            const password = document.forms["loginForm"]["Apass"].value;

            if (id == "" || password == "") {
                alert("Both ID and Password must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <form name="loginForm" action="BAdminLogin.php" method="post" onsubmit="return validateForm()">
            <h1>Admin Login</h1>
            
            <div class="input-box">
                <input type="text" placeholder="ID" name="Aid" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" placeholder="Password" name="Apass" required>
                <i id="password-icon" class='bx bxs-lock-alt' onclick="togglePassword()" style="cursor: pointer;"></i>
            </div>

            <div class="remember-forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="btn">Login as Admin</button>

            <div class="sign-up-link">
                <p><a href="#">Terms and Conditions | Privacy</a></p>
            </div>

            
            <?php if (isset($error)): ?>
                <p style="color: red; text-align: center;"><?= $error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
