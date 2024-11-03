<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservation</title>
    <link rel="stylesheet" href="../css/BReservation.css">
</head>
<body>
    <?php include'header.php'; ?>
    <header>
        <h1>Book Boat Tours and Sea Creatures Watching</h1>
    </header>

    <div class="main">
        <form method="post" action="BResupdate.php">
            <fieldset class="donor-info">
                <legend>Update reservation</legend>

                <div class="form-group">
                    <label for="first-name">Enter ID</label>
                    <input type="text" id="first-name" name="RID" placeholder="Enter ID" required>
                </div>

                <div class="form-group">
                    <label for="first-name">Enter your Name</label>
                    <input type="text" id="first-name" name="Rname" placeholder="Enter the Name" required>
                </div>

                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" id="phone-number" name="Rphone" placeholder="Phone Number" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="Remail" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="arrival-date">Arrival Date</label>
                    <input type="date" id="arrival-date" name="Rdate" required>
                </div>

                <div class="form-group">
                    <label for="time">Select Time</label>
                    <select id="time" name="Rtime"required>
                        <option value="8:30">8:30 AM</option>
                        <option value="10:30">10:30 AM</option>
                        <option value="4:30">4:30 PM</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Member">No of members</label>
                    <input type="number" id="Member" name="Rmember" placeholder="Number of Children" min="0" required>
                </div>
            </fieldset>

            <fieldset class="payment-info">
                <legend>Payment Information</legend>

                <p>Choose a payment method:</p>
                

                <div class="form-group">
                    <img src="../images/Payy.jpg" alt="Payment Methods" width="250" height="50">
                </div>

                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="Cno" placeholder="Card Number" required>
                </div>

                <div class="form-group">
                    <label for="name-on-card">Name on Card</label>
                    <input type="text" id="name-on-card" name="Cname" placeholder="Name on Card" required>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="Ccountry" required>
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
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="Ccvv" placeholder="CVV" required>
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

                <input type="submit" value="Update" class="submit-btn">
                <input type="Reset" value="Reset" class="Resetbtn">
                
            </fieldset>
        </form>
       
    </div>

    
</body>
</html>
