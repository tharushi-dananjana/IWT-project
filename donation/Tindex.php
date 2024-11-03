<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donation</title>
        <link rel="stylesheet" href="css/Tindex.css">
        <link rel="stylesheet" href="css/Tstylee.css">
        <script>
            function validateForm() {
          
                const id = document.getElementById("ID").value;
                if (id === "") {
                    alert("ID is required");
                    return false;
                }

                const salutation = document.getElementById("salutation").value;
                if (salutation === "") {
                    alert("Salutation is required");
                    return false;
                }

               
                const firstName = document.getElementById("First Name").value;
                if (firstName === "") {
                    alert("First Name is required");
                    return false;
                }

          
                const lastName = document.getElementById("Last Name").value;
                if (lastName === "") {
                    alert("Last Name is required");
                    return false;
                }

              
                const phone = document.getElementById("phone").value;
                const phoneRegex = /^0\d{9}$/;
                if (!phoneRegex.test(phone)) {
                    alert("Phone number must be 10 digits and start with 0");
                    return false;
                }

                const email = document.getElementById("Email").value;
                if (email === "") {
                    alert("Email is required");
                    return false;
                }

                const cardNumber = document.getElementById("card number").value;
                const cardNumberRegex = /^\d{16}$/;
                if (!cardNumberRegex.test(cardNumber)) {
                    alert("Card number must be 16 digits");
                    return false;
                }

       
                const cardName = document.getElementById("name on card").value;
                if (cardName === "") {
                    alert("Name on card is required");
                    return false;
                }

                const expDate = document.querySelector("input[name='sdate']").value;
                const expDateRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
                if (!expDateRegex.test(expDate)) {
                    alert("Expiration date must be in MM/YY format");
                    return false;
                }

                const cvv = document.getElementById("cvv").value;
                const cvvRegex = /^\d{3}$/;
                if (!cvvRegex.test(cvv)) {
                    alert("CVV must be 3 digits");
                    return false;
                }

                return true;
            }
        </script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <div class="mlb">
        
            <div class="wrapper">
                <h1 align="center" style="color: white;">Donate</h1>
        
                <div class="pay-link">
                    <p style="color: aliceblue;"><a href="#">Pay now | Pay monthly</a></p>
                </div>
                </br>
            </div>

            <div class="main">
                <form method="post" action="Tinsert.php" onsubmit="return validateForm()">
                    <fieldset class="doner-info">
                        <p class="poor">Doner Information</p>
                        </br>

                        <div class="form-group">
                            <label for="ID">ID</label>
                            <input type="text" id="ID" name="sid" placeholder="ID">
                        </div>

                        <div class="form-group">
                            <label for="salutation">salutation</label>
                            <input type="text" id="salutation" name="ssalutation" placeholder="salutation">
                        </div>

                        <div class="form-group">
                            <label for="First Name">firstname</label>
                            <input type="text" id="First Name" name="sfname" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <label for="Last Name">last name</label>
                            <input type="text" id="Last Name" name="slname" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <label for="Phone">uphone</label>
                            <input type="text" id="phone" name="sphone" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label for="Email">email</label>
                            <input type="email" id="Email" name="semail" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="country">country</label>
                            <select id="country" name="scountry">
                                <option value="Japan">Japan</option>
                                <option value="Italy">Italy</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Korea">Korea</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>

                        <input type="submit" value="submit">
                    </fieldset>

                    <fieldset class="payment-info">
                        <p class="poor">payment information</p><br>
                            
                        <div class="Nacl">
                            <div class="form-wrap">
                                <input type="text" id="card number" name="scard_num" placeholder="card number" required>
                            </div>
                        
                            <div class="form-wrap">
                                <input type="text" id="name on card" name="scard_name" placeholder="name on card">
                            </div>

                            <div class="form-wrap">
                                <input type="text" id="Amount" name="samount" placeholder="Amount">
                            </div>

                            <label for="Exp date">Exp Date</label>
                            </br>

                            <div class="text-box-container">
                                <div class="form-wrap">
                                    <input type="text" name="sdate" placeholder="MM/YY">
                                    <br>
                                    <input type="text" id="cvv" name="scvv" placeholder="cvv">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php include 'Footer.php'; ?>
    </body>
</html>
