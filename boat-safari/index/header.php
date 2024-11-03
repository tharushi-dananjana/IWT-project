
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Awaits Safari</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #1c1c1c; /* Dark theme background */
            color: #ffffff; /* Text color */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            text-transform: uppercase;
        }

        nav ul li a:hover {
            color: #ffa500; /* Orange highlight on hover */
        }

        .auth-buttons {
            margin-left: 20px;
        }

        .auth-buttons a {
            margin-left: 10px;
            padding: 5px 15px;
            border: 1px solid #ffffff;
            color: #ffffff;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 14px;
        }

        .auth-buttons a:hover {
            background-color: #ffa500; /* Button hover color */
            border-color: #ffa500;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            Adventure Awaits Safari
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="signin.php">Sign In</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </header>
</body>
</html>