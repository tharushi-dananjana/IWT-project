<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Profile</title>
        <link rel="stylesheet" href="css/susernew.css">
    </head>

<body>
    <div><?php include 'Header.php' ?></div>

    <div class="fulldiv">
        <div class="container">
            <header class="userpr"> User Profile </header><br>
            <div class="userprofile">
                <img src="img/images.png" alt="Round Image">
            </div>

            <form method="post" action="sinsert.php" onsubmit="return validateForm()">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="input-box">
                        <span class="details">User Name</span>
                        <input type="text" name="uname" id="uname">
                    </div>
                    <div class="input-box">
                        <span class="details">DOB</span>
                        <input type="date" name="DOB" id="DOB">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="addr" id="addr">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone num</span>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="input-box">
                        <span class="details">E-mail</span>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="npw" id="npw">
                    </div>
                </div>
                <input type="submit" class="subbut" value="Submit">
            </form>
        </div>
    </div>
    <?php include 'Footer.php'; ?>
    </body>

    <script>
        function validateForm() {
            // Get form values
            const fname = document.getElementById('fname').value.trim();
            const uname = document.getElementById('uname').value.trim();
            const dob = document.getElementById('DOB').value;
            const addr = document.getElementById('addr').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const npw = document.getElementById('npw').value.trim();
            
            // Validate required fields
            if (!fname || !uname || !dob || !addr || !phone || !email || !npw) {
                alert("All fields must be filled out");
                return false;
            }

            // Validate phone number (basic validation for 10 digits)
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate password length
            if (npw.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            // If everything is fine
            return true;
        }
    </script>

</html>
