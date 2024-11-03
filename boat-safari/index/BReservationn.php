<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="../css/BReservation.css">
    <script>
        function validateForm() {
            let email = document.getElementById("Remail").value;
            let cardNumber = document.getElementById("Cnor").value;  
            let cvv = document.getElementById("Ccvv").value;
        
            
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            
            const cardPattern = /^\d{16}$/;
            if (!cardPattern.test(cardNumber)) {
                alert("Please enter a valid 16-digit card number.");
                return false;
            }

            
            const cvvPattern = /^\d{3,4}$/;
            if (!cvvPattern.test(cvv)) {
                alert("Please enter a valid 3 or 4 digit CVV.");
                return false;
            }

            
            return true;
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="main">
        <form method="post" action="Binsert.php" onsubmit="return validateForm()">
            <fieldset class="donor-info">
                <legend>Reservation Information</legend>

                <div class="form-group">
                    <label for="RID">Enter ID</label>
                    <input type="text" id="RID" name="RID" placeholder="Enter ID" required>
                </div>

                <div class="form-group">
                    <label for="Rname">Enter your Name</label>
                    <input type="text" id="Rname" name="Rname" placeholder="Enter the Name" required>
                </div>

                <div class="form-group">
                    <label for="Rphone">Phone Number</label>
                    <input type="tel" id="Rphone" name="Rphone" placeholder="Phone Number" required>
                </div>

                <div class="form-group">
                    <label for="Remail">Email</label>
                    <input type="email" id="Remail" name="Remail" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="arrival-date">Arrival Date</label>
                    <input type="date" id="arrival-date" name="Rdate" required>
                </div>

                <div class="form-group">
                    <label for="time">Select Time</label>
                    <select id="time" name="Rtime" required>
                        <option value="8:30">8:30 AM</option>
                        <option value="10:30">10:30 AM</option>
                        <option value="4:30">4:30 PM</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Member">No of members</label>
                    <input type="number" id="Member" name="Rmember" placeholder="Number of members" min="0" required>
                </div>
            </fieldset>

            <fieldset class="payment-info">
                <legend>Payment Information</legend>

                <p>Choose a payment method:</p>

                <div class="form-group">
                    <img src="../images/payy.jpg" alt="Payment Methods" width="250" height="50">
                </div>

                <div class="form-group">
                    <label for="Cnor">Card Number</label>
                    <input type="text" id="Cnor" name="Cno" placeholder="Card Number" required>
                </div>

                <div class="form-group">
                    <label for="Cname">Name on Card</label>
                    <input type="text" id="Cname" name="Cname" placeholder="Name on Card" required>
                </div>

                <div class="form-group">
                    <label for="Ccountry">Country</label>
                    <select id="Ccountry" name="Ccountry" required>
                        <option value="Japan">Japan</option>
                        <option value="Italy">Italy</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Korea">Korea</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exp-date">Expiration Date</label>
                    <input type="date" name="Cdate" id="exp-date" required>
                </div>

                <div class="form-group">
                    <label for="Ccvv">CVV</label>
                    <input type="text" id="Ccvv" name="Ccvv" placeholder="CVV" required>
                </div>

                <div class="form-group">
                    <label for="currency">Currency</label>
                    <select id="currency" name="Cprice" required>
                        <option value="Rupees">Rupees</option>
                        <option value="Dollars">Dollars</option>
                        <option value="Yen">Yen</option>
                        <option value="Euros">Euros</option>
                    </select>
                </div>

                <input type="submit" value="Submit" class="submit-btn">
                <input type="reset" value="Reset" class="Resetbtn">
                
            </fieldset>
        </form>
    </div>

   <?php include 'footer.php'; ?>
</body>
</html>
